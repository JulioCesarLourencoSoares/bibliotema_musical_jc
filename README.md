🎵 Biblioteca Musical

Sistema web de gerenciamento e catalogação musical desenvolvido em HTML5, CSS3 e PHP. O projeto contempla login, menu principal, cadastro de artistas com fotos, inclusão de obras/músicas com letras e links, além de uma biblioteca interativa com filtros de busca.

📌 Tabela de Conteúdos

Sobre o Projeto

Estrutura de Páginas

Funcionalidades

Tecnologias Utilizadas

Pré-requisitos

Como Executar

Credenciais de Teste

Próximos Passos (Sprints)

📖 Sobre o Projeto

A Biblioteca Musical é uma aplicação voltada para a organização e consulta de acervos musicais. O sistema permite o gerenciamento completo de artistas e suas respectivas obras, possibilitando o upload de capas/fotos, cadastro de letras de músicas e redirecionamento para vídeos no YouTube.

O projeto foi projetado com uma interface limpa e intuitiva utilizando CSS unificado, preparado para ser integrado a um banco de dados relacional nas próximas fases do desenvolvimento.

📂 Estrutura de Páginas

🔑 login.php: Tela de autenticação centralizada com validação de campos.

🏠 index.php: Menu principal em grid layout para navegação rápida entre os módulos do sistema.

🎤 cadastro_artista.php: Formulário de registro de artistas (nome, gênero, país e foto) integrado à listagem de artistas existentes.

🎼 cadastro_musica.php: Interface para cadastro de faixas vinculadas ao artista (artista_id), incluindo detalhes de álbum, capa, letra e link do YouTube.

🎧 listagem_musicas.html: Painel da Biblioteca Musical com suporte a filtros de busca por título, artista e gênero musical.

🎨 styles.css: Folha de estilo unificada para padronização visual de todas as telas.

✨ Funcionalidades

[x] Autenticação: Tela de login responsiva com instrução de credenciais de teste.

[x] Painel Principal: Menu interativo para navegação fluida entre os fluxos de cadastro e consulta.

[x] Gestão de Artistas:

Cadastro de nome, gênero musical, país de origem e foto do artista (multipart/form-data).

Tabela explicativa de artistas cadastrados com ações rápidas (Editar, Excluir e Acessar Músicas).

[x] Gestão de Músicas / Obras:

Associação direta da música a um artista cadastrado (Simulação de Chave Estrangeira artista_id).

Upload de capa do álbum e inclusão da letra completa.

Link com validação de URL (type="url") para reprodução de vídeo no YouTube em nova aba.

[x] Biblioteca Musical e Filtros:

Tabela detalhada exibidora do acervo de músicas.

Formulário de busca geral e seletores por artista e gênero.

🛠️ Tecnologias Utilizadas

HTML5: Estrutura semântica dos formulários e tabelas.

CSS3: Estilização moderna com CSS Grid, Flexbox e Variáveis CSS.

PHP: Estruturação para processamento de requisições (POST/GET) e manipulação de arquivos.

SVG: Emojis e elementos gráficos inline no navegador.

🚀 Pré-requisitos

Para executar o projeto localmente, é necessário ter instalado:

Um ambiente de servidor local com PHP (ex: XAMPP, WampServer) ou o CLI do PHP.

Um navegador web moderno (Chrome, Edge, Firefox, Safari).

🔧 Como Executar

Opção 1: Servidor embutido do PHP

Clone este repositório ou baixe os arquivos em sua máquina:

git clone https://github.com/seu-usuario/biblioteca-musical.git


Acesse a pasta do projeto via terminal:

cd biblioteca-musical


Inicie o servidor PHP embutido:

php -S localhost:8000


Acesse no seu navegador o endereço:

http://localhost:8000/login.php


Opção 2: Via XAMPP / WAMP

Mova os arquivos do projeto para o diretório raiz do servidor (htdocs ou www).

Abra o seu navegador e acesse http://localhost/biblioteca-musical/login.php.

🔑 Credenciais de Teste

Para realizar o login na interface de simulação:

Usuário: admin

Senha: 123

🛣️ Próximos Passos (Sprints)

[ ] Criação do banco de dados MySQL para persistência dos dados de artistas e músicas.

[ ] Validação de sessão em PHP (session_start()) na página de login.

[ ] Salvamento dos uploads de imagens (foto do artista e capa do álbum) na pasta do servidor.

[ ] Tornar dinâmicas as buscas e filtros da página listagem_musicas.html.

📜 Licença

Este projeto foi desenvolvido para fins educacionais e de estudo.
