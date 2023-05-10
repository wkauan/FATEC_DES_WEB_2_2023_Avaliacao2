Para replicar este projeto utilizando o XAMPP, siga as instruções abaixo:

    Faça o download e instale o XAMPP no seu computador. Certifique-se de que o servidor Apache e o SGBD MySQL estejam iniciados.
    
    Baixe ou clone o projeto na pasta "htdocs" do XAMPP.
    
    Crie um banco de dados MySQL chamado "vestibular" através do phpMyAdmin acessível pelo link "http://localhost/phpmyadmin/".
    
    Importe o arquivo .SQL (que deve ser enviado juntamente com o código) para o banco de dados que acabou de criar.
    
    Abra o arquivo "DBConnect.php".
    
    Edite as variáveis "$username" e "$dbname" de acordo com as configurações do seu SGBD MySQL.
    
    Abra um navegador e acesse o projeto no endereço "http://localhost/nome_da_pasta_do_projeto".

Para utilizar o CRUD de candidatos, utilize as seguintes instruções:
      
    Para editar os dados de um candidato, preencha os campos desejados e clique em "Atualizar". 
    
    Para deletar os dados de um candidato, preencha o campo id com o id do candidato e clique em "Deletar".

Lembre-se de enviar o arquivo .SQL com o dump do MySQL para que o projeto funcione corretamente. Este arquivo deve ser importado para o banco de dados "vestibular" criado anteriormente.
