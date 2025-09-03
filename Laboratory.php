<!DOCTYPE html>
<html>
<head>
    <title>Laboratory Details</title>
    <style>
        body {
            font-family: 'Times New Roman', serif;
            background-color: #192a56;
            color: #fff;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #73C6B6; /* Light bluish text color */
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #73C6B6; /* Light bluish border color */
            text-align: left;
            vertical-align: top; /* Align content to the top */
        }
        th {
            background-color: #0a3d62; /* Dark bluish header background color */
            color: #fff;
        }
        .reserve-button {
            background-color: #0a3d62; /* Dark bluish button color */
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 8px 12px;
            cursor: pointer;
        }
        .reserve-button:hover {
            background-color: #0e4a75; /* Dark bluish button color on hover */
        }
    </style>
</head>
<body>
    <h1>Laboratory Details</h1>
    <table>
        <tr>
            <th>Lab Name</th>
            <th>Lab ID</th>
            <th>Department</th>
            <th>Equipments</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        <tr>
            <td rowspan="13">Electrical Engineering Lab</td>
            <td rowspan="13">EE001</td>
            <td rowspan="13">Electrical Engineering</td>
            <td>
                <ul>
                    <li>Oscilloscope</li>
                </ul>
            </td>
            <td>
                <ul>
                    <li>An oscilloscope is a laboratory instrument commonly used to display and analyze the waveform of electronic signals.</li>
                </ul>
            </td>
            <td>
                <button class="reserve-button">Reserve</button>
            </td>
        </tr>
        <tr>
            <td>
                <ul>
                    <li>Function Generator</li>
                </ul>
            </td>
            <td>
                <ul>
                    <li>A function generator is a testing device that produces various types of electrical waveforms over a wide range of frequencies and amplitudes.</li>
                </ul>
            </td>
            <td>
                <button class="reserve-button">Reserve</button>
            </td>
        </tr>
        <tr>
            <td>
                <ul>
                    <li>Multimeter</li>
                </ul>
            </td>
            <td>
                <ul>
                    <li>A multimeter is an electronic measuring instrument that combines several measurement functions in one unit. It typically measures voltage, current, and resistance.</li>
                </ul>
            </td>
            <td>
                <button class="reserve-button">Reserve</button>
            </td>
        </tr>
        <tr>
            <td>
                <ul>
                    <li>Power Supply</li>
                </ul>
            </td>
            <td>
                <ul>
                    <li>A power supply is an electrical device that supplies electric power to an electrical load. It converts electrical power from a source to the correct voltage, current, and frequency.</li>
                </ul>
            </td>
            <td>
                <button class="reserve-button">Reserve</button>
            </td>
        </tr>
        <tr>
            <td>
                <ul>
                    <li>Signal Generator</li>
                </ul>
            </td>
            <td>
                <ul>
                    <li>A signal generator is a device that creates electronic signals, repeating or non-repeating, in the digital or analog domains, depending on need.</li>
                </ul>
            </td>
            <td>
                <button class="reserve-button">Reserve</button>
            </td>
        </tr>
        <tr>
            <td>
                <ul>
                    <li>Logic Analyzer</li>
                </ul>
            </td>
            <td>
                <ul>
                    <li>A logic analyzer is an electronic instrument that captures and displays multiple signals from a digital system or digital circuit.</li>
                </ul>
            </td>
            <td>
                <button class="reserve-button">Reserve</button>
            </td>
        </tr>
        <tr>
            <td>
                <ul>
                    <li>Spectrum Analyzer</li>
                </ul>
            </td>
            <td>
                <ul>
                    <li>A spectrum analyzer measures the magnitude of an input signal versus frequency within the full frequency range of the instrument.</li>
                </ul>
            </td>
            <td>
                <button class="reserve-button">Reserve</button>
            </td>
        </tr>
        <tr>
            <td>
                <ul>
                    <li>Electrical Testing Kits</li>
                </ul>
            </td>
            <td>
                <ul>
                    <li>Electrical testing kits contain a variety of tools and instruments used for testing and diagnosing electrical circuits and systems.</li>
                </ul>
            </td>
            <td>
                <button class="reserve-button">Reserve</button>
            </td>
        </tr>
        <tr>
            <td>
                <ul>
                    <li>Transformer</li>
                </ul>
            </td>
            <td>
                <ul>
                    <li>A transformer is a static electrical device that transfers electrical energy between two or more circuits through electromagnetic induction.</li>
                </ul>
            </td>
            <td>
                <button class="reserve-button">Reserve</button>
            </td>
        </tr>
        <tr>
            <td>
                <ul>
                    <li>Relay</li>
                </ul>
            </td>
            <td>
                <ul>
                    <li>A relay is an electrically operated switch. It consists of a set of input terminals for a single or multiple control signals, and a set of operating contact terminals.</li>
                </ul>
            </td>
            <td>
                <button class="reserve-button">Reserve</button>
            </td>
        </tr>
        <tr>
            <td>
                <ul>
                    <li>Induction Motor</li>
                </ul>
            </td>
            <td>
                <ul>
                    <li>An induction motor is an AC electric motor in which the electric current in the rotor needed to produce torque is obtained by electromagnetic induction from the magnetic field of the stator winding.</li>
                </ul>
            </td>
            <td>
                <button class="reserve-button">Reserve</button>
            </td>
        </tr>
        <tr>
            <td>
                <ul>
                    <li>DC Motor</li>
                </ul>
            </td>
            <td>
                <ul>
                    <li>A DC motor is any class of rotary electrical motors that converts direct current electrical energy into mechanical energy.</li>
                </ul>
            </td>
            <td>
                <button class="reserve-button">Reserve</button>
            </td>
			</tr>
		
        <!-- Add more rows for other labs and departments -->
    </table>
</body>
</html>
