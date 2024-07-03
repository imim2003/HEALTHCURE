pragma solidity ^0.5.0;

contract prescriptionscontract {
    struct Prescription {
       uint256 date;
        uint256 time;
        uint256 duration;
        string hospitalPharmacyName;
        string medicines;
        string prescription;
        
    }

    Prescription[] public prescriptions;

    function addPrescription(
         uint256 _date,
        uint256 _time,
        uint256 _duration,
        string memory _hospitalPharmacyName,
        string memory _medicines,
        string memory _prescription
       
    ) public {
        prescriptions.push(Prescription({
            date: _date,
            time: _time,
            duration: _duration,
            hospitalPharmacyName: _hospitalPharmacyName,
            medicines: _medicines,
            prescription: _prescription

           
        }));
    }
}
