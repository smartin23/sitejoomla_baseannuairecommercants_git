d:

cd \wamp21e\www\sitejoomla_baseannuairecommercants
MKLINK /D min D:\wamp21e\www\sitejoomla_baseannuairecommercants_git\min
pause

cd \wamp21e\www\sitejoomla_baseannuairecommercants\components/com_sobipro
MKLINK /D etc D:\wamp21e\www\sitejoomla_baseannuaire_git\components\com_sobipro\etc
pause
MKLINK /D lib D:\wamp21e\www\sitejoomla_baseannuaire_git\components\com_sobipro\lib
pause
MKLINK /D opt D:\wamp21e\www\sitejoomla_baseannuaire_git\components\com_sobipro\opt
pause
MKLINK /D var D:\wamp21e\www\sitejoomla_baseannuaire_git\components\com_sobipro\var
pause
MKLINK /D views D:\wamp21e\www\sitejoomla_baseannuaire_git\components\com_sobipro\views
pause
MKLINK /D tmp D:\wamp21e\www\sitejoomla_baseannuaire_git\components\com_sobipro\tmp
pause
MKLINK /D usr D:\wamp21e\www\sitejoomla_baseannuairecommercants_git\components\com_sobipro\usr
pause

cd \wamp21e\www\sitejoomla_baseannuairecommercants\modules
rmdir mod_jmaps
MKLINK /D mod_jmaps D:\wamp21e\www\sitejoomla_baseannuairecommercants_git\modules\mod_jmaps
pause

cd \wamp21e\www\sitejoomla_baseannuairecommercants\modules
rmdir mod_sobiextsearch 
MKLINK /D mod_sobiextsearch D:\wamp21e\www\sitejoomla_baseannuaire_git\modules\mod_sobiextsearch
pause

cd \wamp21e\www\sitejoomla_baseannuairecommercants\modules
rmdir mod_sobipro_tree
MKLINK /D mod_sobipro_tree D:\wamp21e\www\sitejoomla_baseannuaire_git\modules\mod_sobipro_tree
pause

cd \wamp21e\www\sitejoomla_baseannuairecommercants\modules
rmdir mod_sobipro_entries
MKLINK /D mod_sobipro_entries D:\wamp21e\www\sitejoomla_baseannuaire_git\modules\mod_sobipro_entries
pause

cd \wamp21e\www\sitejoomla_baseannuairecommercants\plugins\system
MKLINK /D plugin_googlemap2 D:\wamp21e\www\sitejoomla_baseannuaire_git\plugins\system\plugin_googlemap2
pause

pause
cd \wamp21e\www\sitejoomla_baseannuairecommercants
rmdir scripts
MKLINK /D scripts D:\wamp21e\www\sitejoomla_baseannuaire_git\scripts


pause
cd \wamp21e\www\sitejoomla_baseannuairecommercants\templates
rmdir baseannuairecommercants
MKLINK /D baseannuairecommercants D:\wamp21e\www\sitejoomla_baseannuairecommercants_git\templates\baseannuairecommercants
pause
