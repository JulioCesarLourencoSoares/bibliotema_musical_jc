<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Artista - Sistema Musical</title>
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%27http://www.w3.org/2000/svg%27 0 100 100%27><text y=%27.9em%27 font-size=%2790%27>🎵</text></svg>">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">

    <!-- A mesma barrade título da Biblioteca (o CSS já existe desde a aula 2). -->
     <div class="page-header-bar">
        <h2>🎤 Novo Artista</h2>
        <div class="header-actions">
            <a href="index.php" class="btn-back">← Voltar ao Menu</a>
        </div>
     </div>

     <!-- 
         FORMULÁRIO DE CADASTRO DE ARTISTA (O "criador")
         method="post": envia os dados escondidos. É o certo para cadastrar.
         enctype="multipart/form-data": OBRIGATÓRIO para enviar arquivo (a foto).
         Não muda nada na tela, mas sem ele a foto não chega ao PHP na Sprint 2.
     -->
    <form method="post" action="#" enctype="multipart/form-data">

        <!-- form-grid: o CSS transforma em 2 colunas (grid lfr lfr). Os campos se encaixam 2 por linha. -->
        <div class="form-grid">
           
            <div class="form-group">
            <!-- O * vermelho avisa que o campo é obrigatório. A cor vem da variável --red. -->
            <label for="nome">Nome do Artista <span style="color:var(--red);">*</span></label>
            <!-- required: o navegador não deixa cadastrar sem nome. -->
            <input type="text" id="nome" name="nome"
                    required placeholder="Ex: Taylor Swift, Coldplay...">
            </div>

            <div class="form-group">
                <!-- Campo opcional (sem required). -->
                 <label for="genero">Gênero Musical</label>
                 <input type="text" name="genero" id="genero"
                        placeholder="Ex: Pop, Rock...">
            </div>

            <div class="form-group">
                <label for="pais">País</label>
                <input type="text" id="pais" name="pais"
                       placeholder="Ex: EUA, Reino Unido...">
            </div>

            <div class="form-group">
                <label for="imagem">Foto do Artista</label>
                <!-- type="file": abre a janela para escolher um arquivo.
                     accept="image/*": mostra só imagens. -->
                <input type="file" id="imagem" name="imagem" accept="image/*">
                <!-- small: texto pequeno de ajuda embaixo do campo. -->
                 <small>JPG ou PNG . Máximo 5 MB</small>
            </div>

            <div>

                <!-- form-actions: a área dos botões do formulário (flex). -->
                <div class="form-actions">
                    <button type="submit" class="btn-primary">✚ Cadastrar</button>
                </div>
            </form>


            <!-- ======= TABELA DE ARTISTAS (dados fizos nesta fase) =======
                 Usa as MESMAS classes da tabela da Biblioteca: o visual já vem pronto. -->
            <h3>📋 Artistas Cadastrados</h3>
            
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th class="col-foto">Foto</th>
                            <th>Nome</th>
                            <th>Gênero</th>
                            <th>País</th>
                            <th class="col-acoes">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Cada tr = um artista. -->
                         <tr>
                            <td><div class="no-image">Sem<br>foto</div></td>
                            <td>Taylor Swift</td>
                            <td>Pop</td>
                            <td>EUA</td>
                            <td>
                                <div class="action-buttons">
                                <a href="#" class="btn-edit">✏️ Editar</a>
                                <a href="#" class="btn-delete">🗑️</a>
                                <!-- btn-music (verde): leva ao cadastro das músicas DESTE artista. -->
                                <a href="cadastro_musica.php" class="btn-music">🎵 Músicas</a>
                            </td>
                         </tr>
                         <tr>
                            <td><div class="no-image">Sem<br>foto</div></td>
                            <td>Coldplay</td>
                            <td>Rock</td>
                            <td>Reino Unido</td>
                            <td>
                                <div class="action-buttons">
                                <a href="#" class="btn-edit">✏️ Editar</a>
                                <a href="#" class="btn-delete">🗑️</a>
                                <a href="cadastro_musica.php" class="btn-music">🎵 Músicas</a>
                            </td>
                         </tr>
                    </tbody>
                </table>
            </div>
        </div>

        
</div>    
</body>
</html>