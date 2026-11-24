# edit_map_service

code of the EDIT Map Viewer (extra styling instructions on top of WMS for ecological maps)
Project initiated in 2008 for the European EDIT project.
RMCA (Tervuren) - CSIC (Madrid)-BGBM (Berlin)- MNHN (Paris)

Major revision 2.1 (Nov 2026)
----------------------------
1: Uses REDIS Cache instead of serializing images ans SLD (styles) files on the servers
2: Uses the PHP library for ImageMagick instead of sending shell instructions to generate images