<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BINGO DA INFO</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="./javascript/script.js" charset="utf-8"></script>
  </head>
  <body>
    <header>
      <h1>Bem-vindo ao bingo da info!</h1>
    </header>
    <main>
      <button type="button" name="gera" id="geraTabela" onclick="gerarTabela()">Gerar tabela</button>
      <button type="button" name="num" id="geranum" onclick="gerarNumero()">Gerar número</button>
      <h2>Números gerados:</h2>
      <div class="ng">

      </div>
    </main>
    <footer>
      <h1>Regras:</h1>
      <div class="sing">
        <h2>Singleplayer</h2>
        <p>Para jogar aperte o botão "GERAR TABELA" apenas uma vez e, logo após, aperte em "GERAR NÚMEROS" para sortear os números do bingo.</p>
        <p>Serão sorteados 50 números, se você não houver ganhado neste espaço de tempo, perderá o jogo.</p>
      </div>
      <div class="multi">
        <h2>Multiplayer</h2>
        <p>Para jogar aperte o botão "GERAR TABELA" para cada jogador, podem ser geradas no máximo 5 tabelas.</p>
        <p>Os números serão sorteados até que um dos jogadores ganhe.</p>
      </div>
    </footer>
  </body>
</html>
