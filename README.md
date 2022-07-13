## Algoritma interview task

I am not really understand the task but try to make something similar to what written in pdf ./algo-task.pdf

## Endpoints

1. GET /api/bond/<id>/payouts

Response:

```json
[
    {
        "date": "2022-10-06T00:00:00.000000Z"
    },
    {
        "date": "2023-01-04T00:00:00.000000Z"
    },
    {
        "date": "2023-04-04T00:00:00.000000Z"
    }
]

```

2. POST /api/bond/<id>/order
```json
{
    "bond_id": 1,
    "date": "2022-07-13T21:46:41.449186Z",
    "count": "1",
    "updated_at": "2022-07-13T21:46:41.000000Z",
    "created_at": "2022-07-13T21:46:41.000000Z",
    "id": 2
}
```


3. POST /bond/order/<order_id>

Response

```json
[
    {
        "date": "2022-10-06T00:00:00.000000Z",
        "amount": 100
    },
    {
        "date": "2023-01-04T00:00:00.000000Z",
        "amount": 100
    },
    {
        "date": "2023-04-04T00:00:00.000000Z",
        "amount": 100
    }
]
```

