###################
Sebrae Match Up
###################

Sebrae Match Up é uma solução para facilitar a comunicação entre as pessoas que
estão iniciando seu empreendimento e seus possíveis usuários de forma segura.
Os empreendedores podem se comunicar com especilistas do Sebrae e com a comunidade
de outros empreendedores para resolução de dúvidas e problemas para que seu negócio
possa prosperar por mais tempo.

*******************
Tecnologia utilizada
*******************

O site utilizou de componentes responsivos da biblioteca do Bootstrap para suas
funcionalidades de front-end. Para criação da lógica do sistema e conexão com o banco
foi utilizado o framework CodeIgniter versão 3.1.11.

A base de dados utilizada foi a base MySQL. A estrutura da base de dados para
o sistema em questão está descrita na pasta "database" sendo composta, atualmente,
por uma tabela de usuários.

*******************
Requerimentos do servidor
*******************

PHP versão 5.6 ou mais nova é recomendada.

MySQL (MariaDB) versão 10.4.11-MariaDB utilizando o usuário "root" sem senha.

O framework utilizado é o CodeIgniter versão 3.1.11 já incluída no projeto.

************
Instalação
************

Realizar o download do pacote XAMPP em https://www.apachefriends.org/index.html
e realizar a instalação do ambiente de desenvolvimento PHP já incluído a base de
dados do MySQL.

O usuário deve entrar na pasta "htdocs" após o final da instalação do XAMPP e realizar
o clone do repositório para este local através do GitBash ou outro aplicativo.
O comando para realização do clone é "git clone https://github.com/DanielsonSilva/sebraematchup.git".

Realizar o download de software e manutenção de banco de dados como o DBeaver
versão 6.2.4 (https://dbeaver.io/). Após terminar a instalação, iniciar o servidor do
MySQL do pacote XAMPP e criar uma conexão através do software recém instalado.
Neste software, criar a base de dados "sebraematchup" e criar a tabela de acordo
com o código DDL que está no arquivo "database/usuarios.sql" dentro do repositório.

Após estes passos, iniciar o servidor Apache através do XAMPP e colocar o seguinte
endereço no seu navegador: "http://localhost/sebraematchup/" e começar a utilizar
o sistema!

*******
Licença
*******

Verificar o arquivo LICENSE do respositório.
