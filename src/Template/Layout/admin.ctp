<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Admin Login    </title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <?= $this->Html->css('bootstrap.min.css')?>
        <?= $this->Html->css('style.css')?>

        <?= $this->Html->css('cake.css')?>

    </head>
    <body>
        <section>
            <?= $this->Flash->render()?>
            <div class="container">
                <div class="row">                    
                    <?= $this->fetch('content')?>
                </div>
            </div>
        </section>
    </body>
</html>