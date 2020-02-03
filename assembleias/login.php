<!-- Formulário de Login -->
<div align="center">
<form action="validacao.php" method="post">
  <fieldset>
  <legend>Dados de Login</legend>
      <label for="txUsuario">Usuário</label> <br>
      <input type="text" name="usuario" id="txUsuario" maxlength="25" autofocus required /> <br>
      <label for="txSenha">Senha</label> <br>
      <input type="password" name="senha" id="txSenha" required />
    <br><br>
      <input type="submit" value="Entrar" />
  </fieldset>
  </form>
  </div>