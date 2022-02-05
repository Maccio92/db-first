<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main id="app">

            <label for="text"></label>
            <input type="text" v-model="text" @keyup.enter="filter">
    
    <div class="bg" v-for="car in cars">
        <h2>Marca: {{car.marca}}</h2>
        <h3>Modello: {{car.modello}}</h3>
        <p>Targa: {{car.targa}}</p>
        <p>Anno: {{car.anno}}</p>
        <p>Cilindrata: {{car.cilindrata}}</p>
        <p>Carburante: {{car.carburante}}</p>
        <p>Versione: {{car.versione}}</p>
        <p>Numero di Telaio: {{car.telaio}}</p>
        <p>Numero Porte: {{car.porte}}</p>
        <p>Posti: {{car.posti}}</p>
        <p>Chilometri: {{car.chilometri}}</p>
        <p>Precedenti proprietari: {{car.proprietari}}</p>
        <p>Tagliandi effettuati: {{car.tagliandi}}</p>
        <p>Revisioni: {{car.revisioni}}</p>
        <p>Colore: {{car.colore}}</p>
        <p>Immagine: {{car.immagine}}</p>
        <p>Prezzo: {{car.prezzo}}</p>
    </main>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="script.js"></script>
</body>
</html>