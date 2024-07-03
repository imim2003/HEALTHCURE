pragma solidity ^0.5.0;

contract PrescriptionContract {
    struct Prescription {
        string patientID;
        string patientName;
        string healthcareProvider;
        string profession;
        
    }

    Prescription[] public prescriptions;

    function addPrescription(
        string memory _patientID,
        string memory _patientName,
        string memory _healthcareProvider,
        string memory _profession
       
    ) public {
        prescriptions.push(Prescription({
            patientID: _patientID,
            patientName: _patientName,
            healthcareProvider: _healthcareProvider,
            profession: _profession
           
        }));
    }
}
