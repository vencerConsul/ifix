<!DOCTYPE html>
<html>
  <head>
    <title>Appointment Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>
  <body bgcolor="#e3e3e3">
    <table
      border="0"
      cellpadding="0"
      cellspacing="0"
      style="max-width: 602px; width: 100%; border: 1px solid #d5d5d5"
      align="center"
    >
      <tr>
        <td
          style="background-color: #262525; padding: 15px"
          align="center"
          valign="middle"
        >
          <h2 style="margin: 0; font-family: sans-serif; font-size: 30px; color: white;">
            Appointment Details
          </h2>
        </td>
      </tr>
      <tr>
        <td valign="top" align="middle">
          <table
            border="0"
            cellpadding="0"
            cellspacing="0"
            style="
              width: 100%;
              background-color: #ffffff;
              padding: 20px;
              text-align: center;
            "
          >
            <tr>
              <td
                style="display: inline-block; max-width: 270px; width: 100%"
                align="center"
              >
                <h2
                  style="
                    margin: 10px 0px;
                    font-family: sans-serif;
                    font-size: 20px;
                    color: #000000;
                  "
                >
                  {{$data['device_model']}}
                </h2>
                <p
                  style="
                    margin: 0;
                    font-size: 16px;
                    color: #444444;
                    margin-bottom: 1px;
                    text-transform: capitalize;
                  "
                >
                  {{$data['issue']}}
                </p>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td align="center" valign="top">
          <table
            border="0"
            cellpadding="0"
            cellspacing="0"
            style="
              width: 100%;
              background-color: #ffffff;
              padding: 0px 20px 40px;
            "
          >
            <tr>
              <td valign="middle">
                <div
                  style="
                    display: block;
                    width: 100%;
                    height: 1px;
                    background-color: #d5d5d5;
                  "
                ></div>
              </td>
            </tr>
            <tr>
              <td align="center" valign="middle">
                <p
                  style="
                    font-size: 15px;
                    font-family: sans-serif;
                    color: #000000;
                    margin: 10px 0px;
                  "
                >
                  {{$data['email']}}
                </p>
                <p
                  style="
                    font-size: 15px;
                    font-family: sans-serif;
                    color: #000000;
                    margin: 10px 0px;
                  "
                >
                  {{$data['phone']}}
                </p>
                <p
                  style="
                    font-size: 15px;
                    font-family: sans-serif;
                    color: #000000;
                    margin: 10px 0px;
                  "
                >
                  {{$data['address']}}
                </p>
              </td>
            </tr>
            <tr>
              <td align="center" valign="middle">
                <p
                  href=""
                  style="
                    display: inline-block;
                    font-size: 14px;
                    color: #ffffff;
                    background-color: #e83f3a;
                    padding: 4px 10px;
                    text-decoration: none;
                    border-radius: 4px;
                    margin: 0px 1px 6px 1px;
                    font-family: sans-serif;
                  "
                >
                  {{$data['device_type']}}
                </p>
                <a
                  href=""
                  style="
                    display: inline-block;
                    font-size: 14px;
                    color: #ffffff;
                    background-color: #e83f3a;
                    padding: 4px 10px;
                    text-decoration: none;
                    border-radius: 4px;
                    margin: 0px 1px 6px 1px;
                    font-family: sans-serif;
                  "
                >
                  {{$data['device_model']}}
                </a>
              </td>
            </tr>
            <tr>
              <td valign="middle" align="center">
                <p
                  style="
                    font-size: 14px;
                    color: #444444;
                    font-family: sans-serif;
                    margin: 10px 0px 15px;
                  "
                >
                  {{$data['problem']}}
                </p>
                <h3
                  style="
                    font-size: 15px;
                    font-family: sans-serif;
                    color: #000000;
                    margin: 0px;
                    text-transform: capitalize;
                  "
                >
                  {{$data['firstname'] . ' ' . $data['lastname']}}
                </h3>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </body>
</html>
