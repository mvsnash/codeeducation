Comandos GIT
------------

**Ver o status**
>git status

**Adicionando um arquivo**
>git add (nome do arquivo) 

**Adicionando todos os arquivos ao mesmo tempo**
>git add .

**Voltando ao est�gio anterior do adicionamento**
>git reset HEAD (nome do arquivo)

**Commit - Comitando**
>git commit -m "mensagem de commit"

**Adicionando e comitando ao mesmo tempo**
>git commit -a -m "mensagem de commit"

**Voltando commit a vers�es anteriores**

*Voltar um commit*
>git reset HEAD~1

*Voltar dois commit*
>git reset HEAD~2

*Assim por diante...*

**Voltando um commit e deixando o arquivo no estagio anterior**
>git reset HEAD~1 --soft

**Voltando um commit e excluindo o arquivo, deixando no est�gio anterior**
>git reset HEAD~1 --hard

**Verificando todos os commits**
>git log

**Verificando o que foi mudado, diferen�a entre um arquivo e outro**
>git log -p

**Verificando os 2 �ltimos commits**
>git log -p -2

**Mostrando as estat�sticas de todos os commits**
>git log --stat

**Mostrando todos os commits, cada um em uma linha**
>git log --pretty=oneline

**Mostrando todos os commits dos �ltimos 2 dias at� o momento atual**
>git log --since=2.days

**Criando um branch - uma ramifica��o**
>git checkout -b (nome do branch)

**Verificando em que branch voc� est�**
>git branch

**Voltando para o branch master**
>git checkout master

**Grudando o branch criado no branch master**

*Entre como branch master*
>git merge (nome do branch que vc criou)

**Grudando o branch criado no branch master sem o commit**

*Somente localmente - localhost*

*Entre como branch master*
>git rebase (nome do branch que vc criou)

**Removendo um branch**
>git branch -D (nome do branch)

**Vendo branchs remotos**
>git branch -a

**Mostrando o inicio do hash, quem comitou, quanto tempo atr�s, mensagem: descri��o do commit**
>git log --pretty=format: "%h - %an, %ar : %s"

**Deletando arquivos**
>git rm (nome_do_arquivo)

**Deletando todos os aquivos removidos ao mesmo tempo**
>git ls-files --deleted | xargs git rm

**Ignorando arquivos**

*Crie um arquivo chamado .gitignore*

*Digite o caminho da(s) pasta(s) ou arquivo(s) a ser ignorado*

*Cada arquivo em uma linha*

*Salve!*

*Adicione o arquivo. (Obs: C�digo j� mostrado anteriormente)*

**Criando um clone do github**
>git clone (url do arqyuivo)

**Fazendo um clone de outros branchs**
>git checkout -b (nome do branch) origin/ (nome do branch)

**Trazendo, puxando as altera��es feitas por outros usu�rios**
>git pull origin master

**Sincronizando tudo que est� no reposit�rio remoto**
>git pull

**Enviando o(s) projeto(s), arquivo(s) para o reposit�rio - github**
>git push origin

**Enviando um branch para o reposit�rio - github**
>git push origin (nome do branch)

**Criando tags**
>git tag (vers�o da tag) 

**Listando tags**
>git tag -l

**Enviando a tag para o reposit�rio - github**
>git push origin master --tags

**Removendo as tags criadas**

*Removendo tag localmente*
>git tag -d 0.1.0

*Removendo tag no reposit�rio remoto*
>git push origin :refs/tags/0.1.0

**Criando um reposit�rio local**

*Crie uma pasta e entre nela*
>git init --bare

*Saia da pasta*
>git checkout master 
>git push local
