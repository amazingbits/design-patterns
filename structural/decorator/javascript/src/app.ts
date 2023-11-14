import Notifier from "./classes/Notifier";
import FacebookDecorator from "./classes/FacebookDecorator";
import SMSDecorator from "./classes/SMSDecorator";
import EmailDecorator from "./classes/EmailDecorator";
import WhatsappDecorator from "./classes/WhatsappDecorator";

// send message by facebook and SMS
new SMSDecorator(new FacebookDecorator(new Notifier()));
console.log("");
// send message by whatsapp, facebook and SMS
new WhatsappDecorator(new FacebookDecorator(new SMSDecorator(new Notifier())));
console.log("");
// send message by e-mail, facebook and SMS
new EmailDecorator(new FacebookDecorator(new SMSDecorator(new Notifier())));
