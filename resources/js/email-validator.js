import { validate } from 'deep-email-validator';


const email = process.argv[2];

async function isEmailValid(email) {
    let {valid, reason, validators} = await validate({
        email: email,
        sender: 'manojmilani123@gmail.com',
        validateRegex: true,
        validateMx: true,
        validateTypo: false,
        validateDisposable: true,
        validateSMTP: true,
      })
    //console.log(result);
    // console.log(valid);

    if (valid)
        console.log(email + " : is Valid");
    else
        console.log(email+ " : " + validators[reason].reason);
  }

isEmailValid(email);
