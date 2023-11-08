> Exercise 1

**Patient Dental Appointments**

| staffNo | dentistName   | patientNo | patientName   | appointment date time | surgeryNo |
| ------- | ------------- | --------- | ------------- | :-------------------: | --------- |
| S1011   | Tony Smith    | P100      | Gillian White |    12-Aug-03 10.00    | S10       |
| S1011   | Tony Smith    | P105      | Jill Bell     |    13-Aug-03 12.00    | S15       |
| S1024   | Helen Pearson | P108      | Ian MacKay    |   12-Sept-03 10.00    | S10       |
| S1024   | Helen Pearson | P108      | Ian MacKay    |   14-Sept-03 10.00    | S10       |
| S1032   | Robin Plevin  | P105      | Jill Bell     |    14-Oct-03 16.30    | S15       |
| S1032   | Robin Plevin  | P110      | John Walker   |    15-Oct-03 18.00    | S13       |

`2NF`

_Primary Key is staffNo_

| staffNo | dentistName   |
| ------- | ------------- |
| S1011   | Tony Smith    |
| S1024   | Helen Pearson |
| S1032   | Robin Plevin  |

_Primary Key is staffNo and patientNo_

| staffNo | patientNo | patientName   | appointment date time | surgeryNo |
| ------- | --------- | ------------- | :-------------------: | --------- |
| S1011   | P100      | Gillian White |    12-Aug-03 10.00    | S10       |
| S1011   | P105      | Jill Bell     |    13-Aug-03 12.00    | S15       |
| S1024   | P108      | Ian MacKay    |   12-Sept-03 10.00    | S10       |
| S1024   | P108      | Ian MacKay    |   14-Sept-03 10.00    | S10       |
| S1032   | P105      | Jill Bell     |    14-Oct-03 16.30    | S15       |
| S1032   | P110      | John Walker   |    15-Oct-03 18.00    | S13       |

> Exercise 2

**Employees of InstantCover and Contracts to work at hotels**

| NIN      | contractNo | hoursPerWeek | eName        | hotelNo | hotelLocation |
| -------- | ---------- | ------------ | ------------ | ------- | ------------- |
| 113567WD | C1024      | 16           | John Smith   | H25     | Edinburgh     |
| 234111XA | C1024      | 24           | Diane Hocine | H25     | Edinburgh     |
| 712670YD | C1025      | 28           | Sarah White  | H4      | Glasgow       |
| 113567WD | C1025      | 16           | John Smith   | H4      | Glasgow       |

`3NF`

_Primery Key is NIN and contractNo_

| NIN      | contractNo | eName        |
| -------- | ---------- | ------------ |
| 113567WD | C1024      | John Smith   |
| 234111XA | C1024      | Diane Hocine |
| 712670YD | C1025      | Sarah White  |
| 113567WD | C1025      | John Smith   |

_Primery Key is NIN_

| NIN      | hoursPerWeek | hotelNo |
| -------- | ------------ | ------- |
| 113567WD | 16           | H25     |
| 234111XA | 24           | H25     |
| 712670YD | 28           | H4      |
| 113567WD | 16           | H4      |

_Primery Key is hotelNo_

| hotelNo | hotelLocation |
| ------- | ------------- |
| H25     | Edinburgh     |
| H4      | Glasgow       |

> Exercise 3

**Employee's Job**

| EMPLOYEE_ID | NAME  | JOB_CODE | JOB       | STATE_CODE | HOME_STATE |
| ----------- | ----- | -------- | --------- | ---------- | ---------- |
| E001        | Alice | J01      | Chef      | 26         | Michigan   |
| E001        | Alice | J02      | Waiter    | 26         | Michigan   |
| E002        | Bob   | J02      | Waiter    | 56         | Wyoming    |
| E002        | Bob   | J03      | Bartender | 56         | Wyoming    |
| E003        | Alice | J01      | Chef      | 56         | Wyoming    |

`3NF`

_Primery Key is EMPLOYEE_ID_

| EMPLOYEE_ID | NAME  |
| ----------- | ----- |
| E001        | Alice |
| E002        | Bob   |
| E003        | Alice |

_Primery Key is EMPLOYEE_ID and JOB_CODE_

| EMPLOYEE_ID | JOB_CODE | JOB       | STATE_CODE |
| ----------- | -------- | --------- | ---------- |
| E001        | J01      | Chef      | 26         |
| E001        | J02      | Waiter    | 26         |
| E002        | J02      | Waiter    | 56         |
| E002        | J03      | Bartender | 56         |
| E003        | J01      | Chef      | 56         |

_Primery Key is STATE_CODE_

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

`2NF`

_Primery Key is Genre_

| Genre                   | Book                                  |
| ----------------------- | ------------------------------------- |
| Science Fiction         | Twenty Thousand Leagues Under the Sea |
| Science Fiction         | Journey to the Center of the Earth    |
| Poetry                  | Leaves of Grass                       |
| Literary Fiction        | Anna Karenina                         |
| Religious Autobiography | A Confession                          |

_Primery Key is Author_

| Author       | Author Nationality | Book                                  |
| ------------ | ------------------ | ------------------------------------- |
| Jules Verne  | French             | Twenty Thousand Leagues Under the Sea |
| Jules Verne  | French             | Journey to the Center of the Earth    |
| Walt Whitman | American           | Leaves of Grass                       |
| Leo Tolstoy  | Russian            | Anna Karenina                         |
| Leo Tolstoy  | Russian            | A Confession                          |

> Exercise 5

**Students and their grades in different topics**

| UnitID | StudentID | Date     | TutorID | Topic | Room | Grade | Book      | TutEmail     |
| ------ | --------- | -------- | ------- | ----- | ---- | ----- | --------- | ------------ |
| U1     | St1       | 23.02.03 | Tut1    | GMT   | 629  | 4.7   | Deumlich  | tut1@fhbb.ch |
| U2     | St1       | 18.11.02 | Tut3    | Gln   | 631  | 5.1   | Zehnder   | tut3@fhbb.ch |
| U1     | St4       | 23.02.03 | Tut1    | GMT   | 629  | 4.3   | Deumlich  | tut1@fhbb.ch |
| U5     | St2       | 05.05.03 | Tut3    | PhF   | 632  | 4.9   | Dümmlers  | tut3@fhbb.ch |
| U4     | St2       | 04.07.03 | Tut5    | AVQ   | 621  | 5.0   | SwissTopo | tut5@fhbb.ch |

`3NF`

_Primery Key is UnitID and StudentID_

| UnitID | StudentID | Date     |
| ------ | --------- | -------- |
| U1     | St1       | 23.02.03 |
| U2     | St1       | 18.11.02 |
| U1     | St4       | 23.02.03 |
| U5     | St2       | 05.05.03 |
| U4     | St2       | 04.07.03 |

_Primery Key is UnitID and TutorID_

| UnitID | TutorID | Topic | Room | Book      | TutEmail     |
| ------ | ------- | ----- | ---- | --------- | ------------ |
| U1     | Tut1    | GMT   | 629  | Deumlich  | tut1@fhbb.ch |
| U2     | Tut3    | Gln   | 631  | Zehnder   | tut3@fhbb.ch |
| U1     | Tut1    | GMT   | 629  | Deumlich  | tut1@fhbb.ch |
| U5     | Tut3    | PhF   | 632  | Dümmlers  | tut3@fhbb.ch |
| U4     | Tut5    | AVQ   | 621  | SwissTopo | tut5@fhbb.ch |

_Primery Key is StudentID and TutorID_

| StudentID | TutorID | Grade |
| --------- | ------- | ----- |
| St1       | Tut1    | 4.7   |
| St1       | Tut3    | 5.1   |
| St4       | Tut1    | 4.3   |
| St2       | Tut3    | 4.9   |
| St2       | Tut5    | 5.0   |
