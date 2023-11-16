import Payment from "./events/payment.js";
import PaymentSubject from "./subjects/paymentSubject.js";
import Shipment from "./observers/shipment.js";
import Marketing from "./observers/marketing.js";

// Initialize the subject
const subject = new PaymentSubject();

// Initialize the observers
const shipment = new Shipment();
const marketing = new Marketing();

// Subscribe to the subject
subject.subscribe(shipment);
subject.subscribe(marketing);

// Notify the subject
const payment = new Payment(subject);
const data = { username: "Guilherme Andrade", id: "123" };
payment.creditCard(data);

// Unsubscribe from the subject
subject.unsubscribe(shipment);

// Notify the subject
payment.creditCard(data);
