<?php return unserialize('C:57:"Massive\\Bundle\\SearchBundle\\Search\\Metadata\\ClassMetadata":3404:{a:3:{i:0;s:105:"a:5:{i:0;s:40:"Sulu\\Bundle\\ContactBundle\\Entity\\Contact";i:1;a:0:{}i:2;a:0:{}i:3;a:0:{}i:4;i:1510783498;}";i:1;s:3260:"a:1:{s:8:"_default";O:57:"Massive\\Bundle\\SearchBundle\\Search\\Metadata\\IndexMetadata":10:{s:63:"' . "\0" . 'Massive\\Bundle\\SearchBundle\\Search\\Metadata\\IndexMetadata' . "\0" . 'name";s:40:"Sulu\\Bundle\\ContactBundle\\Entity\\Contact";s:68:"' . "\0" . 'Massive\\Bundle\\SearchBundle\\Search\\Metadata\\IndexMetadata' . "\0" . 'indexName";O:55:"Massive\\Bundle\\SearchBundle\\Search\\Metadata\\Field\\Value":1:{s:62:"' . "\0" . 'Massive\\Bundle\\SearchBundle\\Search\\Metadata\\Field\\Value' . "\0" . 'value";s:7:"contact";}s:71:"' . "\0" . 'Massive\\Bundle\\SearchBundle\\Search\\Metadata\\IndexMetadata' . "\0" . 'fieldMapping";a:5:{s:9:"firstName";a:2:{s:4:"type";s:6:"string";s:5:"field";O:55:"Massive\\Bundle\\SearchBundle\\Search\\Metadata\\Field\\Field":1:{s:61:"' . "\0" . 'Massive\\Bundle\\SearchBundle\\Search\\Metadata\\Field\\Field' . "\0" . 'name";s:9:"firstName";}}s:8:"lastName";a:2:{s:4:"type";s:6:"string";s:5:"field";O:55:"Massive\\Bundle\\SearchBundle\\Search\\Metadata\\Field\\Field":1:{s:61:"' . "\0" . 'Massive\\Bundle\\SearchBundle\\Search\\Metadata\\Field\\Field' . "\0" . 'name";s:8:"lastName";}}s:9:"mainEmail";a:2:{s:4:"type";s:6:"string";s:5:"field";O:60:"Massive\\Bundle\\SearchBundle\\Search\\Metadata\\Field\\Expression":1:{s:72:"' . "\0" . 'Massive\\Bundle\\SearchBundle\\Search\\Metadata\\Field\\Expression' . "\0" . 'expression";s:51:"join(\' \', map(object.getEmails(), \'el.getEmail()\'))";}}s:9:"mainPhone";a:2:{s:4:"type";s:6:"string";s:5:"field";O:60:"Massive\\Bundle\\SearchBundle\\Search\\Metadata\\Field\\Expression":1:{s:72:"' . "\0" . 'Massive\\Bundle\\SearchBundle\\Search\\Metadata\\Field\\Expression' . "\0" . 'expression";s:51:"join(\' \', map(object.getPhones(), \'el.getPhone()\'))";}}s:7:"address";a:2:{s:4:"type";s:6:"string";s:5:"field";O:60:"Massive\\Bundle\\SearchBundle\\Search\\Metadata\\Field\\Expression":1:{s:72:"' . "\0" . 'Massive\\Bundle\\SearchBundle\\Search\\Metadata\\Field\\Expression' . "\0" . 'expression";s:186:"object.getMainAddress() ? join(\' \', [object.getMainAddress().getNumber(), object.getMainAddress().getStreet(), object.getMainAddress().getZip(), object.getMainAddress().getState()]) : \'\'";}}}s:66:"' . "\0" . 'Massive\\Bundle\\SearchBundle\\Search\\Metadata\\IndexMetadata' . "\0" . 'idField";O:58:"Massive\\Bundle\\SearchBundle\\Search\\Metadata\\Field\\Property":1:{s:68:"' . "\0" . 'Massive\\Bundle\\SearchBundle\\Search\\Metadata\\Field\\Property' . "\0" . 'property";s:2:"id";}s:67:"' . "\0" . 'Massive\\Bundle\\SearchBundle\\Search\\Metadata\\IndexMetadata' . "\0" . 'urlField";N;s:69:"' . "\0" . 'Massive\\Bundle\\SearchBundle\\Search\\Metadata\\IndexMetadata' . "\0" . 'titleField";O:60:"Massive\\Bundle\\SearchBundle\\Search\\Metadata\\Field\\Expression":1:{s:72:"' . "\0" . 'Massive\\Bundle\\SearchBundle\\Search\\Metadata\\Field\\Expression' . "\0" . 'expression";s:75:"join(\' \', [object.getTitle(), object.getFirstName(), object.getLastName()])";}s:75:"' . "\0" . 'Massive\\Bundle\\SearchBundle\\Search\\Metadata\\IndexMetadata' . "\0" . 'descriptionField";O:60:"Massive\\Bundle\\SearchBundle\\Search\\Metadata\\Field\\Expression":1:{s:72:"' . "\0" . 'Massive\\Bundle\\SearchBundle\\Search\\Metadata\\Field\\Expression' . "\0" . 'expression";s:271:"\'<p>\' ~ join(\' \', map(object.getEmails(), \'el.getEmail()\')) ~ \'</p><p>\' ~ (object.getMainAddress() ? join(\',\', [object.getMainAddress().getNumber(), object.getMainAddress().getStreet(), object.getMainAddress().getZip(), object.getMainAddress().getState()]) : \'\') ~ \'</p>\'";}s:72:"' . "\0" . 'Massive\\Bundle\\SearchBundle\\Search\\Metadata\\IndexMetadata' . "\0" . 'imageUrlField";N;s:70:"' . "\0" . 'Massive\\Bundle\\SearchBundle\\Search\\Metadata\\IndexMetadata' . "\0" . 'localeField";N;s:72:"' . "\0" . 'Massive\\Bundle\\SearchBundle\\Search\\Metadata\\IndexMetadata' . "\0" . 'classMetadata";r:1;}}";i:2;N;}}');