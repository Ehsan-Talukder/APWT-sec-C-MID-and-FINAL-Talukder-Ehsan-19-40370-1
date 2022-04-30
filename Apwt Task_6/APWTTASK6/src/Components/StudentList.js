import React, { useState } from 'react';
import NavBar from './NavBar';

import StudentCard from './StudentCard';
import StudentData from './StudentData';

const StudentList = () => {
    const [students, setStudents] = useState(StudentData);
    console.log(setStudents);
    return (
        <div className="container" style={{ padding: "10px", background:"#BB8FED"}}>
            <NavBar />
            <h1>Delivery list</h1>
            <div className="row">
            {
                    students.map(students => <StudentCard studentDetails={students}></StudentCard>)
                }
            </div>
               
              
               
            

        </div>
    );
};

export default StudentList;