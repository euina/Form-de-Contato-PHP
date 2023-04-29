<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contato</title>
  </head>
  <body>
    <!--COMEÇO CSS-->
<style>
  body{
    font-family:'Trebuchet MS', Arial, sans-serif;
    background:#eeeeee;
  }
  hr{ 
    height:3px;
    background-color:blueviolet;
    border-color:black;
      }
  h3{
    font-size:25px;
    text-align:center;
    padding:15px;
  }
  .content{
    display:flex;
    justify-content:center;
  }
  .contato{
    width:100%; 
    max-width:700px;
  }
  .form{
    display: flex;
    flex-direction: column;
  }
  /*TODAS AS INPUT*/
  .field{
    padding: 20px;
    margin-bottom:15px;
    border: 3px solid black;
    border-radius:5px;
    font-family: 'Trebuchet MS', Arial, sans-serif;
    font-size:20px;
    outline:0;
     box-shadow: 15px -4px blueviolet;
    color:blueviolet;
    
  }
  /*CAIXA DE MENSAGEM*/
  .field-textarea{
    padding: 20px;
    margin-bottom:15px;
    border: 3px solid black;
    border-radius:5px;
    font-family: 'Trebuchet MS', Arial, sans-serif;
    font-size:20px;
    outline:0;
    box-shadow: 15px -4px blueviolet;
    height:150px;
    background-color: darkviolet;
    color:white;
  }
  /*button*/
  .field-button{
    padding: 20;
    width: 200px;
    height:80px;
    cursor:pointer;
    margin-bottom:15px;
    border: 3px solid black;
    border-radius:5px;
    font-family: 'Trebuchet MS', Arial, sans-serif;
    font-size:20px;
    outline:0;
    box-shadow: 15px -4px blueviolet;
    background-color: #eeeeee;;
    color:blueviolet;
    align-items:center;
  }
  .field-button:hover {
    box-shadow: 15px -4px black;
    
  }
  
  /*RODAPÉ*/
  .footer{
    width: 100%;
    height: 50px;
    background-color:blueviolet;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 20px;
    bottom: 0;
    position: fixed;   
  }

</style>
    <!--FINAL CSS-->
    
<!--FORMULARIO COMEÇA AQUI-->
    <section class="content">
      <div class="contato">
        <hr>
        <h3>Formulario de Contato</h3>   
        <form class="form" method="POST" action="./script.php">
          <input class="field" name="name" placeholder="Nome">
           <input class="field" name="email" placeholder="E-mail">
           <textarea class="field-textarea" name="mesage"placeholder="Digite sua mensagem aqui "></textarea>
           <button class="field-button" type="submit" value="Enviar">Enviar</button>
        </form>
      </div>
    </section>
    <footer class="footer">Feito por Janaina Oliveira</footer>

  </body>
</html>