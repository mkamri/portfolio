<div class="input--dropdown-container">
    <div class="input--dropdown">
    <label>Fantasy Creature</label>
    <select>
        <option>
        Select...
        </option>
        <option>
        Dragon
        </option>
        <option>
        Centaur
        </option>
        <option>
        Godzilla
        </option>
        <option>
        Cyclops
        </option>
    </select>
    </div>

</div>

<style>
    .input--dropdown-container {
        background-color: #ffffff;
        padding: 20px;
        color: #000000;
    }

    .input--dropdown {
        position: relative;
    }

    .input--dropdown label {
        position: absolute;
        top: -7px;
        left: 12px;
        z-index: 2;
        background-color: #ffffff;
        padding: 0 2px;
        font-size: 14px;
        font-family: sans-serif;
    }

    .input--dropdown select {
        background: url(data:image/svg+xml;base64,PHN2ZyBpZD0iTGF5ZXJfMSIgZGF0YS1uYW1lPSJMYXllciAxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA0Ljk1IDEwIj48ZGVmcz48c3R5bGU+LmNscy0xe2ZpbGw6I2ZmZjt9LmNscy0ye2ZpbGw6IzQ0NDt9PC9zdHlsZT48L2RlZnM+PHRpdGxlPmFycm93czwvdGl0bGU+PHJlY3QgY2xhc3M9ImNscy0xIiB3aWR0aD0iNC45NSIgaGVpZ2h0PSIxMCIvPjxwb2x5Z29uIGNsYXNzPSJjbHMtMiIgcG9pbnRzPSIxLjQxIDQuNjcgMi40OCAzLjE4IDMuNTQgNC42NyAxLjQxIDQuNjciLz48cG9seWdvbiBjbGFzcz0iY2xzLTIiIHBvaW50cz0iMy41NCA1LjMzIDIuNDggNi44MiAxLjQxIDUuMzMgMy41NCA1LjMzIi8+PC9zdmc+) 
            no-repeat right 1px center;
            -moz-appearance: none; 
            -webkit-appearance: none; 
            appearance: none;
        z-index: 1;
        top: 7px;
        padding: 14px 20px 14px 12px;
        background-color: #ffffff;
        border: 1px solid #A9A9A9;
        border-radius: 5px;
        font-size: 16px;
        min-width: 300px;
        }
        .input--dropdown select:focus {
        outline: 3px solid #A9A9A9;
    }
</style>