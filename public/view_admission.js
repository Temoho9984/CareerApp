document.addEventListener("DOMContentLoaded", function() {
    

    function fetchAdmissionData() {
        return new Promise((resolve) => {
            setTimeout(() => {
                const data = {
                    studentCount: 100,
                    courseCount: 30,
                    institutionCount: 5
                };
                resolve(data);
            }, 1000);
        });
    }

   function updateDashboard(data) {
        document.getElementById("studentCount").textContent = data.studentCount;
        document.getElementById("courseCount").textContent = data.courseCount;
        document.getElementById("institutionCount").textContent = data.institutionCount;
   }
   fetchAdmissionData().then(data => updateDashboard(data));
});