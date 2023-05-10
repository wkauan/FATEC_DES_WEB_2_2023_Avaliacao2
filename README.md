Para replicar este projeto utilizando o XAMPP, siga as instruções abaixo:

    Faça o download e instale o XAMPP no seu computador. Certifique-se de que o servidor Apache e o SGBD MySQL estejam iniciados.
    
    Baixe ou clone o projeto na pasta "htdocs" do XAMPP.
    
    Crie um banco de dados MySQL chamado "vestibular" através do phpMyAdmin acessível pelo link "http://localhost/phpmyadmin/".
    
    Importe o arquivo .SQL (que deve ser enviado juntamente com o código) para o banco de dados que acabou de criar.
    
    Abra o arquivo "DBConnect.php".
    
    Edite as variáveis "$username" e "$dbname" de acordo com as configurações do seu SGBD MySQL.
    
    Abra um navegador e acesse o projeto no endereço "http://localhost/nome_da_pasta_do_projeto".

Para utilizar o CRUD de candidatos, utilize as seguintes instruções:

    Para cadastrar um novo candidato, clique no botão "Novo Candidato" na página principal e preencha os campos obrigatórios do formulário. Clique em "Salvar" para finalizar o cadastro.
    
    Para visualizar os candidatos cadastrados, clique no botão "Candidatos Cadastrados" na página principal. Será exibida uma tabela com os dados de todos os candidatos.
    
    Para editar os dados de um candidato, clique no botão "Editar" na linha correspondente ao candidato desejado na tabela de candidatos cadastrados. Preencha os campos desejados e clique em "Salvar".
    
    Para excluir um candidato, clique no botão "Excluir" na linha correspondente ao candidato desejado na tabela de candidatos cadastrados. Será exibida uma mensagem de confirmação antes da exclusão definitiva.

Lembre-se de enviar o arquivo .SQL com o dump do MySQL para que o projeto funcione corretamente. Este arquivo deve ser importado para o banco de dados "vestibular" criado anteriormente.
