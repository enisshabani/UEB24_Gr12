const cars = [
    {
        name: "AUDI",
        make: "AUDI",
        model: "Class S",
        year: 2014,
        mileage: "104,556",
        version: "1.6 hdi",
        fuel: "Diesel",
        engine: "1900",
        horsepower: 200,
    },
    {
        name: "ACURA",
        make: "Acura",
        model: "Integra Type S",
        year: 2024,
        mileage: "0",
        version: "2.0 Turbo",
        fuel: "Petrol",
        engine: "1996",
        horsepower: 320,
    },
    {
        name: "BMW",
        make: "BMW",
        model: "2-Series Gran Coupe",
        year: 2024,
        mileage: "0", 
        version: "228i xDrive",
        fuel: "Petrol",
        engine: "1998",
        horsepower: 241,
    },
    {
        name: "FORD",
        make: "Ford",
        model: "Escape",
        year: 2024,
        mileage: "0", 
        version: "ST-Line",
        fuel: "Petrol",
        engine: "1999",
        horsepower: 250,
    },
    {
        name: "JAGUAR",
        make: "Jaguar",
        model: "XF",
        year: 2024,
        mileage: "0",
        version: "P250 R-Dynamic SE",
        fuel: "Petrol",
        engine: "1997",
        horsepower: 246,
    },
    {
        name: "MERCEDES",
        make: "Mercedes-Benz",
        model: "E-Class",
        year: 2024,
        mileage: "0", 
        version: "E 350 4MATIC",
        fuel: "Petrol",
        engine: "1999",
        horsepower: 255,
    },
    {
        name: "HONDA",
        make: "Honda",
        model: "Civic Hybrid",
        year: 2024,
        mileage: "0", 
        version: "EX-L Hybrid",
        fuel: "Hybrid (Petrol/Electric)",
        engine: "1993",
        horsepower: 204,
    },
];


function searchCar() {
    const carName = document.getElementById("car-name").value.trim().toUpperCase();
    const car = cars.find((c) => c.name === carName); 

    const specificationsContainer = document.getElementById("specifications-container");
    const carTable = document.getElementById("car-specifications");

    if (car) {
    
        specificationsContainer.style.display = "block";
        carTable.innerHTML = `
            <tr><td><span class="label">MAKE:</span></td><td>${car.make}</td></tr>
            <tr><td><span class="label">MODEL:</span></td><td>${car.model}</td></tr>
            <tr><td><span class="label">MADE YEAR:</span></td><td>${car.year}</td></tr>
            <tr><td><span class="label">MILEAGE:</span></td><td>${car.mileage}</td></tr>
            <tr><td><span class="label">VERSION:</span></td><td>${car.version}</td></tr>
            <tr><td><span class="label">FUEL:</span></td><td>${car.fuel}</td></tr>
            <tr><td><span class="label">ENGINE (CM3):</span></td><td>${car.engine}</td></tr>
            <tr><td><span class="label">HORSEPOWER (HP):</span></td><td>${car.horsepower}</td></tr>
        `;
    } else {
     
        specificationsContainer.style.display = "none";
        alert("Car not found. Please try again.");
    }
}