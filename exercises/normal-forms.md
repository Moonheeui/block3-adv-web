# Exercise 1

## Patient Dental Appointments

| staffNo | dentistName   | patientNo | patientName   | appointment date time | surgeryNo |
| ------- | ------------- | --------- | ------------- | :-------------------: | --------- |
| S1011   | Tony Smith    | P100      | Gillian White |    12-Aug-03 10.00    | S10       |
| S1011   | Tony Smith    | P105      | Jill Bell     |    13-Aug-03 12.00    | S15       |
| S1024   | Helen Pearson | P108      | Ian MacKay    |   12-Sept-03 10.00    | S10       |
| S1024   | Helen Pearson | P108      | Ian MacKay    |   14-Sept-03 10.00    | S10       |
| S1032   | Robin Plevin  | P105      | Jill Bell     |    14-Oct-03 16.30    | S15       |
| S1032   | Robm Plevin   | P110      | John Walker   |    15-Oct-03 18.00    | S13       |

`Solution`

_Primary Key is staffNo_

| staffNo | appointment date time | surgeryNo | patientNo |
| ------- | :-------------------: | --------- | --------- |
| S1011   |    12-Aug-03 10.00    | S10       | P100      |
| S1011   |    13-Aug-03 12.00    | S15       | P105      |
| S1024   |   12-Sept-03 10.00    | S10       | P108      |
| S1024   |   14-Sept-03 10.00    | S10       | P108      |
| S1032   |    14-Oct-03 16.30    | S15       | P105      |
| S1032   |    15-Oct-03 18.00    | S13       | P110      |

| staffNo | appointment date time | surgeryNo |
| ------- | :-------------------: | --------- |
| S1011   |    12-Aug-03 10.00    | S10       |
| S1011   |    13-Aug-03 12.00    | S15       |
| S1024   |   12-Sept-03 10.00    | S10       |
| S1024   |   14-Sept-03 10.00    | S10       |
| S1032   |    14-Oct-03 16.30    | S15       |
| S1032   |    15-Oct-03 18.00    | S13       |

| staffNo | dentistName   |
| ------- | ------------- |
| S1011   | Tony Smith    |
| S1024   | Helen Pearson |
| S1032   | Robin Plevin  |
| S1032   | Robm Plevin   |

| patientNo | patientName   |
| --------- | ------------- |
| P100      | Gillian White |
| P105      | Jill Bell     |
| P108      | Ian MacKay    |
| P110      | John Walker   |

> Exercise 2

**Employees of InstantCover and Contracts to work at hotels**

| NIN      | contractNo | hoursPerWeek | eName        | hotelNo | hotelLocation |
| -------- | ---------- | ------------ | ------------ | ------- | ------------- |
| 113567WD | C1024      | 16           | John Smith   | H25     | Edinburgh     |
| 234111XA | C1024      | 24           | Diane Hocine | H25     | Edinburgh     |
| 712670YD | C1025      | 28           | Sarah White  | H4      | Glasgow       |
| 113567WD | C1025      | 16           | John Smith   | H4      | Glasgow       |

`Solution`

_Primery Key is NIN_

| NIN      | contractNo | hoursPerWeek |
| -------- | ---------- | ------------ |
| 113567WD | C1024      | 16           |
| 234111XA | C1024      | 24           |
| 712670YD | C1025      | 28           |
| 113567WD | C1025      | 16           |

| NIN      | eName        |
| -------- | ------------ |
| 113567WD | John Smith   |
| 234111XA | Diane Hocine |
| 712670YD | Sarah White  |
| 113567WD | John Smith   |

| hotelNo | hotelLocation |
| ------- | ------------- |
| H25     | Edinburgh     |
| H4      | Glasgow       |

| contractNo | hotelNo |
| ---------- | ------- |
| C1024      | H25     |
| C1025      | H4      |

> Exercise 3

## Employee's Job

| EMPLOYEE_ID | NAME  | JOB_CODE | JOB       | STATE_CODE | HOME_STATE |
| ----------- | ----- | -------- | --------- | ---------- | ---------- |
| E001        | Alice | J01      | Chef      | 26         | Michigan   |
| E001        | Alice | J02      | Waiter    | 26         | Michigan   |
| E002        | Bob   | J02      | Waiter    | 56         | Wyoming    |
| E002        | Bob   | J03      | Bartender | 56         | Wyoming    |
| E003        | Alice | J01      | Chef      | 56         | Wyoming    |

`Solution`

_Primery Key is EMPLOYEE_ID_

| EMPLOYEE_ID | JOB_CODE |
| ----------- | -------- |
| E001        | J01      |
| E001        | J02      |
| E002        | J02      |
| E002        | J03      |
| E003        | J01      |

| JOB_CODE | JOB       |
| -------- | --------- |
| J01      | Chef      |
| J02      | Waiter    |  
| J03      | Bartender |

| EMPLOYEE_ID | NAME  | STATE_CODE |
| ----------- | ----- | ---------- |
| E001        | Alice | 26         |
| E002        | Bob   | 56         |
| E003        | Alice | 56         |

| STATE_CODE | HOME_STATE |
| ---------- | ---------- |
| 26         | Michigan   |
| 56         | Wyoming    |

> Exercise 4

**Book**

| Book                                  | Genre                   | Author       | Author Nationality |
| ------------------------------------- | ----------------------- | ------------ | ------------------ |
| Twenty Thousand Leagues Under the Sea | Science Fiction         | Jules Verne  | French             |
| Journey to the Center of the Earth    | Science Fiction         | Jules Verne  | French             |
| Leaves of Grass                       | Poetry                  | Walt Whitman | American           |
| Anna Karenina                         | Literary Fiction        | Leo Tolstoy  | Russian            |
| A Confession                          | Religious Autobiography | Leo Tolstoy  | Russian            |

`Solution`

| Book                                  | Genre                   |
| ------------------------------------- | ----------------------- |
| Twenty Thousand Leagues Under the Sea | Science Fiction         |
| Journey to the Center of the Earth    | Science Fiction         |
| Leaves of Grass                       | Poetry                  |
| Anna Karenina                         | Literary Fiction        |
| A Confession                          | Religious Autobiography |

| Author       | Author Nationality |
| ------------ | ------------------ |
| Jules Verne  | French             |
| Jules Verne  | French             |
| Walt Whitman | American           |
| Leo Tolstoy  | Russian            |
| Leo Tolstoy  | Russian            |

| Book                                  | Author       |
| ------------------------------------- | ------------ |
| Twenty Thousand Leagues Under the Sea | Jules Verne  |
| Journey to the Center of the Earth    | Jules Verne  |
| Leaves of Grass                       | Walt Whitman |
| Anna Karenina                         | Leo Tolstoy  |
| A Confession                          | Leo Tolstoy  |

> Exercise 5

**Students and their grades in different topics**

| UnitID | StudentID | Date     | TutorID | Topic | Room | Grade | Book      | TutEmail     |
| ------ | --------- | -------- | ------- | ----- | ---- | ----- | --------- | ------------ |
| U1     | St1       | 23.02.03 | Tut1    | GMT   | 629  | 4.7   | Deumlich  | <tut1@fhbb.ch> |
| U2     | St1       | 18.11.02 | Tut3    | Gln   | 631  | 5.1   | Zehnder   | <tut3@fhbb.ch> |
| U1     | St4       | 23.02.03 | Tut1    | GMT   | 629  | 4.3   | Deumlich  | <tut1@fhbb.ch> |
| U5     | St2       | 05.05.03 | Tut3    | PhF   | 632  | 4.9   | Dümmlers  | <tut3@fhbb.ch> |
| U4     | St2       | 04.07.03 | Tut5    | AVQ   | 621  | 5.0   | SwissTopo | <tut5@fhbb.ch> |

`Solution`

_Primery Key is UnitID and StudentID_

| UnitID | StudentID | Grade |
| ------ | --------- | ----- |
| U1     | St1       | 4.7   |
| U2     | St1       | 5.1   |
| U1     | St4       | 4.3   |
| U5     | St2       | 4.9   |
| U4     | St2       | 5.0   |

| UnitID | TutorID | Date     | Room |
| ------ | ------- | -------- | ---- |
| U1     | Tut1    | 23.02.03 | 629  |
| U2     | Tut3    | 18.11.02 | 631  |
| U1     | Tut1    | 23.02.03 | 629  |
| U5     | Tut3    | 05.05.03 | 632  |
| U4     | Tut5    | 04.07.03 | 621  |

| TutorID | TutEmail     |
| ------- | ------------ |
| Tut1    | <tut1@fhbb.ch> |
| Tut3    | <tut3@fhbb.ch> |
| Tut5    | <tut5@fhbb.ch> |

| UnitID | Topic |
| ------ | ----- |
| U1     | GMT   |
| U2     | Gln   |
| U5     | PhF   |
| U4     | AVQ   |

| Topic | Book      |
| ----- | --------- |
| GMT   | Deumlich  |
| Gln   | Zehnder   |
| PhF   | Dümmlers  |
| AVQ   | SwissTopo |
