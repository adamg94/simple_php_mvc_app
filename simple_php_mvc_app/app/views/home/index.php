<h1>Hello <?= $Data->GetName() ?></h1>
<p>Email view-ból: <?= $Data->GetEmailByFirstName('Admin') ?></p>
<form action="home/feldolgoz" method="post">
    <input type="text" name="name" />
    <input type="submit" value="gomb" />
</form>