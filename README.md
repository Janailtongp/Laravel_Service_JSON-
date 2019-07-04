# Serviço Laravel com JSON
Serviço criado em Laraval, para manipular a base de dados de estados e cidades do Brasil. As rotas retornam requisições no formato JSON, que podem ser consumidas por diversas aplicações. 

# Configurações 
Clona o repositório
Executa o composer update
Cria a base de dados, o SQL e os Dumps (para postgres). Os arquivos encontram-se em:  /BD PostgresSQL.
Cria o .env e configura de acordo com o seu SGBD 
Executa o php artisan serve 
# Rotas 
http://127.0.0.1:8000/api/Select -> Exibe os select options, com filtragem de cidades para cada estado selecionado.
http://127.0.0.1:8000/api/v1/uf/ -> Exibe todos os estados presentes na base de dados.
http://127.0.0.1:8000/api/v1/uf/CO_UF -> CO_UF = Código da UF(numérico), ex http://127.0.0.1:8000/api/v1/uf/12: Exibe o estado referente ao código enviado. 
http://127.0.0.1:8000/api/v1/City/ -> Exibe todas as cidades presentes na base de dados. 
http://127.0.0.1:8000/api/v1/City/CO_UF ->  CO_UF = Código da UF(numérico), ex http://127.0.0.1:8000/api/v1/City/12: Realiza a filtragem das cidades de acordo do código da UF. 
