const express = require('express');
const multer = require('multer');
const axios = require('axios');
const fs = require('fs');
const path = require('path');

const app = express();
const apiKey = 'aaa524dc1ddd40218a4e23a8bff2af1f';

// Middleware para servir arquivos estáticos (HTML, CSS, JS)
app.use(express.static('public'));

const cors = require('cors');
app.use(cors());


// Rota para a página inicial (GET)
app.get('/', (req, res) => {
    res.sendFile(path.join(__dirname, 'views', 'evenAI.php'));
});

// Configura o armazenamento do multer
const storage = multer.diskStorage({
    destination: (req, file, cb) => {
        cb(null, 'uploads/'); // Diretório onde o arquivo será salvo
    },
    filename: (req, file, cb) => {
        cb(null, Date.now() + path.extname(file.originalname)); // Renomeia o arquivo para evitar conflitos
    }
});

const upload = multer({ storage: storage });

app.post('/', upload.single('audioFile'), async (req, res) => {
    try {
        const filePath = req.file.path;

        // Leitura do arquivo
        const file = fs.readFileSync(filePath);

        // Faz o upload para a AssemblyAI
        const uploadResponse = await axios.post('https://api.assemblyai.com/v2/upload', file, {
            headers: {
                'authorization': apiKey,
                'content-type': 'application/json'
            }
        });

        const audioUrl = uploadResponse.data.upload_url;

        // Inicia a transcrição
        const transcriptResponse = await axios.post('https://api.assemblyai.com/v2/transcript', {
            audio_url: audioUrl,
            language_code: 'pt'
        }, {
            headers: {
                'authorization': apiKey,
                'content-type': 'application/json'
            }
        });

        const transcriptId = transcriptResponse.data.id;

        // Verifica o status da transcrição periodicamente
        const interval = setInterval(async () => {
            try {
                const statusResponse = await axios.get(`https://api.assemblyai.com/v2/transcript/${transcriptId}`, {
                    headers: { 'authorization': apiKey }
                });

                if (statusResponse.data.status === 'completed') {
                    clearInterval(interval);
                    fs.unlinkSync(filePath); // Remove o arquivo local após a transcrição
                    res.json({ status: 'completed', text: statusResponse.data.text });
                } else if (statusResponse.data.status === 'failed') {
                    clearInterval(interval);
                    fs.unlinkSync(filePath); // Remove o arquivo local após a falha
                    res.json({ status: 'failed', error: statusResponse.data.error });
                } else {
                    console.log("Transcrição em andamento...");
                }
            } catch (error) {
                console.error("Erro ao verificar status da transcrição:", error);
                res.status(500).json({ status: 'error', message: 'Erro ao verificar status.' });
            }
        }, 5000);
    } catch (error) {
        console.error("Erro ao processar o arquivo:", error);
        res.status(500).json({ status: 'error', message: 'Erro ao processar o arquivo.' });
    }
});


// Inicia o servidor
app.listen(3000, () => {
    console.log('Servidor rodando em http://localhost:3000');
});
