<!DOCTYPE html>
<html>

<script>
    // Example #1
    // Synchronous
    // function greeting() {
    //     console.log('Hello, World!');
    // }

    // console.log('statement 1');
    // console.log('statement 2');
    // greeting();
    // console.log('statement 3');
    // console.log('statement 4');

    // Example #2
    // Asynchronous
    // function greeting() {
    //     setTimeout(() => {
    //         console.log('Hello, World!');
    //     }, 3000);
    // }
    // console.log('statement 1');
    // console.log('statement 2');

    // greeting();

    // console.log('statement 3');
    // console.log('statement 4');

    // Example #3
    // Http Requests
    // const request = new XMLHttpRequest();

    // request.addEventListener('readystatechange', () => {
    //     if (request.readyState === 4) {
    //         console.log(request, request.responseText);
    //     }
    // });

    // request.open("GET", "https://jsonplaceholder.typicode.com/todos/1");
    // request.send();

    // Example #4
    // Status Codes
    // const request = new XMLHttpRequest();

    // request.addEventListener('readystatechange', () => {
    //     if (request.readyState === 4 && request.status === 200) {
    //         console.log(request, request.readyState);
    //     } else if (request.readyState === 4) {
    //         console.log('could not fetch the data');
    //         console.log(request, request.readyState);
    //     }
    // });

    // request.open("GET", "https://jsonplaceholder.typicode.com/todossss/1");
    // request.send();

    // Example #5
    // Callback
    // const getTodos = (callback) => {
    //     const request = new XMLHttpRequest();

    //     request.addEventListener('readystatechange', () => {
    //         if (request.readyState === 4 && request.status === 200) {
    //             callback(undefined, request.responseText);
    //         } else if (request.readyState === 4) {
    //             callback('could not fetch the data', undefined);
    //         }
    //     });

    //     request.open("GET", "https://jsonplaceholder.typicode.com/todos/1");
    //     request.send();
    // }

    // getTodos((err, data) => {
    //     console.log('callback is fired!');
    //     if (err) {
    //         console.log(err);
    //     } else {
    //         console.log(data);
    //     }
    // });

    // Example #6
    // JSON.data
    // const getTodos = (callback) => {
    //     const request = new XMLHttpRequest();

    //     request.addEventListener('readystatechange', () => {
    //         if (request.readyState === 4 && request.status === 200) {
    //             const data = JSON.parse(request.responseText);
    //             callback(undefined, data[10]);
    //         } else if (request.readyState === 4) {
    //             callback('could not fetch the data', undefined);
    //         }
    //     });

    //     request.open("GET", "https://jsonplaceholder.typicode.com/todos");
    //     request.send();
    // }

    // getTodos((err, data) => {
    //     console.log('callback is fired!');
    //     if (err) {
    //         console.log(err);
    //     } else {
    //         console.log(data);
    //     }
    // });

    // Example #7
    // Callback hell or Pyramid of doom
    // const getTodos = (resource, callback) => {
    //     const request = new XMLHttpRequest();

    //     request.addEventListener('readystatechange', () => {
    //         if (request.readyState === 4 && request.status === 200) {
    //             const data = JSON.parse(request.responseText);
    //             callback(undefined, data);
    //         } else if (request.readyState === 4) {
    //             callback('could not fetch the data', undefined);
    //         }
    //     });

    //     request.open("GET", resource);
    //     request.send();
    // }

    // getTodos('https://jsonplaceholder.typicode.com/todossss/1', (err, data) => {
    //     console.log(data);
    //     if (err) {
    //         console.log(err);
    //     }
    //     getTodos('https://jsonplaceholder.typicode.com/todos/2', (err, data) => {
    //         if (err) {
    //             console.log(err);
    //         }
    //         console.log(data);
    //         getTodos('https://jsonplaceholder.typicode.com/todos/3', (err, data) => {
    //             if (err) {
    //                 console.log(err);
    //             }
    //             console.log(data);
    //             getTodos('https://jsonplaceholder.typicode.com/todos/4', (err, data) => {
    //                 if (err) {
    //                     console.log(err);
    //                 }
    //                 console.log(data);
    //                 getTodos('https://jsonplaceholder.typicode.com/todosssss/5', (err, data) => {
    //                     if (err) {
    //                         console.log(err);
    //                     }
    //                     console.log(data);
    //                 });
    //             });
    //         });
    //     });
    // });

    // Example #8
    // Promises
    // const getTodos = (resource, callback) => {
    //     return new Promise((resolve, reject) => {
    //         const request = new XMLHttpRequest();

    //         request.addEventListener('readystatechange', () => {
    //             if (request.readyState === 4 && request.status === 200) {
    //                 const data = JSON.parse(request.responseText);
    //                 resolve(data);
    //             } else if (request.readyState === 4) {
    //                 reject('could not fetch the data');
    //             }
    //         });

    //         request.open("GET", resource);
    //         request.send();
    //     });
    // }

    // getTodos('https://jsonplaceholder.typicode.com/todos/1').then(data => {
    //     console.log(data);
    // });

    // Example #9
    // Chaining Promises
    // const getTodos = (resource, callback) => {
    //     return new Promise((resolve, reject) => {
    //         const request = new XMLHttpRequest();

    //         request.addEventListener('readystatechange', () => {
    //             if (request.readyState === 4 && request.status === 200) {
    //                 const data = JSON.parse(request.responseText);
    //                 resolve(data);
    //             } else if (request.readyState === 4) {
    //                 reject('could not fetch the data');
    //             }
    //         });

    //         request.open("GET", resource);
    //         request.send();
    //     });
    // }

    // getTodos('https://jsonplaceholder.typicode.com/todos/1')
    //     .then(data => {
    //         console.log(data);
    //         return getTodos('https://jsonplaceholder.typicode.com/todossss/2');
    //     }).then(data => {
    //         console.log(data);
    //         return getTodos('https://jsonplaceholder.typicode.com/todos/3');
    //     }).then(data => {
    //         console.log(data);
    //     }).catch(err => {
    //         console.log('promise rejected:', err)
    //     });

    // Example #10
    // async and await
    // error handling
    const getTodos = async () => {
        const response = await fetch('https://jsonplaceholder.typicode.com/todos/1');

        if (response.status !== 200) {
            throw new Error('cannot fetch data');
        }

        const data = await response.json();
        return data
    };

    getTodos()
        .then(data => console.log('resolved:', data))
        .catch(err => console.log('rejected:', err));
</script>

<body>

    <h1>Asynchronous Javascript</h1>

</body>

</html>