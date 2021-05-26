<html>
  <head></head>
  <body>
    <p>Olá Administrador,</p>
    <p>Um usuário entrou em contato. Segue dados enviados:</p>
    <div>
      <strong>Nome:</strong> {{ $contact->name }}<br>
      <strong>Email:</strong> {{ $contact->email }}<br>
      <strong>Telefone:</strong> {{ $contact->phone }}<br>
      <strong>Mensagem:</strong> {{ $contact->message }}
    </div>
  </body>
</html>