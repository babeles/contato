<?php 
include './contato.class.php';
$contato = new Contato();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="assets/css/estilo.css"/>
        <title>Cadastro de Contato</title>
    </head>
    <body>
      
        <div class="container badge-light">
            <div class="row">
                <div class="col-md-12">
                    <h1>Cadastro de Contatos</h1>  
                </div>
            </div>
            <hr>
            
            <form method="POST" action="adicionar-contato.php">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="cto_nm"><strong>Nome Completo:</strong></label>
                            <input class="form-control" type="text" name="cto_nm" id="cto_nm" required=""/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="cto_dceml"><strong>E-mail:</strong></label>
                            <input class="form-control" type="email" name="cto_dceml" id="cto_dceml" required=""/>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="cto_nrtel"><strong>Telefone:</strong></label>
                            <input class="form-control" type="tel" name="cto_nrtel" id="cto_nrtel" required=""/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
                </div>
            </form>
            
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Codigo</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                <?php $c = 0; foreach ($contato->todosContatos() as $row): ?>
                    <tr>
                        <th scope="row"><?=$c = $c + 1?></th>
                        <td style="text-align: center;"><?=$row['cto_iduni']?></td>
                        <td><?=$row['cto_nm']?></td>
                        <td><?=$row['cto_dceml']?></td>
                        <td><?=$row['cto_nrtel']?></td>
                        <td style="text-align: center;">
                            <a class="btn btn-success btn-sm" href="editar-contato.php?cto_iduni=<?=$row['cto_iduni']?>">Editar</a>
                            <a class="btn btn-danger btn-sm" href="excluir-contato.php?cto_iduni=<?=$row['cto_iduni']?>">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <hr>
            <p>©<?=date("Y")?> Leandro Babeles - Todos os direitos reservados.</p>
            <hr>
        </div>
        
        <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    </body>
</html>