# T_Firewall
DQH Firewall Mod

1. Chỉnh sửa cấu hình trong:
firewall/core.php

2. Chèn vào dòng đầu tiên của tệp dòng này:

```php
<?php
session_start();
require('firewall/core.php');
?>
```
