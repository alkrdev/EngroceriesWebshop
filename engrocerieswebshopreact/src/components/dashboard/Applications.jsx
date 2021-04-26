import React from "react";

const Applications = () => {
    return (
        <section>
            <div className="dashboard-container">
                <h1> Ansøgninger </h1>
            </div>
            <div>
                <table>
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Navn</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefon</th>
                        <th scope="col">CVR</th>
                        <th scope="col">Godkend Ansøgning</th>
                        <th scope="col">Afslå Ansøgning</th>
                    </tr>
                    </thead>
                    <tbody>                       
                        <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <form method="post" action="">
                                    <button type="submit" name="applicant_id" value="">Godkend</button>
                                </form>
                            </td>
                            <td>
                                <form method="post" action="">
                                    <button type="submit" name="applicant_id" value="">Afslå</button>
                                </form>
                            </td>
                        </tr>   
                        <th>Ingen Ansøgninger</th>
                    </tbody>
                </table>
            </div>
        </section>
    );         
}

export default Applications;
