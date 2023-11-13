<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  action="/thanks.php"  method="post">
    <div>
      <label  for="firstname">nom :</label>
      <input  type="text"  id="firstname"  name="firstname">
    </div>
    <div>
      <label  for="lastname">prenom :</label>
      <input  type="text"  id="lastname"  name="lastname">
    </div>
    <div>
      <label  for="courriel">email :</label>
        <input  type="email"  id="courriel"  name="courriel">
    </div>
    <div>
        <labael for="telephone">telephone</labael>
        <input  type="telephone" id="telephone" name="telephone">
    </div>
    <div>
        <label for="sujet">sujet</label>
        <select id="sujet" name="sujet">
            <option value="devis">Devis</option>
            <option value="sav">SAV</option>
            <option value="information">information</option>
        </select>
    </div>
    <div>
      <label  for="message">message :</label>
      <textarea  id="message"  name="message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>
</body>
</html>
 
