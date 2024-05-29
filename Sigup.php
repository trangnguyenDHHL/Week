<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>

        <form action="login.php" method="get">
        <div class="mb-3">
            <label for="" class="form-label">Username</label>
            <input
                type="text"
                class="form-control"
                name="name"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Password</label>
            <input
                type="password"
                class="form-control"
                name="password"
                id=""
                placeholder=""
            />
        </div>
        <div class="mb-3">
            <label for="" class="form-label">City of Employment</label>
            <input
                type="text"
                class="form-control"
                name="city"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Web server</label>
            <select
                class="form-select form-select-lg"
                name="server"
                id=""
            >
                <option selected>-- Choose a server --</option>
                <option value="Server 1">Server 1</option>
                <option value="Server 2">Server 2</option>
                <option value="Server 3">Server 3</option>
            </select>
        </div>
    <label class="" for="">Please specify your role: </label>
    <br>
    <div class="form-check form-check-inline">
        <input
            class="form-check-input"
            type="radio"
            name="role"
            id=""
            value="Admin"
        />
        <label class="form-check-label" for="">Admin</label>
    </div>
    <div class="form-check form-check-inline">
        <input
            class="form-check-input"
            type="radio"
            name="role"
            id=""
            value="Engineer"
        />
        <label class="form-check-label" for="">Engineer</label>
    </div>
    <div class="form-check form-check-inline">
        <input
            class="form-check-input"
            type="radio"
            name="role"
            id=""
            value="Manager"
        />
        <label class="form-check-label" for="">Manager</label>
        
    </div>
    <div class="form-check form-check-inline">
        <input
            class="form-check-input"
            type="radio"
            name="role"
            id=""
            value="Guest"
        />
        <label class="form-check-label" for="">Guest</label>
        
    </div>
    <br>

    <label class="" for="">Single Sign-on to the following: </label>
    <br>

    <div class="form-check form-check-inline">
  
            <input
                class="form-check-input"
                type="checkbox"
                id=""
                value="Mail"
                name="sso[]"
            />
            <label class="form-check-label" for="">Mail</label>
    </div>
    <div class="form-check form-check-inline">
            <input
                class="form-check-input"
                type="checkbox"
                id=""
                value="Payroll"
                name="sso[]"
            />
            <label class="form-check-label" for="">Payroll</label>
    </div>
    <div class="form-check form-check-inline">
            <input
                class="form-check-input"
                type="checkbox"
                id=""
                value="Seft-service"
                name="sso[]"
            />
            <label class="form-check-label" for="">Seft-service</label>
    </div>
    <br>

    <button
        type="submit"
        class="btn btn-primary"
    >
        Login
    </button>

    <button
        type="reset"
        class="btn btn-primary"
    >
        Reset
    </button>

        </form>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>