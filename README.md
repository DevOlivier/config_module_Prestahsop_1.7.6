# config_module_starter
configuration d'un module starter Prestashop 1.7.6

<h1>Configuration autoload</h1>

<ul>
  <li>Créer un fichier composer.json à la racine du dossier module</li>
  <li>Configurer le composer.json https://devdocs.prestashop.com/1.7/modules/concepts/controllers/admin-controllers/</li>
  <li>Se connecter sur le docker de prestashop depuis vsCode (plugin : https://code.visualstudio.com/docs/azure/docker),    clique droit sur le container et faire un Attach Shell </li>
  <li>Nous somme dans le container de Prestashop, il ne reste plus qu'à ce rendre dans le dossier /modules/nom_de_notre_module et faire un composer install</li>
  <li>Un dossier vendor sera alors créé avec un dossier composer et les fichiers d'autoload</li>
  <li>Pour toutes modifications ultérieures sur notre module, faire un composer.update</li>
</ul>
