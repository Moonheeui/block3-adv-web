<!-- Computer Builder - parts from different brands, part compatibility (ex: amd, intel, mac) and of course pricing. Make sure there are enough information to help ID and build a complete system with no missing or redundant / duplicate parts. -->

# Project 1

## A computer builder

| ModelName    | PartName         | BrandName     | Compatibility | Price | Stock |
|--------------|------------------|---------------|---------------|-------|-------|
| iCore        | CPU              | Intel         | Intel & AMD   | 489   | 45    |
| Ryzen        | CPU              | AMD           | Intel & AMD   | 288   | 55    |
| DDR4         | RAM              | Corsair       | Universal     | 110   | 80    |
| DDR4         | RAM              | Kingston      | Universal     | 88    | 100   |
| EVO PCIe     | Storage (SSD)    | Samsung       | Universal     | 120   | 65    |
| BarraCuda    | Storage (HDD)    | Seagate       | Universal     | 75    | 120   |
| Prime        | Motherboard      | ASUS          | Intel & AMD   | 199   | 45    |
| B550         | Motherboard      | MSI           | Intel & AMD   | 149   | 35    |
| GeForce      | GPU              | NVIDIA        | Universal     | 499   | 60    |
| Radeon       | GPU              | AMD           | Universal     | 358   | 50    |
| 100-N1       | PSU              | EVGA          | Universal     | 109   | 20    |
| RMX          | PSU              | Corsair       | Universal     | 139   | 50    |
| Case         | Case             | NZXT          | Universal     | 109   | 40    |
| Case         | Case             | Corsair       | Universal     | 137   | 25    |
| Redux        | Cooler           | Noctua        | Universal     | 62    | 40    |
| Hyper 212    | Cooler           | Cooler Master | Universal     | 59    | 60    |
| 27inch       | Monitor          | Dell          | Universal     | 249   | 80    |
| 27inch       | Monitor          | LG            | Universal     | 299   | 60    |
| Wireless     | Keyboard         | Logitech      | Universal     | 69    | 90    |
| BlackWidow   | Keyboard         | Razer         | Universal     | 100   | 70    |
| Peripheral   | Mouse            | Logitech      | Universal     | 54    | 120   |
| Peripheral   | Mouse            | HP            | Universal     | 42    | 70    |

## Normalization

>Models

| ModelID | ModelName    | PartID | BrandID | CompatibilityID | Price | Stock |
|---------|--------------|--------|---------|-----------------|-------|-------|
| 1       | iCore        | 1      | 1       | 1               | 489   | 45    |
| 2       | Ryzen        | 1      | 2       | 1               | 288   | 55    |
| 3       | DDR4         | 2      | 3       | 2               | 110   | 80    |
| 4       | DDR4         | 2      | 4       | 2               | 88    | 100   |
| 5       | EVO PCIe     | 3      | 5       | 2               | 120   | 65    |
| 6       | BarraCuda    | 4      | 6       | 2               | 75    | 120   |
| 7       | Prime        | 5      | 7       | 1               | 199   | 45    |
| 8       | B550         | 5      | 8       | 1               | 149   | 35    |
| 9       | GeForce      | 6      | 9       | 2               | 499   | 60    |
| 10      | Radeon       | 6      | 2       | 2               | 358   | 50    |
| 11      | 100-N1       | 7      | 10      | 2               | 109   | 20    |
| 12      | RMX          | 7      | 3       | 2               | 139   | 50    |
| 13      | Case         | 8      | 11      | 2               | 109   | 40    |
| 14      | Case         | 8      | 3       | 2               | 137   | 25    |
| 15      | Redux        | 9      | 12      | 2               | 62    | 40    |
| 16      | Hyper 212    | 9      | 13      | 2               | 59    | 60    |
| 17      | 27inch       | 10     | 14      | 2               | 249   | 80    |
| 18      | 27inch       | 10     | 15      | 2               | 299   | 60    |
| 19      | Wireless     | 11     | 16      | 2               | 69    | 90    |
| 20      | BlackWidow   | 11     | 17      | 2               | 100   | 70    |
| 21      | Peripheral   | 12     | 16      | 2               | 54    | 120   |
| 22      | Peripheral   | 12     | 18      | 2               | 42    | 70    |

>Parts

| PartID  | PartName         |
|---------|------------------|
| 1       | CPU              |
| 2       | RAM              |
| 3       | Storage (SSD)    |
| 4       | Storage (HDD)    |
| 5       | Motherboard      |
| 6       | GPU              |
| 7       | PSU              |
| 8       | Case             |
| 9       | Cooler           |
| 10      | Monitor          |
| 11      | Keyboard         |
| 12      | Mouse            |

>Brands

| BrandID | BrandName      |
|---------|----------------|
| 1       | Intel          |
| 2       | AMD            |
| 3       | Corsair        |
| 4       | Kingston       |
| 5       | Samsung        |
| 6       | Seagate        |
| 7       | ASUS           |
| 8       | MSI            |
| 9       | NVIDIA         |
| 10      | EVGA           |
| 11      | NZXT           |
| 12      | Noctua         |
| 13      | Cooler Master  |
| 14      | Dell           |
| 15      | LG             |
| 16      | Logitech       |
| 17      | Razer          |
| 18      | HP             |

>Compatibility

| CompatibilityID  | Compatibility |
|------------------|---------------|
| 1                | Intel & AMD   |
| 2                | Universal     |
