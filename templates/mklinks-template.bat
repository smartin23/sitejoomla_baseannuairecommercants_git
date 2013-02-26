d:
cd \wamp21e\www\sitejoomla_baseannuairecommercants_saintclaude\templates\baseannuairecommercants
pause

del templateDetails.xml
MKLINK templateDetails.xml D:\wamp21e\www\sitejoomla_baseannuairecommercants_git\templates\baseannuairecommercants\templateDetails.xml
pause

del index.php
MKLINK index.php D:\wamp21e\www\sitejoomla_baseannuairecommercants_git\templates\baseannuairecommercants\index.php
pause

rmdir fontawesome /s
MKLINK /D fontawesome D:\wamp21e\www\sitejoomla_baseannuairecommercants_git\templates\baseannuairecommercants\fontawesome
pause

rmdir html /s
MKLINK /D html D:\wamp21e\www\sitejoomla_baseannuairecommercants_git\templates\baseannuairecommercants\html
pause

rmdir images /s
MKLINK /D images D:\wamp21e\www\sitejoomla_baseannuairecommercants_git\templates\baseannuairecommercants\images
pause

cd \wamp21e\www\sitejoomla_baseannuairecommercants_saintclaude\templates\baseannuairecommercants\bootstrap-sources\less
pause

del variables.less
MKLINK variables.less D:\wamp21e\www\sitejoomla_baseannuairecommercants_saintclaude_git\templates\baseannuairecommercants\bootstrap-sources\less\variables.less
pause

cd \wamp21e\www\sitejoomla_baseannuairecommercants_saintclaude\templates\baseannuairecommercants\css
pause

del general.less
MKLINK  general.less D:\wamp21e\www\sitejoomla_baseannuairecommercants_saintclaude_git\templates\baseannuairecommercants\css\general.less
pause

del variables.less
MKLINK  variables.less D:\wamp21e\www\sitejoomla_baseannuairecommercants_saintclaude_git\templates\baseannuairecommercants\css\variables.less
pause

del user.less
MKLINK user.less D:\wamp21e\www\sitejoomla_baseannuairecommercants_git\templates\baseannuairecommercants\css\user.less
pause

del admin.less
MKLINK admin.less D:\wamp21e\www\sitejoomla_baseannuairecommercants_git\templates\baseannuairecommercants\css\admin.less
pause

del template.less
MKLINK template.less D:\wamp21e\www\sitejoomla_baseannuairecommercants_git\templates\baseannuairecommercants\css\template.less
pause