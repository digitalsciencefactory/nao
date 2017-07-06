# nao
Repository of project 5 of the course "multimedia project manager" on openclassrooms (https://www.openclassrooms.com)

## Description


## Workflow

La branche master contient exactement ce qui est disponible sur le site https://flashnature.digitalsicencefactory.com.
Il s'agit de notre branche de production.  

**Aucun développement ne doit être réaliser directement sur cette branche**

C'est sur cette branche de Master que l'on génèrera les tag de version.  

La branche default_dev est la branche commune de travail.  
A partir de cette branche, chaque dev peut tirer sa branche personnelle pour y effectuer ses issues.

Les merges des développements de chaquent se font sur la branche default_dev et les tests sont a réalisés sur cette branche.

Une fois le code validé par l'outil https://insight.sensiolabs.com/, la branche default_dev est mergée sur le master.
Une fois le déploiement en production validé, le tag de la version est créé.
