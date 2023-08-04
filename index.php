<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asynchronous Requests</title>
    <link rel="stylesheet" href="./styles/main-page-style.css" />
    <script src="./src/validation.js"></script>
    <script defer src="./src/components/graphCanvas.js"></script>
</head>
<body>
    <header>
        <section class="personal-info">
            Author: Lianguzov Dmitry
            <br />
            Group: P3132
            <br />
            Variant: 368459
        </section>
        <section class="laboratory-info">
            <h1>
                Laboratory Work №1
            </h1>
            <h2>
                Asynchronous Requests
            </h2>
        </section>
    </header>
    <main>
        <!--
            Params and map section
        -->
        <section>
            <form method="get"  onsubmit="validateForm(event)">
                <div class="params-and-map-block">
                    <label for="x" class="param-label">
                        Select X value
                    </label>
                    <select name="x" id="x" class="choose-param-elem">
                        <option value="-5">-5</option>
                        <option value="-4">-4</option>
                        <option value="-3">-3</option>
                        <option value="-2">-2</option>
                        <option value="-1">-1</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <div class="params-and-map-block">
                    <label for="y" class="param-label">
                        Type Y value
                    </label>
                    <input type="text" name="y" id="y" class="choose-param-elem" />
                </div>
                <div class="params-and-map-block">
                    <label for="R" class="param-label">
                        Choose R value
                    </label>
                    <button name="R" class="choose-param-elem" value="1">1</button>
                    <button name="R" class="choose-param-elem" value="2">2</button>
                    <button name="R" class="choose-param-elem" value="3">3</button>
                    <button name="R" class="choose-param-elem" value="4">4</button>
                    <button name="R" class="choose-param-elem" value="5">5</button>
                    
                </div>

                <div class="params-and-map-block">
                    <canvas id="graph" width="300" height="300">
                        <label for="map-img">
                            Canvas is not supported in your browser!
                        </label>
                        <img src="./static/areas.png" id="map-img" width="300" height="300" />
                    </canvas>
                </div>
            </form>
        </section>

        <!--
            Table Section
        -->

        <section>
            <table id="results-table">
                <thead>
                    <th>X value</th>
                    <th>Y value</th>
                    <th>R value</th>
                    <th><span style="color: green;">HIT</span> or <span style="color: brown;">MISS</span></th>
                    <th>Current time</th>
                    <th>Execution time</th>
                </thead>
            </table>
        </section>
    </main>
    
    <footer>

    </footer>
</body>
</html>