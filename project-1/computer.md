# Project 1

## The parts from different brands for a computer builder

| ID     | PartName         | BrandName    | Model          | Compatibility | Price (USD) | Stock  |
|--------|------------------|--------------|----------------|---------------|-------------|--------|
| 1      | CPU              | Intel        | iCore          | Intel & AMD   | 489         | 45     |
| 2      | CPU              | AMD          | Ryzen          | Intel & AMD   | 288         | 55     |
| 3      | RAM              | Corsair      | DDR4           | Universal     | 110         | 80     |
| 4      | RAM              | Kingston     | DDR4           | Universal     | 88          | 100    |
| 5      | Storage (SSD)    | Samsung      | EVO PCIe       | Universal     | 120         | 65     |
| 6      | Storage (HDD)    | Seagate      | BarraCuda      | Universal     | 75          | 120    |
| 7      | Motherboard      | ASUS         | Prime          | Intel & AMD   | 199         | 45     |
| 8      | Motherboard      | MSI          | B550           | Intel & AMD   | 149         | 35     |
| 9      | GPU              | NVIDIA       | GeForce        | Universal     | 499         | 60     |
| 10     | GPU              | AMD          | Radeon         | Universal     | 358         | 50     |
| 11     | PSU              | EVGA         | 100-N1         | Universal     | 109         | 20     |
| 12     | PSU              | Corsair      | RMX            | Universal     | 139         | 50     |
| 13     | Case             | NZXT         | Case           | Universal     | 109         | 40     |
| 14     | Case             | Corsair      | Case           | Universal     | 137         | 25     |
| 15     | Cooler           | Noctua       | Redux          | Universal     | 62          | 40     |
| 16     | Cooler           | Cooler Master| Hyper 212      | Universal     | 59          | 60     |
| 17     | Monitor          | Dell         | 27inch         | Universal     | 249         | 80     |
| 18     | Monitor          | LG           | 27inch         | Universal     | 299         | 60     |
| 19     | Keyboard         | Logitech     | Wireless       | Universal     | 69          | 90     |
| 20     | Keyboard         | Razer        | BlackWidow     | Universal     | 100         | 70     |
| 21     | Mouse            | Logitech     | Peripheral     | Universal     | 54          | 120    |
| 22     | Mouse            | HP           | Peripheral     | Universal     | 42          | 70     |


## Normalization

| ID     | PartID | BrandName     | Model          |
|--------|--------|-------------- |----------------|
| 1      | 1      | Intel         | iCore          |
| 2      | 1      | AMD           | Ryzen          |
| 3      | 2      | Corsair       | DDR4           |
| 4      | 2      | Kingston      | DDR4           |
| 5      | 3      | Samsung       | EVO PCIe       |
| 6      | 4      | Seagate       | BarraCuda      |
| 7      | 5      | ASUS          | Prime          |
| 8      | 5      | MSI           | B550           |
| 9      | 6      | NVIDIA        | GeForce        |
| 10     | 6      | AMD           | Radeon         |
| 11     | 7      | EVGA          | 100-N1         |
| 12     | 7      | Corsair       | RMX            |
| 13     | 8      | NZXT          | Case           |
| 14     | 8      | Corsair       | Case           |
| 15     | 9      | Noctua        | Redux          |
| 16     | 9      | Cooler Master | Hyper 212      |
| 17     | 10     | Dell          | 27inch         |
| 18     | 10     | LG            | 27inch         |
| 19     | 11     | Logitech      | Wireless       |
| 20     | 11     | Razer         | BlackWidow     |
| 21     | 12     | Logitech      | Peripheral     |
| 22     | 12     | HP            | Peripheral     |

---

| PartID | BrandID | Price (USD) | Stock  |
|--------|---------|-------------|--------|
| 1      | 1       | 489         | 45     |
| 1      | 2       | 288         | 55     |
| 2      | 3       | 110         | 80     |
| 2      | 4       | 88          | 100    |
| 3      | 5       | 120         | 65     |
| 4      | 6       | 75          | 120    |
| 5      | 7       | 199         | 45     |
| 5      | 8       | 149         | 35     |
| 6      | 9       | 499         | 60     |
| 6      | 2       | 358         | 50     |
| 7      | 10      | 109         | 20     |
| 7      | 3       | 139         | 50     |
| 8      | 11      | 109         | 40     |
| 8      | 3       | 137         | 25     |
| 9      | 12      | 62          | 40     |
| 9      | 13      | 59          | 60     |
| 10     | 14      | 249         | 80     |
| 10     | 15      | 299         | 60     |
| 11     | 16      | 69          | 90     |
| 11     | 17      | 100         | 70     |
| 12     | 16      | 54          | 120    |
| 12     | 18      | 42          | 70     |

---

| PartID  | PartName         | CompatibilityID  |
|---------|------------------|------------------|
| 1       | CPU              | 1                |
| 2       | RAM              | 2                |
| 3       | Storage (SSD)    | 2                |
| 4       | Storage (HDD)    | 2                |
| 5       | Motherboard      | 1                |
| 6       | GPU              | 2                |
| 7       | PSU              | 2                |
| 8       | Case             | 2                |
| 9       | Cooler           | 2                |
| 10      | Monitor          | 2                |
| 11      | Keyboard         | 2                |
| 12      | Mouse            | 2                |

---

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

---

| CompatibilityID  | Compatibility |
|------------------|---------------|
| 1                | Intel & AMD   |
| 2                | Universal     |
