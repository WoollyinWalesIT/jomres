
<
?
p
h
p

/
*
*

 
*
 
C
o
r
e
 
f
i
l
e
.

 
*

 
*
 
@
a
u
t
h
o
r
 
V
i
n
c
e
 
W
o
o
l
l
 
<
s
a
l
e
s
@
j
o
m
r
e
s
.
n
e
t
>

 
*

 
*
 
@
v
e
r
s
i
o
n
 
J
o
m
r
e
s
 
9
.
1
0
.
0
-
c
h
a
r
l
i
e

 
*

 
*
 
@
c
o
p
y
r
i
g
h
t
	
2
0
0
5
-
2
0
1
8
 
V
i
n
c
e
 
W
o
o
l
l

 
*
 
J
o
m
r
e
s
 
(
t
m
)
 
P
H
P
,
 
C
S
S
 
&
 
J
a
v
a
s
c
r
i
p
t
 
f
i
l
e
s
 
a
r
e
 
r
e
l
e
a
s
e
d
 
u
n
d
e
r
 
b
o
t
h
 
M
I
T
 
a
n
d
 
G
P
L
2
 
l
i
c
e
n
s
e
s
.
 
T
h
i
s
 
m
e
a
n
s
 
t
h
a
t
 
y
o
u
 
c
a
n
 
c
h
o
o
s
e
 
t
h
e
 
l
i
c
e
n
s
e
 
t
h
a
t
 
b
e
s
t
 
s
u
i
t
s
 
y
o
u
r
 
p
r
o
j
e
c
t
,
 
a
n
d
 
u
s
e
 
i
t
 
a
c
c
o
r
d
i
n
g
l
y

 
*
*
/


/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#

d
e
f
i
n
e
d
(
'
_
J
O
M
R
E
S
_
I
N
I
T
C
H
E
C
K
'
)
 
o
r
 
d
i
e
(
'
'
)
;

/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#


/
*
*

 
*
 
T
h
i
s
 
f
i
l
e
 
i
s
 
t
h
e
 
m
a
i
n
 
c
o
d
e
 
b
l
o
c
k
 
t
h
a
t
 
m
a
n
a
g
e
s
 
t
h
e
 
b
o
o
k
i
n
g
 
e
n
g
i
n
e
.

 
#

 
*

 
#

 
*
 
I
t
 
i
s
 
n
o
t
 
d
e
s
i
g
n
e
d
 
t
o
 
b
e
 
i
m
p
l
e
m
e
n
t
e
d
 
o
r
 
c
a
l
l
e
d
 
d
i
r
e
c
t
l
y
.
 
I
n
s
t
e
a
d
 
i
t
 
i
s
 
c
a
l
l
e
d
 
b
y
 
t
h
e
 
j
0
5
0
0
0
b
o
o
k
i
n
g
o
b
j
e
c
t
.
c
l
a
s
s
.
p
h
p
 
f
i
l
e
 
w
h
i
c
h
 
i
n
h
e
r
i
t
s
 
f
r
o
m
 
t
h
i
s
 
f
i
l
e
.

 
*
/

c
l
a
s
s
 
d
o
b
o
o
k
i
n
g

{

	
/
*
*

	
 
*
 
C
o
n
s
t
r
u
c
t
o
r
 
f
o
r
 
t
h
e
 
j
o
m
r
e
s
_
b
o
o
k
i
n
g
 
o
b
j
e
c
t
,
 
s
e
t
s
 
a
 
b
u
n
c
h
 
o
f
 
v
a
r
i
a
b
l
e
s
,
 
f
i
n
d
s
 
c
o
n
f
i
g
u
r
a
t
i
o
n
 
s
e
t
t
i
n
g
s
 
&
 
g
e
t
s
 
t
h
e
 
c
u
r
r
e
n
t
 
s
t
a
t
e
 
o
f
 
t
h
e
 
b
o
o
k
i
n
g
 
f
r
o
m
 
t
h
e
 
t
m
p
b
o
o
k
i
n
g
 
t
a
b
l
e
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
_
_
c
o
n
s
t
r
u
c
t
(
)

	
{

	
	
$
s
i
t
e
C
o
n
f
i
g
 
=
 
j
o
m
r
e
s
_
g
e
t
S
i
n
g
l
e
t
o
n
(
'
j
o
m
r
e
s
_
c
o
n
f
i
g
_
s
i
t
e
_
s
i
n
g
l
e
t
o
n
'
)
;

	
	
$
j
r
C
o
n
f
i
g
 
=
 
$
s
i
t
e
C
o
n
f
i
g
-
>
g
e
t
(
)
;


	
	
$
t
h
i
s
-
>
j
r
C
o
n
f
i
g
 
=
 
$
j
r
C
o
n
f
i
g
;
 
/
/
 
I
m
p
o
r
t
i
n
g
 
t
h
e
 
s
i
t
e
 
c
o
n
f
i
g
 
s
e
t
t
i
n
g
s


	
	
$
t
h
i
s
-
>
s
u
p
p
r
e
s
s
_
o
u
t
p
u
t
 
=
 
t
r
u
e
;

	
	
i
f
 
(
g
e
t
_
s
h
o
w
t
i
m
e
(
'
t
a
s
k
'
)
 
=
=
 
'
h
a
n
d
l
e
r
e
q
'
 
|
|
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
t
a
s
k
'
)
 
=
=
 
'
d
o
b
o
o
k
i
n
g
'
)
 
{

	
	
	
$
t
h
i
s
-
>
s
u
p
p
r
e
s
s
_
o
u
t
p
u
t
 
=
 
f
a
l
s
e
;

	
	
}


	
	
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
 
=
 
a
r
r
a
y
(
)
;

	
	
$
t
h
i
s
-
>
r
a
t
e
_
p
e
r
n
i
g
h
t
 
=
 
0
.
0
0
;

	
	
$
t
h
i
s
-
>
r
a
t
e
_
p
e
r
n
i
g
h
t
_
n
o
d
i
s
c
o
u
n
t
 
=
 
0
.
0
0
;

	
	
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
_
n
o
d
i
s
c
o
u
n
t
 
=
 
0
.
0
0
;

	
	
$
t
h
i
s
-
>
d
i
s
c
o
u
n
t
s
 
=
 
a
r
r
a
y
(
)
;

	
	
$
t
h
i
s
-
>
t
o
t
a
l
_
i
n
_
p
a
r
t
y
 
=
 
0
;

	
	
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
t
y
p
e
s
 
=
 
a
r
r
a
y
(
)
;

	
	
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
u
i
d
s
 
=
 
a
r
r
a
y
(
)
;

	
	
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
q
t
y
 
=
 
a
r
r
a
y
(
)
;

	
	
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
v
a
l
s
 
=
 
a
r
r
a
y
(
)
;

	
	
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
v
a
l
s
_
n
o
d
i
s
c
o
u
n
t
 
=
 
a
r
r
a
y
(
)
;

	
	
/
/
$
t
h
i
s
-
>
c
o
u
p
o
n
_
i
d
	
	
	
	
=
 
"
"
;

	
	
/
/
$
t
h
i
s
-
>
c
o
u
p
o
n
	
	
	
	
	
=
 
"
"
;

	
	
$
t
h
i
s
-
>
l
a
s
t
m
i
n
u
t
e
_
i
d
 
=
 
'
'
;

	
	
$
t
h
i
s
-
>
a
r
r
i
v
a
l
D
a
t
e
 
=
 
'
'
;

	
	
$
t
h
i
s
-
>
d
e
p
a
r
t
u
r
e
D
a
t
e
 
=
 
'
'
;

	
	
$
t
h
i
s
-
>
s
t
a
y
D
a
y
s
 
=
 
1
;

	
	
$
t
h
i
s
-
>
d
a
t
e
R
a
n
g
e
S
t
r
i
n
g
 
=
 
'
'
;

	
	
$
t
h
i
s
-
>
g
u
e
s
t
s
_
u
i
d
 
=
 
'
'
;

	
	
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
'
'
;

	
	
$
t
h
i
s
-
>
r
a
t
e
s
_
u
i
d
 
=
 
'
'
;

	
	
$
t
h
i
s
-
>
t
a
g
 
=
 
'
'
;

	
	
$
t
h
i
s
-
>
r
e
s
o
u
r
c
e
 
=
 
'
'
;

	
	
$
t
h
i
s
-
>
r
a
t
e
_
r
u
l
e
s
 
=
 
0
.
0
0
;

	
	
$
t
h
i
s
-
>
s
i
n
g
l
e
_
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
 
=
 
0
.
0
0
;

	
	
$
t
h
i
s
-
>
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
 
=
 
0
.
0
0
;

	
	
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
_
t
o
t
a
l
 
=
 
0
.
0
0
;


	
	
$
t
h
i
s
-
>
e
x
t
r
a
s
v
a
l
u
e
 
=
 
0
.
0
0
;

	
	
$
t
h
i
s
-
>
t
a
x
 
=
 
0
.
0
0
;

	
	
$
t
h
i
s
-
>
e
x
t
r
a
s
 
=
 
'
'
;

	
	
$
t
h
i
s
-
>
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
 
=
 
a
r
r
a
y
(
)
;

	
	
$
t
h
i
s
-
>
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
_
p
r
i
v
a
t
e
_
d
a
t
a
 
=
 
a
r
r
a
y
(
)
;

	
	
$
t
h
i
s
-
>
t
o
t
a
l
_
d
i
s
c
o
u
n
t
 
=
 
0
.
0
0
;

	
	
$
t
h
i
s
-
>
d
e
p
o
s
i
t
p
a
i
d
s
u
c
c
e
s
s
f
u
l
l
y
 
=
 
f
a
l
s
e
;

	
	
$
t
h
i
s
-
>
b
o
o
k
e
r
_
c
l
a
s
s
 
=
 
'
0
0
0
'
;

	
	
$
t
h
i
s
-
>
o
k
_
t
o
_
b
o
o
k
 
=
 
f
a
l
s
e
;

	
	
$
t
h
i
s
-
>
r
e
f
e
r
r
e
r
 
=
 
'
'
;

	
	
$
t
h
i
s
-
>
e
r
r
o
r
_
l
o
g
 
=
 
'
'
;

	
	
$
t
h
i
s
-
>
t
o
t
a
l
_
i
n
_
p
a
r
t
y
 
=
 
0
;

	
	
$
t
h
i
s
-
>
m
i
n
i
n
t
e
r
v
a
l
 
=
 
1
;

	
	
$
t
h
i
s
-
>
u
n
i
x
A
r
r
i
v
a
l
D
a
t
e
 
=
 
n
u
l
l
;

	
	
$
t
h
i
s
-
>
u
n
i
x
D
e
p
a
r
t
u
r
e
D
a
t
e
 
=
 
n
u
l
l
;

	
	
$
t
h
i
s
-
>
b
e
d
s
_
a
v
a
i
l
a
b
l
e
 
=
 
0
;

	
	
$
t
h
i
s
-
>
m
o
n
i
t
o
r
i
n
g
M
e
s
s
a
g
e
s
 
=
 
a
r
r
a
y
(
)
;

	
	
$
t
h
i
s
-
>
r
o
o
m
_
f
e
a
t
u
r
e
_
f
i
l
t
e
r
 
=
 
a
r
r
a
y
(
)
;

	
	
$
t
h
i
s
-
>
v
t
 
=
 
'
'
;

	
	
$
t
h
i
s
-
>
v
u
 
=
 
'
'
;

	
	
$
t
h
i
s
-
>
v
q
 
=
 
'
'
;

	
	
$
t
h
i
s
-
>
v
v
 
=
 
'
'
;

	
	
$
t
h
i
s
-
>
r
r
 
=
 
'
'
;


	
	
$
t
h
i
s
-
>
e
x
i
s
t
i
n
g
_
i
d
 
=
 
'
'
;

	
	
$
t
h
i
s
-
>
m
o
s
_
u
s
e
r
i
d
 
=
 
0
;

	
	
$
t
h
i
s
-
>
f
i
r
s
t
n
a
m
e
 
=
 
'
'
;

	
	
$
t
h
i
s
-
>
s
u
r
n
a
m
e
 
=
 
'
'
;

	
	
$
t
h
i
s
-
>
h
o
u
s
e
 
=
 
'
'
;

	
	
$
t
h
i
s
-
>
s
t
r
e
e
t
 
=
 
'
'
;

	
	
$
t
h
i
s
-
>
t
o
w
n
 
=
 
'
'
;

	
	
$
t
h
i
s
-
>
r
e
g
i
o
n
 
=
 
'
'
;

	
	
$
t
h
i
s
-
>
p
o
s
t
c
o
d
e
 
=
 
'
'
;

	
	
$
t
h
i
s
-
>
t
e
l
_
l
a
n
d
l
i
n
e
 
=
 
'
'
;

	
	
$
t
h
i
s
-
>
t
e
l
_
m
o
b
i
l
e
 
=
 
'
'
;

	
	
$
t
h
i
s
-
>
e
m
a
i
l
 
=
 
'
'
;

	
	
$
t
h
i
s
-
>
g
u
e
s
t
_
s
p
e
c
i
f
i
c
_
d
i
s
c
o
u
n
t
 
=
 
0
;

	
	
$
t
h
i
s
-
>
a
d
d
i
t
i
o
n
a
l
_
l
i
n
e
_
i
t
e
m
s
 
=
 
a
r
r
a
y
(
)
;


	
	
/
/
$
t
h
i
s
-
>
t
o
d
a
y
	
	
	
	
	
=
 
d
a
t
e
(
"
Y
/
m
/
d
"
)
;

	
	
/
/
 
S
h
o
u
l
d
 
b
e
 
b
e
t
t
e
r
 
a
t
 
d
e
t
e
c
t
i
n
g
 
t
o
d
a
y
'
s
 
d
a
t
e
 
s
u
b
j
e
c
t
 
D
S
T

	
	
$
t
h
i
s
-
>
t
o
d
a
y
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
d
a
t
e
(
'
m
'
)
,
 
d
a
t
e
(
'
d
'
)
,
 
d
a
t
e
(
'
Y
'
)
)
)
;


	
	
$
t
h
i
s
-
>
e
r
r
o
r
 
=
 
'
'
;

	
	
$
t
h
i
s
-
>
e
r
r
o
r
_
c
o
d
e
 
=
 
'
'
;

	
	
$
t
h
i
s
-
>
b
i
l
l
i
n
g
_
r
o
o
m
t
o
t
a
l
 
=
 
0
.
0
0
;

	
	
/
/
$
t
h
i
s
-
>
c
u
s
t
o
m
T
e
x
t
A
r
r
a
y
	
	
	
=
 
a
r
r
a
y
(
)
;

	
	
$
t
h
i
s
-
>
r
e
s
e
t
P
r
i
c
i
n
g
O
u
t
p
u
t
 
=
 
f
a
l
s
e
;

	
	
$
t
h
i
s
-
>
r
o
o
m
I
m
a
g
e
H
T
M
L
 
=
 
'
'
;

	
	
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
R
o
o
m
s
 
=
 
a
r
r
a
y
(
)
;

	
	
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
R
o
o
m
U
i
d
s
 
=
 
a
r
r
a
y
(
)
;

	
	
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
T
a
r
i
f
f
s
 
=
 
a
r
r
a
y
(
)
;

	
	
$
t
h
i
s
-
>
a
l
l
F
e
a
t
u
r
e
D
e
t
a
i
l
s
 
=
 
a
r
r
a
y
(
)
;

	
	
$
t
h
i
s
-
>
a
l
l
F
e
a
t
u
r
e
I
d
s
 
=
 
a
r
r
a
y
(
)
;

	
	
$
t
h
i
s
-
>
a
l
l
R
o
o
m
C
l
a
s
s
e
s
 
=
 
a
r
r
a
y
(
)
;

	
	
$
t
h
i
s
-
>
a
l
l
R
o
o
m
C
l
a
s
s
I
d
s
 
=
 
a
r
r
a
y
(
)
;

	
	
$
t
h
i
s
-
>
a
l
l
B
o
o
k
i
n
g
s
 
=
 
a
r
r
a
y
(
)
;

	
	
$
t
h
i
s
-
>
r
e
b
u
i
l
d
I
g
n
o
r
e
L
i
s
t
 
=
 
a
r
r
a
y
(
)
;

	
	
$
t
h
i
s
-
>
c
u
r
r
e
n
t
F
i
e
l
d
 
=
 
'
'
;

	
	
$
t
h
i
s
-
>
s
i
n
g
l
e
P
e
r
s
o
n
S
u
p
p
l
i
m
e
n
t
C
a
l
c
u
l
a
t
e
d
 
=
 
f
a
l
s
e
;

	
	
$
t
h
i
s
-
>
e
m
a
i
l
_
a
d
d
r
e
s
s
_
c
a
n
_
b
e
_
u
s
e
d
 
=
 
t
r
u
e
;


	
	
$
b
o
o
k
i
n
g
D
e
e
t
s
 
=
 
$
t
h
i
s
-
>
g
e
t
T
m
p
B
o
o
k
i
n
g
D
a
t
a
(
)
;


	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
Q
u
e
r
i
e
d
 
s
e
s
s
i
o
n
 
d
a
t
a
 
f
o
r
 
e
x
i
s
t
i
n
g
 
b
o
o
k
i
n
g
'
)
;

	
	
i
f
 
(
!
e
m
p
t
y
(
$
b
o
o
k
i
n
g
D
e
e
t
s
)
)
 
{

	
	
	
i
f
 
(
!
i
s
s
e
t
(
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
e
m
a
i
l
_
a
d
d
r
e
s
s
_
c
a
n
_
b
e
_
u
s
e
d
'
 
]
)
)
 
{

	
	
	
	
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
e
m
a
i
l
_
a
d
d
r
e
s
s
_
c
a
n
_
b
e
_
u
s
e
d
'
 
]
 
=
 
t
r
u
e
;

	
	
	
}

	
	
	
$
t
h
i
s
-
>
e
m
a
i
l
_
a
d
d
r
e
s
s
_
c
a
n
_
b
e
_
u
s
e
d
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
e
m
a
i
l
_
a
d
d
r
e
s
s
_
c
a
n
_
b
e
_
u
s
e
d
'
 
]
;

	
	
	
$
t
h
i
s
-
>
r
r
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
r
e
q
u
e
s
t
e
d
R
o
o
m
'
 
]
;

	
	
	
$
t
h
i
s
-
>
r
a
t
e
_
p
e
r
n
i
g
h
t
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
r
a
t
e
_
p
e
r
n
i
g
h
t
'
 
]
;

	
	
	
$
t
h
i
s
-
>
v
t
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
v
a
r
i
a
n
c
e
t
y
p
e
s
'
 
]
;

	
	
	
$
t
h
i
s
-
>
v
u
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
v
a
r
i
a
n
c
e
u
i
d
s
'
 
]
;

	
	
	
$
t
h
i
s
-
>
v
q
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
v
a
r
i
a
n
c
e
q
t
y
'
 
]
;

	
	
	
$
t
h
i
s
-
>
v
v
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
v
a
r
i
a
n
c
e
v
a
l
s
'
 
]
;

	
	
	
$
t
h
i
s
-
>
v
v
_
n
o
d
i
s
c
o
u
n
t
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
v
a
r
i
a
n
c
e
v
a
l
s
_
n
o
d
i
s
c
o
u
n
t
'
 
]
;

	
	
	
/
/
$
t
h
i
s
-
>
c
o
u
p
o
n
_
i
d
	
	
	
	
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
'
c
o
u
p
o
n
_
i
d
'
]
;

	
	
	
/
/
$
t
h
i
s
-
>
c
o
u
p
o
n
	
	
	
	
	
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
'
c
o
u
p
o
n
'
]
;

	
	
	
$
t
h
i
s
-
>
l
a
s
t
m
i
n
u
t
e
_
i
d
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
l
a
s
t
m
i
n
u
t
e
_
i
d
'
 
]
;

	
	
	
i
f
 
(
!
i
s
s
e
t
(
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
a
r
r
i
v
a
l
D
a
t
e
'
 
]
)
)
 
{

	
	
	
	
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
a
r
r
i
v
a
l
D
a
t
e
'
 
]
 
=
 
'
'
;

	
	
	
	
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
d
e
p
a
r
t
u
r
e
D
a
t
e
'
 
]
 
=
 
'
'
;

	
	
	
}

	
	
	
$
t
h
i
s
-
>
a
r
r
i
v
a
l
D
a
t
e
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
a
r
r
i
v
a
l
D
a
t
e
'
 
]
;

	
	
	
$
t
h
i
s
-
>
d
e
p
a
r
t
u
r
e
D
a
t
e
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
d
e
p
a
r
t
u
r
e
D
a
t
e
'
 
]
;

	
	
	
$
t
h
i
s
-
>
s
t
a
y
D
a
y
s
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
s
t
a
y
D
a
y
s
'
 
]
;

	
	
	
$
t
h
i
s
-
>
d
a
t
e
R
a
n
g
e
S
t
r
i
n
g
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
d
a
t
e
R
a
n
g
e
S
t
r
i
n
g
'
 
]
;

	
	
	
$
t
h
i
s
-
>
g
u
e
s
t
s
_
u
i
d
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
g
u
e
s
t
s
_
u
i
d
'
 
]
;

	
	
	
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
(
i
n
t
)
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
p
r
o
p
e
r
t
y
_
u
i
d
'
 
]
;

	
	
	
$
t
h
i
s
-
>
r
a
t
e
s
_
u
i
d
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
r
a
t
e
s
_
u
i
d
'
 
]
;

	
	
	
$
t
h
i
s
-
>
r
e
s
o
u
r
c
e
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
r
e
s
o
u
r
c
e
'
 
]
;

	
	
	
$
t
h
i
s
-
>
s
i
n
g
l
e
_
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
s
i
n
g
l
e
_
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
'
 
]
;

	
	
	
$
t
h
i
s
-
>
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
'
 
]
;

	
	
	
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
_
t
o
t
a
l
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
c
o
n
t
r
a
c
t
_
t
o
t
a
l
'
 
]
;

	
	
	
$
t
h
i
s
-
>
e
x
t
r
a
s
v
a
l
u
e
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
e
x
t
r
a
s
v
a
l
u
e
'
 
]
;

	
	
	

	
	
	
i
f
 
(
$
j
r
C
o
n
f
i
g
[
'
s
e
s
s
i
o
n
_
h
a
n
d
l
e
r
'
]
 
=
=
 
'
d
a
t
a
b
a
s
e
'
)
 
{

	
	
	
	
i
f
 
(
i
s
_
a
r
r
a
y
(
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
e
x
t
r
a
s
v
a
l
u
e
s
_
i
t
e
m
s
'
 
]
)
)

	
	
	
	
	
$
t
h
i
s
-
>
e
x
t
r
a
s
v
a
l
u
e
s
_
i
t
e
m
s
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
e
x
t
r
a
s
v
a
l
u
e
s
_
i
t
e
m
s
'
 
]
;

	
	
	
	
e
l
s
e

	
	
	
	
	
$
t
h
i
s
-
>
e
x
t
r
a
s
v
a
l
u
e
s
_
i
t
e
m
s
 
=
 
a
r
r
a
y
(
)
;

	
	
	
	

	
	
	
	
i
f
 
(
i
s
_
a
r
r
a
y
(
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
'
 
]
)
)

	
	
	
	
	
$
t
h
i
s
-
>
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
'
 
]
;

	
	
	
	
e
l
s
e

	
	
	
	
	
$
t
h
i
s
-
>
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
 
=
 
a
r
r
a
y
(
)
;

	
	
	
	

	
	
	
	
i
f
 
(
i
s
_
a
r
r
a
y
(
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
_
p
r
i
v
a
t
e
_
d
a
t
a
'
 
]
)
)

	
	
	
	
	
$
t
h
i
s
-
>
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
_
p
r
i
v
a
t
e
_
d
a
t
a
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
_
p
r
i
v
a
t
e
_
d
a
t
a
'
 
]
;

	
	
	
	
e
l
s
e

	
	
	
	
	
$
t
h
i
s
-
>
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
_
p
r
i
v
a
t
e
_
d
a
t
a
 
=
 
a
r
r
a
y
(
)
;

	
	
	
	

	
	
	
	
i
f
 
(
i
s
_
a
r
r
a
y
(
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
'
 
]
)
)

	
	
	
	
	
$
t
h
i
s
-
>
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
'
 
]
;

	
	
	
	
e
l
s
e

	
	
	
	
	
$
t
h
i
s
-
>
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
 
=
 
a
r
r
a
y
(
)
;

	
	
	
	

	
	
	
	
i
f
 
(
i
s
_
a
r
r
a
y
(
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
a
d
d
i
t
i
o
n
a
l
_
l
i
n
e
_
i
t
e
m
s
'
 
]
)
)

	
	
	
	
	
$
t
h
i
s
-
>
a
d
d
i
t
i
o
n
a
l
_
l
i
n
e
_
i
t
e
m
s
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
a
d
d
i
t
i
o
n
a
l
_
l
i
n
e
_
i
t
e
m
s
'
 
]
;

	
	
	
	
e
l
s
e

	
	
	
	
	
$
t
h
i
s
-
>
a
d
d
i
t
i
o
n
a
l
_
l
i
n
e
_
i
t
e
m
s
 
=
 
a
r
r
a
y
(
)
;

	
	
	
	

	
	
	
	
i
f
 
(
i
s
_
a
r
r
a
y
(
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
r
o
o
m
_
f
e
a
t
u
r
e
_
f
i
l
t
e
r
'
 
]
)
)

	
	
	
	
	
$
t
h
i
s
-
>
r
o
o
m
_
f
e
a
t
u
r
e
_
f
i
l
t
e
r
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
r
o
o
m
_
f
e
a
t
u
r
e
_
f
i
l
t
e
r
'
 
]
;

	
	
	
	
e
l
s
e

	
	
	
	
	
$
t
h
i
s
-
>
r
o
o
m
_
f
e
a
t
u
r
e
_
f
i
l
t
e
r
 
=
 
a
r
r
a
y
(
)
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
t
h
i
s
-
>
e
x
t
r
a
s
v
a
l
u
e
s
_
i
t
e
m
s
 
=
 
u
n
s
e
r
i
a
l
i
z
e
(
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
e
x
t
r
a
s
v
a
l
u
e
s
_
i
t
e
m
s
'
 
]
)
;

	
	
	
	
$
t
h
i
s
-
>
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
 
=
 
u
n
s
e
r
i
a
l
i
z
e
(
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
'
 
]
)
;

	
	
	
	
$
t
h
i
s
-
>
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
_
p
r
i
v
a
t
e
_
d
a
t
a
 
=
 
u
n
s
e
r
i
a
l
i
z
e
(
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
_
p
r
i
v
a
t
e
_
d
a
t
a
'
 
]
)
;

	
	
	
	
$
t
h
i
s
-
>
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
 
=
 
u
n
s
e
r
i
a
l
i
z
e
(
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
'
 
]
)
;

	
	
	
	
$
t
h
i
s
-
>
a
d
d
i
t
i
o
n
a
l
_
l
i
n
e
_
i
t
e
m
s
 
=
 
u
n
s
e
r
i
a
l
i
z
e
(
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
a
d
d
i
t
i
o
n
a
l
_
l
i
n
e
_
i
t
e
m
s
'
 
]
)
;

	
	
	
	
$
t
h
i
s
-
>
r
o
o
m
_
f
e
a
t
u
r
e
_
f
i
l
t
e
r
 
=
 
u
n
s
e
r
i
a
l
i
z
e
(
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
r
o
o
m
_
f
e
a
t
u
r
e
_
f
i
l
t
e
r
'
 
]
)
;

	
	
	
}


	
	
	
$
t
h
i
s
-
>
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
_
n
o
t
e
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
_
n
o
t
e
'
 
]
;

	
	
	
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
c
u
r
r
e
n
c
y
c
o
d
e
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
p
r
o
p
e
r
t
y
_
c
u
r
r
e
n
c
y
c
o
d
e
'
 
]
;


	
	
	
$
t
h
i
s
-
>
t
a
x
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
t
a
x
'
 
]
;

	
	
	
$
t
h
i
s
-
>
e
x
t
r
a
s
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
e
x
t
r
a
s
'
 
]
;

	
	
	
$
t
h
i
s
-
>
e
x
t
r
a
s
q
u
a
n
t
i
t
i
e
s
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
e
x
t
r
a
s
q
u
a
n
t
i
t
i
e
s
'
 
]
;

	
	
	
$
t
h
i
s
-
>
t
o
t
a
l
_
d
i
s
c
o
u
n
t
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
t
o
t
a
l
_
d
i
s
c
o
u
n
t
'
 
]
;

	
	
	
$
t
h
i
s
-
>
d
e
p
o
s
i
t
p
a
i
d
s
u
c
c
e
s
s
f
u
l
l
y
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
d
e
p
o
s
i
t
p
a
i
d
s
u
c
c
e
s
s
f
u
l
l
y
'
 
]
;

	
	
	
$
t
h
i
s
-
>
b
o
o
k
e
r
_
c
l
a
s
s
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
b
o
o
k
e
r
_
c
l
a
s
s
'
 
]
;

	
	
	
$
t
h
i
s
-
>
o
k
_
t
o
_
b
o
o
k
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
o
k
_
t
o
_
b
o
o
k
'
 
]
;

	
	
	
$
t
h
i
s
-
>
b
e
d
s
_
a
v
a
i
l
a
b
l
e
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
b
e
d
s
_
a
v
a
i
l
a
b
l
e
'
 
]
;

	
	
	
$
t
h
i
s
-
>
r
e
f
e
r
r
e
r
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
r
e
f
e
r
r
e
r
'
 
]
;

	
	
	
$
t
h
i
s
-
>
e
r
r
o
r
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
e
r
r
o
r
_
l
o
g
'
 
]
;

	
	
	
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
r
o
o
m
_
t
o
t
a
l
'
 
]
;

	
	
	
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
_
n
o
d
i
s
c
o
u
n
t
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
r
o
o
m
_
t
o
t
a
l
_
n
o
d
i
s
c
o
u
n
t
'
 
]
;

	
	
	
/
/
$
t
h
i
s
-
>
d
i
s
c
o
u
n
t
s
	
	
	
 
 
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
d
i
s
c
o
u
n
t
s
'
 
]
;

	
	
	
$
t
h
i
s
-
>
t
o
t
a
l
_
i
n
_
p
a
r
t
y
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
t
o
t
a
l
_
i
n
_
p
a
r
t
y
'
 
]
;

	
	
	
/
/
i
f
 
(
$
t
h
i
s
-
>
b
o
o
k
e
r
_
c
l
a
s
s
 
=
=
 
"
1
0
0
"
)

	
	
	
/
/
	
$
t
h
i
s
-
>
m
i
n
i
n
t
e
r
v
a
l
	
	
	
	
=
 
1
;

	
	
	
/
/
e
l
s
e

	
	
	
/
/
 
$
t
h
i
s
-
>
m
i
n
i
n
t
e
r
v
a
l
	
	
	
	
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
'
m
i
n
i
n
t
e
r
v
a
l
'
]
;

	
	
	
/
/
 
i
f
 
(
$
t
h
i
s
-
>
m
i
n
i
n
t
e
r
v
a
l
 
=
=
 
0
)

	
	
	
/
/
 
$
t
h
i
s
-
>
m
i
n
i
n
t
e
r
v
a
l
 
=
 
1
;

	
	
	
$
t
h
i
s
-
>
a
m
e
n
d
_
c
o
n
t
r
a
c
t
 
=
 
f
a
l
s
e
;

	
	
	
i
f
 
(
i
s
s
e
t
(
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
a
m
e
n
d
_
c
o
n
t
r
a
c
t
'
 
]
)
)
 
{

	
	
	
	
$
t
h
i
s
-
>
a
m
e
n
d
_
c
o
n
t
r
a
c
t
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
a
m
e
n
d
_
c
o
n
t
r
a
c
t
'
 
]
;

	
	
	
}

	
	
	
$
t
h
i
s
-
>
c
o
u
p
o
n
_
i
d
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
c
o
u
p
o
n
_
i
d
'
 
]
;

	
	
	
$
t
h
i
s
-
>
c
o
u
p
o
n
_
c
o
d
e
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
c
o
u
p
o
n
_
c
o
d
e
'
 
]
;

	
	
	
$
t
h
i
s
-
>
c
o
u
p
o
n
_
d
e
t
a
i
l
s
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
c
o
u
p
o
n
_
d
e
t
a
i
l
s
'
 
]
;

	
	
	
$
t
h
i
s
-
>
c
o
u
p
o
n
_
d
i
s
c
o
u
n
t
_
v
a
l
u
e
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
c
o
u
p
o
n
_
d
i
s
c
o
u
n
t
_
v
a
l
u
e
'
 
]
;

	
	
	
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
n
o
t
e
s
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
b
o
o
k
i
n
g
_
n
o
t
e
s
'
 
]
;

	
	
	
$
t
h
i
s
-
>
o
v
e
r
r
i
d
e
_
r
o
o
m
_
t
o
t
a
l
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
o
v
e
r
r
i
d
e
_
r
o
o
m
_
t
o
t
a
l
'
 
]
;

	
	
	
$
t
h
i
s
-
>
o
v
e
r
r
i
d
e
_
d
e
p
o
s
i
t
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
o
v
e
r
r
i
d
e
_
d
e
p
o
s
i
t
'
 
]
;

	
	
	
i
f
 
(
i
s
s
e
t
(
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
t
h
i
r
d
p
a
r
t
y
_
v
a
r
s
'
 
]
)
)
 
{

	
	
	
	
$
t
h
i
s
-
>
t
h
i
r
d
p
a
r
t
y
_
v
a
r
s
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
t
h
i
r
d
p
a
r
t
y
_
v
a
r
s
'
 
]
;

	
	
	
}

	
	
}


	
	
$
d
b
d
a
t
a
 
=
 
s
e
r
i
a
l
i
z
e
(
$
b
o
o
k
i
n
g
D
e
e
t
s
)
;

	
	
$
d
b
d
a
t
a
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
;
'
,
 
'
 
'
,
 
$
d
b
d
a
t
a
)
;

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
<
f
o
n
t
 
c
o
l
o
r
=
'
g
r
e
y
'
>
C
o
n
s
t
r
u
c
t
o
r
:
:
D
a
t
a
 
p
u
l
l
e
d
 
f
r
o
m
 
S
e
s
s
i
o
n
 
v
a
r
i
a
b
l
e
s
 
 
"
.
$
d
b
d
a
t
a
.
'
<
/
f
o
n
t
>
'
)
;


	
	
i
f
 
(
!
e
m
p
t
y
(
$
t
h
i
s
-
>
r
r
)
)
 
{

	
	
	
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
t
h
i
s
-
>
r
r
)
;

	
	
}

	
	
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
t
y
p
e
s
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
t
h
i
s
-
>
v
t
)
;

	
	
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
u
i
d
s
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
t
h
i
s
-
>
v
u
)
;

	
	
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
q
t
y
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
t
h
i
s
-
>
v
q
)
;

	
	
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
v
a
l
s
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
t
h
i
s
-
>
v
v
)
;

	
	
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
v
a
l
s
_
n
o
d
i
s
c
o
u
n
t
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
t
h
i
s
-
>
v
v
_
n
o
d
i
s
c
o
u
n
t
)
;


	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
u
i
d
s
 
a
s
 
$
k
e
y
 
=
>
 
$
v
a
r
i
a
n
c
e
_
u
i
d
)
 
{

	
	
	
i
f
 
(
(
i
n
t
)
 
$
v
a
r
i
a
n
c
e
_
u
i
d
 
=
=
 
0
 
|
|
 
!
$
t
h
i
s
-
>
c
h
e
c
k
G
u
e
s
t
V
a
r
i
a
n
t
I
d
A
n
d
Q
t
y
(
$
v
a
r
i
a
n
c
e
_
u
i
d
,
 
1
)
)
 
{

	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
i
n
i
t
:
:
U
n
s
e
t
t
i
n
g
 
v
a
r
i
a
n
c
e
s
 
w
i
t
h
 
k
e
y
 
'
.
$
k
e
y
)
;

	
	
	
	
u
n
s
e
t
(
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
t
y
p
e
s
[
 
$
k
e
y
 
]
)
;

	
	
	
	
u
n
s
e
t
(
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
u
i
d
s
[
 
$
k
e
y
 
]
)
;

	
	
	
	
u
n
s
e
t
(
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
q
t
y
[
 
$
k
e
y
 
]
)
;

	
	
	
	
u
n
s
e
t
(
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
v
a
l
s
[
 
$
k
e
y
 
]
)
;

	
	
	
	
u
n
s
e
t
(
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
v
a
l
s
_
n
o
d
i
s
c
o
u
n
t
[
 
$
k
e
y
 
]
)
;

	
	
	
}

	
	
}


	
	
$
u
s
e
r
D
e
e
t
s
 
=
 
$
t
h
i
s
-
>
g
e
t
T
m
p
G
u
e
s
t
D
a
t
a
(
)
;


	
	
/
/
$
t
h
i
s
-
>
e
r
r
o
r
L
o
g
(
 
"
S
e
t
 
b
o
o
k
i
n
g
 
v
a
r
i
a
b
l
e
s
 
"
 
)
;

	
	
$
t
h
i
s
-
>
m
o
s
_
u
s
e
r
i
d
 
=
 
$
u
s
e
r
D
e
e
t
s
[
 
'
m
o
s
_
u
s
e
r
i
d
'
 
]
;

	
	
$
t
h
i
s
-
>
e
x
i
s
t
i
n
g
_
i
d
 
=
 
$
u
s
e
r
D
e
e
t
s
[
 
'
e
x
i
s
t
i
n
g
_
i
d
'
 
]
;

	
	
$
t
h
i
s
-
>
f
i
r
s
t
n
a
m
e
 
=
 
$
u
s
e
r
D
e
e
t
s
[
 
'
f
i
r
s
t
n
a
m
e
'
 
]
;

	
	
$
t
h
i
s
-
>
s
u
r
n
a
m
e
 
=
 
$
u
s
e
r
D
e
e
t
s
[
 
'
s
u
r
n
a
m
e
'
 
]
;

	
	
$
t
h
i
s
-
>
h
o
u
s
e
 
=
 
$
u
s
e
r
D
e
e
t
s
[
 
'
h
o
u
s
e
'
 
]
;

	
	
$
t
h
i
s
-
>
s
t
r
e
e
t
 
=
 
$
u
s
e
r
D
e
e
t
s
[
 
'
s
t
r
e
e
t
'
 
]
;

	
	
$
t
h
i
s
-
>
t
o
w
n
 
=
 
$
u
s
e
r
D
e
e
t
s
[
 
'
t
o
w
n
'
 
]
;

	
	
$
t
h
i
s
-
>
r
e
g
i
o
n
 
=
 
$
u
s
e
r
D
e
e
t
s
[
 
'
r
e
g
i
o
n
'
 
]
;

	
	
$
t
h
i
s
-
>
c
o
u
n
t
r
y
 
=
 
$
u
s
e
r
D
e
e
t
s
[
 
'
c
o
u
n
t
r
y
'
 
]
;

	
	
$
t
h
i
s
-
>
p
o
s
t
c
o
d
e
 
=
 
$
u
s
e
r
D
e
e
t
s
[
 
'
p
o
s
t
c
o
d
e
'
 
]
;

	
	
$
t
h
i
s
-
>
t
e
l
_
l
a
n
d
l
i
n
e
 
=
 
$
u
s
e
r
D
e
e
t
s
[
 
'
t
e
l
_
l
a
n
d
l
i
n
e
'
 
]
;

	
	
$
t
h
i
s
-
>
t
e
l
_
m
o
b
i
l
e
 
=
 
$
u
s
e
r
D
e
e
t
s
[
 
'
t
e
l
_
m
o
b
i
l
e
'
 
]
;

	
	
$
t
h
i
s
-
>
e
m
a
i
l
 
=
 
$
u
s
e
r
D
e
e
t
s
[
 
'
e
m
a
i
l
'
 
]
;

	
	

	
	
$
t
h
i
s
-
>
g
u
e
s
t
_
s
p
e
c
i
f
i
c
_
d
i
s
c
o
u
n
t
 
=
 
0
;

	
	
i
f
 
(
i
s
s
e
t
(
$
u
s
e
r
D
e
e
t
s
[
 
'
d
i
s
c
o
u
n
t
'
 
]
)
)
 
{

	
	
	
$
t
h
i
s
-
>
g
u
e
s
t
_
s
p
e
c
i
f
i
c
_
d
i
s
c
o
u
n
t
 
=
 
$
u
s
e
r
D
e
e
t
s
[
 
'
d
i
s
c
o
u
n
t
'
 
]
;

	
	
}

	
	


	
	
$
m
r
C
o
n
f
i
g
 
=
 
g
e
t
P
r
o
p
e
r
t
y
S
p
e
c
i
f
i
c
S
e
t
t
i
n
g
s
(
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
)
;


	
	
$
t
h
i
s
-
>
m
r
C
o
n
f
i
g
 
=
 
$
m
r
C
o
n
f
i
g
;

	
	
i
f
 
(
i
s
s
e
t
(
$
m
r
C
o
n
f
i
g
[
 
'
m
a
r
g
i
n
'
 
]
)
 
&
&
 
!
e
m
p
t
y
(
$
m
r
C
o
n
f
i
g
[
 
'
m
a
r
g
i
n
'
 
]
)
)
 
{

	
	
	
$
t
h
i
s
-
>
m
a
r
g
i
n
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
m
a
r
g
i
n
'
 
]
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
t
h
i
s
-
>
m
a
r
g
i
n
 
=
 
'
0
.
0
0
'
;

	
	
}

	
	
$
t
h
i
s
-
>
t
a
r
i
f
f
M
o
d
e
l
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
n
e
w
T
a
r
i
f
f
M
o
d
e
l
s
'
 
]
;

	
	
i
f
 
(
$
t
h
i
s
-
>
t
a
r
i
f
f
M
o
d
e
l
 
!
=
 
'
1
'
 
&
&
 
$
t
h
i
s
-
>
t
a
r
i
f
f
M
o
d
e
l
 
!
=
 
'
2
'
)
 
{

	
	
	
$
t
h
i
s
-
>
t
a
r
i
f
f
M
o
d
e
l
 
=
 
'
1
'
;

	
	
}

	
	
i
f
 
(
!
i
s
s
e
t
(
$
m
r
C
o
n
f
i
g
[
 
'
c
a
l
_
i
n
p
u
t
'
 
]
)
)
 
{

	
	
	
e
c
h
o
 
"
E
r
r
o
r
:
 
C
o
n
f
i
g
u
r
a
t
i
o
n
 
s
e
t
t
i
n
g
s
 
d
o
n
'
t
 
a
p
p
e
a
r
 
t
o
 
b
e
 
s
e
t
.
 
T
h
e
r
e
 
a
r
e
 
"
.
c
o
u
n
t
(
$
m
r
C
o
n
f
i
g
)
.
'
 
e
l
e
m
e
n
t
s
 
i
n
 
t
h
e
 
m
r
C
o
n
f
i
g
 
v
a
r
 
a
n
d
 
'
.
c
o
u
n
t
(
$
j
r
C
o
n
f
i
g
)
.
'
 
i
n
 
t
h
e
 
j
r
C
o
n
f
i
g
 
v
a
r
.
 
I
f
 
y
o
u
 
h
a
v
e
 
j
u
s
t
 
i
n
s
t
a
l
l
e
d
 
J
o
m
r
e
s
 
y
o
u
 
s
h
o
u
l
d
 
l
o
g
 
i
n
t
o
 
t
h
e
 
f
r
o
n
t
e
n
d
 
a
s
 
a
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
.
 
T
h
i
s
 
w
i
l
l
 
s
e
t
 
u
p
 
s
u
f
f
i
c
i
e
n
t
 
d
a
t
a
 
s
o
 
t
h
a
t
 
y
o
u
 
c
a
n
 
p
r
o
c
e
e
d
.
'
;

	
	
	
e
x
i
t
;

	
	
}

	
	
$
t
h
i
s
-
>
c
f
g
_
t
a
r
i
f
f
m
o
d
e
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
t
a
r
i
f
f
m
o
d
e
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
e
r
r
o
r
C
h
e
c
k
i
n
g
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
e
r
r
o
r
C
h
e
c
k
i
n
g
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
s
i
n
g
l
e
P
e
r
s
o
n
S
u
p
p
l
i
m
e
n
t
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
s
i
n
g
l
e
P
e
r
s
o
n
S
u
p
p
l
i
m
e
n
t
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
s
u
p
p
l
i
m
e
n
t
C
h
a
r
g
e
I
s
P
e
r
c
e
n
t
a
g
e
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
s
u
p
p
l
i
m
e
n
t
C
h
a
r
g
e
I
s
P
e
r
c
e
n
t
a
g
e
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
s
i
n
g
l
e
P
e
r
s
o
n
S
u
p
p
l
i
m
e
n
t
C
o
s
t
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
s
i
n
g
l
e
P
e
r
s
o
n
S
u
p
p
l
i
m
e
n
t
C
o
s
t
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
p
e
r
P
e
r
s
o
n
P
e
r
N
i
g
h
t
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
p
e
r
P
e
r
s
o
n
P
e
r
N
i
g
h
t
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
d
e
p
o
s
i
t
I
s
P
e
r
c
e
n
t
a
g
e
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
d
e
p
o
s
i
t
I
s
P
e
r
c
e
n
t
a
g
e
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
d
e
p
o
s
i
t
V
a
l
u
e
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
d
e
p
o
s
i
t
V
a
l
u
e
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
v
i
s
i
t
o
r
s
c
a
n
b
o
o
k
o
n
l
i
n
e
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
v
i
s
i
t
o
r
s
c
a
n
b
o
o
k
o
n
l
i
n
e
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
N
u
m
b
e
r
O
f
D
a
y
s
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
N
u
m
b
e
r
O
f
D
a
y
s
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
n
u
m
b
e
r
o
f
F
i
x
e
d
P
e
r
i
o
d
s
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
n
u
m
b
e
r
o
f
F
i
x
e
d
P
e
r
i
o
d
s
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
f
i
x
e
d
A
r
r
i
v
a
l
D
a
t
e
Y
e
s
N
o
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
f
i
x
e
d
A
r
r
i
v
a
l
D
a
t
e
Y
e
s
N
o
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
f
i
x
e
d
A
r
r
i
v
a
l
D
a
y
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
f
i
x
e
d
A
r
r
i
v
a
l
D
a
y
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
S
h
o
r
t
Y
e
s
N
o
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
S
h
o
r
t
Y
e
s
N
o
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
S
h
o
r
t
N
u
m
b
e
r
O
f
D
a
y
s
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
S
h
o
r
t
N
u
m
b
e
r
O
f
D
a
y
s
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
c
a
l
_
o
u
t
p
u
t
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
c
a
l
_
o
u
t
p
u
t
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
c
a
l
_
i
n
p
u
t
 
=
 
$
j
r
C
o
n
f
i
g
[
 
'
c
a
l
_
i
n
p
u
t
'
 
]
;


	
	
$
t
h
i
s
-
>
c
f
g
_
t
e
m
p
l
a
t
e
P
a
c
k
 
=
 
'
b
a
s
i
c
'
;

	
	
$
t
h
i
s
-
>
c
f
g
_
l
i
m
i
t
A
d
v
a
n
c
e
B
o
o
k
i
n
g
s
Y
e
s
N
o
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
l
i
m
i
t
A
d
v
a
n
c
e
B
o
o
k
i
n
g
s
Y
e
s
N
o
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
a
d
v
a
n
c
e
B
o
o
k
i
n
g
s
L
i
m
i
t
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
a
d
v
a
n
c
e
B
o
o
k
i
n
g
s
L
i
m
i
t
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
r
o
o
m
T
a
x
Y
e
s
N
o
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
r
o
o
m
T
a
x
Y
e
s
N
o
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
r
o
o
m
T
a
x
F
i
x
e
d
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
r
o
o
m
T
a
x
F
i
x
e
d
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
r
o
o
m
T
a
x
P
e
r
c
e
n
t
a
g
e
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
r
o
o
m
T
a
x
P
e
r
c
e
n
t
a
g
e
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
e
u
r
o
T
a
x
Y
e
s
N
o
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
e
u
r
o
T
a
x
Y
e
s
N
o
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
e
u
r
o
T
a
x
P
e
r
c
e
n
t
a
g
e
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
e
u
r
o
T
a
x
P
e
r
c
e
n
t
a
g
e
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
d
e
p
A
m
o
u
n
t
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
d
e
p
A
m
o
u
n
t
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
s
h
o
w
d
e
p
a
r
t
u
r
e
i
n
p
u
t
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
s
h
o
w
d
e
p
a
r
t
u
r
e
i
n
p
u
t
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
r
a
t
e
m
u
l
t
i
p
l
i
e
r
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
r
a
t
e
m
u
l
t
i
p
l
i
e
r
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
d
a
t
e
F
o
r
m
a
t
S
t
y
l
e
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
d
a
t
e
F
o
r
m
a
t
S
t
y
l
e
'
 
]
;


	
	
$
t
h
i
s
-
>
c
f
g
_
i
n
p
u
t
B
o
x
E
r
r
o
r
B
a
c
k
g
r
o
u
n
d
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
i
n
p
u
t
B
o
x
E
r
r
o
r
B
a
c
k
g
r
o
u
n
d
'
 
]
;


	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
 
=
 
j
o
m
r
e
s
_
g
e
t
S
i
n
g
l
e
t
o
n
(
'
j
o
m
r
e
s
_
t
e
m
p
_
b
o
o
k
i
n
g
_
h
a
n
d
l
e
r
'
)
;


	
	
i
f
 
(
!
i
s
s
e
t
(
$
m
r
C
o
n
f
i
g
[
 
'
a
u
t
o
_
d
e
t
e
c
t
_
c
o
u
n
t
r
y
_
f
o
r
_
b
o
o
k
i
n
g
_
f
o
r
m
'
 
]
)
)
 
{

	
	
	
$
m
r
C
o
n
f
i
g
[
 
'
a
u
t
o
_
d
e
t
e
c
t
_
c
o
u
n
t
r
y
_
f
o
r
_
b
o
o
k
i
n
g
_
f
o
r
m
'
 
]
 
=
 
'
1
'
;

	
	
}


	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
a
u
t
o
_
d
e
t
e
c
t
_
c
o
u
n
t
r
y
_
f
o
r
_
b
o
o
k
i
n
g
_
f
o
r
m
'
 
]
 
=
=
 
'
1
'
 
&
&
 
i
s
s
e
t
(
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
u
s
e
r
_
s
e
t
t
i
n
g
s
[
 
'
g
e
o
l
o
c
a
t
e
d
_
c
o
u
n
t
r
y
'
 
]
)
)
 
{

	
	
	
$
t
h
i
s
-
>
c
f
g
_
d
e
f
a
u
l
t
c
o
u
n
t
r
y
 
=
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
u
s
e
r
_
s
e
t
t
i
n
g
s
[
 
'
g
e
o
l
o
c
a
t
e
d
_
c
o
u
n
t
r
y
'
 
]
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
t
h
i
s
-
>
c
f
g
_
d
e
f
a
u
l
t
c
o
u
n
t
r
y
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
d
e
f
a
u
l
t
c
o
u
n
t
r
y
'
 
]
;

	
	
}


	
	
/
/
i
f
 
(
$
t
h
i
s
-
>
b
o
o
k
e
r
_
c
l
a
s
s
 
=
=
 
"
1
0
0
"
)

	
	
/
/
	
$
t
h
i
s
-
>
c
f
g
_
m
i
n
i
m
u
m
i
n
t
e
r
v
a
l
	
	
	
	
	
	
=
 
1
;

	
	
/
/
e
l
s
e

	
	
$
t
h
i
s
-
>
c
f
g
_
m
i
n
i
m
u
m
i
n
t
e
r
v
a
l
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
m
i
n
i
m
u
m
i
n
t
e
r
v
a
l
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
s
h
o
w
D
e
p
o
s
i
t
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
c
h
a
r
g
e
D
e
p
o
s
i
t
Y
e
s
N
o
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
s
h
o
w
R
o
o
m
I
m
a
g
e
I
n
B
o
o
k
i
n
g
F
o
r
m
O
v
e
r
l
i
b
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
s
h
o
w
R
o
o
m
I
m
a
g
e
I
n
B
o
o
k
i
n
g
F
o
r
m
O
v
e
r
l
i
b
'
 
]
;


	
	
i
f
 
(
$
t
h
i
s
-
>
b
o
o
k
e
r
_
c
l
a
s
s
 
=
=
 
'
1
0
0
'
)
 
{

	
	
	
$
t
h
i
s
-
>
c
f
g
_
m
i
n
d
a
y
s
b
e
f
o
r
e
a
r
r
i
v
a
l
 
=
 
0
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
t
h
i
s
-
>
c
f
g
_
m
i
n
d
a
y
s
b
e
f
o
r
e
a
r
r
i
v
a
l
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
m
i
n
d
a
y
s
b
e
f
o
r
e
a
r
r
i
v
a
l
'
 
]
;

	
	
}


	
	
$
t
h
i
s
-
>
c
f
g
_
d
e
f
a
u
l
t
N
u
m
b
e
r
O
f
F
i
r
s
t
G
u
e
s
t
t
y
p
e
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
d
e
f
a
u
l
t
N
u
m
b
e
r
O
f
F
i
r
s
t
G
u
e
s
t
t
y
p
e
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
r
o
u
n
d
u
p
D
e
p
o
s
i
t
Y
e
s
N
o
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
r
o
u
n
d
u
p
D
e
p
o
s
i
t
Y
e
s
N
o
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
c
h
a
r
g
e
D
e
p
o
s
i
t
Y
e
s
N
o
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
c
h
a
r
g
e
D
e
p
o
s
i
t
Y
e
s
N
o
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
t
a
r
i
f
f
C
h
a
r
g
e
s
S
t
o
r
e
d
W
e
e
k
l
y
Y
e
s
N
o
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
t
a
r
i
f
f
C
h
a
r
g
e
s
S
t
o
r
e
d
W
e
e
k
l
y
Y
e
s
N
o
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
f
i
x
e
d
A
r
r
i
v
a
l
D
a
t
e
s
R
e
c
u
r
r
i
n
g
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
f
i
x
e
d
A
r
r
i
v
a
l
D
a
t
e
s
R
e
c
u
r
r
i
n
g
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
r
e
t
u
r
n
R
o
o
m
s
L
i
m
i
t
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
r
e
t
u
r
n
R
o
o
m
s
L
i
m
i
t
'
 
]
;

	
	
i
f
 
(
!
i
s
s
e
t
(
$
m
r
C
o
n
f
i
g
[
 
'
c
f
g
_
w
e
e
k
e
n
d
d
a
y
s
'
 
]
)
)
 
{

	
	
	
$
m
r
C
o
n
f
i
g
[
 
'
c
f
g
_
w
e
e
k
e
n
d
d
a
y
s
'
 
]
 
=
 
'
5
,
6
'
;

	
	
}

	
	
$
t
h
i
s
-
>
c
f
g
_
w
e
e
k
e
n
d
d
a
y
s
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
m
r
C
o
n
f
i
g
[
 
'
w
e
e
k
e
n
d
d
a
y
s
'
 
]
)
;

	
	
$
t
h
i
s
-
>
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
r
o
o
m
l
i
s
t
_
s
h
o
w
r
o
o
m
n
o
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
r
o
o
m
l
i
s
t
_
s
h
o
w
r
o
o
m
n
o
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
r
o
o
m
l
i
s
t
_
s
h
o
w
r
o
o
m
n
a
m
e
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
r
o
o
m
l
i
s
t
_
s
h
o
w
r
o
o
m
n
a
m
e
'
 
]
;


	
	
$
t
h
i
s
-
>
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
r
o
o
m
l
i
s
t
_
s
h
o
w
d
i
s
a
b
l
e
d
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
r
o
o
m
l
i
s
t
_
s
h
o
w
d
i
s
a
b
l
e
d
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
r
o
o
m
l
i
s
t
_
s
h
o
w
m
a
x
p
e
o
p
l
e
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
r
o
o
m
l
i
s
t
_
s
h
o
w
m
a
x
p
e
o
p
l
e
'
 
]
;


	
	
$
t
h
i
s
-
>
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
n
a
m
e
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
n
a
m
e
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
s
u
r
n
a
m
e
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
s
u
r
n
a
m
e
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
h
o
u
s
e
n
o
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
h
o
u
s
e
n
o
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
s
t
r
e
e
t
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
s
t
r
e
e
t
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
t
o
w
n
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
t
o
w
n
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
p
o
s
t
c
o
d
e
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
p
o
s
t
c
o
d
e
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
r
e
g
i
o
n
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
r
e
g
i
o
n
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
c
o
u
n
t
r
y
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
c
o
u
n
t
r
y
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
t
e
l
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
t
e
l
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
m
o
b
i
l
e
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
m
o
b
i
l
e
'
 
]
;

	
	
$
t
h
i
s
-
>
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
e
m
a
i
l
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
e
m
a
i
l
'
 
]
;


	
	
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
c
u
r
r
e
n
c
y
c
o
d
e
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
p
r
o
p
e
r
t
y
_
c
u
r
r
e
n
c
y
c
o
d
e
'
 
]
;


	
	
i
f
 
(
!
i
s
s
e
t
(
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
_
f
o
r
m
_
r
o
o
m
s
_
l
i
s
t
_
s
t
y
l
e
'
 
]
)
)
 
{

	
	
	
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
_
f
o
r
m
_
r
o
o
m
s
_
l
i
s
t
_
s
t
y
l
e
'
 
]
 
=
 
'
1
'
;

	
	
}


	
	
i
f
 
(
!
i
s
s
e
t
(
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
_
f
o
r
m
_
d
a
i
l
y
_
w
e
e
k
l
y
_
m
o
n
t
h
l
y
'
 
]
)
)
 
{

	
	
	
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
_
f
o
r
m
_
d
a
i
l
y
_
w
e
e
k
l
y
_
m
o
n
t
h
l
y
'
 
]
 
=
 
'
D
'
;

	
	
}

	
	
$
t
h
i
s
-
>
c
f
g
_
b
o
o
k
i
n
g
_
f
o
r
m
_
d
a
i
l
y
_
w
e
e
k
l
y
_
m
o
n
t
h
l
y
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
_
f
o
r
m
_
d
a
i
l
y
_
w
e
e
k
l
y
_
m
o
n
t
h
l
y
'
 
]
;


	
	
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
 
=
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
g
e
t
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
a
m
e
n
d
_
c
o
n
t
r
a
c
t
'
)
;


	
	
i
f
 
(
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
)
 
{

	
	
	
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
_
f
o
r
m
_
r
o
o
m
s
_
l
i
s
t
_
s
t
y
l
e
'
 
]
 
=
 
'
1
'
;

	
	
}


	
	
$
t
h
i
s
-
>
c
f
g
_
b
o
o
k
i
n
g
_
f
o
r
m
_
r
o
o
m
s
_
l
i
s
t
_
s
t
y
l
e
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
_
f
o
r
m
_
r
o
o
m
s
_
l
i
s
t
_
s
t
y
l
e
'
 
]
;


	
	
$
m
r
C
o
n
f
i
g
 
=
 
$
t
h
i
s
-
>
m
r
C
o
n
f
i
g
;

	
	
$
t
h
i
s
-
>
a
c
c
o
m
m
o
d
a
t
i
o
n
_
t
a
x
_
r
a
t
e
 
=
 
0
.
0
;

	
	
i
f
 
(
i
s
s
e
t
(
$
m
r
C
o
n
f
i
g
[
 
'
a
c
c
o
m
m
o
d
a
t
i
o
n
_
t
a
x
_
c
o
d
e
'
 
]
)
 
&
&
 
(
i
n
t
)
 
$
m
r
C
o
n
f
i
g
[
 
'
a
c
c
o
m
m
o
d
a
t
i
o
n
_
t
a
x
_
c
o
d
e
'
 
]
 
>
 
0
)
 
{

	
	
	
$
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
'
)
;

	
	
	
$
c
f
g
c
o
d
e
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
a
c
c
o
m
m
o
d
a
t
i
o
n
_
t
a
x
_
c
o
d
e
'
 
]
;

	
	
	
$
t
h
i
s
-
>
a
c
c
o
m
m
o
d
a
t
i
o
n
_
t
a
x
_
r
a
t
e
 
=
 
(
f
l
o
a
t
)
 
$
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
-
>
t
a
x
r
a
t
e
s
[
 
$
c
f
g
c
o
d
e
 
]
[
 
'
r
a
t
e
'
 
]
;

	
	
}


	
	
/
/
 
L
e
t
'
s
 
g
e
t
 
t
h
e
 
r
o
o
m
,
 
t
a
r
i
f
f
,
 
r
o
o
m
 
t
y
p
e
 
(
c
l
a
s
s
)
 
a
n
d
 
r
o
o
m
 
f
e
a
t
u
r
e
 
i
n
f
o
r
m
a
t
i
o
n
 
f
o
r
 
t
h
i
s
 
p
r
o
p
e
r
t
y


	
	
i
f
 
(
g
e
t
_
s
h
o
w
t
i
m
e
(
'
i
n
c
l
u
d
e
_
r
o
o
m
_
b
o
o
k
i
n
g
_
f
u
n
c
t
i
o
n
a
l
i
t
y
'
)
)
 
{

	
	
	
$
t
h
i
s
-
>
g
e
t
A
l
l
R
o
o
m
s
D
a
t
a
(
)
;

	
	
	
$
t
h
i
s
-
>
g
e
t
A
l
l
T
a
r
i
f
f
s
D
a
t
a
(
)
;

	
	
	
$
t
h
i
s
-
>
g
e
t
A
l
l
R
o
o
m
F
e
a
t
u
r
e
D
e
t
a
i
l
s
(
)
;

	
	
	
$
t
h
i
s
-
>
g
e
t
A
l
l
R
o
o
m
C
l
a
s
s
e
s
(
)
;

	
	
	
$
t
h
i
s
-
>
g
e
t
A
l
l
R
o
o
m
F
e
a
t
u
r
e
s
(
)
;

	
	
	
$
t
h
i
s
-
>
g
e
t
A
l
l
B
o
o
k
i
n
g
s
(
)
;

	
	
	
$
t
h
i
s
-
>
g
e
t
A
l
l
T
a
x
R
a
t
e
s
(
)
;

	
	
	
$
t
h
i
s
-
>
g
e
t
_
a
l
l
_
t
a
r
i
f
f
_
t
y
p
e
s
(
)
;


	
	
	
$
t
h
i
s
-
>
c
h
e
c
k
A
l
l
G
u
e
s
t
s
A
l
l
o
c
a
t
e
d
T
o
R
o
o
m
s
(
)
;

	
	
}


	
	
$
t
h
i
s
-
>
c
h
e
c
k
A
l
l
G
u
e
s
t
s
A
l
l
o
c
a
t
e
d
T
o
R
o
o
m
s
(
)
;


	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
}


	
/
*
*

	
 
*
Q
u
e
r
i
e
s
 
t
h
e
 
d
a
t
a
b
a
s
e
 
f
o
r
 
t
h
e
 
t
e
m
p
o
r
a
r
y
 
b
o
o
k
i
n
g
 
d
a
t
a
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
T
m
p
B
o
o
k
i
n
g
D
a
t
a
(
)

	
{

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
 
=
 
j
o
m
r
e
s
_
g
e
t
S
i
n
g
l
e
t
o
n
(
'
j
o
m
r
e
s
_
t
e
m
p
_
b
o
o
k
i
n
g
_
h
a
n
d
l
e
r
'
)
;

	
	
$
b
o
o
k
i
n
g
D
e
e
t
s
 
=
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
g
e
t
B
o
o
k
i
n
g
D
a
t
a
(
)
;

	
	
i
f
 
(
!
i
s
s
e
t
(
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
s
h
o
w
_
e
x
t
r
a
s
'
 
]
)
)
 
{

	
	
	
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
s
h
o
w
_
e
x
t
r
a
s
'
 
]
 
=
 
'
1
'
;

	
	
}


	
	
$
t
h
i
s
-
>
c
f
g
_
s
h
o
w
E
x
t
r
a
s
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
s
h
o
w
_
e
x
t
r
a
s
'
 
]
;


	
	
r
e
t
u
r
n
 
$
b
o
o
k
i
n
g
D
e
e
t
s
;

	
}


	
/
*
*

	
 
*
Q
u
e
r
i
e
s
 
t
h
e
 
d
a
t
a
b
a
s
e
 
f
o
r
 
t
h
e
 
t
e
m
p
o
r
a
r
y
 
b
o
o
k
i
n
g
 
d
a
t
a
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
T
m
p
G
u
e
s
t
D
a
t
a
(
)

	
{

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
 
=
 
j
o
m
r
e
s
_
g
e
t
S
i
n
g
l
e
t
o
n
(
'
j
o
m
r
e
s
_
t
e
m
p
_
b
o
o
k
i
n
g
_
h
a
n
d
l
e
r
'
)
;

	
	
$
u
s
e
r
D
e
e
t
s
 
=
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
g
e
t
G
u
e
s
t
D
a
t
a
(
)
;


	
	
r
e
t
u
r
n
 
$
u
s
e
r
D
e
e
t
s
;

	
}


	
/
*
*

	
 
*
 
S
a
v
e
 
t
h
e
 
d
e
t
a
i
l
s
 
o
f
 
t
h
e
 
b
o
o
k
i
n
g
 
o
b
j
e
c
t
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
t
o
r
e
B
o
o
k
i
n
g
D
e
t
a
i
l
s
(
)

	
{

	
	
$
s
i
t
e
C
o
n
f
i
g
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
o
m
r
e
s
_
c
o
n
f
i
g
_
s
i
t
e
_
s
i
n
g
l
e
t
o
n
'
)
;

	
	
$
j
r
C
o
n
f
i
g
 
=
 
$
s
i
t
e
C
o
n
f
i
g
-
>
g
e
t
(
)
;

	
	

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
 
=
 
j
o
m
r
e
s
_
g
e
t
S
i
n
g
l
e
t
o
n
(
'
j
o
m
r
e
s
_
t
e
m
p
_
b
o
o
k
i
n
g
_
h
a
n
d
l
e
r
'
)
;

	
	
$
t
h
i
s
-
>
w
r
i
t
e
T
o
L
o
g
f
i
l
e
(
"
<
f
o
n
t
 
c
o
l
o
r
=
'
g
r
e
y
'
>
"
.
s
e
r
i
a
l
i
z
e
(
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
g
u
e
s
t
)
.
'
<
/
f
o
n
t
>
'
)
;


	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
g
u
e
s
t
[
 
'
m
o
s
_
u
s
e
r
i
d
'
 
]
 
=
 
$
t
h
i
s
-
>
m
o
s
_
u
s
e
r
i
d
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
g
u
e
s
t
[
 
'
e
x
i
s
t
i
n
g
_
i
d
'
 
]
 
=
 
(
i
n
t
)
$
t
h
i
s
-
>
e
x
i
s
t
i
n
g
_
i
d
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
g
u
e
s
t
[
 
'
f
i
r
s
t
n
a
m
e
'
 
]
 
=
 
$
t
h
i
s
-
>
f
i
r
s
t
n
a
m
e
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
g
u
e
s
t
[
 
'
s
u
r
n
a
m
e
'
 
]
 
=
 
$
t
h
i
s
-
>
s
u
r
n
a
m
e
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
g
u
e
s
t
[
 
'
h
o
u
s
e
'
 
]
 
=
 
$
t
h
i
s
-
>
h
o
u
s
e
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
g
u
e
s
t
[
 
'
s
t
r
e
e
t
'
 
]
 
=
 
$
t
h
i
s
-
>
s
t
r
e
e
t
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
g
u
e
s
t
[
 
'
t
o
w
n
'
 
]
 
=
 
$
t
h
i
s
-
>
t
o
w
n
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
g
u
e
s
t
[
 
'
r
e
g
i
o
n
'
 
]
 
=
 
$
t
h
i
s
-
>
r
e
g
i
o
n
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
g
u
e
s
t
[
 
'
c
o
u
n
t
r
y
'
 
]
 
=
 
$
t
h
i
s
-
>
c
o
u
n
t
r
y
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
g
u
e
s
t
[
 
'
p
o
s
t
c
o
d
e
'
 
]
 
=
 
$
t
h
i
s
-
>
p
o
s
t
c
o
d
e
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
g
u
e
s
t
[
 
'
t
e
l
_
l
a
n
d
l
i
n
e
'
 
]
 
=
 
$
t
h
i
s
-
>
t
e
l
_
l
a
n
d
l
i
n
e
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
g
u
e
s
t
[
 
'
t
e
l
_
m
o
b
i
l
e
'
 
]
 
=
 
$
t
h
i
s
-
>
t
e
l
_
m
o
b
i
l
e
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
g
u
e
s
t
[
 
'
e
m
a
i
l
'
 
]
 
=
 
$
t
h
i
s
-
>
e
m
a
i
l
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
g
u
e
s
t
[
 
'
d
i
s
c
o
u
n
t
'
 
]
 
=
 
g
e
t
E
s
c
a
p
e
d
(
$
t
h
i
s
-
>
g
u
e
s
t
_
s
p
e
c
i
f
i
c
_
d
i
s
c
o
u
n
t
)
;


	
	
$
r
r
 
=
 
i
m
p
l
o
d
e
(
'
,
'
,
 
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
)
;

	
	
$
t
h
i
s
-
>
i
m
p
l
o
d
e
V
a
r
i
a
n
c
e
s
(
)
;


	
	
$
t
h
i
s
-
>
w
r
i
t
e
T
o
L
o
g
f
i
l
e
(
$
t
h
i
s
-
>
e
r
r
o
r
)
;

	
	
$
t
h
i
s
-
>
e
r
r
o
r
 
=
 
'
'
;


	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
r
e
q
u
e
s
t
e
d
R
o
o
m
'
 
]
 
=
 
$
r
r
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
r
a
t
e
_
p
e
r
n
i
g
h
t
'
 
]
 
=
 
$
t
h
i
s
-
>
r
a
t
e
_
p
e
r
n
i
g
h
t
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
v
a
r
i
a
n
c
e
t
y
p
e
s
'
 
]
 
=
 
$
t
h
i
s
-
>
v
t
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
v
a
r
i
a
n
c
e
u
i
d
s
'
 
]
 
=
 
$
t
h
i
s
-
>
v
u
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
v
a
r
i
a
n
c
e
q
t
y
'
 
]
 
=
 
$
t
h
i
s
-
>
v
q
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
v
a
r
i
a
n
c
e
v
a
l
s
'
 
]
 
=
 
$
t
h
i
s
-
>
v
v
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
v
a
r
i
a
n
c
e
v
a
l
s
_
n
o
d
i
s
c
o
u
n
t
'
 
]
 
=
 
$
t
h
i
s
-
>
v
v
_
n
o
d
i
s
c
o
u
n
t
;

	
	
/
/
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
"
c
o
u
p
o
n
_
i
d
"
]
	
	
	
	
	
	
=
 
$
t
h
i
s
-
>
c
o
u
p
o
n
_
i
d
;

	
	
/
/
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
"
c
o
u
p
o
n
"
]
	
	
	
	
	
	
=
 
$
t
h
i
s
-
>
c
o
u
p
o
n
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
l
a
s
t
m
i
n
u
t
e
_
i
d
'
 
]
 
=
 
$
t
h
i
s
-
>
l
a
s
t
m
i
n
u
t
e
_
i
d
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
a
r
r
i
v
a
l
D
a
t
e
'
 
]
 
=
 
$
t
h
i
s
-
>
a
r
r
i
v
a
l
D
a
t
e
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
d
e
p
a
r
t
u
r
e
D
a
t
e
'
 
]
 
=
 
$
t
h
i
s
-
>
d
e
p
a
r
t
u
r
e
D
a
t
e
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
s
t
a
y
D
a
y
s
'
 
]
 
=
 
$
t
h
i
s
-
>
s
t
a
y
D
a
y
s
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
d
a
t
e
R
a
n
g
e
S
t
r
i
n
g
'
 
]
 
=
 
$
t
h
i
s
-
>
d
a
t
e
R
a
n
g
e
S
t
r
i
n
g
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
g
u
e
s
t
s
_
u
i
d
'
 
]
 
=
 
$
t
h
i
s
-
>
g
u
e
s
t
s
_
u
i
d
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
p
r
o
p
e
r
t
y
_
u
i
d
'
 
]
 
=
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
r
a
t
e
s
_
u
i
d
'
 
]
 
=
 
$
t
h
i
s
-
>
r
a
t
e
s
_
u
i
d
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
r
e
s
o
u
r
c
e
'
 
]
 
=
 
$
t
h
i
s
-
>
r
e
s
o
u
r
c
e
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
s
i
n
g
l
e
_
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
'
 
]
 
=
 
$
t
h
i
s
-
>
s
i
n
g
l
e
_
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
'
 
]
 
=
 
$
t
h
i
s
-
>
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
c
o
n
t
r
a
c
t
_
t
o
t
a
l
'
 
]
 
=
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
_
t
o
t
a
l
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
e
x
t
r
a
s
v
a
l
u
e
'
 
]
 
=
 
$
t
h
i
s
-
>
e
x
t
r
a
s
v
a
l
u
e
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
e
x
t
r
a
s
'
 
]
 
=
 
$
t
h
i
s
-
>
e
x
t
r
a
s
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
e
x
t
r
a
s
q
u
a
n
t
i
t
i
e
s
'
 
]
 
=
 
$
t
h
i
s
-
>
e
x
t
r
a
s
q
u
a
n
t
i
t
i
e
s
;

	
	

	
	
i
f
 
(
$
j
r
C
o
n
f
i
g
[
'
s
e
s
s
i
o
n
_
h
a
n
d
l
e
r
'
]
 
=
=
 
'
d
a
t
a
b
a
s
e
'
)
 
{

	
	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
e
x
t
r
a
s
v
a
l
u
e
s
_
i
t
e
m
s
'
 
]
 
=
 
$
t
h
i
s
-
>
e
x
t
r
a
s
v
a
l
u
e
s
_
i
t
e
m
s
;

	
	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
'
 
]
 
=
 
$
t
h
i
s
-
>
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
;

	
	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
_
p
r
i
v
a
t
e
_
d
a
t
a
'
 
]
 
=
 
$
t
h
i
s
-
>
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
_
p
r
i
v
a
t
e
_
d
a
t
a
;

	
	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
'
 
]
 
=
 
$
t
h
i
s
-
>
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
;

	
	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
_
n
o
t
e
'
 
]
 
=
 
$
t
h
i
s
-
>
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
_
n
o
t
e
;

	
	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
a
d
d
i
t
i
o
n
a
l
_
l
i
n
e
_
i
t
e
m
s
'
 
]
 
=
 
$
t
h
i
s
-
>
a
d
d
i
t
i
o
n
a
l
_
l
i
n
e
_
i
t
e
m
s
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
r
o
o
m
_
f
e
a
t
u
r
e
_
f
i
l
t
e
r
'
 
]
 
=
 
$
t
h
i
s
-
>
r
o
o
m
_
f
e
a
t
u
r
e
_
f
i
l
t
e
r
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
e
x
t
r
a
s
v
a
l
u
e
s
_
i
t
e
m
s
'
 
]
 
=
 
s
e
r
i
a
l
i
z
e
(
$
t
h
i
s
-
>
e
x
t
r
a
s
v
a
l
u
e
s
_
i
t
e
m
s
)
;

	
	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
'
 
]
 
=
 
s
e
r
i
a
l
i
z
e
(
$
t
h
i
s
-
>
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
)
;

	
	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
_
p
r
i
v
a
t
e
_
d
a
t
a
'
 
]
 
=
 
s
e
r
i
a
l
i
z
e
(
$
t
h
i
s
-
>
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
_
p
r
i
v
a
t
e
_
d
a
t
a
)
;

	
	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
'
 
]
 
=
 
s
e
r
i
a
l
i
z
e
(
$
t
h
i
s
-
>
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
)
;

	
	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
_
n
o
t
e
'
 
]
 
=
 
s
e
r
i
a
l
i
z
e
(
$
t
h
i
s
-
>
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
_
n
o
t
e
)
;

	
	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
a
d
d
i
t
i
o
n
a
l
_
l
i
n
e
_
i
t
e
m
s
'
 
]
 
=
 
s
e
r
i
a
l
i
z
e
(
$
t
h
i
s
-
>
a
d
d
i
t
i
o
n
a
l
_
l
i
n
e
_
i
t
e
m
s
)
;

	
	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
r
o
o
m
_
f
e
a
t
u
r
e
_
f
i
l
t
e
r
'
 
]
 
=
 
s
e
r
i
a
l
i
z
e
(
$
t
h
i
s
-
>
r
o
o
m
_
f
e
a
t
u
r
e
_
f
i
l
t
e
r
)
;

	
	
}


	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
t
o
t
a
l
_
d
i
s
c
o
u
n
t
'
 
]
 
=
 
$
t
h
i
s
-
>
t
o
t
a
l
_
d
i
s
c
o
u
n
t
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
d
e
p
o
s
i
t
p
a
i
d
s
u
c
c
e
s
s
f
u
l
l
y
'
 
]
 
=
 
$
t
h
i
s
-
>
d
e
p
o
s
i
t
p
a
i
d
s
u
c
c
e
s
s
f
u
l
l
y
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
t
a
x
'
 
]
 
=
 
$
t
h
i
s
-
>
t
a
x
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
b
o
o
k
e
r
_
c
l
a
s
s
'
 
]
 
=
 
$
t
h
i
s
-
>
b
o
o
k
e
r
_
c
l
a
s
s
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
o
k
_
t
o
_
b
o
o
k
'
 
]
 
=
 
$
t
h
i
s
-
>
o
k
_
t
o
_
b
o
o
k
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
b
e
d
s
_
a
v
a
i
l
a
b
l
e
'
 
]
 
=
 
$
t
h
i
s
-
>
b
e
d
s
_
a
v
a
i
l
a
b
l
e
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
r
e
f
e
r
r
e
r
'
 
]
 
=
 
$
t
h
i
s
-
>
r
e
f
e
r
r
e
r
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
e
r
r
o
r
_
l
o
g
'
 
]
 
=
 
$
t
h
i
s
-
>
e
r
r
o
r
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
t
o
t
a
l
_
i
n
_
p
a
r
t
y
'
 
]
 
=
 
$
t
h
i
s
-
>
t
o
t
a
l
_
i
n
_
p
a
r
t
y
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
r
o
o
m
_
t
o
t
a
l
'
 
]
 
=
 
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
r
o
o
m
_
t
o
t
a
l
_
n
o
d
i
s
c
o
u
n
t
'
 
]
 
=
 
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
_
n
o
d
i
s
c
o
u
n
t
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
d
i
s
c
o
u
n
t
s
'
 
]
 
=
 
$
t
h
i
s
-
>
d
i
s
c
o
u
n
t
s
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
t
i
m
e
s
t
a
m
p
'
 
]
 
=
 
d
a
t
e
(
'
Y
-
m
-
d
 
H
:
i
:
s
'
)
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
m
i
n
i
n
t
e
r
v
a
l
'
 
]
 
=
 
$
t
h
i
s
-
>
m
i
n
i
n
t
e
r
v
a
l
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
c
o
u
p
o
n
_
i
d
'
 
]
 
=
 
$
t
h
i
s
-
>
c
o
u
p
o
n
_
i
d
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
c
o
u
p
o
n
_
c
o
d
e
'
 
]
 
=
 
$
t
h
i
s
-
>
c
o
u
p
o
n
_
c
o
d
e
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
c
o
u
p
o
n
_
d
e
t
a
i
l
s
'
 
]
 
=
 
$
t
h
i
s
-
>
c
o
u
p
o
n
_
d
e
t
a
i
l
s
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
c
o
u
p
o
n
_
d
i
s
c
o
u
n
t
_
v
a
l
u
e
'
 
]
 
=
 
$
t
h
i
s
-
>
c
o
u
p
o
n
_
d
i
s
c
o
u
n
t
_
v
a
l
u
e
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
b
o
o
k
i
n
g
_
n
o
t
e
s
'
 
]
 
=
 
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
n
o
t
e
s
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
o
v
e
r
r
i
d
e
_
r
o
o
m
_
t
o
t
a
l
'
 
]
 
=
 
$
t
h
i
s
-
>
o
v
e
r
r
i
d
e
_
r
o
o
m
_
t
o
t
a
l
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
o
v
e
r
r
i
d
e
_
d
e
p
o
s
i
t
'
 
]
 
=
 
$
t
h
i
s
-
>
o
v
e
r
r
i
d
e
_
d
e
p
o
s
i
t
;


	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
s
h
o
w
_
e
x
t
r
a
s
'
 
]
 
=
 
$
t
h
i
s
-
>
c
f
g
_
s
h
o
w
E
x
t
r
a
s
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
p
r
o
p
e
r
t
y
_
c
u
r
r
e
n
c
y
c
o
d
e
'
 
]
 
=
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
c
u
r
r
e
n
c
y
c
o
d
e
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
e
m
a
i
l
_
a
d
d
r
e
s
s
_
c
a
n
_
b
e
_
u
s
e
d
'
 
]
 
=
 
$
t
h
i
s
-
>
e
m
a
i
l
_
a
d
d
r
e
s
s
_
c
a
n
_
b
e
_
u
s
e
d
;


	
	
i
f
 
(
i
s
s
e
t
(
$
t
h
i
s
-
>
t
h
i
r
d
p
a
r
t
y
_
v
a
r
s
)
)
 
{

	
	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
t
h
i
r
d
p
a
r
t
y
_
v
a
r
s
'
 
]
 
=
 
$
t
h
i
s
-
>
t
h
i
r
d
p
a
r
t
y
_
v
a
r
s
;

	
	
}


	
	
/
/
s
t
o
r
e
 
t
h
e
 
n
e
w
 
s
e
a
r
c
h
 
d
a
t
e
s

	
	
/
/
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
 
'
j
o
m
s
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
'
 
]
 
=
 
$
t
h
i
s
-
>
a
r
r
i
v
a
l
D
a
t
e
;

	
	
/
/
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
 
'
j
o
m
s
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
_
d
e
p
a
r
t
u
r
e
'
 
]
 
=
 
$
t
h
i
s
-
>
d
e
p
a
r
t
u
r
e
D
a
t
e
;

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
A
l
l
R
o
o
m
s
D
a
t
a
(
)

	
{

	
	
$
b
a
s
i
c
_
r
o
o
m
_
d
e
t
a
i
l
s
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
b
a
s
i
c
_
r
o
o
m
_
d
e
t
a
i
l
s
'
)
;

	
	
$
b
a
s
i
c
_
r
o
o
m
_
d
e
t
a
i
l
s
-
>
g
e
t
_
a
l
l
_
r
o
o
m
s
(
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
)
;


	
	
j
r
_
i
m
p
o
r
t
(
'
j
o
m
r
e
s
_
m
a
r
k
d
o
w
n
'
)
;

	
	
$
j
o
m
r
e
s
_
m
a
r
k
d
o
w
n
 
=
 
n
e
w
 
j
o
m
r
e
s
_
m
a
r
k
d
o
w
n
(
)
;

	
	

	
	
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
'
)
;

	
	
$
i
m
a
g
e
s
 
=
 
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
g
e
t
_
i
m
a
g
e
s
(
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
,
 
a
r
r
a
y
(
'
r
o
o
m
s
'
)
)
;
 
/
/
 
G
e
t
s
 
t
h
e
 
r
o
o
m
s
 
i
m
a
g
e
s


	
	
$
r
o
o
m
_
i
m
a
g
e
s
 
=
 
$
i
m
a
g
e
s
 
[
 
'
r
o
o
m
s
'
 
]
;


	
	
f
o
r
e
a
c
h
 
(
$
b
a
s
i
c
_
r
o
o
m
_
d
e
t
a
i
l
s
-
>
r
o
o
m
s
 
a
s
 
$
r
)
 
{

	
	
	
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
R
o
o
m
s
[
 
$
r
[
'
r
o
o
m
_
u
i
d
'
]
 
]
 
=
 
a
r
r
a
y
(

	
	
	
	
'
r
o
o
m
_
u
i
d
'
 
=
>
 
$
r
[
'
r
o
o
m
_
u
i
d
'
]
,

	
	
	
	
'
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
'
 
=
>
 
$
r
[
'
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
'
]
,

	
	
	
	
'
p
r
o
p
e
r
t
y
s
_
u
i
d
'
 
=
>
 
$
r
[
'
p
r
o
p
e
r
t
y
s
_
u
i
d
'
]
,

	
	
	
	
'
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
'
 
=
>
 
$
r
[
'
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
'
]
,

	
	
	
	
'
r
o
o
m
_
n
a
m
e
'
 
=
>
 
$
r
[
'
r
o
o
m
_
n
a
m
e
'
]
,

	
	
	
	
'
r
o
o
m
_
n
u
m
b
e
r
'
 
=
>
 
$
r
[
'
r
o
o
m
_
n
u
m
b
e
r
'
]
,

	
	
	
	
'
r
o
o
m
_
f
l
o
o
r
'
 
=
>
 
$
r
[
'
r
o
o
m
_
f
l
o
o
r
'
]
,

	
	
	
	
'
m
a
x
_
p
e
o
p
l
e
'
 
=
>
 
$
r
[
'
m
a
x
_
p
e
o
p
l
e
'
]
,

	
	
	
	
'
s
i
n
g
l
e
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
'
 
=
>
 
$
r
[
'
s
i
n
g
l
e
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
'
]
,

	
	
	
	
'
t
a
g
l
i
n
e
'
 
=
>
 
$
r
[
'
t
a
g
l
i
n
e
'
]
,

	
	
	
	
'
d
e
s
c
r
i
p
t
i
o
n
'
 
=
>
 
$
j
o
m
r
e
s
_
m
a
r
k
d
o
w
n
-
>
g
e
t
_
m
a
r
k
d
o
w
n
(
$
r
[
'
d
e
s
c
r
i
p
t
i
o
n
'
]
)
,

	
	
	
	
'
s
m
a
l
l
_
r
o
o
m
_
i
m
a
g
e
'
 
=
>
 
$
r
o
o
m
_
i
m
a
g
e
s
 
[
 
$
r
[
'
r
o
o
m
_
u
i
d
'
]
 
]
 
[
0
]
 
[
'
s
m
a
l
l
'
]
,

	
	
	
	
'
m
e
d
i
u
m
_
r
o
o
m
_
i
m
a
g
e
'
 
=
>
 
$
r
o
o
m
_
i
m
a
g
e
s
 
[
 
$
r
[
'
r
o
o
m
_
u
i
d
'
]
 
]
 
[
0
]
 
[
'
m
e
d
i
u
m
'
]
,

	
	
	
	
)
;


	
	
	
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
R
o
o
m
U
i
d
s
[
 
]
 
=
 
$
r
[
'
r
o
o
m
_
u
i
d
'
]
;


	
	
	
i
f
 
(
!
i
n
_
a
r
r
a
y
(
$
r
[
'
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
'
]
,
 
$
t
h
i
s
-
>
a
l
l
R
o
o
m
C
l
a
s
s
I
d
s
)
)
 
{

	
	
	
	
$
t
h
i
s
-
>
a
l
l
R
o
o
m
C
l
a
s
s
I
d
s
[
 
]
 
=
 
$
r
[
'
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
'
]
;

	
	
	
}

	
	
}


	
	
i
f
 
(
!
e
m
p
t
y
(
$
b
a
s
i
c
_
r
o
o
m
_
d
e
t
a
i
l
s
-
>
a
l
l
_
r
o
o
m
_
f
e
a
t
u
r
e
s
)
)
 
{

	
	
	
$
t
h
i
s
-
>
a
l
l
F
e
a
t
u
r
e
I
d
s
 
=
 
a
r
r
a
y
_
k
e
y
s
(
$
b
a
s
i
c
_
r
o
o
m
_
d
e
t
a
i
l
s
-
>
a
l
l
_
r
o
o
m
_
f
e
a
t
u
r
e
s
)
;

	
	
}

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
A
l
l
T
a
r
i
f
f
s
D
a
t
a
(
)

	
{

	
	
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
`
r
a
t
e
s
_
u
i
d
`
,
`
r
a
t
e
_
t
i
t
l
e
`
,
`
r
a
t
e
_
d
e
s
c
r
i
p
t
i
o
n
`
,
`
v
a
l
i
d
f
r
o
m
`
,
`
v
a
l
i
d
t
o
`
,

	
	
	
`
r
o
o
m
r
a
t
e
p
e
r
d
a
y
`
,
`
m
i
n
d
a
y
s
`
,
`
m
a
x
d
a
y
s
`
,
`
m
i
n
p
e
o
p
l
e
`
,
`
m
a
x
p
e
o
p
l
e
`
,
`
r
o
o
m
c
l
a
s
s
_
u
i
d
`
,

	
	
	
`
i
g
n
o
r
e
_
p
p
p
n
`
,
`
a
l
l
o
w
_
p
h
`
,
`
a
l
l
o
w
_
w
e
`
,
`
w
e
e
k
e
n
d
o
n
l
y
`
,
`
d
a
y
o
f
w
e
e
k
`
,
`
m
i
n
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
d
`
,
`
m
a
x
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
d
`

	
	
	
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
r
a
t
e
s
 
W
H
E
R
E
 
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
'
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
'
 

	
	
	
A
N
D
 
D
A
T
E
_
F
O
R
M
A
T
(
`
v
a
l
i
d
t
o
`
,
 
'
%
Y
/
%
m
/
%
d
'
)
 
>
=
 
D
A
T
E
_
F
O
R
M
A
T
(
'
"
.
$
t
h
i
s
-
>
t
o
d
a
y
.
"
'
,
 
'
%
Y
/
%
m
/
%
d
'
)

	
	
	
"
;


	
	
$
t
a
r
i
f
f
s
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;


	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
g
e
t
A
l
l
T
a
r
i
f
f
s
D
a
t
a
:
:
 
"
.
$
q
u
e
r
y
 
)
;

	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
F
i
n
d
i
n
g
 
t
a
r
i
f
f
s
"
)
;

	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
$
q
u
e
r
y
)
;

	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
s
e
r
i
a
l
i
z
e
(
$
t
a
r
i
f
f
s
)
 
)
;


	
	
$
i
n
t
e
r
v
a
l
 
=
 
n
e
w
 
D
a
t
e
I
n
t
e
r
v
a
l
(
'
P
1
D
'
)
;

	
	
f
o
r
e
a
c
h
 
(
$
t
a
r
i
f
f
s
 
a
s
 
$
t
)
 
{

	
	
	
$
r
o
o
m
r
a
t
e
 
=
 
$
t
h
i
s
-
>
g
e
t
_
n
e
t
t
_
p
r
i
c
e
(
$
t
-
>
r
o
o
m
r
a
t
e
p
e
r
d
a
y
,
 
$
t
h
i
s
-
>
a
c
c
o
m
m
o
d
a
t
i
o
n
_
t
a
x
_
r
a
t
e
)
;

	
	
	
$
d
a
t
e
s
 
=
 
$
t
h
i
s
-
>
g
e
t
_
p
e
r
i
o
d
s
(
$
t
-
>
v
a
l
i
d
f
r
o
m
,
 
$
t
-
>
v
a
l
i
d
t
o
.
'
 
2
3
:
5
9
:
5
9
'
,
 
$
i
n
t
e
r
v
a
l
)
;

	
	
	
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
T
a
r
i
f
f
s
[
 
$
t
-
>
r
a
t
e
s
_
u
i
d
 
]
 
=
 
a
r
r
a
y
(

	
	
	
	
'
r
a
t
e
s
_
u
i
d
'
 
=
>
 
$
t
-
>
r
a
t
e
s
_
u
i
d
,

	
	
	
	
'
r
a
t
e
_
t
i
t
l
e
'
 
=
>
 
$
t
-
>
r
a
t
e
_
t
i
t
l
e
,

	
	
	
	
'
r
a
t
e
_
d
e
s
c
r
i
p
t
i
o
n
'
 
=
>
 
$
t
-
>
r
a
t
e
_
d
e
s
c
r
i
p
t
i
o
n
,

	
	
	
	
'
v
a
l
i
d
f
r
o
m
'
 
=
>
 
$
t
-
>
v
a
l
i
d
f
r
o
m
,

	
	
	
	
'
v
a
l
i
d
t
o
'
 
=
>
 
$
t
-
>
v
a
l
i
d
t
o
,

	
	
	
	
'
r
o
o
m
r
a
t
e
p
e
r
d
a
y
'
 
=
>
 
$
r
o
o
m
r
a
t
e
,

	
	
	
	
'
m
i
n
d
a
y
s
'
 
=
>
 
$
t
-
>
m
i
n
d
a
y
s
,

	
	
	
	
'
m
a
x
d
a
y
s
'
 
=
>
 
$
t
-
>
m
a
x
d
a
y
s
,

	
	
	
	
'
m
i
n
p
e
o
p
l
e
'
 
=
>
 
$
t
-
>
m
i
n
p
e
o
p
l
e
,

	
	
	
	
'
m
a
x
p
e
o
p
l
e
'
 
=
>
 
$
t
-
>
m
a
x
p
e
o
p
l
e
,

	
	
	
	
'
r
o
o
m
c
l
a
s
s
_
u
i
d
'
 
=
>
 
$
t
-
>
r
o
o
m
c
l
a
s
s
_
u
i
d
,

	
	
	
	
'
i
g
n
o
r
e
_
p
p
p
n
'
 
=
>
 
$
t
-
>
i
g
n
o
r
e
_
p
p
p
n
,

	
	
	
	
'
a
l
l
o
w
_
p
h
'
 
=
>
 
$
t
-
>
a
l
l
o
w
_
p
h
,

	
	
	
	
'
a
l
l
o
w
_
w
e
'
 
=
>
 
$
t
-
>
a
l
l
o
w
_
w
e
,

	
	
	
	
'
w
e
e
k
e
n
d
o
n
l
y
'
 
=
>
 
$
t
-
>
w
e
e
k
e
n
d
o
n
l
y
,

	
	
	
	
'
d
a
y
o
f
w
e
e
k
'
 
=
>
 
$
t
-
>
d
a
y
o
f
w
e
e
k
,

	
	
	
	
'
m
i
n
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
d
'
 
=
>
 
$
t
-
>
m
i
n
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
d
,

	
	
	
	
'
m
a
x
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
d
'
 
=
>
 
$
t
-
>
m
a
x
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
d
,

	
	
	
	
'
t
a
r
i
f
f
_
d
a
t
e
s
'
 
=
>
 
$
d
a
t
e
s
,

	
	
	
	
)
;

	
	
}

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
A
l
l
R
o
o
m
F
e
a
t
u
r
e
D
e
t
a
i
l
s
(
)

	
{

	
	
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
'
)
;

	
	
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
g
e
t
_
i
m
a
g
e
s
(
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
,
 
a
r
r
a
y
(
'
r
o
o
m
_
f
e
a
t
u
r
e
s
'
)
)
;


	
	
$
b
a
s
i
c
_
r
o
o
m
_
d
e
t
a
i
l
s
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
b
a
s
i
c
_
r
o
o
m
_
d
e
t
a
i
l
s
'
)
;

	
	
$
b
a
s
i
c
_
r
o
o
m
_
d
e
t
a
i
l
s
-
>
g
e
t
_
a
l
l
_
r
o
o
m
s
(
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
)
;


	
	
f
o
r
e
a
c
h
 
(
$
b
a
s
i
c
_
r
o
o
m
_
d
e
t
a
i
l
s
-
>
a
l
l
_
r
o
o
m
_
f
e
a
t
u
r
e
s
 
a
s
 
$
f
)
 
{

	
	
	
$
t
h
i
s
-
>
a
l
l
F
e
a
t
u
r
e
D
e
t
a
i
l
s
[
 
$
f
[
'
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
'
]
 
]
 
=
 
a
r
r
a
y
(
'
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
'
 
=
>
 
$
f
[
'
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
'
]
,
 
'
f
e
a
t
u
r
e
_
d
e
s
c
r
i
p
t
i
o
n
'
 
=
>
 
$
f
[
'
f
e
a
t
u
r
e
_
d
e
s
c
r
i
p
t
i
o
n
'
]
,
 
'
i
m
a
g
e
'
 
=
>
 
$
f
[
'
i
m
a
g
e
'
]
,
 
'
t
o
o
l
t
i
p
'
 
=
>
 
$
f
[
'
t
o
o
l
t
i
p
'
]
)
;

	
	
}

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
A
l
l
R
o
o
m
C
l
a
s
s
e
s
(
)

	
{

	
	
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
,
r
o
o
m
_
c
l
a
s
s
_
a
b
b
v
,
r
o
o
m
_
c
l
a
s
s
_
f
u
l
l
_
d
e
s
c
,
i
m
a
g
e
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
r
o
o
m
_
c
l
a
s
s
e
s
 
W
H
E
R
E
 
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
 
I
N
 
(
'
.
j
o
m
r
e
s
_
i
m
p
l
o
d
e
(
$
t
h
i
s
-
>
a
l
l
R
o
o
m
C
l
a
s
s
I
d
s
)
.
'
)
 
'
;

	
	
$
r
o
o
m
C
l
a
s
s
e
s
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;

	
	
f
o
r
e
a
c
h
 
(
$
r
o
o
m
C
l
a
s
s
e
s
 
a
s
 
$
c
)
 
{

	
	
	
$
r
o
o
m
t
y
p
e
_
a
b
b
v
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
R
O
O
M
T
Y
P
E
S
_
A
B
B
V
'
.
(
i
n
t
)
 
$
c
-
>
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
,
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
c
-
>
r
o
o
m
_
c
l
a
s
s
_
a
b
b
v
)
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

	
	
	
$
r
o
o
m
t
y
p
e
_
d
e
s
c
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
R
O
O
M
T
Y
P
E
S
_
D
E
S
C
'
.
(
i
n
t
)
 
$
c
-
>
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
,
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
c
-
>
r
o
o
m
_
c
l
a
s
s
_
f
u
l
l
_
d
e
s
c
)
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;


	
	
	
$
t
h
i
s
-
>
a
l
l
R
o
o
m
C
l
a
s
s
e
s
[
 
$
c
-
>
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
 
]
 
=
 
a
r
r
a
y
(
'
r
o
o
m
_
c
l
a
s
s
_
a
b
b
v
'
 
=
>
 
$
r
o
o
m
t
y
p
e
_
a
b
b
v
,
 
'
r
o
o
m
_
c
l
a
s
s
_
f
u
l
l
_
d
e
s
c
'
 
=
>
 
$
r
o
o
m
t
y
p
e
_
d
e
s
c
,
 
'
i
m
a
g
e
'
 
=
>
 
$
c
-
>
i
m
a
g
e
)
;

	
	
}

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
A
l
l
R
o
o
m
F
e
a
t
u
r
e
s
(
)

	
{

	
	
$
b
a
s
i
c
_
r
o
o
m
_
d
e
t
a
i
l
s
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
b
a
s
i
c
_
r
o
o
m
_
d
e
t
a
i
l
s
'
)
;

	
	
$
b
a
s
i
c
_
r
o
o
m
_
d
e
t
a
i
l
s
-
>
g
e
t
_
a
l
l
_
r
o
o
m
s
(
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
)
;


	
	
i
f
 
(
!
e
m
p
t
y
(
$
b
a
s
i
c
_
r
o
o
m
_
d
e
t
a
i
l
s
-
>
a
l
l
_
r
o
o
m
_
f
e
a
t
u
r
e
s
)
)
 
{

	
	
	
f
o
r
e
a
c
h
 
(
$
b
a
s
i
c
_
r
o
o
m
_
d
e
t
a
i
l
s
-
>
a
l
l
_
r
o
o
m
_
f
e
a
t
u
r
e
s
 
a
s
 
$
f
)
 
{

	
	
	
	
$
t
h
i
s
-
>
a
l
l
R
o
o
m
F
e
a
t
u
r
e
s
[
 
$
f
[
'
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
'
]
 
]
 
=
 
$
f
[
'
f
e
a
t
u
r
e
_
d
e
s
c
r
i
p
t
i
o
n
'
]
;

	
	
	
}

	
	
}

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
A
l
l
B
o
o
k
i
n
g
s
(
)

	
{

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
 
=
 
j
o
m
r
e
s
_
g
e
t
S
i
n
g
l
e
t
o
n
(
'
j
o
m
r
e
s
_
t
e
m
p
_
b
o
o
k
i
n
g
_
h
a
n
d
l
e
r
'
)
;

	
	
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
 
=
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
g
e
t
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
a
m
e
n
d
_
c
o
n
t
r
a
c
t
'
)
;

	
	
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
u
i
d
 
=
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
g
e
t
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
a
m
e
n
d
_
c
o
n
t
r
a
c
t
u
i
d
'
)
;

	
	
i
f
 
(
!
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
)
 
{

	
	
	
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
r
o
o
m
_
u
i
d
,
d
a
t
e
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
r
o
o
m
_
b
o
o
k
i
n
g
s
 
W
H
E
R
E
 
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
'
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
'
 
A
N
D
 
r
o
o
m
_
u
i
d
 
I
N
 
(
"
.
j
o
m
r
e
s
_
i
m
p
l
o
d
e
(
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
R
o
o
m
U
i
d
s
)
.
'
)
 
'
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
r
o
o
m
_
u
i
d
,
d
a
t
e
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
r
o
o
m
_
b
o
o
k
i
n
g
s
 
W
H
E
R
E
 
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
'
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
'
 
A
N
D
 
c
o
n
t
r
a
c
t
_
u
i
d
 
!
=
 
'
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
u
i
d
'
 
A
N
D
 
r
o
o
m
_
u
i
d
 
I
N
 
(
"
.
j
o
m
r
e
s
_
i
m
p
l
o
d
e
(
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
R
o
o
m
U
i
d
s
)
.
'
)
 
'
;

	
	
}

	
	
$
b
o
o
k
i
n
g
s
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;

	
	
f
o
r
e
a
c
h
 
(
$
b
o
o
k
i
n
g
s
 
a
s
 
$
c
)
 
{

	
	
	
/
/
$
d
a
t
e
=
s
t
r
_
r
e
p
l
a
c
e
(
"
/
"
,
"
"
,
$
c
-
>
d
a
t
e
)
;

	
	
	
$
t
h
i
s
-
>
a
l
l
B
o
o
k
i
n
g
s
[
 
$
c
-
>
d
a
t
e
 
]
[
 
$
c
-
>
r
o
o
m
_
u
i
d
 
]
 
=
 
a
r
r
a
y
(
'
r
o
o
m
_
u
i
d
'
 
=
>
 
$
c
-
>
r
o
o
m
_
u
i
d
)
;

	
	
}

	
	
i
f
 
(
!
e
m
p
t
y
(
$
t
h
i
s
-
>
a
l
l
B
o
o
k
i
n
g
s
)
)
 
{

	
	
	
k
s
o
r
t
(
$
t
h
i
s
-
>
a
l
l
B
o
o
k
i
n
g
s
)
;

	
	
}

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
_
a
l
l
_
t
a
r
i
f
f
_
t
y
p
e
s
(
)

	
{

	
	
$
m
r
C
o
n
f
i
g
 
=
 
$
t
h
i
s
-
>
m
r
C
o
n
f
i
g
;

	
	
$
t
h
i
s
-
>
a
l
l
_
t
a
r
i
f
f
_
t
y
p
e
s
_
t
o
_
t
a
r
i
f
f
_
i
d
_
x
r
e
f
 
=
 
a
r
r
a
y
(
)
;

	
	
$
t
h
i
s
-
>
a
l
l
_
t
a
r
i
f
f
_
i
d
_
t
o
_
t
a
r
i
f
f
_
t
y
p
e
_
x
r
e
f
 
=
 
a
r
r
a
y
(
)
;

	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
t
a
r
i
f
f
m
o
d
e
'
 
]
 
=
=
 
'
2
'
)
 
{

	
	
	
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
t
a
r
i
f
f
t
y
p
e
_
i
d
,
t
a
r
i
f
f
_
i
d
 
F
R
O
M
 
#
_
_
j
o
m
c
o
m
p
_
t
a
r
i
f
f
t
y
p
e
_
r
a
t
e
_
x
r
e
f
 
 
W
H
E
R
E
 
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
'
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
'
"
;

	
	
	
$
t
a
r
i
f
f
_
t
y
p
e
_
l
i
s
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;

	
	
	
i
f
 
(
!
e
m
p
t
y
(
$
t
a
r
i
f
f
_
t
y
p
e
_
l
i
s
t
)
)
 
{

	
	
	
	
f
o
r
e
a
c
h
 
(
$
t
a
r
i
f
f
_
t
y
p
e
_
l
i
s
t
 
a
s
 
$
t
y
p
e
)
 
{

	
	
	
	
	
$
t
h
i
s
-
>
a
l
l
_
t
a
r
i
f
f
_
t
y
p
e
s
_
t
o
_
t
a
r
i
f
f
_
i
d
_
x
r
e
f
[
 
$
t
y
p
e
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
 
]
[
 
]
 
=
 
$
t
y
p
e
-
>
t
a
r
i
f
f
_
i
d
;

	
	
	
	
	
$
t
h
i
s
-
>
a
l
l
_
t
a
r
i
f
f
_
i
d
_
t
o
_
t
a
r
i
f
f
_
t
y
p
e
_
x
r
e
f
[
 
$
t
y
p
e
-
>
t
a
r
i
f
f
_
i
d
 
]
[
 
]
 
=
 
$
t
y
p
e
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
;

	
	
	
	
}

	
	
	
}

	
	
}

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
A
l
l
T
a
x
R
a
t
e
s
(
)

	
{

	
	
$
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
'
)
;

	
	
$
t
h
i
s
-
>
t
a
x
r
a
t
e
s
 
=
 
$
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
-
>
t
a
x
r
a
t
e
s
;

	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
 
"
I
n
i
t
 
f
o
u
n
d
 
t
a
x
 
r
a
t
e
s
 
"
 
.
 
s
e
r
i
a
l
i
z
e
(
 
$
t
h
i
s
-
>
t
a
x
r
a
t
e
s
 
)
 
)
;

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
a
n
i
t
i
s
e
_
f
o
r
_
e
v
a
l
(
$
s
t
r
i
n
g
)

	
{

	
	
$
s
t
r
i
n
g
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
"
'
,
 
'
\
"
'
,
 
$
s
t
r
i
n
g
)
;

	
	
$
s
t
r
i
n
g
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
"
'
"
,
 
"
\
'
"
,
 
$
s
t
r
i
n
g
)
;

	
	
$
s
t
r
i
n
g
 
=
 
t
r
i
m
(
p
r
e
g
_
r
e
p
l
a
c
e
(
'
/
\
s
+
/
'
,
 
'
 
'
,
 
$
s
t
r
i
n
g
)
)
;
 
/
/
 
s
t
r
i
p
s
 
c
a
r
r
i
a
g
e
 
r
e
t
u
r
n
s
 
f
r
o
m
 
s
t
r
i
n
g
s
 
g
e
n
e
r
a
t
e
d
 
t
h
r
o
u
g
h
 
t
e
m
p
l
a
t
e
s

	
	
r
e
t
u
r
n
 
$
s
t
r
i
n
g
;

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
_
f
u
l
l
y
b
o
o
k
e
d
_
d
a
t
e
s
(
)

	
{

	
	
$
f
u
l
l
y
_
b
o
o
k
e
d
_
d
a
t
e
s
 
=
 
a
r
r
a
y
(
)
;

	
	
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
 
=
 
j
o
m
r
e
s
_
g
e
t
S
i
n
g
l
e
t
o
n
(
'
m
c
H
a
n
d
l
e
r
'
)
;

	
	
i
f
 
(
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
e
v
e
n
t
F
i
l
e
E
x
i
s
t
s
C
h
e
c
k
(
'
0
5
0
6
0
'
)
)
 
{

	
	
	
$
r
e
s
u
l
t
 
=
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
t
r
i
g
g
e
r
E
v
e
n
t
(
'
0
5
0
6
0
'
,
 
$
t
h
i
s
)
;

	
	
	
i
f
 
(
i
s
s
e
t
(
$
r
e
s
u
l
t
[
 
'
p
l
u
g
i
n
_
m
a
n
a
g
e
s
_
f
u
l
l
y
_
b
o
o
k
e
d
_
d
a
t
e
s
'
 
]
)
 
&
&
 
$
r
e
s
u
l
t
[
 
'
p
l
u
g
i
n
_
m
a
n
a
g
e
s
_
f
u
l
l
y
_
b
o
o
k
e
d
_
d
a
t
e
s
'
 
]
)
 
{

	
	
	
	
$
b
o
o
k
e
d
_
d
a
t
e
s
 
=
 
$
r
e
s
u
l
t
[
 
'
f
u
l
l
y
_
b
o
o
k
e
d
_
d
a
t
e
s
'
 
]
;

	
	
	
	
f
o
r
e
a
c
h
 
(
$
b
o
o
k
e
d
_
d
a
t
e
s
 
a
s
 
$
d
a
t
e
)
 
{

	
	
	
	
	
$
t
m
p
d
a
t
e
 
=
 
d
a
t
e
(
'
Y
-
n
-
j
'
,
 
s
t
r
t
o
t
i
m
e
(
$
d
a
t
e
)
)
;

	
	
	
	
	
$
f
u
l
l
y
_
b
o
o
k
e
d
_
d
a
t
e
s
[
 
]
 
=
 
$
t
m
p
d
a
t
e
;

	
	
	
	
}

	
	
	
}

	
	
}

	
	
i
f
 
(
!
i
s
s
e
t
(
$
r
e
s
u
l
t
[
 
'
p
l
u
g
i
n
_
m
a
n
a
g
e
s
_
f
u
l
l
y
_
b
o
o
k
e
d
_
d
a
t
e
s
'
 
]
)
)
 
{

	
	
	
$
t
o
t
a
l
_
n
u
m
b
e
r
_
o
f
_
r
o
o
m
s
 
=
 
c
o
u
n
t
(
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
R
o
o
m
s
)
;


	
	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
a
l
l
B
o
o
k
i
n
g
s
 
a
s
 
$
d
a
t
e
 
=
>
 
$
b
o
o
k
i
n
g
s
)
 
{

	
	
	
	
$
n
u
m
b
e
r
_
o
f
_
b
o
o
k
i
n
g
s
_
t
h
i
s
_
d
a
t
e
 
=
 
c
o
u
n
t
(
$
b
o
o
k
i
n
g
s
)
;

	
	
	
	
i
f
 
(
$
n
u
m
b
e
r
_
o
f
_
b
o
o
k
i
n
g
s
_
t
h
i
s
_
d
a
t
e
 
=
=
 
$
t
o
t
a
l
_
n
u
m
b
e
r
_
o
f
_
r
o
o
m
s
)
 
{

	
	
	
	
	
$
t
m
p
d
a
t
e
 
=
 
d
a
t
e
(
'
Y
-
n
-
j
'
,
 
s
t
r
t
o
t
i
m
e
(
$
d
a
t
e
)
)
;

	
	
	
	
	
$
f
u
l
l
y
_
b
o
o
k
e
d
_
d
a
t
e
s
[
 
]
 
=
 
$
t
m
p
d
a
t
e
;

	
	
	
	
}

	
	
	
}

	
	
	
$
a
l
l
_
t
a
r
i
f
f
s
_
a
r
e
_
s
p
e
c
i
f
i
c
_
d
a
y
s
_
o
f
_
w
e
e
k
 
=
 
t
r
u
e
;

	
	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
T
a
r
i
f
f
s
 
a
s
 
$
t
a
r
i
f
f
)
 
{

	
	
	
	
i
f
 
(
$
t
a
r
i
f
f
[
 
'
d
a
y
o
f
w
e
e
k
'
 
]
 
=
=
 
7
)
 
{

	
	
	
	
	
$
a
l
l
_
t
a
r
i
f
f
s
_
a
r
e
_
s
p
e
c
i
f
i
c
_
d
a
y
s
_
o
f
_
w
e
e
k
 
=
 
f
a
l
s
e
;

	
	
	
	
}

	
	
	
}

	
	
	
i
f
 
(
$
a
l
l
_
t
a
r
i
f
f
s
_
a
r
e
_
s
p
e
c
i
f
i
c
_
d
a
y
s
_
o
f
_
w
e
e
k
)
 
{

	
	
	
	
$
d
a
y
s
_
o
f
_
w
e
e
k
_
a
l
l
o
w
e
d
 
=
 
a
r
r
a
y
(
)
;

	
	
	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
T
a
r
i
f
f
s
 
a
s
 
$
t
a
r
i
f
f
)
 
{

	
	
	
	
	
$
d
a
y
s
_
o
f
_
w
e
e
k
_
a
l
l
o
w
e
d
[
 
]
 
=
 
$
t
a
r
i
f
f
[
 
'
d
a
y
o
f
w
e
e
k
'
 
]
;

	
	
	
	
}

	
	
	
	
$
d
a
y
s
_
o
f
_
w
e
e
k
_
a
l
l
o
w
e
d
 
=
 
a
r
r
a
y
_
u
n
i
q
u
e
(
$
d
a
y
s
_
o
f
_
w
e
e
k
_
a
l
l
o
w
e
d
)
;

	
	
	
	
$
s
t
a
r
t
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
)
;

	
	
	
	
$
e
n
d
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
s
t
r
t
o
t
i
m
e
(
'
+
4
 
y
e
a
r
s
'
)
)
;

	
	
	
	
$
d
a
t
e
s
 
=
 
$
t
h
i
s
-
>
f
i
n
d
D
a
t
e
R
a
n
g
e
F
o
r
D
a
t
e
s
(
$
s
t
a
r
t
,
 
$
e
n
d
)
;

	
	
	
	
$
c
o
u
n
t
 
=
 
c
o
u
n
t
(
$
d
a
t
e
s
)
;

	
	
	
	
f
o
r
 
(
$
i
 
=
 
0
;
 
$
i
 
<
=
 
$
c
o
u
n
t
;
 
+
+
$
i
)
 
{

	
	
	
	
	
$
d
a
t
e
 
=
 
$
d
a
t
e
s
[
 
$
i
 
]
;

	
	
	
	
	
$
d
a
y
_
o
f
_
w
e
e
k
_
o
f
_
d
a
t
e
 
=
 
$
t
h
i
s
-
>
g
e
t
D
a
y
O
f
W
e
e
k
(
$
d
a
t
e
)
;

	
	
	
	
	
i
f
 
(
i
n
_
a
r
r
a
y
(
$
d
a
y
_
o
f
_
w
e
e
k
_
o
f
_
d
a
t
e
,
 
$
d
a
y
s
_
o
f
_
w
e
e
k
_
a
l
l
o
w
e
d
)
)
 
{

	
	
	
	
	
	
u
n
s
e
t
(
$
d
a
t
e
s
[
 
$
i
 
]
)
;

	
	
	
	
	
}

	
	
	
	
}

	
	
	
	
f
o
r
e
a
c
h
 
(
$
d
a
t
e
s
 
a
s
 
$
d
)
 
{

	
	
	
	
	
$
t
m
p
d
a
t
e
 
=
 
d
a
t
e
(
'
Y
-
n
-
j
'
,
 
s
t
r
t
o
t
i
m
e
(
$
d
)
)
;

	
	
	
	
	
$
f
u
l
l
y
_
b
o
o
k
e
d
_
d
a
t
e
s
[
 
]
 
=
 
$
t
m
p
d
a
t
e
;

	
	
	
	
}

	
	
	
}

	
	
}


	
	
r
e
t
u
r
n
 
$
f
u
l
l
y
_
b
o
o
k
e
d
_
d
a
t
e
s
;

	
}


	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/

	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/


	
/
/
	
G
e
n
e
r
i
c
 
v
a
r
i
a
n
t
 
h
a
n
d
l
i
n
g


	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/

	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/

	
/
*
*

	
 
*
S
a
n
i
t
i
s
e
s
 
t
h
e
 
i
n
p
u
t
 
f
r
o
m
 
t
h
e
 
a
j
a
x
 
q
u
e
r
y
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
a
n
i
t
i
s
e
I
n
p
u
t
(
$
t
y
p
e
,
 
$
v
a
l
u
e
)

	
{

	
	
s
w
i
t
c
h
 
(
$
t
y
p
e
)
 
{

	
	
	
c
a
s
e
 
'
i
n
t
'
:

	
	
	
	
$
v
a
l
u
e
 
=
 
(
i
n
t
)
 
$
v
a
l
u
e
;

	
	
	
	
b
r
e
a
k
;

	
	
	
c
a
s
e
 
'
s
t
r
i
n
g
'
:

	
	
	
	
$
v
a
l
u
e
 
=
 
$
t
h
i
s
-
>
m
a
k
e
S
t
r
i
n
g
S
a
f
e
(
$
v
a
l
u
e
)
;

	
	
	
	
b
r
e
a
k
;

	
	
	
c
a
s
e
 
'
d
a
t
e
'
:

	
	
	
	
$
t
m
p
D
a
t
e
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
v
a
l
u
e
)
;

	
	
	
	
i
f
 
(
c
o
u
n
t
(
$
t
m
p
D
a
t
e
)
 
!
=
 
3
)
 
{

	
	
	
	
	
$
v
a
l
u
e
 
=
 
n
u
l
l
;

	
	
	
	
}

	
	
	
	
b
r
e
a
k
;

	
	
	
d
e
f
a
u
l
t
:

	
	
	
	
$
v
a
l
u
e
 
=
 
n
u
l
l
;

	
	
	
	
b
r
e
a
k
;

	
	
}


	
	
r
e
t
u
r
n
 
$
v
a
l
u
e
;

	
}


	
/
*
*

	
 
*
 
S
a
n
i
t
i
s
e
s
 
t
h
e
 
o
u
t
p
u
t
 
b
e
f
o
r
e
 
i
t
'
s
 
s
e
n
t
 
t
o
 
t
h
e
 
f
o
r
m
.
 
A
s
 
t
h
e
 
t
h
i
r
d
 
p
h
a
s
e
 
o
f
 
t
h
e
 
f
o
r
m
 
i
s
 
g
e
n
e
r
a
t
e
d
 
f
r
o
m
 
e
v
a
l
u
a
t
e
d
 
j
a
v
a
s
c
r
i
p
t
 
q
u
e
r
i
e
s
 
a
n
y
 
'
 
c
h
a
r
a
c
t
e
r
s
 
e
t
c
 
h
a
v
e
 
t
o
 
b
e
 
s
t
r
i
p
p
e
d
 
o
u
t
 
b
e
f
o
r
e
 
t
h
e
y
'
r
e
 
r
e
t
u
r
n
e
d
 
t
o
 
t
h
e
 
b
o
o
k
i
n
g
 
f
o
r
m
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
$
d
a
t
a
)

	
{

	
	
/
/
$
t
h
i
s
-
>
e
r
r
o
r
(
$
d
a
t
a
)
;

	
	
/
/
$
d
a
t
a
=
s
t
r
_
r
e
p
l
a
c
e
(
"
&
#
3
9
;
"
,
"
\
&
#
3
9
;
"
,
$
d
a
t
a
)
;
 
 
/
/
 
T
h
e
s
e
 
t
w
o
 
l
i
n
e
s
 
c
o
m
m
e
n
t
e
d
 
o
u
t
 
f
o
r
 
4
.
7
.
8
 
a
s
 
t
h
e
y
 
w
e
r
e
 
r
e
m
o
v
i
n
g
 
'
 
f
r
o
m
 
t
r
a
n
s
l
a
t
e
d
/
e
d
i
t
i
n
g
 
m
o
d
e
 
s
t
u
f
f
 
s
u
c
h
 
a
s
 
e
x
t
r
a
s
.

	
	
/
/
$
d
a
t
a
=
s
t
r
_
r
e
p
l
a
c
e
(
"
'
"
,
"
\
'
"
,
$
d
a
t
a
)
;

	
	
/
/
$
d
a
t
a
=
h
t
m
l
e
n
t
i
t
i
e
s
(
$
d
a
t
a
)
;

	
	
r
e
t
u
r
n
 
$
d
a
t
a
;

	
}


	
/
*
*

	
 
*
 
M
a
k
e
 
t
h
e
 
s
t
r
i
n
g
 
e
s
c
a
p
e
d
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
m
a
k
e
S
t
r
i
n
g
S
a
f
e
(
$
d
a
t
a
)

	
{

	
	
$
d
a
t
a
 
=
 
f
i
l
t
e
r
_
v
a
r
(
$
d
a
t
a
,
 
F
I
L
T
E
R
_
S
A
N
I
T
I
Z
E
_
S
P
E
C
I
A
L
_
C
H
A
R
S
)
;


	
	
r
e
t
u
r
n
 
$
d
a
t
a
;

	
}


	
/
*
*

	
 
*
 
R
e
s
e
t
s
 
t
h
e
 
r
e
q
u
e
s
t
e
d
 
r
o
o
m
 
a
r
r
a
y
 
t
o
 
n
u
t
h
i
n
.
 
W
h
e
n
 
t
h
e
 
c
u
r
r
e
n
t
l
y
 
a
v
a
i
l
a
b
l
e
 
r
o
o
m
s
 
l
i
s
t
 
i
s
 
r
e
-
g
e
n
e
r
a
t
e
d
 
t
h
e
 
a
v
a
i
l
a
b
l
e
 
r
o
o
m
s
 
l
i
s
t
 
i
s
 
c
o
m
p
l
e
t
e
l
y
 
r
e
-
c
a
l
c
u
l
a
t
e
d
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
r
e
s
e
t
R
e
q
u
e
s
t
e
d
R
o
o
m
(
)

	
{

	
	
j
r
_
i
m
p
o
r
t
(
'
j
o
m
r
e
s
_
r
o
o
m
l
o
c
k
s
'
)
;

	
	
$
r
o
o
m
_
l
o
c
k
e
r
 
=
 
n
e
w
 
j
o
m
r
e
s
_
r
o
o
m
l
o
c
k
s
(
)
;

	
	
$
r
o
o
m
_
l
o
c
k
e
r
-
>
u
n
l
o
c
k
_
a
l
l
_
r
o
o
m
s
_
f
o
r
_
s
e
s
s
i
o
n
(
)
;

	
	
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
 
=
 
a
r
r
a
y
(
)
;

	
}


	
/
*
*

	
 
*
 
R
e
t
u
r
n
s
 
w
h
e
t
h
e
r
 
o
r
 
n
o
t
 
e
r
r
o
r
 
c
h
e
c
k
i
n
g
 
f
l
a
g
 
i
s
 
o
n
 
o
r
 
o
f
f
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
e
r
r
o
r
C
h
e
c
k
i
n
g
(
)

	
{

	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
e
r
r
o
r
C
h
e
c
k
i
n
g
 
=
=
 
'
1
'
)
 
{

	
	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
	
}
 
e
l
s
e
 
{

	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}

	
}


	
/
*
*

	
 
*
 
R
e
c
e
i
v
e
s
 
d
e
b
u
g
g
i
n
g
 
m
e
s
s
a
g
e
s
 
a
n
d
 
s
t
o
r
e
s
 
t
h
e
m
 
i
n
 
a
n
 
a
r
r
a
y
 
$
t
h
i
s
-
>
e
r
r
o
r
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
E
r
r
o
r
L
o
g
(
$
e
r
r
o
r
T
e
x
t
)

	
{

	
	
$
t
h
i
s
-
>
e
r
r
o
r
 
.
=
 
$
e
r
r
o
r
T
e
x
t
.
'
 
<
b
r
/
>
 
'
;

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
E
r
r
o
r
L
o
g
F
i
r
s
t
(
$
t
i
t
l
e
)

	
{

	
	
$
t
h
i
s
-
>
e
r
r
o
r
 
=
 
'
<
b
>
'
.
$
t
i
t
l
e
.
'
<
/
b
>
<
b
r
/
>
'
.
$
t
h
i
s
-
>
e
r
r
o
r
;

	
}


	
/
*
*

	
 
*
 
R
e
t
u
r
n
s
 
t
h
e
 
c
o
n
t
e
n
t
s
 
o
f
 
$
t
h
i
s
-
>
e
r
r
o
r
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
E
r
r
o
r
L
o
g
(
)

	
{

	
	
$
e
r
r
o
r
S
t
r
i
n
g
 
=
 
'
'
;

	
	
$
e
r
r
o
r
S
t
r
i
n
g
 
.
=
 
h
t
m
l
e
n
t
i
t
i
e
s
(
$
t
h
i
s
-
>
e
r
r
o
r
)
;


	
	
r
e
t
u
r
n
 
$
t
h
i
s
-
>
e
r
r
o
r
;

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
w
r
i
t
e
T
o
L
o
g
f
i
l
e
(
$
t
e
x
t
)

	
{

	
	
l
o
g
g
i
n
g
:
:
l
o
g
_
m
e
s
s
a
g
e
(
$
t
e
x
t
,
 
'
D
o
b
o
o
k
i
n
g
'
,
 
'
D
E
B
U
G
'
)
;

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
G
r
o
w
l
M
e
s
s
a
g
e
s
(
)

	
{

	
	
$
m
e
s
s
a
g
e
s
 
=
 
'
;
'
;

	
	
i
f
 
(
$
t
h
i
s
-
>
j
r
C
o
n
f
i
g
[
 
'
u
s
e
J
o
m
r
e
s
M
e
s
s
a
g
i
n
g
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
i
f
 
(
i
s
s
e
t
(
$
t
h
i
s
-
>
g
r
o
w
l
m
e
s
s
a
g
e
s
[
 
'
m
e
s
s
a
g
e
s
'
 
]
)
 
&
&
 
!
e
m
p
t
y
(
$
t
h
i
s
-
>
g
r
o
w
l
m
e
s
s
a
g
e
s
[
 
'
m
e
s
s
a
g
e
s
'
 
]
)
)
 
{

	
	
	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
g
r
o
w
l
m
e
s
s
a
g
e
s
[
 
'
m
e
s
s
a
g
e
s
'
 
]
 
a
s
 
$
m
e
s
s
a
g
e
)
 
{

	
	
	
	
	
i
f
 
(
$
m
e
s
s
a
g
e
 
!
=
 
'
'
)
 
{

	
	
	
	
	
	
$
m
e
s
s
a
g
e
s
 
.
=
 
'
j
o
m
r
e
s
J
q
u
e
r
y
.
j
G
r
o
w
l
(
\
'
'
.
$
m
e
s
s
a
g
e
.
'
\
'
,
 
{
 
l
i
f
e
:
 
2
0
0
0
0
,
s
t
i
c
k
y
:
t
r
u
e
 
}
)
;
'
;

	
	
	
	
	
}

	
	
	
	
}

	
	
	
}

	
	
	
i
f
 
(
i
s
s
e
t
(
$
t
h
i
s
-
>
g
r
o
w
l
m
e
s
s
a
g
e
s
[
 
'
g
u
e
s
t
_
f
e
e
d
b
a
c
k
'
 
]
)
 
&
&
 
!
e
m
p
t
y
(
$
t
h
i
s
-
>
g
r
o
w
l
m
e
s
s
a
g
e
s
[
 
'
g
u
e
s
t
_
f
e
e
d
b
a
c
k
'
 
]
)
)
 
{

	
	
	
	
$
m
e
s
s
a
g
e
s
 
.
=
 
'
j
o
m
r
e
s
J
q
u
e
r
y
.
j
G
r
o
w
l
(
\
'
'
.
$
t
h
i
s
-
>
g
r
o
w
l
m
e
s
s
a
g
e
s
[
 
'
g
u
e
s
t
_
f
e
e
d
b
a
c
k
'
 
]
.
'
\
'
,
 
{
 
l
i
f
e
:
 
1
0
0
0
0
 
}
)
;
'
;

	
	
	
}

	
	
	
$
m
e
s
s
a
g
e
s
 
=
 
s
u
b
s
t
r
(
$
m
e
s
s
a
g
e
s
,
 
0
,
 
-
1
)
;


	
	
	
r
e
t
u
r
n
 
$
m
e
s
s
a
g
e
s
;

	
	
}
 
e
l
s
e
i
f
 
(
i
s
s
e
t
(
$
t
h
i
s
-
>
g
r
o
w
l
m
e
s
s
a
g
e
s
[
 
'
m
e
s
s
a
g
e
s
'
 
]
)
 
&
&
 
!
e
m
p
t
y
(
$
t
h
i
s
-
>
g
r
o
w
l
m
e
s
s
a
g
e
s
[
 
'
m
e
s
s
a
g
e
s
'
 
]
)
)
 
{
 
/
/
 
n
o
r
m
a
l
 
m
e
s
s
a
g
e
s
 
a
r
e
 
u
s
e
f
u
l
 
w
h
e
n
 
d
e
v
e
l
o
p
i
n
g
 
t
h
e
 
b
o
o
k
i
n
g
 
e
n
g
i
n
e
,
 
s
o
 
e
v
e
n
 
i
f
 
p
o
p
u
p
s
 
a
r
e
 
d
i
s
a
b
l
e
d
 
b
y
 
d
e
f
a
u
l
t
,
 
w
e
 
s
t
i
l
l
 
w
a
n
t
 
t
o
 
s
e
e
 
m
e
s
s
a
g
e
s
 
c
o
d
e
d
 
b
y
 
t
h
e
 
d
e
v
e
l
o
p
e
r
.

	
	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
g
r
o
w
l
m
e
s
s
a
g
e
s
[
 
'
m
e
s
s
a
g
e
s
'
 
]
 
a
s
 
$
m
e
s
s
a
g
e
)
 
{

	
	
	
	
i
f
 
(
$
m
e
s
s
a
g
e
 
!
=
 
'
'
)
 
{

	
	
	
	
	
$
m
e
s
s
a
g
e
s
 
.
=
 
'
j
o
m
r
e
s
J
q
u
e
r
y
.
j
G
r
o
w
l
(
\
'
'
.
$
m
e
s
s
a
g
e
.
'
\
'
,
 
{
 
l
i
f
e
:
 
2
0
0
0
0
,
s
t
i
c
k
y
:
t
r
u
e
 
}
)
;
'
;

	
	
	
	
}

	
	
	
}


	
	
	
r
e
t
u
r
n
 
$
m
e
s
s
a
g
e
s
;

	
	
}

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
P
o
p
u
p
M
e
s
s
a
g
e
(
$
m
e
s
s
a
g
e
)

	
{

	
	
$
m
s
g
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
$
m
e
s
s
a
g
e
)
;

	
	
i
f
 
(
$
_
R
E
Q
U
E
S
T
[
 
'
f
i
e
l
d
'
 
]
 
!
=
 
'
p
r
o
p
e
r
t
y
_
u
i
d
_
c
h
e
c
k
'
)
 
{

	
	
	
$
t
h
i
s
-
>
g
r
o
w
l
m
e
s
s
a
g
e
s
[
 
'
m
e
s
s
a
g
e
s
'
 
]
[
 
]
 
=
 
$
m
s
g
;

	
	
}

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
G
u
e
s
t
P
o
p
u
p
M
e
s
s
a
g
e
(
$
m
e
s
s
a
g
e
)

	
{

	
	
$
m
s
g
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
$
m
e
s
s
a
g
e
)
;

	
	
i
f
 
(
i
s
s
e
t
(
$
_
R
E
Q
U
E
S
T
[
 
'
f
i
e
l
d
'
 
]
)
 
&
&
 
$
_
R
E
Q
U
E
S
T
[
 
'
f
i
e
l
d
'
 
]
 
!
=
 
'
p
r
o
p
e
r
t
y
_
u
i
d
_
c
h
e
c
k
'
)
 
{

	
	
	
$
t
h
i
s
-
>
g
r
o
w
l
m
e
s
s
a
g
e
s
[
 
'
g
u
e
s
t
_
f
e
e
d
b
a
c
k
'
 
]
 
=
 
$
m
s
g
;

	
	
}

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
e
c
h
o
_
p
o
p
u
l
a
t
e
_
d
i
v
(
$
m
e
s
s
a
g
e
)

	
{

	
	
i
f
 
(
!
$
t
h
i
s
-
>
s
u
p
p
r
e
s
s
_
o
u
t
p
u
t
)
 
{

	
	
	
e
c
h
o
 
$
m
e
s
s
a
g
e
;

	
	
}

	
}


	
/
*
*

	
 
*
 
R
e
t
u
r
n
s
 
t
r
u
e
 
i
f
 
t
h
i
s
 
p
r
o
p
e
r
t
y
 
i
s
 
a
n
 
S
R
P
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
S
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
S
t
a
t
u
s
(
)

	
{

	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
 
=
=
 
'
1
'
)
 
{

	
	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
	
}
 
e
l
s
e
 
{

	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}

	
}


	
/
*
*

	
 
*
 
M
a
k
e
 
t
h
e
 
O
p
t
i
o
n
a
l
 
E
x
t
r
a
s
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
m
a
k
e
E
x
t
r
a
s
(
$
s
e
l
e
c
t
e
d
P
r
o
p
e
r
t
y
)

	
{

	
	
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
'
)
;

	
	
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
g
e
t
_
i
m
a
g
e
s
(
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
,
 
a
r
r
a
y
(
'
e
x
t
r
a
s
'
)
)
;


	
	
$
m
r
C
o
n
f
i
g
 
=
 
$
t
h
i
s
-
>
m
r
C
o
n
f
i
g
;

	
	
$
e
x
t
r
a
_
d
e
t
a
i
l
s
 
=
 
a
r
r
a
y
(
)
;


	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
s
h
o
w
E
x
t
r
a
s
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
`
u
i
d
`
,
`
n
a
m
e
`
,
`
d
e
s
c
`
,
`
m
a
x
q
u
a
n
t
i
t
y
`
,
`
p
r
i
c
e
`
,
`
a
u
t
o
_
s
e
l
e
c
t
`
,
`
t
a
x
_
r
a
t
e
`
,
`
c
h
a
r
g
a
b
l
e
d
a
i
l
y
`
,
`
p
r
o
p
e
r
t
y
_
u
i
d
`
,
`
p
u
b
l
i
s
h
e
d
`
,
`
v
a
l
i
d
f
r
o
m
`
,
`
v
a
l
i
d
t
o
`
,
`
l
i
m
i
t
e
d
_
t
o
_
r
o
o
m
_
t
y
p
e
`
 
F
R
O
M
 
`
#
_
_
j
o
m
r
e
s
_
e
x
t
r
a
s
`
 
w
h
e
r
e
 
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
'
$
s
e
l
e
c
t
e
d
P
r
o
p
e
r
t
y
'
 
A
N
D
 
p
u
b
l
i
s
h
e
d
 
=
 
'
1
'
 
O
R
D
E
R
 
B
Y
 
n
a
m
e
"
;

	
	
	
$
e
x
L
i
s
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;


	
	
	
$
s
e
l
e
c
t
e
d
_
r
o
o
m
s
_
r
o
o
m
_
t
y
p
e
s
 
=
 
a
r
r
a
y
(
)
;

	
	
	
i
f
 
(
!
e
m
p
t
y
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
)
)
 
{

	
	
	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
 
a
s
 
$
r
m
)
 
{

	
	
	
	
	
$
r
o
o
m
 
=
 
e
x
p
l
o
d
e
(
'
^
'
,
 
$
r
m
)
;

	
	
	
	
	
$
t
a
r
i
f
f
_
i
d
 
=
 
$
r
o
o
m
[
 
1
 
]
;

	
	
	
	
	
$
b
o
o
k
i
n
g
_
r
o
o
m
_
t
y
p
e
_
i
d
 
=
 
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
T
a
r
i
f
f
s
[
 
$
t
a
r
i
f
f
_
i
d
 
]
 
[
'
r
o
o
m
c
l
a
s
s
_
u
i
d
'
]
;

	
	
	
	
	
$
s
e
l
e
c
t
e
d
_
r
o
o
m
s
_
r
o
o
m
_
t
y
p
e
s
 
[
]
 
=
 
$
b
o
o
k
i
n
g
_
r
o
o
m
_
t
y
p
e
_
i
d
;

	
	
	
	
}

	
	
	
}


	
	
	
f
o
r
e
a
c
h
 
(
$
e
x
L
i
s
t
 
a
s
 
$
e
x
)
 
{

	
	
	
	
$
s
h
o
w
_
e
x
t
r
a
 
=
 
t
r
u
e
;


	
	
	
	
$
a
r
r
i
v
a
l
_
t
s
 
=
 
s
t
r
t
o
t
i
m
e
(
s
t
r
_
r
e
p
l
a
c
e
(
'
/
'
,
 
'
-
'
,
 
$
t
h
i
s
-
>
a
r
r
i
v
a
l
D
a
t
e
)
)
;

	
	
	
	
$
v
a
l
i
d
f
r
o
m
_
t
s
 
=
 
s
t
r
t
o
t
i
m
e
(
$
e
x
-
>
v
a
l
i
d
f
r
o
m
)
;

	
	
	
	
$
v
a
l
i
d
t
o
_
t
s
 
=
 
s
t
r
t
o
t
i
m
e
(
$
e
x
-
>
v
a
l
i
d
t
o
)
;


	
	
	
	
i
f
 
(
$
e
x
-
>
v
a
l
i
d
f
r
o
m
 
>
 
'
1
9
7
0
-
0
1
-
0
1
 
0
0
:
0
0
:
0
1
'
 
&
&
 
!
i
s
_
n
u
l
l
(
$
e
x
-
>
v
a
l
i
d
f
r
o
m
)
 
&
&
 
$
e
x
-
>
v
a
l
i
d
f
r
o
m
 
!
=
 
'
1
9
9
9
-
1
1
-
3
0
 
0
0
:
0
0
:
0
0
'
)
 
{
 
/
/
 
t
a
k
e
s
 
i
n
t
o
 
a
c
c
o
u
n
t
 
o
l
d
e
r
 
o
p
t
i
o
n
a
l
 
e
x
t
r
a
s

	
	
	
	
	
i
f
 
(
!
(
(
$
a
r
r
i
v
a
l
_
t
s
 
>
=
 
$
v
a
l
i
d
f
r
o
m
_
t
s
)
 
&
&
 
(
$
a
r
r
i
v
a
l
_
t
s
 
<
=
 
$
v
a
l
i
d
t
o
_
t
s
)
)
)
 
{

	
	
	
	
	
	
$
s
h
o
w
_
e
x
t
r
a
 
=
 
f
a
l
s
e
;

	
	
	
	
	
}

	
	
	
	
}


	
	
	
	
/
/
 
a
d
d
 
c
h
e
c
k
s
 
f
o
r
 
r
o
o
m
 
t
y
p
e
s


	
	
	
	
i
f
 
(
(
i
n
t
)
 
$
e
x
-
>
l
i
m
i
t
e
d
_
t
o
_
r
o
o
m
_
t
y
p
e
 
>
 
0
 
&
&
 
!
e
m
p
t
y
(
$
s
e
l
e
c
t
e
d
_
r
o
o
m
s
_
r
o
o
m
_
t
y
p
e
s
)
)
 
{

	
	
	
	
	
i
f
 
(
!
i
n
_
a
r
r
a
y
(
(
i
n
t
)
 
$
e
x
-
>
l
i
m
i
t
e
d
_
t
o
_
r
o
o
m
_
t
y
p
e
,
 
$
s
e
l
e
c
t
e
d
_
r
o
o
m
s
_
r
o
o
m
_
t
y
p
e
s
)
)
 
{

	
	
	
	
	
	
$
s
h
o
w
_
e
x
t
r
a
 
=
 
f
a
l
s
e
;

	
	
	
	
	
}

	
	
	
	
}


	
	
	
	
i
f
 
(
!
$
s
h
o
w
_
e
x
t
r
a
)
 
{

	
	
	
	
	
$
t
h
i
s
-
>
r
e
m
o
v
e
E
x
t
r
a
(
$
e
x
-
>
u
i
d
)
;

	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
$
e
x
t
r
a
_
d
e
e
t
s
[
 
'
U
I
D
'
 
]
 
=
 
$
e
x
-
>
u
i
d
;

	
	
	
	
	
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
`
f
o
r
c
e
`
,
`
m
o
d
e
l
`
 
F
R
O
M
 
#
_
_
j
o
m
c
o
m
p
_
e
x
t
r
a
s
m
o
d
e
l
s
_
m
o
d
e
l
s
 
W
H
E
R
E
 
e
x
t
r
a
_
i
d
 
=
 
'
$
e
x
-
>
u
i
d
'
"
;

	
	
	
	
	
$
m
o
d
e
l
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
,
 
2
)
;


	
	
	
	
	
s
w
i
t
c
h
 
(
$
m
o
d
e
l
[
 
'
m
o
d
e
l
'
 
]
)
 
{

	
	
	
	
	
	
c
a
s
e
 
'
1
'
:
 
/
/
 
P
e
r
 
w
e
e
k

	
	
	
	
	
	
	
$
m
o
d
e
l
_
t
e
x
t
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
W
E
E
K
'
,
 
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
W
E
E
K
'
)
)
;

	
	
	
	
	
	
	
b
r
e
a
k
;

	
	
	
	
	
	
c
a
s
e
 
'
2
'
:
 
/
/
 
p
e
r
 
d
a
y
s

	
	
	
	
	
	
	
$
m
o
d
e
l
_
t
e
x
t
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
D
A
Y
S
'
,
 
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
D
A
Y
S
'
)
)
;

	
	
	
	
	
	
	
b
r
e
a
k
;

	
	
	
	
	
	
c
a
s
e
 
'
3
'
:
 
/
/
 
p
e
r
 
b
o
o
k
i
n
g

	
	
	
	
	
	
	
$
m
o
d
e
l
_
t
e
x
t
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
B
O
O
K
I
N
G
'
,
 
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
B
O
O
K
I
N
G
'
)
)
;

	
	
	
	
	
	
	
b
r
e
a
k
;

	
	
	
	
	
	
c
a
s
e
 
'
4
'
:
 
/
/
 
p
e
r
 
p
e
r
s
o
n
 
p
e
r
 
b
o
o
k
i
n
g

	
	
	
	
	
	
	
$
m
o
d
e
l
_
t
e
x
t
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
P
E
R
S
O
N
P
E
R
B
O
O
K
I
N
G
'
,
 
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
P
E
R
S
O
N
P
E
R
B
O
O
K
I
N
G
'
)
)
;

	
	
	
	
	
	
	
b
r
e
a
k
;

	
	
	
	
	
	
c
a
s
e
 
'
5
'
:
 
/
/
 
p
e
r
 
p
e
r
s
o
n
 
p
e
r
 
d
a
y

	
	
	
	
	
	
	
$
m
o
d
e
l
_
t
e
x
t
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
P
E
R
S
O
N
P
E
R
D
A
Y
'
,
 
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
P
E
R
S
O
N
P
E
R
D
A
Y
'
)
)
;

	
	
	
	
	
	
	
b
r
e
a
k
;

	
	
	
	
	
	
c
a
s
e
 
'
6
'
:
 
/
/
 
p
e
r
 
p
e
r
s
o
n
 
p
e
r
 
w
e
e
k

	
	
	
	
	
	
	
$
m
o
d
e
l
_
t
e
x
t
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
P
E
R
S
O
N
P
E
R
W
E
E
K
'
,
 
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
P
E
R
S
O
N
P
E
R
W
E
E
K
'
)
)
;

	
	
	
	
	
	
	
b
r
e
a
k
;

	
	
	
	
	
	
c
a
s
e
 
'
7
'
:
 
/
/
 
p
e
r
 
p
e
r
s
o
n
 
p
e
r
 
d
a
y
s
 
m
i
n
 
d
a
y
s

	
	
	
	
	
	
	
$
m
o
d
e
l
_
t
e
x
t
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
D
A
Y
S
M
I
N
D
A
Y
S
'
,
 
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
D
A
Y
S
M
I
N
D
A
Y
S
'
)
)
;

	
	
	
	
	
	
	
b
r
e
a
k
;

	
	
	
	
	
	
c
a
s
e
 
'
8
'
:
 
/
/
 
p
e
r
 
d
a
y
s
 
p
e
r
 
r
o
o
m

	
	
	
	
	
	
	
$
m
o
d
e
l
_
t
e
x
t
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
D
A
Y
S
P
E
R
R
O
O
M
'
,
 
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
D
A
Y
S
P
E
R
R
O
O
M
'
)
)
;

	
	
	
	
	
	
	
b
r
e
a
k
;

	
	
	
	
	
	
c
a
s
e
 
'
9
'
:
 
/
/
 
p
e
r
 
r
o
o
m

	
	
	
	
	
	
	
$
m
o
d
e
l
_
t
e
x
t
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
R
O
O
M
P
E
R
B
O
O
K
I
N
G
'
,
 
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
R
O
O
M
P
E
R
B
O
O
K
I
N
G
'
)
)
;

	
	
	
	
	
	
	
b
r
e
a
k
;

	
	
	
	
	
	
c
a
s
e
 
'
1
0
0
'
:
 
/
/
 
c
o
m
m
i
s
s
i
o
n

	
	
	
	
	
	
	
$
m
o
d
e
l
_
t
e
x
t
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
M
I
S
S
I
O
N
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
M
I
S
S
I
O
N
'
)
)
;

	
	
	
	
	
	
	
b
r
e
a
k
;

	
	
	
	
	
	
}


	
	
	
	
	
i
f
 
(
i
s
s
e
t
(
$
t
h
i
s
-
>
t
a
x
r
a
t
e
s
[
 
$
e
x
-
>
t
a
x
_
r
a
t
e
 
]
[
 
'
r
a
t
e
'
 
]
)
)
 
{

	
	
	
	
	
	
$
r
a
t
e
 
=
 
(
f
l
o
a
t
)
 
$
t
h
i
s
-
>
t
a
x
r
a
t
e
s
[
 
$
e
x
-
>
t
a
x
_
r
a
t
e
 
]
[
 
'
r
a
t
e
'
 
]
;

	
	
	
	
	
}
 
e
l
s
e
 
{
 
/
/
 
A
n
 
o
l
d
e
r
 
t
a
x
 
r
a
t
e
 
m
a
y
 
h
a
v
e
 
b
e
e
n
 
d
e
l
e
t
e
d

	
	
	
	
	
	
$
r
a
t
e
 
=
 
0
;

	
	
	
	
	
}

	
	
	
	
	

	
	
	
	
	
i
f
 
(
$
m
o
d
e
l
[
 
'
m
o
d
e
l
'
 
]
 
!
=
 
'
1
0
0
'
)
 
{
 
/
/
 
M
o
d
e
l
 
1
0
 
i
s
 
c
o
m
m
i
s
s
i
o
n
,
 
s
o
 
i
t
'
s
 
a
 
p
e
r
c
e
n
t
a
g
e
.

	
	
	
	
	
	
$
p
r
i
c
e
 
=
 
$
e
x
-
>
p
r
i
c
e
;


	
	
	
	
	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
p
r
i
c
e
s
_
i
n
c
l
u
s
i
v
e
'
 
]
 
=
=
 
1
)
 
{

	
	
	
	
	
	
	
$
d
i
v
i
s
o
r
 
=
 
(
$
r
a
t
e
 
/
 
1
0
0
)
 
+
 
1
;

	
	
	
	
	
	
	
$
p
r
i
c
e
 
=
 
$
p
r
i
c
e
 
/
 
$
d
i
v
i
s
o
r
;

	
	
	
	
	
	
}

	
	
	
	
	
	
$
t
a
x
 
=
 
(
$
p
r
i
c
e
 
/
 
1
0
0
)
 
*
 
$
r
a
t
e
;

	
	
	
	
	
	
$
i
n
c
_
p
r
i
c
e
 
=
 
$
p
r
i
c
e
 
+
 
$
t
a
x
;

	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
$
i
n
c
_
p
r
i
c
e
 
=
 
(
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
 
/
 
1
0
0
)
 
*
 
$
e
x
-
>
p
r
i
c
e
;

	
	
	
	
	
	
$
c
o
m
m
i
s
s
i
o
n
_
r
a
t
e
 
=
 
$
e
x
-
>
p
r
i
c
e
;

	
	
	
	
	
}


	
	
	
	
	
$
t
a
x
_
o
u
t
p
u
t
 
=
 
'
'
;

	
	
	
	
	
i
f
 
(
$
r
a
t
e
 
>
 
0
)
 
{

	
	
	
	
	
	
$
t
a
x
_
o
u
t
p
u
t
 
=
 
'
 
(
'
.
$
r
a
t
e
.
'
%
)
'
;

	
	
	
	
	
}

	
	
	
	
	
$
e
x
t
r
a
_
d
e
e
t
s
[
 
'
N
A
M
E
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
N
A
M
E
'
.
$
e
x
-
>
u
i
d
,
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
e
x
-
>
n
a
m
e
)
)
)
;

	
	
	
	
	
$
e
x
t
r
a
_
d
e
e
t
s
[
 
'
M
O
D
E
L
T
E
X
T
'
 
]
 
=
 
$
t
a
x
_
o
u
t
p
u
t
.
'
 
(
 
'
.
$
m
o
d
e
l
_
t
e
x
t
.
'
 
)
'
;

	
	
	
	
	
i
f
 
(
$
m
o
d
e
l
[
 
'
m
o
d
e
l
'
 
]
 
!
=
 
'
1
0
0
'
)
 
{

	
	
	
	
	
	
$
e
x
t
r
a
_
d
e
e
t
s
[
 
'
P
R
I
C
E
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
i
n
c
_
p
r
i
c
e
)
;

	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
$
e
x
t
r
a
_
d
e
e
t
s
[
 
'
P
R
I
C
E
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
i
n
c
_
p
r
i
c
e
)
.
'
 
(
'
.
$
c
o
m
m
i
s
s
i
o
n
_
r
a
t
e
.
'
%
)
'
;

	
	
	
	
	
}


	
	
	
	
	
$
e
x
t
r
a
_
d
e
e
t
s
[
 
'
E
X
T
R
A
_
I
M
A
G
E
'
 
]
 
=
 
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
[
'
n
o
i
m
a
g
e
-
s
m
a
l
l
'
]
;

	
	
	
	
	
i
f
 
(
i
s
s
e
t
(
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
i
m
a
g
e
s
[
'
e
x
t
r
a
s
'
]
[
$
e
x
-
>
u
i
d
]
[
0
]
[
'
s
m
a
l
l
'
]
)
)
 
{

	
	
	
	
	
	
$
e
x
t
r
a
_
d
e
e
t
s
[
 
'
E
X
T
R
A
_
I
M
A
G
E
'
 
]
 
=
 
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
i
m
a
g
e
s
[
'
e
x
t
r
a
s
'
]
[
$
e
x
-
>
u
i
d
]
[
0
]
[
'
s
m
a
l
l
'
]
;

	
	
	
	
	
}


	
	
	
	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
w
h
o
l
e
d
a
y
_
b
o
o
k
i
n
g
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
	
	
	
i
f
 
(
$
e
x
-
>
c
h
a
r
g
a
b
l
e
d
a
i
l
y
 
=
=
 
'
1
'
)
 
{

	
	
	
	
	
	
	
$
e
x
t
r
a
_
d
e
e
t
s
[
 
'
P
E
R
N
I
G
H
T
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
N
_
D
A
Y
_
W
H
O
L
E
D
A
Y
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
N
_
D
A
Y
_
W
H
O
L
E
D
A
Y
'
,
 
f
a
l
s
e
,
 
t
r
u
e
)
)
;

	
	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
	
$
e
x
t
r
a
_
d
e
e
t
s
[
 
'
P
E
R
N
I
G
H
T
'
 
]
 
=
 
'
'
;

	
	
	
	
	
	
}

	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
i
f
 
(
$
e
x
-
>
c
h
a
r
g
a
b
l
e
d
a
i
l
y
 
=
=
 
'
1
'
)
 
{

	
	
	
	
	
	
	
$
e
x
t
r
a
_
d
e
e
t
s
[
 
'
P
E
R
N
I
G
H
T
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
P
E
R
D
A
Y
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
P
E
R
D
A
Y
'
,
 
f
a
l
s
e
,
 
t
r
u
e
)
)
;

	
	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
	
$
e
x
t
r
a
_
d
e
e
t
s
[
 
'
P
E
R
N
I
G
H
T
'
 
]
 
=
 
'
'
;

	
	
	
	
	
	
}

	
	
	
	
	
}

	
	
	
	
	
$
e
x
t
r
a
_
d
e
e
t
s
[
 
'
D
E
S
C
R
I
P
T
I
O
N
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
D
E
S
C
'
.
$
e
x
-
>
u
i
d
,
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
e
x
-
>
d
e
s
c
)
)
)
;


	
	
	
	
	
$
d
e
s
c
r
i
p
t
i
o
n
F
o
r
O
v
e
r
l
i
b
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
D
E
S
C
'
.
$
e
x
-
>
u
i
d
,
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
e
x
-
>
d
e
s
c
)
,
 
f
a
l
s
e
,
 
t
r
u
e
)
;


	
	
	
	
	
$
e
x
t
r
a
_
d
e
e
t
s
[
 
'
O
V
E
R
L
I
B
_
D
E
S
C
R
I
P
T
I
O
N
'
 
]
 
=
 
$
d
e
s
c
r
i
p
t
i
o
n
F
o
r
O
v
e
r
l
i
b
;


	
	
	
	
	
$
c
h
e
c
k
e
d
 
=
 
'
'
;

	
	
	
	
	
i
f
 
(
$
t
h
i
s
-
>
e
x
t
r
a
A
l
r
e
a
d
y
S
e
l
e
c
t
e
d
(
$
e
x
-
>
u
i
d
)
 
|
|
 
(
i
n
t
)
 
$
e
x
-
>
a
u
t
o
_
s
e
l
e
c
t
 
=
=
 
1
)
 
{

	
	
	
	
	
	
$
c
h
e
c
k
e
d
 
=
 
'
 
c
h
e
c
k
e
d
 
'
;

	
	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
x
t
r
a
s
(
$
e
x
-
>
u
i
d
)
;

	
	
	
	
	
	
$
e
x
t
r
a
D
e
f
a
u
l
t
Q
u
a
n
t
i
t
y
 
=
 
$
t
h
i
s
-
>
e
x
t
r
a
s
q
u
a
n
t
i
t
i
e
s
[
 
$
e
x
-
>
u
i
d
 
]
;

	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
$
e
x
t
r
a
D
e
f
a
u
l
t
Q
u
a
n
t
i
t
y
 
=
 
1
;

	
	
	
	
	
}

	
	
	
	
	
$
i
n
p
u
t
I
d
 
=
 
p
r
e
g
_
r
e
p
l
a
c
e
(
'
/
[
^
A
-
Z
a
-
z
0
-
9
_
-
]
+
/
'
,
 
'
'
,
 
$
e
x
-
>
n
a
m
e
)
;

	
	
	
	
	
i
f
 
(
s
t
r
l
e
n
(
$
i
n
p
u
t
I
d
)
 
=
=
 
0
)
 
{

	
	
	
	
	
	
$
i
n
p
u
t
I
d
 
=
 
g
e
n
e
r
a
t
e
J
o
m
r
e
s
R
a
n
d
o
m
S
t
r
i
n
g
(
1
0
)
;

	
	
	
	
	
}

	
	
	
	
	
$
f
i
r
s
t
C
h
a
r
 
=
 
$
i
n
p
u
t
I
d
[
 
0
 
]
;
 
/
/
 
W
e
'
l
l
 
a
d
d
 
a
 
s
i
m
p
l
e
 
t
e
s
t
 
h
e
r
e
 
t
o
 
c
h
a
n
g
e
 
t
h
e
 
f
i
r
s
t
 
c
h
a
r
 
t
o
 
X
 
i
f
 
t
h
e
 
f
i
r
s
t
 
c
h
a
r
a
c
t
e
r
'
s
 
a
c
t
u
a
l
l
y
 
a
 
n
u
m
b
e
r
,
 
o
t
h
e
r
w
i
s
e
 
t
h
e
 
g
e
t
R
e
s
p
o
n
s
e
_
e
x
t
r
a
s
 
w
i
l
l
 
n
o
t
 
w
o
r
k
.

	
	
	
	
	
i
f
 
(
$
f
i
r
s
t
C
h
a
r
 
=
=
 
'
0
'
 
|
|
 
$
f
i
r
s
t
C
h
a
r
 
=
=
 
'
1
'
 
|
|
 
$
f
i
r
s
t
C
h
a
r
 
=
=
 
'
2
'
 
|
|
 
$
f
i
r
s
t
C
h
a
r
 
=
=
 
'
3
'
 
|
|
 
$
f
i
r
s
t
C
h
a
r
 
=
=
 
'
4
'
 
|
|
 
$
f
i
r
s
t
C
h
a
r
 
=
=
 
'
5
'
 
|
|
 
$
f
i
r
s
t
C
h
a
r
 
=
=
 
'
6
'
 
|
|
 
$
f
i
r
s
t
C
h
a
r
 
=
=
 
'
7
'
 
|
|
 
$
f
i
r
s
t
C
h
a
r
 
=
=
 
'
8
'
 
|
|
 
$
f
i
r
s
t
C
h
a
r
 
=
=
 
'
9
'
)
 
{

	
	
	
	
	
	
$
i
n
p
u
t
I
d
 
=
 
'
X
'
.
$
i
n
p
u
t
I
d
;

	
	
	
	
	
}


	
	
	
	
	
$
c
l
i
c
k
U
n
l
o
c
k
 
=
 
'
'
;

	
	
	
	
	
i
f
 
(
$
m
o
d
e
l
[
 
'
f
o
r
c
e
'
 
]
 
!
=
 
'
1
'
)
 
{

	
	
	
	
	
	
$
e
x
t
r
a
_
d
e
e
t
s
[
 
'
I
N
P
U
T
B
O
X
'
 
]
 
=
 
'
<
i
n
p
u
t
 
i
d
=
"
e
x
t
r
a
s
_
'
.
$
e
x
-
>
u
i
d
.
'
"
 
t
y
p
e
=
"
c
h
e
c
k
b
o
x
"
 
n
a
m
e
=
"
e
x
t
r
a
s
[
'
.
$
e
x
-
>
u
i
d
.
'
]
"
 
v
a
l
u
e
=
"
'
.
$
e
x
-
>
u
i
d
.
'
"
 
'
.
$
c
h
e
c
k
e
d
.
'
 
a
u
t
o
c
o
m
p
l
e
t
e
=
"
o
f
f
"
 
 
o
n
C
l
i
c
k
=
"
'
.
$
c
l
i
c
k
U
n
l
o
c
k
.
'
g
e
t
R
e
s
p
o
n
s
e
_
e
x
t
r
a
s
(
\
'
e
x
t
r
a
s
\
'
,
t
h
i
s
.
v
a
l
u
e
,
'
.
$
e
x
-
>
u
i
d
.
'
)
;
"
 
/
>
'
;

	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
$
t
h
i
s
-
>
f
o
r
c
e
d
E
x
t
r
a
s
[
 
]
 
=
 
$
e
x
-
>
u
i
d
;

	
	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
x
t
r
a
s
(
$
e
x
-
>
u
i
d
)
;

	
	
	
	
	
	
$
e
x
t
r
a
_
d
e
e
t
s
[
 
'
I
N
P
U
T
B
O
X
'
 
]
 
=
 
'
<
i
n
p
u
t
 
i
d
=
"
e
x
t
r
a
s
_
'
.
$
e
x
-
>
u
i
d
.
'
"
 
t
y
p
e
=
"
c
h
e
c
k
b
o
x
"
 
c
h
e
c
k
e
d
 
d
i
s
a
b
l
e
d
=
"
 
"
 
n
a
m
e
=
"
e
x
t
r
a
s
[
'
.
$
e
x
-
>
u
i
d
.
'
]
"
 
v
a
l
u
e
=
"
'
.
$
e
x
-
>
u
i
d
.
'
"
 
/
>
'
;

	
	
	
	
	
}

	
	
	
	
	
$
e
x
t
r
a
_
d
e
e
t
s
[
 
'
F
I
E
L
D
N
A
M
E
'
 
]
 
=
 
'
e
x
t
r
a
s
[
'
.
$
e
x
-
>
u
i
d
.
'
]
'
;


	
	
	
	
	
$
e
x
t
r
a
_
q
u
a
n
t
i
t
y
_
d
r
o
p
d
o
w
n
_
d
i
s
a
b
l
e
d
 
=
 
'
 
d
i
s
a
b
l
e
d
=
"
 
"
 
'
;

	
	
	
	
	
i
f
 
(
$
t
h
i
s
-
>
e
x
t
r
a
A
l
r
e
a
d
y
S
e
l
e
c
t
e
d
(
$
e
x
-
>
u
i
d
)
)
 
{

	
	
	
	
	
	
$
e
x
t
r
a
_
q
u
a
n
t
i
t
y
_
d
r
o
p
d
o
w
n
_
d
i
s
a
b
l
e
d
 
=
 
'
 
'
;

	
	
	
	
	
}


	
	
	
	
	
i
f
 
(
$
e
x
-
>
m
a
x
q
u
a
n
t
i
t
y
 
>
 
1
)
 
{

	
	
	
	
	
	
$
e
x
t
r
a
_
d
e
e
t
s
[
 
'
I
N
P
U
T
B
O
X
'
 
]
 
=

	
	
	
	
	
	
	
$
e
x
t
r
a
_
d
e
e
t
s
[
 
'
I
N
P
U
T
B
O
X
'
 
]
.
'
&
n
b
s
p
;
&
n
b
s
p
;
'
.

	
	
	
	
	
	
	
j
o
m
r
e
s
H
T
M
L
:
:
i
n
t
e
g
e
r
S
e
l
e
c
t
L
i
s
t
(
0
1
,
 
$
e
x
-
>
m
a
x
q
u
a
n
t
i
t
y
,
 
1
,
 
'
q
u
a
n
t
i
t
y
'
.
$
e
x
-
>
u
i
d
,
 
'
s
i
z
e
=
"
1
"
 
c
l
a
s
s
=
"
i
n
p
u
t
-
m
i
n
i
"
 
 
a
u
t
o
c
o
m
p
l
e
t
e
=
"
o
f
f
"
 
'
.
$
e
x
t
r
a
_
q
u
a
n
t
i
t
y
_
d
r
o
p
d
o
w
n
_
d
i
s
a
b
l
e
d
.
'
 
o
n
c
h
a
n
g
e
=
"
g
e
t
R
e
s
p
o
n
s
e
_
e
x
t
r
a
s
q
u
a
n
t
i
t
y
(
\
'
e
x
t
r
a
s
q
u
a
n
t
i
t
y
\
'
,
t
h
i
s
.
v
a
l
u
e
,
'
.
$
e
x
-
>
u
i
d
.
'
)
;
"
'
,
 
$
e
x
t
r
a
D
e
f
a
u
l
t
Q
u
a
n
t
i
t
y
,
 
'
%
0
2
d
'
,
 
$
u
s
e
_
b
o
o
t
s
t
r
a
p
_
r
a
d
i
o
s
 
=
 
f
a
l
s
e
)
;

	
	
	
	
	
}


	
	
	
	
	
$
e
x
t
r
a
_
d
e
e
t
s
[
 
'
A
J
A
X
F
O
R
M
_
E
X
T
R
A
S
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
E
X
T
R
A
S
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
E
X
T
R
A
S
'
)
)
;

	
	
	
	
	
$
e
x
t
r
a
_
d
e
e
t
s
[
 
'
A
J
A
X
F
O
R
M
_
E
X
T
R
A
S
_
D
E
S
C
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
E
X
T
R
A
S
_
D
E
S
C
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
E
X
T
R
A
S
_
D
E
S
C
'
,
 
f
a
l
s
e
)
)
;

	
	
	
	
	
$
e
x
t
r
a
_
d
e
e
t
s
[
 
'
E
X
T
R
A
S
_
T
O
T
A
L
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
E
X
T
R
A
S
_
T
O
T
A
L
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
E
X
T
R
A
S
_
T
O
T
A
L
'
)
)
;


	
	
	
	
	
$
e
x
t
r
a
_
d
e
t
a
i
l
s
[
 
]
 
=
 
$
e
x
t
r
a
_
d
e
e
t
s
;

	
	
	
	
}

	
	
	
}

	
	
}


	
	
i
f
 
(
!
e
m
p
t
y
(
$
e
x
t
r
a
_
d
e
t
a
i
l
s
)
)
 
{

	
	
	
$
t
m
p
l
 
=
 
n
e
w
 
p
a
t
T
e
m
p
l
a
t
e
(
)
;

	
	
	
$
t
m
p
l
-
>
s
e
t
R
o
o
t
(
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
P
A
T
H
_
F
R
O
N
T
E
N
D
)
;

	
	
	
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
e
x
t
r
a
s
'
,
 
$
e
x
t
r
a
_
d
e
t
a
i
l
s
)
;

	
	
	
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
d
o
b
o
o
k
i
n
g
_
e
x
t
r
a
s
.
h
t
m
l
'
)
;

	
	
	
$
e
x
t
r
a
s
_
t
e
m
p
l
a
t
e
 
=
 
$
t
m
p
l
-
>
g
e
t
P
a
r
s
e
d
T
e
m
p
l
a
t
e
(
)
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
e
x
t
r
a
s
_
t
e
m
p
l
a
t
e
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
E
X
T
R
A
S
_
N
O
E
X
T
R
A
S
'
,
 
'
_
J
O
M
R
E
S
_
E
X
T
R
A
S
_
N
O
E
X
T
R
A
S
'
)
)
;

	
	
}


	
	
r
e
t
u
r
n
 
a
r
r
a
y
(
'
c
o
r
e
_
e
x
t
r
a
s
'
 
=
>
 
$
e
x
t
r
a
s
_
t
e
m
p
l
a
t
e
)
;

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
m
a
k
e
T
h
i
r
d
P
a
r
t
y
E
x
t
r
a
s
(
$
s
e
l
e
c
t
e
d
P
r
o
p
e
r
t
y
)

	
{

	
	
$
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
 
=
 
a
r
r
a
y
(
)
;


	
	
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
 
=
 
j
o
m
r
e
s
_
g
e
t
S
i
n
g
l
e
t
o
n
(
'
m
c
H
a
n
d
l
e
r
'
)
;

	
	
i
f
 
(
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
e
v
e
n
t
F
i
l
e
E
x
i
s
t
s
C
h
e
c
k
(
'
0
5
0
3
0
'
)
)
 
{

	
	
	
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
t
r
i
g
g
e
r
E
v
e
n
t
(
'
0
5
0
3
0
'
,
 
$
t
h
i
s
)
;


	
	
	
$
m
c
O
u
t
p
u
t
 
=
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
g
e
t
A
l
l
E
v
e
n
t
P
o
i
n
t
s
D
a
t
a
(
'
0
5
0
3
0
'
)
;


	
	
	
i
f
 
(
!
e
m
p
t
y
(
$
m
c
O
u
t
p
u
t
)
)
 
{

	
	
	
	
f
o
r
e
a
c
h
 
(
$
m
c
O
u
t
p
u
t
 
a
s
 
$
k
e
y
 
=
>
 
$
v
a
l
)
 
{

	
	
	
	
	
$
t
p
e
 
=
 
a
r
r
a
y
(
)
;

	
	
	
	
	
$
t
p
e
[
 
'
T
H
I
R
D
_
P
A
R
T
Y
_
E
X
T
R
A
'
 
]
 
=
 
$
v
a
l
;

	
	
	
	
	
$
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
[
 
]
 
=
 
$
t
p
e
;

	
	
	
	
}

	
	
	
}

	
	
}


	
	
r
e
t
u
r
n
 
a
r
r
a
y
(
'
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
'
 
=
>
 
$
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
)
;

	
}


	
/
*
*

	
 
*
 
M
a
k
e
 
t
h
e
 
O
u
t
p
u
t
 
t
e
x
t
,
 
p
u
t
 
t
h
e
m
 
i
n
t
o
 
a
n
 
a
r
r
a
y
 
f
o
r
 
p
a
t
T
e
m
p
l
a
t
e
 
a
n
d
 
r
e
t
u
r
n
 
t
h
e
 
a
r
r
a
y
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
m
a
k
e
O
u
t
p
u
t
T
e
x
t
(
)

	
{

	
	
$
m
r
C
o
n
f
i
g
 
=
 
$
t
h
i
s
-
>
m
r
C
o
n
f
i
g
;


	
	
$
t
h
i
s
J
R
U
s
e
r
 
=
 
j
o
m
r
e
s
_
g
e
t
S
i
n
g
l
e
t
o
n
(
'
j
r
_
u
s
e
r
'
)
;


	
	
$
t
a
x
_
o
u
t
p
u
t
 
=
 
'
'
;

	
	
i
f
 
(
$
t
h
i
s
-
>
a
c
c
o
m
m
o
d
a
t
i
o
n
_
t
a
x
_
r
a
t
e
 
>
 
0
)
 
{

	
	
	
$
t
a
x
_
o
u
t
p
u
t
 
=
 
'
 
(
'
.
$
t
h
i
s
-
>
a
c
c
o
m
m
o
d
a
t
i
o
n
_
t
a
x
_
r
a
t
e
.
'
%
)
'
;

	
	
}


	
	
$
o
u
t
p
u
t
 
=
 
a
r
r
a
y
(
)
;

	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
w
h
o
l
e
d
a
y
_
b
o
o
k
i
n
g
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
$
o
u
t
p
u
t
[
 
'
H
A
R
R
I
V
A
L
D
A
T
E
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
A
R
R
I
V
A
L
_
W
H
O
L
E
D
A
Y
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
A
R
R
I
V
A
L
_
W
H
O
L
E
D
A
Y
'
)
)
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
o
u
t
p
u
t
[
 
'
H
A
R
R
I
V
A
L
D
A
T
E
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
A
R
R
I
V
A
L
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
A
R
R
I
V
A
L
'
)
)
;

	
	
}

	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
s
h
o
w
d
e
p
a
r
t
u
r
e
i
n
p
u
t
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
	
$
o
u
t
p
u
t
[
 
'
H
D
E
P
A
R
T
U
R
E
D
A
T
E
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
F
I
X
E
D
P
R
I
O
D
1
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
F
I
X
E
D
P
R
I
O
D
1
'
)
)
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
w
h
o
l
e
d
a
y
_
b
o
o
k
i
n
g
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
	
	
$
o
u
t
p
u
t
[
 
'
H
D
E
P
A
R
T
U
R
E
D
A
T
E
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
D
E
P
A
R
T
U
R
E
_
W
H
O
L
E
D
A
Y
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
D
E
P
A
R
T
U
R
E
_
W
H
O
L
E
D
A
Y
'
)
)
;

	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
$
o
u
t
p
u
t
[
 
'
H
D
E
P
A
R
T
U
R
E
D
A
T
E
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
D
E
P
A
R
T
U
R
E
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
D
E
P
A
R
T
U
R
E
'
)
)
;

	
	
	
	
}

	
	
	
}

	
	
}
 
e
l
s
e
 
{

	
	
	
$
o
u
t
p
u
t
[
 
'
H
D
E
P
A
R
T
U
R
E
D
A
T
E
'
 
]
 
=
 
'
&
n
b
s
p
;
'
;

	
	
}


	
	
$
o
u
t
p
u
t
[
 
'
B
O
O
K
I
N
G
H
E
A
D
E
R
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
Q
U
I
C
K
R
E
S
D
E
S
C
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
Q
U
I
C
K
R
E
S
D
E
S
C
'
)
)
;

	
	
$
o
u
t
p
u
t
[
 
'
A
D
D
R
E
S
S
H
E
A
D
E
R
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
P
R
O
P
E
R
T
I
E
S
L
I
S
T
I
N
G
_
T
H
I
S
P
R
O
P
E
R
T
Y
A
D
D
R
E
S
S
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
P
R
O
P
E
R
T
I
E
S
L
I
S
T
I
N
G
_
T
H
I
S
P
R
O
P
E
R
T
Y
A
D
D
R
E
S
S
'
)
)
;

	
	
$
o
u
t
p
u
t
[
 
'
H
E
X
T
I
T
L
E
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
B
O
O
K
I
N
G
_
E
X
T
R
A
S
_
H
E
L
P
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
B
O
O
K
I
N
G
_
E
X
T
R
A
S
_
H
E
L
P
'
)
)
;


	
	
$
o
u
t
p
u
t
[
 
'
R
E
Q
U
I
R
E
D
T
E
X
T
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
J
A
V
A
S
C
R
I
P
T
_
'
,
 
'
_
J
O
M
R
E
S
_
J
A
V
A
S
C
R
I
P
T
_
'
)
)
;

	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
t
a
r
i
f
f
C
h
a
r
g
e
s
S
t
o
r
e
d
W
e
e
k
l
y
Y
e
s
N
o
'
 
]
 
=
=
 
'
0
'
)
 
{

	
	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
w
h
o
l
e
d
a
y
_
b
o
o
k
i
n
g
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
	
$
o
u
t
p
u
t
[
 
'
B
I
L
L
I
N
G
_
R
O
O
M
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
N
_
D
A
Y
_
W
H
O
L
E
D
A
Y
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
N
_
D
A
Y
_
W
H
O
L
E
D
A
Y
'
)
)
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
o
u
t
p
u
t
[
 
'
B
I
L
L
I
N
G
_
R
O
O
M
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
R
O
O
M
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
R
O
O
M
'
)
)
;

	
	
	
}

	
	
}

	
	
$
o
u
t
p
u
t
[
 
'
B
I
L
L
I
N
G
_
R
O
O
M
T
O
T
A
L
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
R
O
O
M
_
T
O
T
A
L
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
R
O
O
M
_
T
O
T
A
L
'
)
)
;

	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
s
h
o
w
E
x
t
r
a
s
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
$
o
u
t
p
u
t
[
 
'
B
I
L
L
I
N
G
_
E
X
T
R
A
S
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
E
X
T
R
A
S
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
E
X
T
R
A
S
'
)
)
;

	
	
}

	
	
i
f
 
(
g
e
t
_
s
h
o
w
t
i
m
e
(
'
i
n
c
l
u
d
e
_
r
o
o
m
_
b
o
o
k
i
n
g
_
f
u
n
c
t
i
o
n
a
l
i
t
y
'
)
)
 
{

	
	
	
$
o
u
t
p
u
t
[
 
'
B
I
L
L
I
N
G
_
T
A
X
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
T
A
X
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
T
A
X
'
)
)
;

	
	
}


	
	
$
o
u
t
p
u
t
[
 
'
B
I
L
L
I
N
G
_
D
I
S
C
O
U
N
T
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
D
I
S
C
O
U
N
T
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
D
I
S
C
O
U
N
T
'
)
)
;


	
	
$
o
u
t
p
u
t
[
 
'
B
I
L
L
I
N
G
_
T
O
T
A
L
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
T
O
T
A
L
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
T
O
T
A
L
'
)
)
;

	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
c
h
a
r
g
e
D
e
p
o
s
i
t
Y
e
s
N
o
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
$
o
u
t
p
u
t
[
 
'
D
E
P
O
S
I
T
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
P
A
Y
M
_
D
E
P
O
S
I
T
R
E
Q
U
I
R
E
D
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
P
A
Y
M
_
D
E
P
O
S
I
T
R
E
Q
U
I
R
E
D
'
)
)
;

	
	
}

	
	
/
/
$
o
u
t
p
u
t
[
'
C
U
R
R
E
N
C
Y
_
S
Y
M
B
O
L
'
]
	
	
=
$
m
r
C
o
n
f
i
g
[
'
c
u
r
r
e
n
c
y
'
]
;

	
	
$
o
u
t
p
u
t
[
 
'
B
I
L
L
I
N
G
_
T
O
T
A
L
I
N
P
A
R
T
Y
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
T
O
T
A
L
I
N
P
A
R
T
Y
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
T
O
T
A
L
I
N
P
A
R
T
Y
'
)
)
;

	
	
$
o
u
t
p
u
t
[
 
'
A
J
A
X
F
O
R
M
_
P
A
R
T
I
C
U
L
A
R
S
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
P
A
R
T
I
C
U
L
A
R
S
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
P
A
R
T
I
C
U
L
A
R
S
'
)
)
;

	
	
$
o
u
t
p
u
t
[
 
'
A
J
A
X
F
O
R
M
_
P
A
R
T
I
C
U
L
A
R
S
_
D
E
S
C
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
P
A
R
T
I
C
U
L
A
R
S
_
D
E
S
C
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
P
A
R
T
I
C
U
L
A
R
S
_
D
E
S
C
'
)
)
;

	
	
$
o
u
t
p
u
t
[
 
'
A
J
A
X
F
O
R
M
_
A
V
A
I
L
A
B
L
E
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
V
A
I
L
A
B
L
E
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
V
A
I
L
A
B
L
E
'
)
)
;

	
	
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
i
s
_
p
a
r
t
n
e
r
)
 
{

	
	
	
$
o
u
t
p
u
t
[
 
'
A
J
A
X
F
O
R
M
_
A
D
D
R
E
S
S
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
P
A
R
T
N
E
R
S
_
G
U
E
S
T
_
A
D
D
R
E
S
S
'
,
 
'
_
J
O
M
R
E
S
_
P
A
R
T
N
E
R
S
_
G
U
E
S
T
_
A
D
D
R
E
S
S
'
)
)
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
o
u
t
p
u
t
[
 
'
A
J
A
X
F
O
R
M
_
A
D
D
R
E
S
S
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
D
D
R
E
S
S
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
D
D
R
E
S
S
'
)
)
;

	
	
}

	
	
$
o
u
t
p
u
t
[
 
'
A
J
A
X
F
O
R
M
_
A
D
D
R
E
S
S
_
D
E
S
C
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
D
D
R
E
S
S
_
D
E
S
C
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
D
D
R
E
S
S
_
D
E
S
C
'
,
 
f
a
l
s
e
)
)
;

	
	
$
o
u
t
p
u
t
[
 
'
A
J
A
X
F
O
R
M
_
A
V
A
I
L
A
B
L
E
R
O
O
M
S
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
V
A
I
L
A
B
L
E
R
O
O
M
S
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
V
A
I
L
A
B
L
E
R
O
O
M
S
'
)
)
;

	
	
$
o
u
t
p
u
t
[
 
'
A
J
A
X
F
O
R
M
_
S
E
L
E
C
T
E
D
R
O
O
M
S
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
S
E
L
E
C
T
E
D
R
O
O
M
S
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
S
E
L
E
C
T
E
D
R
O
O
M
S
'
,
 
f
a
l
s
e
)
)
;


	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
'
 
]
 
=
=
 
'
0
'
)
 
{

	
	
	
$
o
u
t
p
u
t
[
 
'
A
J
A
X
F
O
R
M
_
A
V
A
I
L
A
B
L
E
R
O
O
M
S
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
V
A
I
L
A
B
L
E
R
O
O
M
S
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
V
A
I
L
A
B
L
E
R
O
O
M
S
'
)
)
;

	
	
	
$
o
u
t
p
u
t
[
 
'
A
J
A
X
F
O
R
M
_
S
E
L
E
C
T
E
D
R
O
O
M
S
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
S
E
L
E
C
T
E
D
R
O
O
M
S
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
S
E
L
E
C
T
E
D
R
O
O
M
S
'
,
 
f
a
l
s
e
)
)
;

	
	
	
$
o
u
t
p
u
t
[
 
'
A
J
A
X
F
O
R
M
_
A
V
A
I
L
A
B
L
E
_
D
E
S
C
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
V
A
I
L
A
B
L
E
_
D
E
S
C
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
V
A
I
L
A
B
L
E
_
D
E
S
C
'
,
 
f
a
l
s
e
)
)
;

	
	
	
$
o
u
t
p
u
t
[
 
'
A
J
A
X
F
O
R
M
_
I
N
S
T
R
U
C
T
I
O
N
S
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
I
N
S
T
R
U
C
T
I
O
N
S
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
I
N
S
T
R
U
C
T
I
O
N
S
'
)
)
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
o
u
t
p
u
t
[
 
'
A
J
A
X
F
O
R
M
_
A
V
A
I
L
A
B
L
E
R
O
O
M
S
'
 
]
 
=
 
'
'
;

	
	
	
$
o
u
t
p
u
t
[
 
'
A
J
A
X
F
O
R
M
_
S
E
L
E
C
T
E
D
R
O
O
M
S
'
 
]
 
=
 
'
'
;

	
	
	
$
o
u
t
p
u
t
[
 
'
A
J
A
X
F
O
R
M
_
A
V
A
I
L
A
B
L
E
_
D
E
S
C
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
V
A
I
L
A
B
L
E
_
D
E
S
C
_
S
R
P
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
V
A
I
L
A
B
L
E
_
D
E
S
C
_
S
R
P
'
,
 
f
a
l
s
e
)
)
;

	
	
	
$
o
u
t
p
u
t
[
 
'
A
J
A
X
F
O
R
M
_
I
N
S
T
R
U
C
T
I
O
N
S
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
I
N
S
T
R
U
C
T
I
O
N
S
_
S
R
P
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
I
N
S
T
R
U
C
T
I
O
N
S
_
S
R
P
'
)
)
;

	
	
}


	
	
$
o
u
t
p
u
t
[
 
'
A
C
C
O
M
M
O
D
A
T
I
O
N
_
T
O
T
A
L
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
T
O
T
A
L
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
T
O
T
A
L
'
)
)
.
$
t
a
x
_
o
u
t
p
u
t
;


	
	
s
w
i
t
c
h
 
(
$
t
h
i
s
-
>
c
f
g
_
b
o
o
k
i
n
g
_
f
o
r
m
_
d
a
i
l
y
_
w
e
e
k
l
y
_
m
o
n
t
h
l
y
)
 
{

	
	
	
c
a
s
e
 
'
D
'
:

	
	
	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
w
h
o
l
e
d
a
y
_
b
o
o
k
i
n
g
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
	
	
$
o
u
t
p
u
t
[
 
'
A
C
C
O
M
M
O
D
A
T
I
O
N
_
N
I
G
H
T
S
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
N
I
G
H
T
S
_
W
H
O
L
E
D
A
Y
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
N
I
G
H
T
S
_
W
H
O
L
E
D
A
Y
'
)
)
;

	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
$
o
u
t
p
u
t
[
 
'
A
C
C
O
M
M
O
D
A
T
I
O
N
_
N
I
G
H
T
S
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
N
I
G
H
T
S
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
N
I
G
H
T
S
'
)
)
;

	
	
	
	
}

	
	
	
	
b
r
e
a
k
;

	
	
	
c
a
s
e
 
'
W
'
:

	
	
	
	
$
o
u
t
p
u
t
[
 
'
A
C
C
O
M
M
O
D
A
T
I
O
N
_
N
I
G
H
T
S
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
W
E
E
K
S
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
W
E
E
K
S
'
)
)
;

	
	
	
	
b
r
e
a
k
;

	
	
	
c
a
s
e
 
'
M
'
:

	
	
	
	
$
o
u
t
p
u
t
[
 
'
A
C
C
O
M
M
O
D
A
T
I
O
N
_
N
I
G
H
T
S
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
M
O
N
T
H
S
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
M
O
N
T
H
S
'
)
)
;

	
	
	
	
b
r
e
a
k
;

	
	
}


	
	
/
*
 
	
	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
'
p
e
r
P
e
r
s
o
n
P
e
r
N
i
g
h
t
'
]
 
=
=
 
"
0
"
 
)

	
	
	
	
$
o
u
t
p
u
t
[
'
A
C
C
O
M
M
O
D
A
T
I
O
N
_
P
E
R
R
O
O
M
'
]
=
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
P
E
R
R
O
O
M
'
,
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
P
E
R
R
O
O
M
)
)
;

	
	
	
e
l
s
e

	
	
	
	
$
o
u
t
p
u
t
[
'
A
C
C
O
M
M
O
D
A
T
I
O
N
_
P
E
R
R
O
O
M
'
]
=
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
P
E
R
P
E
R
S
O
N
'
,
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
P
E
R
P
E
R
S
O
N
)
)
;
 
*
/


	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
p
e
r
P
e
r
s
o
n
P
e
r
N
i
g
h
t
'
 
]
 
=
=
 
'
0
'
)
 
{

	
	
	
s
w
i
t
c
h
 
(
$
t
h
i
s
-
>
c
f
g
_
b
o
o
k
i
n
g
_
f
o
r
m
_
d
a
i
l
y
_
w
e
e
k
l
y
_
m
o
n
t
h
l
y
)
 
{

	
	
	
	
c
a
s
e
 
'
D
'
:

	
	
	
	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
w
h
o
l
e
d
a
y
_
b
o
o
k
i
n
g
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
	
	
	
$
o
u
t
p
u
t
[
 
'
A
C
C
O
M
M
O
D
A
T
I
O
N
_
P
E
R
R
O
O
M
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
N
_
D
A
Y
_
W
H
O
L
E
D
A
Y
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
N
_
D
A
Y
_
W
H
O
L
E
D
A
Y
'
)
)
;

	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
$
o
u
t
p
u
t
[
 
'
A
C
C
O
M
M
O
D
A
T
I
O
N
_
P
E
R
R
O
O
M
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
D
A
I
L
Y
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
D
A
I
L
Y
'
)
)
;

	
	
	
	
	
}

	
	
	
	
	
b
r
e
a
k
;

	
	
	
	
c
a
s
e
 
'
W
'
:

	
	
	
	
	
$
o
u
t
p
u
t
[
 
'
A
C
C
O
M
M
O
D
A
T
I
O
N
_
P
E
R
R
O
O
M
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
W
E
E
K
L
Y
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
W
E
E
K
L
Y
'
)
)
;

	
	
	
	
	
b
r
e
a
k
;

	
	
	
	
c
a
s
e
 
'
M
'
:

	
	
	
	
	
$
o
u
t
p
u
t
[
 
'
A
C
C
O
M
M
O
D
A
T
I
O
N
_
P
E
R
R
O
O
M
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
M
O
N
T
H
L
Y
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
M
O
N
T
H
L
Y
'
)
)
;

	
	
	
	
	
b
r
e
a
k
;

	
	
	
}

	
	
}
 
e
l
s
e
 
{

	
	
	
s
w
i
t
c
h
 
(
$
t
h
i
s
-
>
c
f
g
_
b
o
o
k
i
n
g
_
f
o
r
m
_
d
a
i
l
y
_
w
e
e
k
l
y
_
m
o
n
t
h
l
y
)
 
{

	
	
	
	
c
a
s
e
 
'
D
'
:

	
	
	
	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
w
h
o
l
e
d
a
y
_
b
o
o
k
i
n
g
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
	
	
	
$
o
u
t
p
u
t
[
 
'
A
C
C
O
M
M
O
D
A
T
I
O
N
_
P
E
R
R
O
O
M
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
P
E
R
P
E
R
S
O
N
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
P
E
R
P
E
R
S
O
N
'
)
)
.
'
 
'
.
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
N
_
D
A
Y
_
W
H
O
L
E
D
A
Y
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
N
_
D
A
Y
_
W
H
O
L
E
D
A
Y
'
)
)
;

	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
$
o
u
t
p
u
t
[
 
'
A
C
C
O
M
M
O
D
A
T
I
O
N
_
P
E
R
R
O
O
M
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
P
E
R
P
E
R
S
O
N
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
P
E
R
P
E
R
S
O
N
'
)
)
.
'
 
'
.
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
D
A
I
L
Y
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
D
A
I
L
Y
'
)
)
;

	
	
	
	
	
}

	
	
	
	
	
b
r
e
a
k
;

	
	
	
	
c
a
s
e
 
'
W
'
:

	
	
	
	
	
$
o
u
t
p
u
t
[
 
'
A
C
C
O
M
M
O
D
A
T
I
O
N
_
P
E
R
R
O
O
M
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
P
E
R
P
E
R
S
O
N
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
P
E
R
P
E
R
S
O
N
'
)
)
.
'
 
'
.
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
W
E
E
K
L
Y
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
W
E
E
K
L
Y
'
)
)
;

	
	
	
	
	
b
r
e
a
k
;

	
	
	
	
c
a
s
e
 
'
M
'
:

	
	
	
	
	
$
o
u
t
p
u
t
[
 
'
A
C
C
O
M
M
O
D
A
T
I
O
N
_
P
E
R
R
O
O
M
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
P
E
R
P
E
R
S
O
N
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
P
E
R
P
E
R
S
O
N
'
)
)
.
'
 
'
.
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
M
O
N
T
H
L
Y
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
M
O
N
T
H
L
Y
'
)
)
;

	
	
	
	
	
b
r
e
a
k
;

	
	
	
}

	
	
}


	
	
$
o
u
t
p
u
t
[
 
'
P
R
I
C
E
_
S
U
M
M
A
R
Y
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
P
R
I
C
E
_
S
U
M
M
A
R
Y
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
P
R
I
C
E
_
S
U
M
M
A
R
Y
'
)
)
;


	
	
$
o
u
t
p
u
t
[
 
'
E
R
R
O
R
B
A
C
K
G
R
O
U
N
D
C
O
L
O
U
R
'
 
]
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
i
n
p
u
t
B
o
x
E
r
r
o
r
B
a
c
k
g
r
o
u
n
d
'
 
]
;

	
	
$
o
u
t
p
u
t
[
 
'
I
N
P
U
T
O
K
T
O
B
O
O
K
_
B
A
C
K
G
R
O
U
N
D
'
 
]
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
i
n
p
u
t
B
o
x
O
k
t
o
b
o
o
k
B
a
c
k
g
r
o
u
n
d
'
 
]
;


	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
w
h
o
l
e
d
a
y
_
b
o
o
k
i
n
g
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
_
f
o
r
m
_
d
a
i
l
y
_
w
e
e
k
l
y
_
m
o
n
t
h
l
y
'
 
]
 
=
=
 
'
D
'
)
 
{

	
	
	
	
$
o
u
t
p
u
t
[
 
'
S
T
A
Y
D
A
Y
S
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
Q
U
I
C
K
R
E
S
_
S
T
E
P
4
_
S
T
A
Y
D
A
Y
S
_
W
H
O
L
E
D
A
Y
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
Q
U
I
C
K
R
E
S
_
S
T
E
P
4
_
S
T
A
Y
D
A
Y
S
_
W
H
O
L
E
D
A
Y
'
)
)
;

	
	
	
}
 
e
l
s
e
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
_
f
o
r
m
_
d
a
i
l
y
_
w
e
e
k
l
y
_
m
o
n
t
h
l
y
'
 
]
 
=
=
 
'
W
'
)
 
{

	
	
	
	
$
o
u
t
p
u
t
[
 
'
S
T
A
Y
D
A
Y
S
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
W
E
E
K
S
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
W
E
E
K
S
'
)
)
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
o
u
t
p
u
t
[
 
'
S
T
A
Y
D
A
Y
S
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
M
O
N
T
H
S
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
M
O
N
T
H
S
'
)
)
;

	
	
	
}

	
	
}
 
e
l
s
e
 
{

	
	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
_
f
o
r
m
_
d
a
i
l
y
_
w
e
e
k
l
y
_
m
o
n
t
h
l
y
'
 
]
 
=
=
 
'
D
'
)
 
{

	
	
	
	
$
o
u
t
p
u
t
[
 
'
S
T
A
Y
D
A
Y
S
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
Q
U
I
C
K
R
E
S
_
S
T
E
P
4
_
S
T
A
Y
D
A
Y
S
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
Q
U
I
C
K
R
E
S
_
S
T
E
P
4
_
S
T
A
Y
D
A
Y
S
'
)
)
;

	
	
	
}
 
e
l
s
e
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
_
f
o
r
m
_
d
a
i
l
y
_
w
e
e
k
l
y
_
m
o
n
t
h
l
y
'
 
]
 
=
=
 
'
W
'
)
 
{

	
	
	
	
$
o
u
t
p
u
t
[
 
'
S
T
A
Y
D
A
Y
S
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
W
E
E
K
S
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
W
E
E
K
S
'
)
)
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
o
u
t
p
u
t
[
 
'
S
T
A
Y
D
A
Y
S
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
M
O
N
T
H
S
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
M
O
N
T
H
S
'
)
)
;

	
	
	
}

	
	
}


	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
r
e
q
u
i
r
e
A
p
p
r
o
v
a
l
'
 
]
 
=
=
 
'
1
'
 
&
&
 
!
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
I
s
M
a
n
a
g
e
r
)
 
{

	
	
	
$
o
u
t
p
u
t
[
 
'
S
U
B
M
I
T
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
_
E
N
Q
U
I
R
Y
_
R
E
V
I
E
W
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
_
E
N
Q
U
I
R
Y
_
R
E
V
I
E
W
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
o
u
t
p
u
t
[
 
'
S
U
B
M
I
T
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
R
E
V
I
E
W
B
O
O
K
I
N
G
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
R
E
V
I
E
W
B
O
O
K
I
N
G
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
}


	
	
$
o
u
t
p
u
t
[
 
'
L
O
O
K
R
I
G
H
T
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
L
O
O
K
R
I
G
H
T
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
L
O
O
K
R
I
G
H
T
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
$
o
u
t
p
u
t
[
 
'
R
O
O
M
_
T
O
T
A
L
_
I
N
C
_
T
A
X
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
O
R
M
_
R
O
O
M
T
O
T
A
L
_
I
N
C
_
T
A
X
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
O
R
M
_
R
O
O
M
T
O
T
A
L
_
I
N
C
_
T
A
X
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
i
f
 
(
$
t
h
i
s
-
>
j
r
C
o
n
f
i
g
[
 
'
s
h
o
w
_
t
a
x
_
i
n
_
t
o
t
a
l
s
_
s
u
m
m
a
r
y
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
$
o
u
t
p
u
t
[
 
'
R
O
O
M
_
T
O
T
A
L
_
E
X
_
T
A
X
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
O
R
M
_
R
O
O
M
T
O
T
A
L
_
E
X
_
T
A
X
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
O
R
M
_
R
O
O
M
T
O
T
A
L
_
E
X
_
T
A
X
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
	
$
o
u
t
p
u
t
[
 
'
R
O
O
M
_
T
O
T
A
L
_
A
C
C
O
M
_
T
A
X
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
T
A
X
_
A
C
C
O
M
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
T
A
X
_
A
C
C
O
M
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
	
$
o
u
t
p
u
t
[
 
'
E
X
T
R
A
S
_
T
A
X
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
T
A
X
_
E
X
T
R
A
S
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
T
A
X
_
E
X
T
R
A
S
'
)
)
;

	
	
}

	
	
$
o
u
t
p
u
t
[
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
B
U
T
T
O
N
_
O
P
E
N
_
B
O
O
K
I
N
G
F
O
R
M
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
B
U
T
T
O
N
_
O
P
E
N
_
B
O
O
K
I
N
G
F
O
R
M
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
B
U
T
T
O
N
_
O
P
E
N
_
B
O
O
K
I
N
G
F
O
R
M
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
$
o
u
t
p
u
t
[
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
B
U
T
T
O
N
_
B
A
C
K
_
T
O
_
P
R
O
P
E
R
T
Y
_
D
E
T
A
I
L
S
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
B
U
T
T
O
N
_
B
A
C
K
_
T
O
_
P
R
O
P
E
R
T
Y
_
D
E
T
A
I
L
S
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
B
U
T
T
O
N
_
B
A
C
K
_
T
O
_
P
R
O
P
E
R
T
Y
_
D
E
T
A
I
L
S
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
c
h
a
r
g
e
D
e
p
o
s
i
t
Y
e
s
N
o
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
$
o
u
t
p
u
t
[
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
O
R
M
_
R
O
O
M
T
O
T
A
L
_
B
A
L
A
N
C
E
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
O
R
M
_
R
O
O
M
T
O
T
A
L
_
B
A
L
A
N
C
E
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
O
R
M
_
R
O
O
M
T
O
T
A
L
_
B
A
L
A
N
C
E
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
}

	
	
$
o
u
t
p
u
t
[
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
O
R
M
_
R
O
O
M
F
E
A
T
U
R
E
_
F
I
L
T
E
R
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
O
R
M
_
R
O
O
M
F
E
A
T
U
R
E
_
F
I
L
T
E
R
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
O
R
M
_
R
O
O
M
F
E
A
T
U
R
E
_
F
I
L
T
E
R
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;


	
	
i
f
 
(
g
e
t
_
s
h
o
w
t
i
m
e
(
'
i
n
c
l
u
d
e
_
r
o
o
m
_
b
o
o
k
i
n
g
_
f
u
n
c
t
i
o
n
a
l
i
t
y
'
)
 
&
&
 
$
t
h
i
s
-
>
c
f
g
_
s
i
n
g
l
e
P
e
r
s
o
n
S
u
p
p
l
i
m
e
n
t
 
=
=
 
'
1
'
)
 
{

	
	
	
$
o
u
t
p
u
t
[
 
'
S
I
N
G
L
E
_
P
E
R
S
O
N
_
S
U
P
P
L
I
M
E
N
T
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
S
U
P
P
L
I
M
E
N
T
S
_
S
I
N
G
L
E
P
E
R
S
O
N
_
C
O
S
T
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
S
U
P
P
L
I
M
E
N
T
S
_
S
I
N
G
L
E
P
E
R
S
O
N
_
C
O
S
T
'
)
)
;

	
	
}


	
	
$
o
u
t
p
u
t
[
 
'
E
S
T
I
M
A
T
E
W
A
R
N
I
N
G
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
H
O
R
I
Z
R
O
O
M
S
L
I
S
T
_
E
S
T
I
M
A
T
E
W
A
R
N
I
N
G
'
,
 
'
_
J
R
P
O
R
T
A
L
_
H
O
R
I
Z
R
O
O
M
S
L
I
S
T
_
E
S
T
I
M
A
T
E
W
A
R
N
I
N
G
'
)
)
;


	
	
$
o
u
t
p
u
t
[
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
F
I
R
S
T
N
A
M
E
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
F
I
R
S
T
N
A
M
E
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
F
I
R
S
T
N
A
M
E
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
$
o
u
t
p
u
t
[
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
S
U
R
N
A
M
E
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
S
U
R
N
A
M
E
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
S
U
R
N
A
M
E
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
$
o
u
t
p
u
t
[
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
H
O
U
S
E
N
O
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
H
O
U
S
E
N
O
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
H
O
U
S
E
N
O
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
$
o
u
t
p
u
t
[
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
S
T
R
E
E
T
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
S
T
R
E
E
T
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
S
T
R
E
E
T
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
$
o
u
t
p
u
t
[
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
T
O
W
N
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
T
O
W
N
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
T
O
W
N
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
$
o
u
t
p
u
t
[
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
R
E
G
I
O
N
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
R
E
G
I
O
N
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
R
E
G
I
O
N
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
$
o
u
t
p
u
t
[
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
P
O
S
T
C
O
D
E
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
P
O
S
T
C
O
D
E
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
P
O
S
T
C
O
D
E
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
$
o
u
t
p
u
t
[
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
C
O
U
N
T
R
Y
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
C
O
U
N
T
R
Y
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
C
O
U
N
T
R
Y
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
$
o
u
t
p
u
t
[
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
L
A
N
D
L
I
N
E
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
L
A
N
D
L
I
N
E
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
L
A
N
D
L
I
N
E
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
$
o
u
t
p
u
t
[
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
C
E
L
L
P
H
O
N
E
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
C
E
L
L
P
H
O
N
E
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
C
E
L
L
P
H
O
N
E
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
$
o
u
t
p
u
t
[
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
E
M
A
I
L
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
E
M
A
I
L
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
E
M
A
I
L
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;


	
	
r
e
t
u
r
n
 
$
o
u
t
p
u
t
;

	
}


	
/
*
*

	
 
*
 
I
m
p
l
o
d
e
s
 
t
h
e
 
v
a
r
i
a
n
c
e
s
 
r
e
a
d
y
 
f
o
r
 
s
t
o
r
i
n
g
 
i
n
 
t
h
e
 
d
a
t
a
b
a
s
e
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
i
m
p
l
o
d
e
V
a
r
i
a
n
c
e
s
(
)

	
{

	
	
/
*

	
	
i
f
 
(

	
	
	
c
o
u
n
t
(
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
t
y
p
e
s
)
 
!
=
 
c
o
u
n
t
(
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
u
i
d
s
)
 
|
|

	
	
	
c
o
u
n
t
(
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
t
y
p
e
s
)
 
!
=
 
c
o
u
n
t
(
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
q
t
y
)
 
|
|

	
	
	
c
o
u
n
t
(
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
t
y
p
e
s
)
 
!
=
 
c
o
u
n
t
(
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
v
a
l
s
)

	
	
	
)

	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
*
/

	
	
$
t
h
i
s
-
>
v
t
 
=
 
i
m
p
l
o
d
e
(
'
,
'
,
 
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
t
y
p
e
s
)
;

	
	
$
t
h
i
s
-
>
v
u
 
=
 
i
m
p
l
o
d
e
(
'
,
'
,
 
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
u
i
d
s
)
;

	
	
$
t
h
i
s
-
>
v
q
 
=
 
i
m
p
l
o
d
e
(
'
,
'
,
 
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
q
t
y
)
;

	
	
$
t
h
i
s
-
>
v
v
 
=
 
i
m
p
l
o
d
e
(
'
,
'
,
 
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
v
a
l
s
)
;

	
	
$
t
h
i
s
-
>
v
v
_
n
o
d
i
s
c
o
u
n
t
 
=
 
i
m
p
l
o
d
e
(
'
,
'
,
 
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
v
a
l
s
_
n
o
d
i
s
c
o
u
n
t
)
;


	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
}


	
/
*
*

	
 
*
 
G
e
n
e
r
i
c
 
v
a
r
i
a
n
t
 
h
a
n
d
l
i
n
g
.
 
S
e
t
s
 
t
h
e
 
v
a
r
i
a
n
t
 
t
o
 
t
h
e
 
s
p
e
c
i
f
i
e
d
 
v
a
l
u
e
s
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
V
a
r
i
a
n
t
(
$
t
y
p
e
 
=
 
'
'
,
 
$
i
d
 
=
 
'
'
,
 
$
q
t
y
 
=
 
0
,
 
$
v
a
l
 
=
 
0
.
0
0
,
 
$
v
a
l
_
n
o
d
i
s
c
o
u
n
t
 
=
 
0
.
0
0
)

	
{

	
	
i
f
 
(
e
m
p
t
y
(
$
t
y
p
e
)
 
|
|
 
e
m
p
t
y
(
$
i
d
)
)
 
{

	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}

	
	
$
f
o
u
n
d
 
=
 
f
a
l
s
e
;

	
	
$
n
 
=
 
c
o
u
n
t
(
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
t
y
p
e
s
)
;

	
	
f
o
r
 
(
$
i
 
=
 
0
;
 
$
i
 
<
=
 
$
n
;
 
+
+
$
i
)
 
{

	
	
	
i
f
 
(
i
s
s
e
t
(
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
t
y
p
e
s
[
 
$
i
 
]
)
)
 
{

	
	
	
	
i
f
 
(
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
t
y
p
e
s
[
 
$
i
 
]
 
=
=
 
$
t
y
p
e
 
&
&
 
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
u
i
d
s
[
 
$
i
 
]
 
=
=
 
$
i
d
)
 
{

	
	
	
	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
S
e
t
t
i
n
g
 
v
a
r
i
a
n
t
 
w
i
t
h
 
q
t
y
 
"
.
$
q
t
y
.
"
 
a
n
d
 
v
a
l
u
e
 
"
.
$
v
a
l
 
)
;

	
	
	
	
	
$
f
o
u
n
d
 
=
 
t
r
u
e
;

	
	
	
	
	
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
q
t
y
[
 
$
i
 
]
 
=
 
$
q
t
y
;

	
	
	
	
	
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
v
a
l
s
[
 
$
i
 
]
 
=
 
$
v
a
l
;

	
	
	
	
	
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
v
a
l
s
_
n
o
d
i
s
c
o
u
n
t
[
 
$
i
 
]
 
=
 
$
v
a
l
_
n
o
d
i
s
c
o
u
n
t
;

	
	
	
	
}

	
	
	
}

	
	
}

	
	
i
f
 
(
!
$
f
o
u
n
d
)
 
{

	
	
	
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
t
y
p
e
s
[
 
]
 
=
 
$
t
y
p
e
;

	
	
	
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
u
i
d
s
[
 
]
 
=
 
$
i
d
;

	
	
	
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
q
t
y
[
 
]
 
=
 
$
q
t
y
;

	
	
	
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
v
a
l
s
[
 
]
 
=
 
$
v
a
l
;

	
	
	
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
v
a
l
s
_
n
o
d
i
s
c
o
u
n
t
[
 
]
 
=
 
$
v
a
l
_
n
o
d
i
s
c
o
u
n
t
;

	
	
}


	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
}


	
/
*
*

	
 
*
 
G
e
n
e
r
i
c
 
v
a
r
i
a
n
t
 
h
a
n
d
l
i
n
g
.
 
R
e
t
u
r
n
s
 
t
h
e
 
v
a
r
i
a
n
t
 
q
u
a
n
t
i
t
y
 
a
n
d
 
v
a
l
u
e
 
g
i
v
e
n
 
t
h
e
 
v
a
r
i
a
n
t
 
t
y
p
e
 
a
n
d
 
i
t
'
s
 
i
d
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
V
a
r
i
a
n
t
(
$
t
y
p
e
 
=
 
'
'
,
 
$
i
d
 
=
 
'
'
)

	
{

	
	
i
f
 
(
e
m
p
t
y
(
$
t
y
p
e
)
 
|
|
 
e
m
p
t
y
(
$
i
d
)
)
 
{

	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}

	
	
$
n
 
=
 
c
o
u
n
t
(
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
t
y
p
e
s
)
;

	
	
f
o
r
 
(
$
i
 
=
 
0
;
 
$
i
 
<
=
 
$
n
;
 
+
+
$
i
)
 
{

	
	
	
i
f
 
(
i
s
s
e
t
(
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
t
y
p
e
s
[
$
i
]
)
)
 
{

	
	
	
	
i
f
 
(
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
t
y
p
e
s
[
 
$
i
 
]
 
=
=
 
$
t
y
p
e
 
&
&
 
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
u
i
d
s
[
 
$
i
 
]
 
=
=
 
$
i
d
)
 
{

	
	
	
	
	
$
q
t
y
 
=
 
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
q
t
y
[
 
$
i
 
]
;

	
	
	
	
	
$
v
a
l
 
=
 
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
v
a
l
s
[
 
$
i
 
]
;

	
	
	
	
	
$
v
a
l
_
n
o
d
i
s
c
o
u
n
t
 
=
 
0
;

	
	
	
	
	
i
f
 
(
 
i
s
s
e
t
(
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
v
a
l
s
_
n
o
d
i
s
c
o
u
n
t
[
 
$
i
 
]
)
)
 

	
	
	
	
	
	
$
v
a
l
_
n
o
d
i
s
c
o
u
n
t
 
=
 
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
v
a
l
s
_
n
o
d
i
s
c
o
u
n
t
[
 
$
i
 
]
;


	
	
	
	
	
r
e
t
u
r
n
 
a
r
r
a
y
(
'
q
u
a
n
t
i
t
y
'
 
=
>
 
$
q
t
y
,
 
'
v
a
l
u
e
'
 
=
>
 
$
v
a
l
,
 
'
v
a
l
_
n
o
d
i
s
c
o
u
n
t
'
 
=
>
 
$
v
a
l
_
n
o
d
i
s
c
o
u
n
t
)
;

	
	
	
	
}

	
	
	
}

	
	
}


	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
}


	
/
*
*

	
 
*
 
G
e
n
e
r
i
c
 
v
a
r
i
a
n
t
 
h
a
n
d
l
i
n
g
.
 
R
e
t
u
r
n
 
a
l
l
 
v
a
r
i
a
n
t
s
 
o
f
 
a
 
g
i
v
e
n
 
t
y
p
e
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
V
a
r
i
a
n
t
s
O
f
T
y
p
e
(
$
t
y
p
e
 
=
 
'
'
)

	
{

	
	
$
t
m
p
A
r
r
a
y
 
=
 
a
r
r
a
y
(
)
;

	
	
i
f
 
(
!
i
s
s
e
t
(
$
t
y
p
e
)
 
|
|
 
e
m
p
t
y
(
$
t
y
p
e
)
)
 
{

	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}

	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
T
h
e
r
e
 
a
r
e
 
:
 
"
.
c
o
u
n
t
(
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
t
y
p
e
s
)
.
"
 
e
x
a
m
p
l
e
s
 
o
f
 
v
a
r
i
a
n
t
 
t
y
p
e
 
"
.
$
t
y
p
e
.
"
 
i
n
 
t
h
e
 
o
b
j
e
c
t
.
"
 
)
;

	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
V
a
r
i
a
b
l
e
 
v
a
r
i
a
n
c
e
t
y
p
e
s
 
i
s
 
:
 
"
.
g
e
t
t
y
p
e
(
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
t
y
p
e
s
)
 
)
;


	
	
$
n
 
=
 
c
o
u
n
t
(
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
t
y
p
e
s
)
;

	
	
f
o
r
 
(
$
i
 
=
 
0
;
 
$
i
 
<
=
 
$
n
;
 
+
+
$
i
)
 
{

	
	
	
i
f
 
(
i
s
s
e
t
(
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
t
y
p
e
s
[
 
$
i
 
]
)
 
&
&
 
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
t
y
p
e
s
[
 
$
i
 
]
 
=
=
 
$
t
y
p
e
)
 
{

	
	
	
	
$
i
d
 
=
 
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
u
i
d
s
[
 
$
i
 
]
;

	
	
	
	
$
q
t
y
 
=
 
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
q
t
y
[
 
$
i
 
]
;

	
	
	
	
$
v
a
l
 
=
 
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
v
a
l
s
[
 
$
i
 
]
;

	
	
	
	
$
v
a
l
_
n
o
d
i
s
c
o
u
n
t
 
=
 
0
;

	
	
	
	
i
f
 
(
 
i
s
s
e
t
(
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
v
a
l
s
_
n
o
d
i
s
c
o
u
n
t
[
 
$
i
 
]
)
)
 

	
	
	
	
	
$
v
a
l
_
n
o
d
i
s
c
o
u
n
t
 
=
 
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
v
a
l
s
_
n
o
d
i
s
c
o
u
n
t
[
 
$
i
 
]
;

	
	
	
	
$
t
m
p
A
r
r
a
y
[
 
]
 
=
 
a
r
r
a
y
(
'
i
d
'
 
=
>
 
$
i
d
,
 
'
q
t
y
'
 
=
>
 
$
q
t
y
,
 
'
v
a
l
'
 
=
>
 
$
v
a
l
,
 
'
v
a
l
_
n
o
d
i
s
c
o
u
n
t
'
 
=
>
 
$
v
a
l
_
n
o
d
i
s
c
o
u
n
t
)
;

	
	
	
}

	
	
}


	
	
r
e
t
u
r
n
 
$
t
m
p
A
r
r
a
y
;

	
}


	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/

	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/


	
/
/
	
R
o
o
m
 
f
e
a
t
u
r
e
 
f
i
l
t
e
r
i
n
g


	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/

	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
i
n
i
t
R
o
o
m
F
e
a
t
u
r
e
F
i
l
t
e
r
i
n
g
(
)

	
{

	
	
$
t
h
i
s
-
>
r
o
o
m
_
f
e
a
t
u
r
e
_
c
h
e
c
k
b
o
x
e
s
 
=
 
a
r
r
a
y
(
)
;

	
	
$
t
h
i
s
-
>
r
o
o
m
_
f
e
a
t
u
r
e
_
f
i
l
t
e
r
i
n
g
_
e
n
a
b
l
e
d
 
=
 
f
a
l
s
e
;

	
	
i
f
 
(
i
s
s
e
t
(
$
t
h
i
s
-
>
a
l
l
R
o
o
m
F
e
a
t
u
r
e
s
)
 
&
&
 
!
e
m
p
t
y
(
$
t
h
i
s
-
>
a
l
l
R
o
o
m
F
e
a
t
u
r
e
s
)
)
 
{

	
	
	
$
t
h
i
s
-
>
r
o
o
m
_
f
e
a
t
u
r
e
_
f
i
l
t
e
r
i
n
g
_
e
n
a
b
l
e
d
 
=
 
t
r
u
e
;


	
	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
a
l
l
R
o
o
m
F
e
a
t
u
r
e
s
 
a
s
 
$
f
e
a
t
u
r
e
_
i
d
 
=
>
 
$
f
e
a
t
u
r
e
)
 
{

	
	
	
	
$
a
r
r
 
=
 
a
r
r
a
y
(
)
;

	
	
	
	
$
a
r
r
[
 
'
I
D
'
 
]
 
=
 
$
f
e
a
t
u
r
e
_
i
d
;

	
	
	
	
$
a
r
r
[
 
'
I
N
P
U
T
B
O
X
'
 
]
 
=
 
'
<
i
n
p
u
t
 
i
d
=
"
'
.
$
f
e
a
t
u
r
e
_
i
d
.
'
"
 
t
y
p
e
=
"
c
h
e
c
k
b
o
x
"
 
n
a
m
e
=
"
r
o
o
m
_
f
e
a
t
u
r
e
s
[
'
.
$
f
e
a
t
u
r
e
_
i
d
.
'
]
"
 
v
a
l
u
e
=
"
'
.
$
f
e
a
t
u
r
e
_
i
d
.
'
"
 
a
u
t
o
c
o
m
p
l
e
t
e
=
"
o
f
f
"
 
 
o
n
C
l
i
c
k
=
"
g
e
t
R
e
s
p
o
n
s
e
_
r
o
o
m
_
f
e
a
t
u
r
e
s
(
\
'
r
o
o
m
_
f
e
a
t
u
r
e
s
\
'
,
t
h
i
s
.
v
a
l
u
e
,
'
.
$
f
e
a
t
u
r
e
_
i
d
.
'
)
;
"
 
/
>
'
;

	
	
	
	
$
a
r
r
[
 
'
D
E
S
C
R
I
P
T
I
O
N
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
R
O
O
M
F
E
A
T
U
R
E
_
D
E
S
C
R
I
P
T
I
O
N
'
.
(
i
n
t
)
 
$
f
e
a
t
u
r
e
_
i
d
,
 
$
f
e
a
t
u
r
e
)
;

	
	
	
	
$
t
h
i
s
-
>
r
o
o
m
_
f
e
a
t
u
r
e
_
c
h
e
c
k
b
o
x
e
s
[
 
]
 
=
 
$
a
r
r
;

	
	
	
}

	
	
}

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
t
o
g
g
l
e
R
o
o
m
F
i
l
t
e
r
I
d
(
$
i
d
)

	
{

	
	
i
f
 
(
i
s
s
e
t
(
$
t
h
i
s
-
>
r
o
o
m
_
f
e
a
t
u
r
e
_
f
i
l
t
e
r
[
 
$
i
d
 
]
)
)
 
{

	
	
	
u
n
s
e
t
(
$
t
h
i
s
-
>
r
o
o
m
_
f
e
a
t
u
r
e
_
f
i
l
t
e
r
[
 
$
i
d
 
]
)
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
t
h
i
s
-
>
r
o
o
m
_
f
e
a
t
u
r
e
_
f
i
l
t
e
r
[
 
$
i
d
 
]
 
=
 
$
i
d
;

	
	
}

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
c
h
e
c
k
_
r
o
o
m
_
h
a
s
_
s
e
l
e
c
t
e
d
_
r
o
o
m
_
f
e
a
t
u
r
e
(
$
r
o
o
m
_
i
d
)

	
{

	
	
$
b
a
n
g
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
R
o
o
m
s
[
 
$
r
o
o
m
_
i
d
 
]
[
 
'
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
'
 
]
)
;

	
	
$
f
e
a
t
u
r
e
_
i
d
s
 
=
 
a
r
r
a
y
(
)
;

	
	
f
o
r
e
a
c
h
 
(
$
b
a
n
g
 
a
s
 
$
f
)
 
{

	
	
	
i
f
 
(
$
f
 
!
=
 
'
'
)
 
{

	
	
	
	
$
f
e
a
t
u
r
e
_
i
d
s
[
 
]
 
=
 
(
i
n
t
)
 
$
f
;

	
	
	
}

	
	
}

	
	
i
f
 
(
e
m
p
t
y
(
$
f
e
a
t
u
r
e
_
i
d
s
)
)
 
{

	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}

	
	
$
c
o
u
n
t
 
=
 
0
;

	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
r
o
o
m
_
f
e
a
t
u
r
e
_
f
i
l
t
e
r
 
a
s
 
$
f
e
a
t
u
r
e
_
i
d
)
 
{

	
	
	
i
f
 
(
i
n
_
a
r
r
a
y
(
$
f
e
a
t
u
r
e
_
i
d
,
 
$
f
e
a
t
u
r
e
_
i
d
s
)
)
 
{

	
	
	
	
+
+
$
c
o
u
n
t
;

	
	
	
}

	
	
}

	
	
i
f
 
(
$
c
o
u
n
t
 
=
=
 
c
o
u
n
t
(
$
t
h
i
s
-
>
r
o
o
m
_
f
e
a
t
u
r
e
_
f
i
l
t
e
r
)
)
 
{

	
	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
	
}
 
e
l
s
e
 
{

	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
r
o
o
m
_
a
c
c
e
p
t
a
b
l
e
_
a
c
c
o
r
d
i
n
g
_
t
o
_
r
o
o
m
_
f
i
l
t
e
r
(
$
r
o
o
m
_
i
d
)

	
{

	
	
i
f
 
(
e
m
p
t
y
(
$
t
h
i
s
-
>
r
o
o
m
_
f
e
a
t
u
r
e
_
f
i
l
t
e
r
)
)
 
{
 
/
/
 
I
f
 
t
h
e
 
a
l
l
 
r
o
o
m
 
f
e
a
t
u
r
e
s
 
a
r
r
a
y
 
i
s
 
e
m
p
t
y
,
 
w
e
'
l
l
 
r
e
t
u
r
n
 
t
r
u
e
 
a
s
 
w
e
 
d
o
n
'
t
 
w
a
n
t
 
t
o
 
d
o
 
a
n
y
 
f
i
l
t
e
r
i
n
g
 
b
e
c
a
u
s
e
 
n
o
 
f
e
a
t
u
r
e
'
s
 
b
e
e
n
 
s
e
l
e
c
t
e
d
 
y
e
t

	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
	
}

	
	
i
f
 
(
e
m
p
t
y
(
$
t
h
i
s
-
>
a
l
l
R
o
o
m
F
e
a
t
u
r
e
s
)
)
 
{
 
/
/
 
T
h
e
r
e
 
a
r
e
n
'
t
 
a
n
y
 
r
o
o
m
 
f
e
a
t
u
r
e
s
 
f
o
r
 
t
h
i
s
 
p
r
o
p
e
r
t
y

	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
	
}


	
	
r
e
t
u
r
n
 
$
t
h
i
s
-
>
c
h
e
c
k
_
r
o
o
m
_
h
a
s
_
s
e
l
e
c
t
e
d
_
r
o
o
m
_
f
e
a
t
u
r
e
(
$
r
o
o
m
_
i
d
)
;

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
c
h
e
c
k
R
o
o
m
F
e
a
t
u
r
e
O
p
t
i
o
n
(
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
)

	
{

	
	
$
t
m
p
A
r
r
 
=
 
a
r
r
a
y
(
)
;

	
	
f
o
r
e
a
c
h
 
(
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
 
a
s
 
$
r
o
o
m
_
i
d
)
 
{

	
	
	
i
f
 
(
$
t
h
i
s
-
>
r
o
o
m
_
a
c
c
e
p
t
a
b
l
e
_
a
c
c
o
r
d
i
n
g
_
t
o
_
r
o
o
m
_
f
i
l
t
e
r
(
$
r
o
o
m
_
i
d
)
)
 
{

	
	
	
	
$
t
m
p
A
r
r
[
 
]
 
=
 
$
r
o
o
m
_
i
d
;

	
	
	
}

	
	
}


	
	
r
e
t
u
r
n
 
$
t
m
p
A
r
r
;

	
}


	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/

	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/


	
/
/
	
R
o
o
m
 
t
o
t
a
l
 
o
v
e
r
r
i
d
e
s


	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/

	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
a
v
e
O
v
e
r
r
i
d
e
(
$
v
a
l
u
e
s
)

	
{

	
	
$
t
h
i
s
J
R
U
s
e
r
 
=
 
j
o
m
r
e
s
_
g
e
t
S
i
n
g
l
e
t
o
n
(
'
j
r
_
u
s
e
r
'
)
;

	
	
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
I
s
M
a
n
a
g
e
r
)
 
{

	
	
	
$
b
a
n
g
 
=
 
e
x
p
l
o
d
e
(
'
^
'
,
 
$
v
a
l
u
e
s
)
;

	
	
	
$
t
h
i
s
-
>
o
v
e
r
r
i
d
e
_
r
o
o
m
_
t
o
t
a
l
 
=
 
(
f
l
o
a
t
)
 
$
b
a
n
g
[
 
0
 
]
;

	
	
	
$
t
h
i
s
-
>
o
v
e
r
r
i
d
e
_
d
e
p
o
s
i
t
 
=
 
(
f
l
o
a
t
)
 
$
b
a
n
g
[
 
1
 
]
;

	
	
	
/
/
r
e
t
u
r
n
 
"
O
K
!
"
;

	
	
}

	
}


	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/

	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/


	
/
/
	
C
o
u
p
o
n
s


	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/

	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/

	
/
*
*

	
 
*
 
C
o
u
p
o
n
s
 
i
n
i
t
i
a
l
i
s
e
 
t
h
e
 
c
o
u
p
o
n
 
v
a
r
i
a
b
l
e
s
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
i
n
i
t
C
o
u
p
o
n
s
(
)

	
{

	
	
$
t
h
i
s
-
>
u
s
e
_
c
o
u
p
o
n
s
 
=
 
f
a
l
s
e
;

	
	
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
`
c
o
u
p
o
n
_
i
d
`
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
c
o
u
p
o
n
s
 
W
H
E
R
E
 
(
`
p
r
o
p
e
r
t
y
_
u
i
d
`
 
=
 
'
.
(
i
n
t
)
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
.
"
 
O
R
 
`
p
r
o
p
e
r
t
y
_
u
i
d
`
 
=
 
0
)
 
A
N
D
 
D
A
T
E
_
F
O
R
M
A
T
(
`
v
a
l
i
d
_
t
o
`
,
 
'
%
Y
/
%
m
/
%
d
'
)
 
>
=
 
D
A
T
E
_
F
O
R
M
A
T
(
N
O
W
(
)
,
 
'
%
Y
/
%
m
/
%
d
'
)
 
"
;

	
	
$
r
e
s
u
l
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;

	
	
i
f
 
(
!
e
m
p
t
y
(
$
r
e
s
u
l
t
)
)
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
i
n
i
t
C
o
u
p
o
n
s
:
:
 
F
o
u
n
d
 
'
.
c
o
u
n
t
(
$
r
e
s
u
l
t
)
.
'
 
c
o
u
p
o
n
s
 
f
o
r
 
p
r
o
p
e
r
t
y
 
u
i
d
 
'
.
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
.
'
.
 
E
n
a
b
l
i
n
g
 
c
o
u
p
o
n
 
o
u
t
p
u
t
'
)
;

	
	
	
$
t
h
i
s
-
>
u
s
e
_
c
o
u
p
o
n
s
 
=
 
t
r
u
e
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
i
n
i
t
C
o
u
p
o
n
s
:
:
 
N
o
 
c
o
u
p
o
n
s
 
f
o
u
n
d
 
f
o
r
 
'
.
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
.
'
 
p
r
o
p
e
r
t
y
 
'
)
;

	
	
}

	
	
$
t
h
i
s
-
>
c
o
u
p
o
n
_
i
d
 
=
 
'
'
;

	
	
$
t
h
i
s
-
>
c
o
u
p
o
n
_
c
o
d
e
 
=
 
'
'
;

	
	
$
t
h
i
s
-
>
c
o
u
p
o
n
_
d
e
t
a
i
l
s
 
=
 
a
r
r
a
y
(
)
;

	
	
$
t
h
i
s
-
>
c
o
u
p
o
n
_
d
i
s
c
o
u
n
t
_
v
a
l
u
e
 
=
 
'
'
;

	
	
/
/
$
t
h
i
s
-
>
a
d
d
B
o
o
k
i
n
g
N
o
t
e
(
 
"
C
o
u
p
o
n
"
,
 
"
"
 
)
;

	
}


	
/
*
*

	
 
*
 
C
o
u
p
o
n
s
 
s
a
v
e
C
o
u
p
o
n
 
a
n
d
 
r
e
t
u
r
n
 
a
 
s
u
c
c
e
s
s
/
f
a
i
l
u
r
e
 
m
e
s
s
a
g
e
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
a
v
e
C
o
u
p
o
n
(
$
c
o
u
p
o
n
_
c
o
d
e
)

	
{

	
	
$
t
h
i
s
J
R
U
s
e
r
 
=
 
j
o
m
r
e
s
_
g
e
t
S
i
n
g
l
e
t
o
n
(
'
j
r
_
u
s
e
r
'
)
;

	
	
$
t
o
d
a
y
 
=
 
d
a
t
e
(
'
Y
-
m
-
d
'
)
;

	
	
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
`
c
o
u
p
o
n
_
i
d
`
,
`
a
m
o
u
n
t
`
,
`
i
s
_
p
e
r
c
e
n
t
a
g
e
`
,
`
r
o
o
m
s
_
o
n
l
y
`
,
`
b
o
o
k
i
n
g
_
v
a
l
i
d
_
f
r
o
m
`
,
`
b
o
o
k
i
n
g
_
v
a
l
i
d
_
t
o
`
,
`
g
u
e
s
t
_
u
i
d
`
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
c
o
u
p
o
n
s
 
W
H
E
R
E
 
c
o
u
p
o
n
_
c
o
d
e
 
=
 
'
$
c
o
u
p
o
n
_
c
o
d
e
'
 
A
N
D
 
`
v
a
l
i
d
_
f
r
o
m
`
 
<
=
 
'
$
t
o
d
a
y
'
 
A
N
D
 
`
v
a
l
i
d
_
t
o
`
 
>
=
 
'
$
t
o
d
a
y
'
 
A
N
D
 
(
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
 
O
R
 
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
0
)
 
"
;

	
	
$
r
e
s
p
o
n
s
e
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
,
 
2
)
;


	
	
$
g
u
e
s
t
_
u
i
d
 
=
 
0
;

	
	
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
I
s
R
e
g
i
s
t
e
r
e
d
)
 
{

	
	
	
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
g
u
e
s
t
s
_
u
i
d
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
g
u
e
s
t
s
 
W
H
E
R
E
 
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
 
A
N
D
 
m
o
s
_
u
s
e
r
i
d
 
=
"
.
(
i
n
t
)
 
$
t
h
i
s
J
R
U
s
e
r
-
>
i
d
;

	
	
	
$
g
u
e
s
t
_
u
i
d
 
=
 
(
i
n
t
)
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
,
 
1
)
;

	
	
}


	
	
i
f
 
(
$
r
e
s
p
o
n
s
e
 
&
&
 
(
(
i
n
t
)
 
$
r
e
s
p
o
n
s
e
[
 
'
g
u
e
s
t
_
u
i
d
'
 
]
 
=
=
 
$
g
u
e
s
t
_
u
i
d
 
|
|
 
(
i
n
t
)
 
$
r
e
s
p
o
n
s
e
[
 
'
g
u
e
s
t
_
u
i
d
'
 
]
 
=
=
 
0
)
)
 
{

	
	
	
$
t
h
i
s
-
>
c
o
u
p
o
n
_
i
d
 
=
 
$
r
e
s
p
o
n
s
e
[
 
'
c
o
u
p
o
n
_
i
d
'
 
]
;

	
	
	
$
t
h
i
s
-
>
c
o
u
p
o
n
_
c
o
d
e
 
=
 
$
c
o
u
p
o
n
_
c
o
d
e
;

	
	
	
$
t
h
i
s
-
>
c
o
u
p
o
n
_
d
e
t
a
i
l
s
 
=
 
a
r
r
a
y
(
'
a
m
o
u
n
t
'
 
=
>
 
$
r
e
s
p
o
n
s
e
[
 
'
a
m
o
u
n
t
'
 
]
,
 
'
i
s
_
p
e
r
c
e
n
t
a
g
e
'
 
=
>
 
$
r
e
s
p
o
n
s
e
[
 
'
i
s
_
p
e
r
c
e
n
t
a
g
e
'
 
]
,
 
'
c
o
u
p
o
n
_
i
d
'
 
=
>
 
$
r
e
s
p
o
n
s
e
[
 
'
c
o
u
p
o
n
_
i
d
'
 
]
,
 
'
b
o
o
k
i
n
g
_
v
a
l
i
d
_
f
r
o
m
'
 
=
>
 
$
r
e
s
p
o
n
s
e
[
 
'
b
o
o
k
i
n
g
_
v
a
l
i
d
_
f
r
o
m
'
 
]
,
 
'
b
o
o
k
i
n
g
_
v
a
l
i
d
_
t
o
'
 
=
>
 
$
r
e
s
p
o
n
s
e
[
 
'
b
o
o
k
i
n
g
_
v
a
l
i
d
_
t
o
'
 
]
)
;


	
	
	
r
e
t
u
r
n
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
C
O
U
P
O
N
_
C
O
U
P
O
N
S
A
V
E
D
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
C
O
U
P
O
N
_
C
O
U
P
O
N
S
A
V
E
D
'
)
)
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
t
h
i
s
-
>
c
o
u
p
o
n
_
i
d
 
=
 
0
;

	
	
	
$
t
h
i
s
-
>
c
o
u
p
o
n
_
c
o
d
e
 
=
 
'
'
;

	
	
	
$
t
h
i
s
-
>
c
o
u
p
o
n
_
d
e
t
a
i
l
s
 
=
 
a
r
r
a
y
(
)
;

	
	
	
$
t
h
i
s
-
>
c
o
u
p
o
n
_
d
i
s
c
o
u
n
t
_
v
a
l
u
e
 
=
 
'
'
;


	
	
	
r
e
t
u
r
n
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
C
O
U
P
O
N
_
C
O
U
P
O
N
N
O
T
F
O
U
N
D
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
C
O
U
P
O
N
_
C
O
U
P
O
N
N
O
T
F
O
U
N
D
'
)
)
;

	
	
}

	
}


	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/

	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/


	
/
/
	
G
u
e
s
t
 
t
y
p
e
 
v
a
r
i
a
n
t
s


	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/

	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/


	
/
*
*

	
 
*
 
G
u
e
s
t
 
t
y
p
e
 
v
a
r
i
a
n
t
s
:
 
 
r
e
t
u
r
n
 
t
h
e
 
t
o
t
a
l
 
n
u
m
b
e
r
 
o
f
 
g
u
e
s
t
 
t
y
p
e
 
v
a
r
i
a
n
t
s
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
G
u
e
s
t
V
a
r
i
a
n
t
C
o
u
n
t
(
)

	
{

	
	
$
r
e
s
u
l
t
 
=
 
$
t
h
i
s
-
>
g
e
t
V
a
r
i
a
n
t
s
O
f
T
y
p
e
(
'
g
u
e
s
t
t
y
p
e
'
)
;


	
	
r
e
t
u
r
n
 
c
o
u
n
t
(
$
r
e
s
u
l
t
)
;

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
N
u
m
b
e
r
O
f
G
u
e
s
t
s
S
e
l
e
c
t
e
d
(
)

	
{

	
	
$
r
e
s
u
l
t
 
=
 
$
t
h
i
s
-
>
g
e
t
V
a
r
i
a
n
t
s
O
f
T
y
p
e
(
'
g
u
e
s
t
t
y
p
e
'
)
;

	
	
$
q
t
y
 
=
 
0
;

	
	
i
f
 
(
!
e
m
p
t
y
(
$
r
e
s
u
l
t
)
)
 
{

	
	
	
f
o
r
e
a
c
h
 
(
$
r
e
s
u
l
t
 
a
s
 
$
r
)
 
{

	
	
	
	
$
q
t
y
 
=
 
$
q
t
y
 
+
 
$
r
[
 
'
q
t
y
'
 
]
;

	
	
	
}

	
	
}


	
	
r
e
t
u
r
n
 
$
q
t
y
;

	
}


	
/
*
*

	
 
*
 
G
u
e
s
t
 
t
y
p
e
 
v
a
r
i
a
n
t
s
:
 
 
r
e
t
u
r
n
 
t
h
e
 
d
e
t
a
i
l
s
 
o
f
 
a
 
g
i
v
e
n
 
g
u
e
s
t
 
t
y
p
e
 
w
h
e
n
 
p
a
s
s
e
d
 
i
t
'
s
 
i
d
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
G
u
e
s
t
V
a
r
i
a
n
t
D
e
t
a
i
l
s
(
$
i
d
)

	
{

	
	
$
r
e
s
u
l
t
 
=
 
$
t
h
i
s
-
>
g
e
t
V
a
r
i
a
n
t
(
'
g
u
e
s
t
t
y
p
e
'
,
 
$
i
d
)
;

	
	
i
f
 
(
$
r
e
s
u
l
t
)
 
{

	
	
	
r
e
t
u
r
n
 
$
r
e
s
u
l
t
;

	
	
}
 
e
l
s
e
 
{

	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}

	
}


	
/
*
*

	
 
*
 
G
u
e
s
t
 
t
y
p
e
 
v
a
r
i
a
n
t
s
:
 
S
e
t
s
 
a
 
g
u
e
s
t
 
t
y
p
e
 
v
a
r
i
a
n
t
 
b
a
s
e
d
 
o
n
 
t
h
e
 
i
d
 
a
n
d
 
q
u
a
n
t
i
t
y
 
p
a
s
s
e
d
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
G
u
e
s
t
V
a
r
i
a
n
t
D
e
t
a
i
l
s
(
$
i
d
,
 
$
q
t
y
)

	
{

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
s
e
t
G
u
e
s
t
V
a
r
i
a
n
t
D
e
t
a
i
l
s
:
 
S
e
t
t
i
n
g
 
g
u
e
s
t
 
t
y
p
e
 
v
a
r
i
a
n
t
 
'
.
$
i
d
)
;


	
	
$
r
e
s
u
l
t
 
=
 
$
t
h
i
s
-
>
s
e
t
V
a
r
i
a
n
t
(
'
g
u
e
s
t
t
y
p
e
'
,
 
$
i
d
,
 
$
q
t
y
,
 
0
.
0
0
)
;


	
	
i
f
 
(
$
r
e
s
u
l
t
)
 
{

	
	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
	
}
 
e
l
s
e
 
{

	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}

	
}


	
/
*
*

	
 
*
 
G
u
e
s
t
 
t
y
p
e
 
v
a
r
i
a
n
t
s
:
 
I
n
i
t
i
a
l
i
s
e
s
 
a
 
g
u
e
s
t
 
t
y
p
e
 
v
a
r
i
a
n
t
 
b
a
s
e
d
 
o
n
 
t
h
e
 
i
d
 
a
n
d
 
q
u
a
n
t
i
t
y
 
p
a
s
s
e
d
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
i
n
i
t
G
u
e
s
t
V
a
r
i
a
n
t
(
$
i
d
,
 
$
q
t
y
)

	
{

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
i
n
i
t
G
u
e
s
t
V
a
r
i
a
n
t
:
 
I
n
i
t
i
a
l
i
s
i
n
g
 
g
u
e
s
t
 
t
y
p
e
 
v
a
r
i
a
n
t
 
'
.
$
i
d
.
'
 
Q
u
a
n
t
i
t
y
 
'
.
$
q
t
y
)
;


	
	
$
r
e
s
u
l
t
 
=
 
$
t
h
i
s
-
>
s
e
t
V
a
r
i
a
n
t
(
'
g
u
e
s
t
t
y
p
e
'
,
 
$
i
d
,
 
$
q
t
y
,
 
0
.
0
0
)
;


	
	
i
f
 
(
$
r
e
s
u
l
t
)
 
{

	
	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
	
}
 
e
l
s
e
 
{

	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}

	
}


	
/
*
*

	
 
*
 
G
u
e
s
t
 
t
y
p
e
 
v
a
r
i
a
n
t
s
:
 
C
h
e
c
k
s
 
a
 
g
u
e
s
t
 
t
y
p
e
 
v
a
r
i
a
n
t

	
 
*
 
W
i
l
l
 
f
a
i
l
 
i
f
 
i
d
 
i
s
 
n
o
t
 
s
e
t

	
 
*
 
W
i
l
l
 
f
a
i
l
 
i
f
 
t
h
e
 
i
d
 
d
o
e
s
n
'
t
 
t
a
l
l
y
 
w
i
t
h
 
t
h
e
 
i
d
s
 
f
o
r
 
t
h
i
s
 
p
r
o
p
e
r
t
y

	
 
*
 
W
i
l
l
 
f
a
i
l
 
i
f
 
t
h
e
 
q
u
a
n
t
i
t
y
 
i
s
 
g
r
e
a
t
e
r
 
t
h
a
n
 
t
h
e
 
m
a
x
i
m
u
m
 
q
u
a
n
t
i
t
y
 
a
l
l
o
w
e
d
 
f
o
r
 
t
h
a
t
 
v
a
r
i
a
n
t
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
c
h
e
c
k
G
u
e
s
t
V
a
r
i
a
n
t
I
d
A
n
d
Q
t
y
(
$
i
d
,
 
$
q
t
y
)

	
{

	
	
i
f
 
(
!
i
s
s
e
t
(
$
i
d
)
 
|
|
 
e
m
p
t
y
(
$
i
d
)
)
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
V
a
r
i
a
n
t
 
i
d
 
n
o
t
 
v
a
l
i
d
.
'
)
;


	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}

	
	
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
m
a
x
i
m
u
m
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
c
u
s
t
o
m
e
r
t
y
p
e
s
 
W
H
E
R
E
 
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
'
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
'
 
A
N
D
 
i
d
 
=
 
'
$
i
d
'
 
A
N
D
 
p
u
b
l
i
s
h
e
d
 
=
 
'
1
'
 
"
;

	
	
$
r
e
s
u
l
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
,
 
1
)
;

	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
V
a
r
i
a
n
t
 
m
a
x
i
m
u
m
 
f
o
u
n
d
 
=
"
.
$
r
e
s
u
l
t
)
;

	
	
i
f
 
(
!
$
r
e
s
u
l
t
)
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
h
e
c
k
G
u
e
s
t
V
a
r
i
a
n
t
I
d
A
n
d
Q
t
y
:
:
V
a
r
i
a
n
t
 
i
d
 
c
o
u
l
d
 
n
o
t
 
b
e
 
r
e
c
o
n
c
i
l
e
d
 
w
i
t
h
 
p
r
o
p
e
r
t
y
 
u
i
d
 
o
r
 
t
h
e
 
g
u
e
s
t
 
t
y
p
e
 
i
s
 
n
o
t
 
p
u
b
l
i
s
h
e
d
'
)
;


	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}

	
	
i
f
 
(
$
q
t
y
 
>
 
$
r
e
s
u
l
t
)
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
h
e
c
k
G
u
e
s
t
V
a
r
i
a
n
t
I
d
A
n
d
Q
t
y
:
:
V
a
r
i
a
n
t
 
q
u
a
n
t
i
t
y
 
s
e
n
t
 
g
r
e
a
t
e
r
 
t
h
a
n
 
q
u
a
n
t
i
t
y
 
a
l
l
o
w
e
d
'
)
;


	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}


	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
}


	
/
*
*

	
 
*
 
M
a
k
e
 
t
h
e
 
c
u
s
t
o
m
e
r
 
t
y
p
e
 
d
r
o
p
d
o
w
n
s
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
m
a
k
e
C
u
s
t
o
m
e
r
T
y
p
e
s
(
$
s
e
l
e
c
t
e
d
P
r
o
p
e
r
t
y
)

	
{

	
	
$
m
r
C
o
n
f
i
g
 
=
 
$
t
h
i
s
-
>
m
r
C
o
n
f
i
g
;

	
	
$
c
u
s
t
 
=
 
a
r
r
a
y
(
)
;

	
	
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
`
i
d
`
,
`
t
y
p
e
`
,
`
m
a
x
i
m
u
m
`
 
,
 
`
i
s
_
c
h
i
l
d
`
 
F
R
O
M
 
`
#
_
_
j
o
m
r
e
s
_
c
u
s
t
o
m
e
r
t
y
p
e
s
`
 
w
h
e
r
e
 
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
'
$
s
e
l
e
c
t
e
d
P
r
o
p
e
r
t
y
'
 
A
N
D
 
p
u
b
l
i
s
h
e
d
 
=
 
'
1
'
 
O
R
D
E
R
 
B
Y
 
`
o
r
d
e
r
`
"
;

	
	
$
e
x
L
i
s
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;


	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
 
=
 
j
o
m
r
e
s
_
g
e
t
S
i
n
g
l
e
t
o
n
(
'
j
o
m
r
e
s
_
t
e
m
p
_
b
o
o
k
i
n
g
_
h
a
n
d
l
e
r
'
)
;


	
	
i
f
 
(
i
s
s
e
t
(
$
_
R
E
Q
U
E
S
T
[
'
n
u
m
a
d
u
l
t
'
]
)
 
|
|
 
i
s
s
e
t
(
$
_
R
E
Q
U
E
S
T
[
'
n
u
m
c
h
i
l
d
'
]
)
)
 
{

	
	
	
f
o
r
e
a
c
h
 
(
$
e
x
L
i
s
t
 
a
s
 
$
c
t
)
 
{

	
	
	
	
i
f
 
(
$
c
t
-
>
i
s
_
c
h
i
l
d
 
=
=
 
'
0
'
)
 
{

	
	
	
	
	
i
f
 
(
i
s
_
n
u
l
l
(
$
a
d
u
l
t
_
c
u
s
t
o
m
e
r
_
t
y
p
e
)
)
 
{

	
	
	
	
	
	
$
a
d
u
l
t
_
c
u
s
t
o
m
e
r
_
t
y
p
e
 
=
 
$
c
t
-
>
i
d
;

	
	
	
	
	
	
$
n
u
m
b
e
r
 
=
 
(
i
n
t
)
 
$
_
R
E
Q
U
E
S
T
[
'
n
u
m
a
d
u
l
t
'
]
;

	
	
	
	
	
	
i
f
 
(
(
i
n
t
)
 
$
c
t
-
>
m
a
x
i
m
u
m
 
>
 
$
n
u
m
b
e
r
)
 
{

	
	
	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
G
u
e
s
t
V
a
r
i
a
n
t
D
e
t
a
i
l
s
(
$
a
d
u
l
t
_
c
u
s
t
o
m
e
r
_
t
y
p
e
,
 
$
n
u
m
b
e
r
)
;

	
	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
G
u
e
s
t
V
a
r
i
a
n
t
D
e
t
a
i
l
s
(
$
a
d
u
l
t
_
c
u
s
t
o
m
e
r
_
t
y
p
e
,
 
(
i
n
t
)
 
$
c
t
-
>
m
a
x
i
m
u
m
)
;

	
	
	
	
	
	
}

	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
G
u
e
s
t
V
a
r
i
a
n
t
D
e
t
a
i
l
s
(
$
c
t
-
>
i
d
,
 
0
)
;

	
	
	
	
	
}

	
	
	
	
}
 
e
l
s
e
 
{
 
/
/
 
i
s
 
c
h
i
l
d
 
i
s
 
t
r
u
e

	
	
	
	
	
i
f
 
(
i
s
_
n
u
l
l
(
$
c
h
i
l
d
_
c
u
s
t
o
m
e
r
_
t
y
p
e
)
)
 
{

	
	
	
	
	
	
$
c
h
i
l
d
_
c
u
s
t
o
m
e
r
_
t
y
p
e
 
=
 
$
c
t
-
>
i
d
;

	
	
	
	
	
	
$
n
u
m
b
e
r
 
=
 
(
i
n
t
)
 
$
_
R
E
Q
U
E
S
T
[
'
n
u
m
c
h
i
l
d
'
]
;

	
	
	
	
	
	
i
f
 
(
(
i
n
t
)
 
$
c
t
-
>
m
a
x
i
m
u
m
 
>
 
$
n
u
m
b
e
r
)
 
{

	
	
	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
G
u
e
s
t
V
a
r
i
a
n
t
D
e
t
a
i
l
s
(
$
c
h
i
l
d
_
c
u
s
t
o
m
e
r
_
t
y
p
e
,
 
$
n
u
m
b
e
r
)
;

	
	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
G
u
e
s
t
V
a
r
i
a
n
t
D
e
t
a
i
l
s
(
$
c
h
i
l
d
_
c
u
s
t
o
m
e
r
_
t
y
p
e
,
 
(
i
n
t
)
 
$
c
t
-
>
m
a
x
i
m
u
m
)
;

	
	
	
	
	
	
}

	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
G
u
e
s
t
V
a
r
i
a
n
t
D
e
t
a
i
l
s
(
$
c
t
-
>
i
d
,
 
0
)
;

	
	
	
	
	
}

	
	
	
	
}

	
	
	
}

	
	
}


	
	
$
d
e
f
a
u
l
t
_
n
u
m
b
e
r
_
o
f
_
f
i
r
s
t
_
g
u
e
s
t
_
t
y
p
e
_
s
e
t
 
=
 
f
a
l
s
e
;

	
	

	
	
f
o
r
e
a
c
h
 
(
$
e
x
L
i
s
t
 
a
s
 
$
c
t
)
 
{

	
	
	
$
c
u
s
t
o
m
e
r
T
y
p
e
s
 
=
 
a
r
r
a
y
(
)
;

	
	
	
$
c
u
s
t
o
m
e
r
T
y
p
e
s
[
 
'
I
D
'
 
]
 
=
 
$
c
t
-
>
i
d
;

	
	
	
$
c
u
s
t
o
m
e
r
T
y
p
e
s
[
 
'
T
E
X
T
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
G
U
E
S
T
T
Y
P
E
'
.
$
c
t
-
>
i
d
,
 
h
t
m
l
s
p
e
c
i
a
l
c
h
a
r
s
(
t
r
i
m
(
s
t
r
i
p
s
l
a
s
h
e
s
(
$
c
t
-
>
t
y
p
e
)
)
,
 
E
N
T
_
Q
U
O
T
E
S
)
)
)
;

	
	
	
$
c
u
r
r
e
n
t
 
=
 
$
t
h
i
s
-
>
g
e
t
G
u
e
s
t
V
a
r
i
a
n
t
D
e
t
a
i
l
s
(
$
c
t
-
>
i
d
)
;


	
	
	
i
f
 
(
$
c
u
r
r
e
n
t
 
!
=
 
f
a
l
s
e
)
 
{

	
	
	
	
i
f
 
(

	
	
	
	
	
!
$
d
e
f
a
u
l
t
_
n
u
m
b
e
r
_
o
f
_
f
i
r
s
t
_
g
u
e
s
t
_
t
y
p
e
_
s
e
t
 
&
&

	
	
	
	
	
i
s
s
e
t
(
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
'
a
j
a
x
_
s
e
a
r
c
h
_
c
o
m
p
o
s
i
t
e
_
s
e
l
e
c
t
i
o
n
s
'
]
[
'
g
u
e
s
t
n
u
m
b
e
r
s
'
]
[
0
]
)
 
&
&
 

	
	
	
	
	
$
c
t
-
>
m
a
x
i
m
u
m
 
>
=
 
(
i
n
t
)
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
'
a
j
a
x
_
s
e
a
r
c
h
_
c
o
m
p
o
s
i
t
e
_
s
e
l
e
c
t
i
o
n
s
'
]
[
'
g
u
e
s
t
n
u
m
b
e
r
s
'
]
[
0
]
 
&
&
 

	
	
	
	
	
(
i
n
t
)
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
'
a
j
a
x
_
s
e
a
r
c
h
_
c
o
m
p
o
s
i
t
e
_
s
e
l
e
c
t
i
o
n
s
'
]
[
'
g
u
e
s
t
n
u
m
b
e
r
s
'
]
[
0
]
 
>
 
0

	
	
	
	
	
)
 
{

	
	
	
	
	
$
d
e
f
N
o
 
=
 
(
i
n
t
)
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
'
a
j
a
x
_
s
e
a
r
c
h
_
c
o
m
p
o
s
i
t
e
_
s
e
l
e
c
t
i
o
n
s
'
]
[
'
g
u
e
s
t
n
u
m
b
e
r
s
'
]
[
0
]
;

	
	
	
	
	
$
d
e
f
a
u
l
t
_
n
u
m
b
e
r
_
o
f
_
f
i
r
s
t
_
g
u
e
s
t
_
t
y
p
e
_
s
e
t
 
=
 
t
r
u
e
;

	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
$
d
e
f
N
o
 
=
 
$
c
u
r
r
e
n
t
[
 
'
q
u
a
n
t
i
t
y
'
 
]
;

	
	
	
	
}


	
	
	
	
$
t
h
i
s
-
>
s
e
t
G
u
e
s
t
V
a
r
i
a
n
t
D
e
t
a
i
l
s
(
$
c
t
-
>
i
d
,
 
$
d
e
f
N
o
)
;

	
	
	
	
$
t
h
i
s
-
>
t
o
t
a
l
_
i
n
_
p
a
r
t
y
 
=
 
$
t
h
i
s
-
>
t
o
t
a
l
_
i
n
_
p
a
r
t
y
 
+
 
$
d
e
f
N
o
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
i
f
 
(
e
m
p
t
y
(
$
c
u
s
t
)
)
 
{

	
	
	
	
	
$
d
e
f
N
o
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
d
e
f
a
u
l
t
N
u
m
b
e
r
O
f
F
i
r
s
t
G
u
e
s
t
t
y
p
e
'
 
]
;

	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
$
d
e
f
N
o
 
=
 
0
;

	
	
	
	
}

	
	
	
}

	
	
	
$
d
e
f
a
u
l
t
_
s
t
a
r
t
 
=
 
1
;

	
	
	
i
f
 
(
c
o
u
n
t
(
$
e
x
L
i
s
t
)
 
>
 
1
)
 
{

	
	
	
	
$
d
e
f
a
u
l
t
_
s
t
a
r
t
 
=
 
0
;

	
	
	
}


	
	
	
$
c
u
s
t
o
m
e
r
T
y
p
e
s
[
 
'
D
R
O
P
D
O
W
N
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
i
n
t
e
g
e
r
S
e
l
e
c
t
L
i
s
t
(
$
d
e
f
a
u
l
t
_
s
t
a
r
t
,
 
$
c
t
-
>
m
a
x
i
m
u
m
,
 
1
,
 
'
g
u
e
s
t
t
y
p
e
'
.
$
c
t
-
>
i
d
,
 
'
s
i
z
e
=
"
1
"
 
o
n
c
h
a
n
g
e
=
"
g
e
t
R
e
s
p
o
n
s
e
_
g
u
e
s
t
t
y
p
e
(
\
'
'
.
$
c
t
-
>
i
d
.
'
\
'
,
t
h
i
s
.
v
a
l
u
e
)
;
"
'
,
 
$
d
e
f
N
o
,
 
'
0
'
,
 
$
u
s
e
_
b
o
o
t
s
t
r
a
p
_
r
a
d
i
o
s
 
=
 
f
a
l
s
e
)
;

	
	
	
$
c
u
s
t
o
m
e
r
T
y
p
e
s
[
 
'
F
I
E
L
D
N
A
M
E
'
 
]
 
=
 
'
g
u
e
s
t
t
y
p
e
'
.
$
c
t
-
>
i
d
;

	
	
	
$
c
u
s
t
[
 
]
 
=
 
$
c
u
s
t
o
m
e
r
T
y
p
e
s
;

	
	
}


	
	
r
e
t
u
r
n
 
$
c
u
s
t
;

	
}


	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/

	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/


	
/
/
	
E
x
t
r
a
s


	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/

	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/


	
/
*
*

	
 
*
 
I
n
i
t
i
a
l
i
s
e
s
 
t
h
e
 
E
x
t
r
a
s
 
s
e
l
e
c
t
e
d
 
t
o
 
e
m
p
t
y
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
i
n
i
t
E
x
t
r
a
s
(
)

	
{

	
	
$
t
h
i
s
-
>
e
x
t
r
a
s
 
=
 
'
'
;


	
	
r
e
t
u
r
n
 
$
t
h
i
s
-
>
e
x
t
r
a
s
;

	
}


	
/
*
*

	
 
*
 
R
e
t
u
r
n
s
 
t
h
e
 
e
x
t
r
a
s
 
c
u
r
r
e
n
t
l
y
 
s
e
l
e
c
t
e
d
 
(
s
t
r
i
n
g
)
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
E
x
t
r
a
s
(
)

	
{

	
	
r
e
t
u
r
n
 
$
t
h
i
s
-
>
e
x
t
r
a
s
;

	
}


	
/
*
*

	
 
*
 
R
e
c
e
i
v
e
s
 
a
n
 
e
x
t
r
a
'
s
 
u
i
d
 
a
n
d
 
a
p
p
e
n
d
s
 
i
t
 
t
o
 
t
h
e
 
e
x
i
s
t
i
n
g
 
s
e
l
e
c
t
e
d
 
e
x
t
r
a
s
 
l
i
s
t
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
E
x
t
r
a
s
(
$
e
x
t
r
a
)

	
{

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
s
e
t
E
x
t
r
a
s
:
:
S
t
a
r
t
i
n
g
'
)
;

	
	
$
c
u
r
r
e
n
t
E
x
t
r
a
s
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
t
h
i
s
-
>
e
x
t
r
a
s
)
;

	
	
i
f
 
(
i
n
_
a
r
r
a
y
(
$
e
x
t
r
a
,
 
$
c
u
r
r
e
n
t
E
x
t
r
a
s
)
)
 
{

	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}

	
	
i
f
 
(
!
e
m
p
t
y
(
$
t
h
i
s
-
>
e
x
t
r
a
s
)
)
 
{

	
	
	
$
t
h
i
s
-
>
e
x
t
r
a
s
 
.
=
 
$
e
x
t
r
a
.
'
,
'
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
t
h
i
s
-
>
e
x
t
r
a
s
 
=
 
$
e
x
t
r
a
.
'
,
'
;

	
	
}

	
	
$
t
h
i
s
-
>
e
x
t
r
a
s
q
u
a
n
t
i
t
i
e
s
[
 
$
e
x
t
r
a
 
]
 
=
 
1
;

	
}


	
/
*
*

	
 
*
 
R
e
m
o
v
e
s
 
t
h
e
 
s
e
l
e
c
t
e
d
 
e
x
t
r
a
 
f
r
o
m
 
t
h
e
 
l
i
s
t
 
o
f
 
c
u
r
r
e
n
t
l
y
 
s
e
l
e
c
t
e
d
 
e
x
t
r
a
s
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
r
e
m
o
v
e
E
x
t
r
a
(
$
e
x
t
r
a
)

	
{

	
	
i
f
 
(
!
i
s
s
e
t
(
$
t
h
i
s
-
>
f
o
r
c
e
d
E
x
t
r
a
s
)
)
 
{
 
/
/
 
T
h
e
r
e
 
a
r
e
n
'
t
 
a
n
y
,
 
s
o
 
l
e
t
'
s
 
j
u
s
t
 
c
r
e
a
t
e
 
a
n
 
e
m
p
t
y
 
a
r
r
a
y
 
h
e
r
e

	
	
	
$
t
h
i
s
-
>
f
o
r
c
e
d
E
x
t
r
a
s
 
=
 
a
r
r
a
y
(
)
;

	
	
}


	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
r
e
m
o
v
e
E
x
t
r
a
:
:
S
t
a
r
t
i
n
g
'
)
;

	
	
$
t
m
p
A
r
r
a
y
 
=
 
a
r
r
a
y
(
)
;

	
	
$
c
u
r
r
e
n
t
E
x
t
r
a
s
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
t
h
i
s
-
>
e
x
t
r
a
s
)
;

	
	
f
o
r
e
a
c
h
 
(
$
c
u
r
r
e
n
t
E
x
t
r
a
s
 
a
s
 
$
e
x
)
 
{

	
	
	
i
f
 
(
!
i
n
_
a
r
r
a
y
(
$
e
x
,
 
$
t
h
i
s
-
>
f
o
r
c
e
d
E
x
t
r
a
s
)
)
 
{

	
	
	
	
i
f
 
(
$
e
x
 
!
=
 
$
e
x
t
r
a
)
 
{

	
	
	
	
	
$
t
m
p
A
r
r
a
y
[
 
]
 
=
 
$
e
x
;

	
	
	
	
}

	
	
	
}

	
	
}

	
	
$
t
h
i
s
-
>
e
x
t
r
a
s
 
=
 
i
m
p
l
o
d
e
(
'
,
'
,
 
$
t
m
p
A
r
r
a
y
)
;

	
}


	
/
*
*

	
 
*
 
C
h
e
c
k
 
t
h
e
 
i
d
 
o
f
 
t
h
e
 
e
x
t
r
a
 
p
a
s
s
e
d
 
f
r
o
m
 
t
h
e
 
A
j
a
x
 
q
u
e
r
y

	
 
*
 
W
i
l
l
 
f
a
i
l
 
i
f
 
t
h
e
 
e
x
t
r
a
 
i
d
 
n
o
t
 
s
e
t

	
 
*
 
W
i
l
l
 
f
a
i
l
 
i
f
 
t
h
e
 
e
x
t
r
a
 
c
a
n
n
o
t
 
b
e
 
t
a
l
l
i
e
d
 
w
i
t
h
 
t
h
e
 
p
r
o
p
e
r
t
y
 
u
i
d
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
c
h
e
c
k
E
x
t
r
a
(
$
e
x
t
r
a
)

	
{

	
	
i
f
 
(
!
i
s
s
e
t
(
$
e
x
t
r
a
)
 
|
|
 
e
m
p
t
y
(
$
e
x
t
r
a
)
)
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
h
e
c
k
E
x
t
r
a
:
:
E
x
t
r
a
 
s
e
n
t
 
i
n
 
i
n
c
o
r
r
e
c
t
 
f
o
r
m
a
t
'
)
;


	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}

	
	
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
n
a
m
e
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
e
x
t
r
a
s
 
W
H
E
R
E
 
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
'
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
'
 
A
N
D
 
u
i
d
 
=
 
'
$
e
x
t
r
a
'
 
"
;

	
	
$
r
e
s
u
l
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;

	
	
i
f
 
(
c
o
u
n
t
(
$
r
e
s
u
l
t
)
 
=
=
 
1
)
 
{

	
	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
	
}

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
h
e
c
k
E
x
t
r
a
:
:
E
x
t
r
a
 
c
o
u
l
d
 
n
o
t
 
b
e
 
r
e
c
o
n
c
i
l
e
d
 
w
i
t
h
 
p
r
o
p
e
r
t
y
 
u
i
d
'
)
;


	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
}


	
/
*
*

	
 
*
 
R
e
t
u
r
n
s
 
t
r
u
e
 
i
f
 
t
h
e
 
e
x
t
r
a
 
h
a
s
 
a
l
r
e
a
d
y
 
b
e
e
n
 
s
e
l
e
c
t
e
d
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
e
x
t
r
a
A
l
r
e
a
d
y
S
e
l
e
c
t
e
d
(
$
e
x
t
r
a
)

	
{

	
	
$
c
u
r
r
e
n
t
E
x
t
r
a
s
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
t
h
i
s
-
>
e
x
t
r
a
s
)
;

	
	
i
f
 
(
i
n
_
a
r
r
a
y
(
$
e
x
t
r
a
,
 
$
c
u
r
r
e
n
t
E
x
t
r
a
s
)
)
 
{

	
	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
	
}


	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
}


	
/
*
*

	
 
*
 
R
e
c
e
i
v
e
s
 
a
n
 
e
x
t
r
a
'
s
 
u
i
d
 
a
n
d
 
a
n
 
i
n
t
e
g
e
r
 
a
n
d
 
m
o
d
i
f
y
s
 
t
h
e
 
e
x
t
r
a
'
s
 
q
u
a
n
t
i
t
y
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
m
o
d
i
f
y
E
x
t
r
a
Q
u
a
n
t
i
t
y
(
$
v
a
l
u
e
,
 
$
e
x
t
r
a
I
D
)

	
{

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
m
o
d
i
f
y
E
x
t
r
a
Q
u
a
n
t
i
t
y
:
:
S
t
a
r
t
i
n
g
'
)
;

	
	
$
c
u
r
r
e
n
t
E
x
t
r
a
s
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
t
h
i
s
-
>
e
x
t
r
a
s
)
;

	
	
i
f
 
(
!
i
n
_
a
r
r
a
y
(
$
e
x
t
r
a
I
D
,
 
$
c
u
r
r
e
n
t
E
x
t
r
a
s
)
)
 
{

	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}

	
	
$
t
h
i
s
-
>
e
x
t
r
a
s
q
u
a
n
t
i
t
i
e
s
[
 
$
e
x
t
r
a
I
D
 
]
 
=
 
$
v
a
l
u
e
;

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
m
o
d
i
f
y
E
x
t
r
a
Q
u
a
n
t
i
t
y
:
:
E
x
t
r
a
s
 
q
u
a
n
t
i
t
i
e
s
 
=
 
'
.
s
e
r
i
a
l
i
z
e
(
$
t
h
i
s
-
>
e
x
t
r
a
s
q
u
a
n
t
i
t
i
e
s
)
)
;

	
}


	
/
/
 
N
e
w
 
f
o
r
 
v
4
.
3
.
3

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
a
d
d
_
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
(
$
p
l
u
g
i
n
,
 
$
i
d
 
=
 
0
,
 
$
d
e
s
c
r
i
p
t
i
o
n
 
=
 
'
N
o
 
d
e
s
c
r
i
p
t
i
o
n
'
,
 
$
t
o
t
a
l
_
v
a
l
u
e
 
=
 
0
.
0
0
,
 
$
t
a
x
_
c
o
d
e
_
i
d
 
=
 
0
)

	
{

	
	
/
/
i
f
 
(
$
i
d
 
=
=
 
0
)
 
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
/
/
i
f
 
(
 
(
f
l
o
a
t
)
 
$
t
o
t
a
l
_
v
a
l
u
e
 
=
=
0
.
0
0
)

	
	
/
/
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
$
t
h
i
s
-
>
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
[
 
$
p
l
u
g
i
n
 
]
[
 
$
i
d
 
]
 
=
 
a
r
r
a
y
(
'
i
d
'
 
=
>
 
$
i
d
,
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
I
N
T
O
U
R
_
T
O
U
R
_
T
I
T
L
E
_
C
U
S
T
O
M
_
T
E
X
T
'
.
$
i
d
,
 
$
d
e
s
c
r
i
p
t
i
o
n
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
,
 
'
u
n
t
a
x
e
d
_
g
r
a
n
d
_
t
o
t
a
l
'
 
=
>
 
(
f
l
o
a
t
)
 
$
t
o
t
a
l
_
v
a
l
u
e
)
;

	
	
i
f
 
(
$
t
a
x
_
c
o
d
e
_
i
d
 
>
 
0
)
 
{

	
	
	
$
t
h
i
s
-
>
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
[
 
$
p
l
u
g
i
n
 
]
[
 
$
i
d
 
]
[
 
'
t
a
x
_
c
o
d
e
_
i
d
'
 
]
 
=
 
$
t
a
x
_
c
o
d
e
_
i
d
;

	
	
}

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
r
e
m
o
v
e
_
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
(
$
p
l
u
g
i
n
,
 
$
i
d
)

	
{

	
	
i
f
 
(
i
s
s
e
t
(
$
t
h
i
s
-
>
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
[
 
$
p
l
u
g
i
n
 
]
[
 
$
i
d
 
]
)
)
 
{

	
	
	
u
n
s
e
t
(
$
t
h
i
s
-
>
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
[
 
$
p
l
u
g
i
n
 
]
[
 
$
i
d
 
]
)
;

	
	
}

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
r
e
s
e
t
_
c
h
o
i
c
e
s
_
f
o
r
_
p
l
u
g
i
n
(
$
p
l
u
g
i
n
)

	
{

	
	
i
f
 
(
i
s
s
e
t
(
$
t
h
i
s
-
>
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
[
 
$
p
l
u
g
i
n
 
]
)
)
 
{

	
	
	
u
n
s
e
t
(
$
t
h
i
s
-
>
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
[
 
$
p
l
u
g
i
n
 
]
)
;

	
	
}

	
}


	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/

	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/


	
/
/
	
A
d
d
i
t
i
o
n
a
l
 
l
i
n
e
 
i
t
e
m
s


	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/

	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
a
d
d
_
a
d
d
i
t
i
i
o
n
a
l
_
l
i
n
e
_
i
t
e
m
(
$
c
o
n
t
e
x
t
 
=
 
'
U
N
K
N
O
W
N
'
,
 
$
i
d
 
=
 
0
,
 
$
d
e
s
c
r
i
p
t
i
o
n
 
=
 
'
N
o
 
d
e
s
c
r
i
p
t
i
o
n
'
,
 
$
t
o
t
a
l
_
v
a
l
u
e
 
=
 
0
.
0
0
,
 
$
t
a
x
_
c
o
d
e
_
i
d
 
=
 
0
)

	
{

	
	
$
t
h
i
s
-
>
a
d
d
i
t
i
o
n
a
l
_
l
i
n
e
_
i
t
e
m
s
[
 
$
c
o
n
t
e
x
t
 
]
[
 
$
i
d
 
]
 
=
 
a
r
r
a
y
(
'
i
d
'
 
=
>
 
$
i
d
,
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
=
>
 
$
d
e
s
c
r
i
p
t
i
o
n
,
 
'
u
n
t
a
x
e
d
_
g
r
a
n
d
_
t
o
t
a
l
'
 
=
>
 
(
f
l
o
a
t
)
 
$
t
o
t
a
l
_
v
a
l
u
e
)
;

	
	
i
f
 
(
$
t
a
x
_
c
o
d
e
_
i
d
 
>
 
0
)
 
{

	
	
	
$
t
h
i
s
-
>
a
d
d
i
t
i
o
n
a
l
_
l
i
n
e
_
i
t
e
m
s
[
 
$
c
o
n
t
e
x
t
 
]
[
 
$
i
d
 
]
[
 
'
t
a
x
_
c
o
d
e
_
i
d
'
 
]
 
=
 
$
t
a
x
_
c
o
d
e
_
i
d
;

	
	
}

	
}


	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/

	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/


	
/
/
	
A
r
r
i
v
a
l
 
D
a
t
e


	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/

	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/


	
/
*
*

	
 
*
 
I
n
i
t
i
a
l
i
s
e
 
t
h
e
 
a
r
r
i
v
a
l
 
d
a
t
e
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
i
n
i
t
A
r
r
i
v
a
l
D
a
t
e
(
)
 
/
/
 
S
e
t
 
a
 
b
a
s
i
c
 
a
r
r
i
v
a
l
 
d
a
t
e

	
{

	
	
i
f
 
(
e
m
p
t
y
(
$
t
h
i
s
-
>
c
f
g
_
m
i
n
d
a
y
s
b
e
f
o
r
e
a
r
r
i
v
a
l
)
)
 
{

	
	
	
$
t
h
i
s
-
>
c
f
g
_
m
i
n
d
a
y
s
b
e
f
o
r
e
a
r
r
i
v
a
l
 
=
 
0
;

	
	
}

	
	
$
a
r
r
i
v
a
l
D
a
t
e
 
=
 
$
t
h
i
s
-
>
t
o
d
a
y
;

	
	
/
/
$
a
d
=
s
t
r
_
r
e
p
l
a
c
e
(
"
/
"
,
"
-
"
,
$
a
r
r
i
v
a
l
D
a
t
e
)
;

	
	
/
/
$
a
r
r
i
v
a
l
D
a
t
e
=
m
o
s
F
o
r
m
a
t
D
a
t
e
(
$
a
d
)
;

	
	
$
a
r
r
i
v
a
l
D
a
t
e
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
-
'
,
 
'
/
'
,
 
$
a
r
r
i
v
a
l
D
a
t
e
)
;

	
	
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
a
r
r
i
v
a
l
D
a
t
e
)
;

	
	
$
t
h
i
s
-
>
u
n
i
x
A
r
r
i
v
a
l
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
 
+
 
$
t
h
i
s
-
>
c
f
g
_
m
i
n
d
a
y
s
b
e
f
o
r
e
a
r
r
i
v
a
l
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;

	
	
$
a
r
r
i
v
a
l
D
a
t
e
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
$
t
h
i
s
-
>
u
n
i
x
A
r
r
i
v
a
l
D
a
t
e
)
;


	
	
$
t
h
i
s
-
>
s
e
t
A
r
r
i
v
a
l
D
a
t
e
(
$
a
r
r
i
v
a
l
D
a
t
e
)
;

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
i
n
i
t
A
r
r
i
v
a
l
D
a
t
e
:
:
I
n
i
t
i
a
l
i
s
i
n
g
 
A
r
r
i
v
a
l
 
d
a
t
e
 
t
o
 
'
.
$
a
r
r
i
v
a
l
D
a
t
e
)
;


	
	
r
e
t
u
r
n
 
$
t
h
i
s
-
>
a
r
r
i
v
a
l
D
a
t
e
;

	
}


	
/
*
*

	
 
*
 
F
i
n
d
 
t
h
e
 
n
e
x
t
 
d
a
t
e
 
t
h
a
t
 
t
h
e
 
p
r
o
p
e
r
t
y
 
h
a
s
 
a
 
r
o
o
m
 
a
v
a
i
l
a
b
l
e
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
n
e
x
t
D
a
t
e
P
r
o
p
e
r
t
y
H
a
s
R
o
o
m
F
r
e
e
(
$
a
r
r
i
v
a
l
D
a
t
e
)

	
{

	
	
/
/
 
L
e
t
s
 
c
h
e
c
k
 
t
h
a
t
 
a
t
 
l
e
a
s
t
 
o
n
e
 
r
o
o
m
 
i
s
 
a
v
a
i
l
a
b
l
e
 
o
n
 
t
h
i
s
 
d
a
t
e
.
 
I
f
 
i
t
'
s
 
n
o
t
,
 
w
e
'
l
l
 
o
f
f
e
r
 
t
h
e
 
n
e
x
t
 
d
a
t
e
 
t
h
a
t
 
a
 
r
o
o
m
 
i
s
 
a
v
a
i
l
a
b
l
e

	
	
i
f
 
(
e
m
p
t
y
(
$
a
r
r
i
v
a
l
D
a
t
e
)
)
 
{

	
	
	
$
a
r
r
i
v
a
l
D
a
t
e
 
=
 
$
t
h
i
s
-
>
t
o
d
a
y
;

	
	
}


	
	
$
t
o
t
a
l
N
u
m
b
e
r
O
f
R
o
o
m
s
 
=
 
c
o
u
n
t
(
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
R
o
o
m
U
i
d
s
)
;

	
	
$
c
u
r
r
e
n
t
 
=
 
s
t
r
t
o
t
i
m
e
(
$
a
r
r
i
v
a
l
D
a
t
e
)
;

	
	
$
l
a
s
t
 
=
 
s
t
r
t
o
t
i
m
e
(
$
a
r
r
i
v
a
l
D
a
t
e
.
'
 
5
 
y
e
a
r
s
 
'
)
;


	
	
w
h
i
l
e
 
(
$
c
u
r
r
e
n
t
 
<
=
 
$
l
a
s
t
)
 
{

	
	
	
$
d
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
$
c
u
r
r
e
n
t
)
;

	
	
	
i
f
 
(
i
s
s
e
t
(
$
t
h
i
s
-
>
a
l
l
B
o
o
k
i
n
g
s
[
 
$
d
 
]
)
)
 
{

	
	
	
	
i
f
 
(
c
o
u
n
t
(
$
t
h
i
s
-
>
a
l
l
B
o
o
k
i
n
g
s
[
 
$
d
 
]
)
 
<
 
$
t
o
t
a
l
N
u
m
b
e
r
O
f
R
o
o
m
s
)
 
{

	
	
	
	
	
$
a
r
r
i
v
a
l
D
a
t
e
 
=
 
$
d
;

	
	
	
	
	
b
r
e
a
k
;

	
	
	
	
}

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
a
r
r
i
v
a
l
D
a
t
e
 
=
 
$
d
;

	
	
	
	
b
r
e
a
k
;

	
	
	
}

	
	
	
$
c
u
r
r
e
n
t
 
=
 
s
t
r
t
o
t
i
m
e
(
'
+
1
 
d
a
y
'
,
 
$
c
u
r
r
e
n
t
)
;

	
	
}


	
	
r
e
t
u
r
n
 
$
a
r
r
i
v
a
l
D
a
t
e
;

	
}


	
/
*
*

	
 
*
 
C
h
e
c
k
s
 
t
h
a
t
 
t
h
e
 
g
i
v
e
n
 
d
a
t
e
 
i
s
n
'
t
 
e
a
r
l
i
e
r
 
t
h
a
n
 
t
o
d
a
y
,
 
o
r
 
l
a
t
e
r
 
t
h
a
n
 
t
h
e
 
l
a
t
e
s
t
 
p
o
s
s
i
b
l
e
 
d
a
t
e
 
(
a
c
c
o
r
d
i
n
g
 
t
o
 
l
i
m
i
t
 
a
d
v
a
n
c
e
 
b
o
o
k
i
n
g
s
 
f
l
a
g
)
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
c
h
e
c
k
A
r
r
i
v
a
l
D
a
t
e
(
$
a
r
r
i
v
a
l
D
a
t
e
)

	
{

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
 
=
 
j
o
m
r
e
s
_
g
e
t
S
i
n
g
l
e
t
o
n
(
'
j
o
m
r
e
s
_
t
e
m
p
_
b
o
o
k
i
n
g
_
h
a
n
d
l
e
r
'
)
;

	
	
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
 
=
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
g
e
t
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
a
m
e
n
d
_
c
o
n
t
r
a
c
t
'
)
;

	
	
$
t
h
i
s
J
R
U
s
e
r
 
=
 
j
o
m
r
e
s
_
g
e
t
S
i
n
g
l
e
t
o
n
(
'
j
r
_
u
s
e
r
'
)
;


	
	
i
f
 
(
e
m
p
t
y
(
$
t
h
i
s
-
>
c
f
g
_
m
i
n
d
a
y
s
b
e
f
o
r
e
a
r
r
i
v
a
l
)
 
|
|
 
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
I
s
M
a
n
a
g
e
r
)
 
{

	
	
	
$
t
h
i
s
-
>
c
f
g
_
m
i
n
d
a
y
s
b
e
f
o
r
e
a
r
r
i
v
a
l
 
=
 
0
;

	
	
}

	
	
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
t
h
i
s
-
>
t
o
d
a
y
)
;

	
	
i
f
 
(
c
o
u
n
t
(
$
d
a
t
e
_
e
l
e
m
e
n
t
s
)
 
!
=
 
3
)
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
h
e
c
k
A
r
r
i
v
a
l
D
a
t
e
:
:
 
A
r
r
i
v
a
l
 
d
a
t
e
 
c
h
e
c
k
 
f
a
i
l
e
d
,
 
d
a
t
e
 
e
l
e
m
e
n
t
s
 
i
s
 
n
o
t
 
=
 
3
.
 
'
)
;


	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}

	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
l
i
m
i
t
A
d
v
a
n
c
e
B
o
o
k
i
n
g
s
Y
e
s
N
o
 
=
=
 
'
1
'
)
 
{

	
	
	
$
u
n
i
x
L
a
t
e
s
t
A
r
r
i
v
a
l
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
 
+
 
$
t
h
i
s
-
>
c
f
g
_
a
d
v
a
n
c
e
B
o
o
k
i
n
g
s
L
i
m
i
t
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;

	
	
}


	
	
$
u
n
i
x
A
r
r
i
v
a
l
D
a
t
e
 
=
 
$
t
h
i
s
-
>
g
e
t
M
k
T
i
m
e
(
$
a
r
r
i
v
a
l
D
a
t
e
)
;

	
	
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
t
h
i
s
-
>
t
o
d
a
y
)
;

	
	
$
u
n
i
x
E
a
r
l
i
e
s
t
A
r
r
i
v
a
l
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
 
+
 
$
t
h
i
s
-
>
c
f
g
_
m
i
n
d
a
y
s
b
e
f
o
r
e
a
r
r
i
v
a
l
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;


	
	
i
f
 
(
!
i
s
s
e
t
(
$
a
r
r
i
v
a
l
D
a
t
e
)
)
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
c
h
e
c
k
A
r
r
i
v
a
l
D
a
t
e
:
:
 
A
r
r
i
v
a
l
 
d
a
t
e
 
c
h
e
c
k
 
f
a
i
l
e
d
,
 
a
r
r
i
v
a
l
D
a
t
e
 
i
s
n
'
t
 
s
e
t
.
 
"
)
;


	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}

	
	
i
f
 
(
e
m
p
t
y
(
$
a
r
r
i
v
a
l
D
a
t
e
)
)
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
h
e
c
k
A
r
r
i
v
a
l
D
a
t
e
:
:
 
A
r
r
i
v
a
l
 
d
a
t
e
 
c
h
e
c
k
 
f
a
i
l
e
d
,
 
a
r
r
i
v
a
l
D
a
t
e
 
i
s
 
e
m
p
t
y
.
 
'
)
;


	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}

	
	
i
f
 
(
!
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
)
 
{

	
	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
l
i
m
i
t
A
d
v
a
n
c
e
B
o
o
k
i
n
g
s
Y
e
s
N
o
 
=
=
 
1
 
&
&
 
(
$
u
n
i
x
A
r
r
i
v
a
l
D
a
t
e
 
>
 
$
u
n
i
x
L
a
t
e
s
t
A
r
r
i
v
a
l
D
a
t
e
)
)
 
{

	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
h
e
c
k
A
r
r
i
v
a
l
D
a
t
e
:
:
 
A
r
r
i
v
a
l
 
d
a
t
e
 
c
h
e
c
k
 
f
a
i
l
e
d
,
 
l
i
m
i
t
A
d
v
a
n
c
e
B
o
o
k
i
n
g
 
o
p
t
i
o
n
 
f
a
i
l
i
n
g
 
a
r
r
i
v
a
l
 
d
a
t
e
.
 
'
)
;


	
	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
	
}

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
E
a
r
l
i
e
s
t
 
a
r
r
i
v
a
l
 
d
a
t
e
:
 
'
.
$
u
n
i
x
E
a
r
l
i
e
s
t
A
r
r
i
v
a
l
D
a
t
e
)
;

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
A
r
r
i
v
a
l
 
d
a
t
e
 
'
.
$
u
n
i
x
A
r
r
i
v
a
l
D
a
t
e
)
;

	
	
	
i
f
 
(
$
u
n
i
x
E
a
r
l
i
e
s
t
A
r
r
i
v
a
l
D
a
t
e
 
>
 
$
u
n
i
x
A
r
r
i
v
a
l
D
a
t
e
)
 
{

	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
h
e
c
k
A
r
r
i
v
a
l
D
a
t
e
:
:
 
A
r
r
i
v
a
l
 
d
a
t
e
 
c
h
e
c
k
 
f
a
i
l
e
d
,
 
u
n
i
x
 
e
a
r
l
i
e
s
t
 
a
r
r
i
v
a
l
 
>
 
u
n
i
x
a
r
r
i
v
a
l
d
a
t
e
.
 
'
)
;


	
	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
	
}

	
	
}


	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
}


	
/
*
*

	
 
*
 
S
e
t
 
t
h
e
 
a
r
r
i
v
a
l
 
d
a
t
e
 
t
o
 
Y
Y
Y
Y
/
M
M
/
D
D
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
A
r
r
i
v
a
l
D
a
t
e
(
$
a
r
r
i
v
a
l
D
a
t
e
)

	
{

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
s
e
t
A
r
r
i
v
a
l
D
a
t
e
:
:
S
e
t
t
i
n
g
 
A
r
r
i
v
a
l
 
d
a
t
e
 
t
o
 
'
.
$
a
r
r
i
v
a
l
D
a
t
e
)
;

	
	
$
t
h
i
s
-
>
a
r
r
i
v
a
l
D
a
t
e
 
=
 
$
a
r
r
i
v
a
l
D
a
t
e
;

	
	
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
a
r
r
i
v
a
l
D
a
t
e
)
;

	
	
$
t
h
i
s
-
>
u
n
i
x
A
r
r
i
v
a
l
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;

	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
 
=
=
 
'
1
'
)
 
{

	
	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
 
=
 
j
o
m
r
e
s
_
g
e
t
S
i
n
g
l
e
t
o
n
(
'
j
o
m
r
e
s
_
t
e
m
p
_
b
o
o
k
i
n
g
_
h
a
n
d
l
e
r
'
)
;

	
	
	
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
 
=
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
g
e
t
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
a
m
e
n
d
_
c
o
n
t
r
a
c
t
'
)
;

	
	
	
i
f
 
(
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
 
&
&
 
$
t
h
i
s
-
>
s
t
a
y
D
a
y
s
 
=
=
 
'
'
)
 
{

	
	
	
	
$
t
h
i
s
-
>
s
t
a
y
D
a
y
s
 
=
 
d
a
t
e
D
i
f
f
(
'
d
'
,
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
a
m
e
n
d
_
c
o
n
t
r
a
c
t
_
a
r
r
i
v
a
l
'
 
]
,
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
a
m
e
n
d
_
c
o
n
t
r
a
c
t
_
d
e
p
a
r
t
u
r
e
'
 
]
)
;

	
	
	
}


	
	
	
$
d
e
p
a
r
t
u
r
e
D
a
t
e
 
=
 
$
t
h
i
s
-
>
g
e
t
F
i
x
e
d
P
e
r
i
o
d
D
e
p
a
r
t
u
r
e
D
a
t
e
(
$
t
h
i
s
-
>
s
t
a
y
D
a
y
s
)
;

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
s
e
t
A
r
r
i
v
a
l
D
a
t
e
:
:
P
r
o
p
e
r
t
y
 
u
s
e
s
 
f
i
x
e
d
 
p
e
r
i
o
d
s
,
 
s
o
 
s
e
t
t
i
n
g
 
d
e
p
a
r
t
u
r
e
 
d
a
t
e
 
t
o
:
 
'
.
$
d
e
p
a
r
t
u
r
e
D
a
t
e
)
;

	
	
	
$
t
h
i
s
-
>
s
e
t
D
e
p
a
r
t
u
r
e
D
a
t
e
(
$
d
e
p
a
r
t
u
r
e
D
a
t
e
)
;

	
	
}

	
}


	
/
*
*

	
 
*
 
R
e
t
u
r
n
s
 
t
h
e
 
c
u
r
r
e
n
t
 
a
r
r
i
v
a
l
 
d
a
t
e
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
A
r
r
i
v
a
l
D
a
t
e
(
)

	
{

	
	
r
e
t
u
r
n
 
$
t
h
i
s
-
>
a
r
r
i
v
a
l
D
a
t
e
;

	
}


	
/
*
*

	
 
*
 
M
a
k
e
s
 
t
h
e
 
a
r
r
i
v
a
l
 
d
a
t
e
 
o
u
t
p
u
t
.
 
D
e
p
e
n
d
i
n
g
 
o
n
 
c
o
n
f
i
g
u
r
a
t
i
o
n
 
o
p
t
i
o
n
s
 
t
h
i
s
 
c
a
n
 
b
e
 
e
i
t
h
e
r
 
a
 
j
a
v
a
s
c
r
i
p
t
 
p
o
p
u
p
 
o
r
 
a
 
d
r
o
p
d
o
w
n
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
m
a
k
e
A
r
r
i
v
a
l
D
a
t
e
O
u
t
p
u
t
(
$
a
r
r
i
v
a
l
D
a
t
e
)

	
{

	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
f
i
x
e
d
A
r
r
i
v
a
l
D
a
t
e
Y
e
s
N
o
 
=
=
 
'
1
'
 
&
&
 
$
t
h
i
s
-
>
c
f
g
_
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
 
=
=
 
'
1
'
)
 
{

	
	
	
$
s
e
l
e
c
t
i
o
n
M
e
t
h
o
d
 
=
 
$
t
h
i
s
-
>
f
i
x
e
d
D
a
y
s
A
r
r
i
v
a
l
d
a
t
e
D
r
o
p
d
o
w
n
(
$
a
r
r
i
v
a
l
D
a
t
e
)
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
s
e
l
e
c
t
i
o
n
M
e
t
h
o
d
 
=
 
$
t
h
i
s
-
>
g
e
n
e
r
a
t
e
D
a
t
e
I
n
p
u
t
(
'
a
r
r
i
v
a
l
D
a
t
e
'
,
 
$
a
r
r
i
v
a
l
D
a
t
e
,
 
'
a
d
'
)
;

	
	
}


	
	
r
e
t
u
r
n
 
$
s
e
l
e
c
t
i
o
n
M
e
t
h
o
d
;

	
}


	
/
*
*

	
 
*
 
M
a
k
e
 
t
h
e
 
a
r
r
i
v
a
l
 
d
a
t
e
 
d
r
o
p
d
o
w
n
 
f
o
r
 
p
r
o
p
e
r
t
i
e
s
 
t
h
a
t
 
h
a
v
e
 
a
 
f
i
x
e
d
 
a
r
r
i
v
a
l
 
d
a
y
 
(
e
g
 
S
a
t
u
r
d
a
y
)
.
 
F
i
n
d
s
 
o
n
l
y
 
t
h
o
s
e
 
d
a
t
e
s
 
t
h
a
t
 
m
a
t
c
h
 
A
N
D
 
h
a
v
e
 
a
 
s
l
o
t
 
a
v
a
i
l
a
b
l
e
 
a
f
t
e
r
 
t
h
e
m
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
f
i
x
e
d
D
a
y
s
A
r
r
i
v
a
l
d
a
t
e
D
r
o
p
d
o
w
n
(
$
a
r
r
i
v
a
l
D
a
t
e
)

	
{

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
 
=
 
j
o
m
r
e
s
_
g
e
t
S
i
n
g
l
e
t
o
n
(
'
j
o
m
r
e
s
_
t
e
m
p
_
b
o
o
k
i
n
g
_
h
a
n
d
l
e
r
'
)
;


	
	
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
a
r
r
i
v
a
l
D
a
t
e
)
;

	
	
$
d
a
y
 
=
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
;

	
	
$
m
o
n
t
h
 
=
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
;

	
	
$
y
e
a
r
 
=
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
;

	
	
/
/
$
d
a
y
=
$
d
a
y
-
1
4
;

	
	
$
r
e
q
u
i
r
e
d
D
a
y
 
=
 
$
t
h
i
s
-
>
c
f
g
_
f
i
x
e
d
A
r
r
i
v
a
l
D
a
y
;

	
	
i
f
 
(
!
$
r
e
q
u
i
r
e
d
D
a
y
)
 
{

	
	
	
$
r
e
q
u
i
r
e
d
D
a
y
 
=
 
'
0
'
;

	
	
}

	
	
f
o
r
 
(
$
i
 
=
 
0
,
 
$
n
 
=
 
7
;
 
$
i
 
<
 
$
n
;
 
+
+
$
i
)
 
{

	
	
	
$
u
n
i
x
A
r
r
i
v
a
l
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
m
o
n
t
h
,
 
$
d
a
y
,
 
$
y
e
a
r
)
;

	
	
	
$
c
u
r
r
e
n
t
D
o
W
 
=
 
d
a
t
e
(
'
w
'
,
 
$
u
n
i
x
A
r
r
i
v
a
l
D
a
t
e
)
;

	
	
	
i
f
 
(
$
c
u
r
r
e
n
t
D
o
W
 
=
=
 
$
r
e
q
u
i
r
e
d
D
a
y
)
 
{

	
	
	
	
$
a
r
r
i
v
a
l
D
a
t
e
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
m
o
n
t
h
,
 
$
d
a
y
,
 
$
y
e
a
r
)
)
;

	
	
	
	
b
r
e
a
k
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
d
a
y
+
+
;

	
	
	
}

	
	
}

	
	
$
d
a
t
e
s
L
i
s
t
A
r
r
a
y
 
=
 
$
t
h
i
s
-
>
c
a
l
c
P
e
r
i
o
d
s
(
$
a
r
r
i
v
a
l
D
a
t
e
)
;

	
	
$
f
i
x
e
d
P
e
r
i
o
d
D
r
o
p
d
o
w
n
 
=
 
'
<
s
e
l
e
c
t
 
c
l
a
s
s
=
"
i
n
p
u
t
-
m
e
d
i
u
m
"
 
n
a
m
e
=
"
a
r
r
i
v
a
l
D
a
t
e
"
 
o
n
c
h
a
n
g
e
=
"
g
e
t
R
e
s
p
o
n
s
e
_
p
a
r
t
i
c
u
l
a
r
s
(
\
'
a
r
r
i
v
a
l
_
p
e
r
i
o
d
\
'
,
t
h
i
s
.
v
a
l
u
e
)
"
;
>
'
;

	
	
$
c
o
u
n
t
e
r
 
=
 
0
;

	
	
/
/
$
s
e
l
e
c
t
e
d
D
a
t
e
i
s
N
t
h
D
a
t
e
=
1
;

	
	
$
s
e
l
e
c
t
e
d
D
a
t
e
 
=
 
$
a
r
r
i
v
a
l
D
a
t
e
;

	
	
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
 
=
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
g
e
t
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
a
m
e
n
d
_
c
o
n
t
r
a
c
t
'
)
;


	
	
f
o
r
e
a
c
h
 
(
$
d
a
t
e
s
L
i
s
t
A
r
r
a
y
 
a
s
 
$
t
h
i
s
D
a
t
e
)
 
{

	
	
	
u
n
s
e
t
(
$
t
h
i
s
-
>
f
i
x
e
d
D
a
y
s
A
r
r
i
v
a
l
d
a
t
e
D
r
o
p
d
o
w
n
_
c
h
e
c
k
d
a
t
e
s
)
;

	
	
	
$
s
e
l
e
c
t
e
d
 
=
 
'
'
;

	
	
	
$
o
k
T
o
A
d
d
D
a
t
e
 
=
 
t
r
u
e
;

	
	
	
/
/
 
I
f
 
f
i
x
e
d
 
p
e
r
i
o
d
 
b
o
o
k
i
n
g
s
 
a
r
e
 
u
s
e
d
,
 
w
e
 
n
e
e
d
 
t
o
 
e
n
s
u
r
e
 
t
h
a
t
 
a
l
l
 
d
a
t
e
s
 
w
i
t
h
i
n
 
a
 
p
e
r
i
o
d
 
a
r
e
 
f
r
e
e

	
	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
 
=
=
 
'
1
'
 
&
&
 
$
t
h
i
s
-
>
c
f
g
_
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
 
=
=
 
'
1
'
)
 
{

	
	
	
	
$
s
t
a
y
D
a
y
s
 
=
 
$
t
h
i
s
-
>
c
f
g
_
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
N
u
m
b
e
r
O
f
D
a
y
s
;

	
	
	
	
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
 
=
 
a
r
r
a
y
(
)
;

	
	
	
	
$
a
r
r
i
v
a
l
D
a
t
e
 
=
 
$
t
h
i
s
D
a
t
e
;

	
	
	
	
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
a
r
r
i
v
a
l
D
a
t
e
)
;

	
	
	
	
$
u
n
i
x
C
u
r
r
e
n
t
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;

	
	
	
	
$
s
e
c
o
n
d
s
I
n
D
a
y
 
=
 
8
6
4
0
0
;

	
	
	
	
/
/
$
c
u
r
r
e
n
t
U
n
i
x
D
a
y
=
$
u
n
i
x
C
u
r
r
e
n
t
D
a
t
e
;

	
	
	
	
$
c
u
r
r
e
n
t
D
a
y
 
=
 
$
a
r
r
i
v
a
l
D
a
t
e
;

	
	
	
	
f
o
r
 
(
$
i
 
=
 
0
,
 
$
n
 
=
 
$
s
t
a
y
D
a
y
s
;
 
$
i
 
<
 
$
n
;
 
+
+
$
i
)
 
{

	
	
	
	
	
$
c
u
r
r
e
n
t
D
a
y
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
$
u
n
i
x
C
u
r
r
e
n
t
D
a
t
e
)
;

	
	
	
	
	
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
[
 
]
 
=
 
$
c
u
r
r
e
n
t
D
a
y
;

	
	
	
	
	
$
u
n
i
x
C
u
r
r
e
n
t
D
a
t
e
 
=
 
$
u
n
i
x
C
u
r
r
e
n
t
D
a
t
e
 
+
 
$
s
e
c
o
n
d
s
I
n
D
a
y
;

	
	
	
	
}


	
	
	
	
i
f
 
(
!
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
)
 
{

	
	
	
	
	
i
f
 
(
!
i
s
s
e
t
(
$
t
h
i
s
-
>
f
i
x
e
d
D
a
y
s
A
r
r
i
v
a
l
d
a
t
e
D
r
o
p
d
o
w
n
_
c
h
e
c
k
d
a
t
e
s
)
)
 
{

	
	
	
	
	
	
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
r
o
o
m
_
b
o
o
k
i
n
g
s
_
u
i
d
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
r
o
o
m
_
b
o
o
k
i
n
g
s
 
W
H
E
R
E
 
`
d
a
t
e
`
 
I
N
 
(
'
.
j
o
m
r
e
s
_
i
m
p
l
o
d
e
(
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
,
 
f
a
l
s
e
)
.
"
)
 
A
N
D
 
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
'
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
'
"
;

	
	
	
	
	
	
$
d
a
t
e
l
i
s
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;

	
	
	
	
	
	
$
t
h
i
s
-
>
f
i
x
e
d
D
a
y
s
A
r
r
i
v
a
l
d
a
t
e
D
r
o
p
d
o
w
n
_
c
h
e
c
k
d
a
t
e
s
 
=
 
$
d
a
t
e
l
i
s
t
;

	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
$
d
a
t
e
l
i
s
t
 
=
 
$
t
h
i
s
-
>
f
i
x
e
d
D
a
y
s
A
r
r
i
v
a
l
d
a
t
e
D
r
o
p
d
o
w
n
_
c
h
e
c
k
d
a
t
e
s
;

	
	
	
	
	
}


	
	
	
	
	
i
f
 
(
!
e
m
p
t
y
(
$
d
a
t
e
l
i
s
t
)
)
 
{

	
	
	
	
	
	
$
o
k
T
o
A
d
d
D
a
t
e
 
=
 
f
a
l
s
e
;

	
	
	
	
	
}

	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
i
f
 
(
i
s
s
e
t
(
$
t
h
i
s
-
>
a
l
l
B
o
o
k
i
n
g
s
[
 
$
e
a
c
h
D
a
t
e
 
]
[
 
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
R
o
o
m
U
i
d
s
[
 
0
 
]
 
]
)
)
 
{

	
	
	
	
	
	
$
o
k
T
o
A
d
d
D
a
t
e
 
=
 
f
a
l
s
e
;

	
	
	
	
	
}

	
	
	
	
}

	
	
	
}

	
	
	
i
f
 
(
$
o
k
T
o
A
d
d
D
a
t
e
)
 
{

	
	
	
	
+
+
$
c
o
u
n
t
e
r
;

	
	
	
	
i
f
 
(
$
c
o
u
n
t
e
r
 
=
=
 
1
)
 
{

	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
A
r
r
i
v
a
l
D
a
t
e
(
$
t
h
i
s
D
a
t
e
)
;

	
	
	
	
}

	
	
	
	
i
f
 
(
$
t
h
i
s
D
a
t
e
 
=
=
 
$
s
e
l
e
c
t
e
d
D
a
t
e
)
 
{

	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
A
r
r
i
v
a
l
D
a
t
e
(
$
t
h
i
s
D
a
t
e
)
;

	
	
	
	
	
$
s
e
l
e
c
t
e
d
 
=
 
'
s
e
l
e
c
t
e
d
'
;

	
	
	
	
}

	
	
	
	
$
f
i
x
e
d
P
e
r
i
o
d
D
r
o
p
d
o
w
n
 
.
=
 
'
<
o
p
t
i
o
n
 
v
a
l
u
e
=
"
'
.
$
t
h
i
s
-
>
J
S
C
a
l
m
a
k
e
I
n
p
u
t
D
a
t
e
s
(
$
t
h
i
s
D
a
t
e
)
.
'
"
 
'
.
$
s
e
l
e
c
t
e
d
.
'
 
>
'
.
$
t
h
i
s
-
>
J
S
C
a
l
m
a
k
e
I
n
p
u
t
D
a
t
e
s
(
$
t
h
i
s
D
a
t
e
)
.
'
<
/
o
p
t
i
o
n
>
'
;

	
	
	
}

	
	
}

	
	
$
f
i
x
e
d
P
e
r
i
o
d
D
r
o
p
d
o
w
n
 
.
=
 
'
<
/
s
e
l
e
c
t
>
'
;


	
	
r
e
t
u
r
n
 
$
f
i
x
e
d
P
e
r
i
o
d
D
r
o
p
d
o
w
n
;

	
}


	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/

	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/


	
/
/
	
D
e
p
a
r
t
u
r
e
 
D
a
t
e


	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/

	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/


	
/
*
*

	
 
*
 
I
n
i
t
i
a
l
i
s
e
 
t
h
e
 
d
e
p
a
r
t
u
r
e
 
d
a
t
e
,
 
w
h
i
c
h
 
c
a
n
 
v
a
r
y
 
b
a
s
e
d
 
o
n
 
i
f
 
c
o
n
f
i
g
u
r
a
t
i
o
n
 
o
p
t
i
o
n
s
 
d
e
f
i
n
e
 
t
h
a
t
 
t
h
e
r
e
'
s
 
a
 
m
i
n
i
m
u
m
 
n
u
m
b
e
r
 
o
f
 
d
a
y
s
 
b
e
t
w
e
e
n
 
t
h
e
 
a
r
r
i
v
a
l
 
d
a
t
e
 
a
n
d
 
t
h
e
 
d
e
p
a
r
t
u
r
e
 
d
a
t
e
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
i
n
i
t
D
e
p
a
r
t
u
r
e
D
a
t
e
(
)

	
{

	
	
$
a
r
r
i
v
a
l
D
a
t
e
 
=
 
$
t
h
i
s
-
>
g
e
t
A
r
r
i
v
a
l
D
a
t
e
(
)
;

	
	
$
i
n
t
e
r
v
a
l
 
=
 
(
i
n
t
)
 
$
t
h
i
s
-
>
c
f
g
_
m
i
n
i
m
u
m
i
n
t
e
r
v
a
l
;

	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
 
=
=
 
'
1
'
)
 
{

	
	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
S
h
o
r
t
Y
e
s
N
o
 
=
=
 
'
1
'
)
 
{

	
	
	
	
$
i
n
t
e
r
v
a
l
 
=
 
$
t
h
i
s
-
>
c
f
g
_
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
S
h
o
r
t
N
u
m
b
e
r
O
f
D
a
y
s
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
i
n
t
e
r
v
a
l
 
=
 
$
t
h
i
s
-
>
c
f
g
_
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
N
u
m
b
e
r
O
f
D
a
y
s
;

	
	
	
}

	
	
}

	
	
$
d
e
p
a
r
t
u
r
e
D
a
t
e
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
s
t
r
t
o
t
i
m
e
(
$
a
r
r
i
v
a
l
D
a
t
e
.
'
 
+
'
.
$
i
n
t
e
r
v
a
l
.
'
 
d
a
y
s
'
)
)
;


	
	
$
t
h
i
s
-
>
s
e
t
D
e
p
a
r
t
u
r
e
D
a
t
e
(
$
d
e
p
a
r
t
u
r
e
D
a
t
e
)
;

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
i
n
i
t
D
e
p
a
r
t
u
r
e
D
a
t
e
:
:
I
n
i
t
i
a
l
i
s
i
n
g
 
D
e
p
a
r
t
u
r
e
 
d
a
t
e
 
t
o
 
'
.
$
d
e
p
a
r
t
u
r
e
D
a
t
e
)
;


	
	
r
e
t
u
r
n
 
$
d
e
p
a
r
t
u
r
e
D
a
t
e
;

	
}


	
/
*
*

	
 
*
 
S
e
t
 
t
h
e
 
d
e
p
a
r
t
u
r
e
 
d
a
t
e
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
D
e
p
a
r
t
u
r
e
D
a
t
e
(
$
d
e
p
a
r
t
u
r
e
D
a
t
e
)

	
{

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
s
e
t
D
e
p
a
r
t
u
r
e
D
a
t
e
:
:
S
e
t
t
i
n
g
 
D
e
p
a
r
t
u
r
e
 
d
a
t
e
 
t
o
 
'
.
$
d
e
p
a
r
t
u
r
e
D
a
t
e
)
;

	
	
$
t
h
i
s
-
>
d
e
p
a
r
t
u
r
e
D
a
t
e
 
=
 
$
d
e
p
a
r
t
u
r
e
D
a
t
e
;

	
	
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
d
e
p
a
r
t
u
r
e
D
a
t
e
)
;

	
	
$
t
h
i
s
-
>
u
n
i
x
D
e
p
a
r
t
u
r
e
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;

	
}


	
/
*
*

	
 
*
 
S
e
t
s
 
t
h
e
 
d
e
p
a
r
t
u
r
e
 
d
a
t
e
 
t
o
 
t
h
e
 
d
a
y
 
a
f
t
e
r
 
t
h
e
 
p
a
s
s
e
d
 
a
r
r
i
v
a
l
 
d
a
t
e
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
D
e
p
a
r
t
u
r
e
D
a
t
e
T
o
N
e
x
t
D
a
y
(
$
a
r
r
i
v
a
l
D
a
t
e
)

	
{

	
	
$
i
n
t
e
r
v
a
l
 
=
 
(
i
n
t
)
 
$
t
h
i
s
-
>
c
f
g
_
m
i
n
i
m
u
m
i
n
t
e
r
v
a
l
;

	
	
$
d
e
p
a
r
t
u
r
e
D
a
t
e
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
s
t
r
t
o
t
i
m
e
(
$
a
r
r
i
v
a
l
D
a
t
e
.
'
 
+
'
.
$
i
n
t
e
r
v
a
l
.
'
 
d
a
y
'
)
)
;

	
	
$
t
h
i
s
-
>
s
e
t
D
e
p
a
r
t
u
r
e
D
a
t
e
(
$
d
e
p
a
r
t
u
r
e
D
a
t
e
)
;


	
	
r
e
t
u
r
n
 
$
d
e
p
a
r
t
u
r
e
D
a
t
e
;

	
}


/
*
*

 
*
 
E
n
s
u
r
e
 
t
h
a
t
 
t
h
e
 
d
e
p
a
r
t
u
r
e
 
d
a
t
e
 
i
s
 
n
o
t
 
<
 
t
o
m
o
r
r
o
w
s
 
d
a
t
e
,
 
o
r
 
l
e
s
s
 
t
h
a
n
 
a
r
r
i
v
a
l
 
d
a
t
e
.

 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
c
h
e
c
k
D
e
p
a
r
t
u
r
e
D
a
t
e
(
$
d
e
p
a
r
t
u
r
e
D
a
t
e
)

	
{

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
 
=
 
j
o
m
r
e
s
_
g
e
t
S
i
n
g
l
e
t
o
n
(
'
j
o
m
r
e
s
_
t
e
m
p
_
b
o
o
k
i
n
g
_
h
a
n
d
l
e
r
'
)
;

	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
c
h
e
c
k
D
e
p
a
r
t
u
r
e
D
a
t
e
:
:
C
h
e
c
k
i
n
g
 
D
e
p
a
r
t
u
r
e
 
d
a
t
e
 
"
.
$
d
e
p
a
r
t
u
r
e
D
a
t
e
)
;

	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
c
h
e
c
k
D
e
p
a
r
t
u
r
e
D
a
t
e
:
:
B
o
o
k
e
r
 
c
l
a
s
s
 
"
.
$
t
h
i
s
-
>
b
o
o
k
e
r
_
c
l
a
s
s
)
;

	
	
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
 
=
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
g
e
t
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
a
m
e
n
d
_
c
o
n
t
r
a
c
t
'
)
;

	
	
/
*

	
	
i
f
 
(
$
t
h
i
s
-
>
b
o
o
k
e
r
_
c
l
a
s
s
 
=
=
 
"
1
0
0
"
)

	
	
	
{

	
	
	
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
 
=
 
e
x
p
l
o
d
e
(
"
/
"
,
$
d
e
p
a
r
t
u
r
e
D
a
t
e
)
;

	
	
	
$
t
h
i
s
-
>
u
n
i
x
D
e
p
a
r
t
u
r
e
D
a
t
e
=
 
m
k
t
i
m
e
(
0
,
0
,
0
,
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
1
]
,
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
2
]
,
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
0
]
)
;

	
	
	
i
f
 
(
$
t
h
i
s
-
>
u
n
i
x
D
e
p
a
r
t
u
r
e
D
a
t
e
 
>
 
$
t
h
i
s
-
>
u
n
i
x
A
r
r
i
v
a
l
D
a
t
e
)

	
	
	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
	
	
}

	
	
*
/

	
	
$
f
i
x
e
d
P
e
r
i
o
d
M
i
n
 
=
 
$
t
h
i
s
-
>
c
f
g
_
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
N
u
m
b
e
r
O
f
D
a
y
s
;

	
	
$
f
i
x
e
d
P
e
r
i
o
d
M
a
x
 
=
 
$
t
h
i
s
-
>
c
f
g
_
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
N
u
m
b
e
r
O
f
D
a
y
s
 
*
 
$
t
h
i
s
-
>
c
f
g
_
n
u
m
b
e
r
o
f
F
i
x
e
d
P
e
r
i
o
d
s
;

	
	
$
s
h
o
r
t
D
a
y
s
 
=
 
$
t
h
i
s
-
>
c
f
g
_
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
S
h
o
r
t
N
u
m
b
e
r
O
f
D
a
y
s
;

	
	
$
d
e
p
a
r
t
u
r
e
P
e
r
i
o
d
 
=
 
$
t
h
i
s
-
>
s
t
a
y
D
a
y
s
;


	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
S
h
o
r
t
Y
e
s
N
o
 
=
=
 
'
1
'
 
&
&
 
$
t
h
i
s
-
>
c
f
g
_
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
 
=
=
 
'
1
'
)
 
{

	
	
	
i
f
 
(
$
d
e
p
a
r
t
u
r
e
P
e
r
i
o
d
 
<
 
$
s
h
o
r
t
D
a
y
s
 
&
&
 
$
s
h
o
r
t
D
a
y
s
 
<
 
$
f
i
x
e
d
P
e
r
i
o
d
M
i
n
)
 
{

	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
h
e
c
k
D
e
p
a
r
t
u
r
e
D
a
t
e
:
:
 
D
e
p
a
r
t
u
r
e
 
d
a
t
e
 
c
h
e
c
k
 
f
a
i
l
e
d
,
 
d
e
p
a
r
t
u
r
e
 
p
e
r
i
o
d
 
s
h
o
r
t
e
r
 
t
h
a
n
 
s
h
o
r
t
d
a
y
s
.
 
'
)
;


	
	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
	
}

	
	
	
i
f
 
(
$
d
e
p
a
r
t
u
r
e
P
e
r
i
o
d
 
>
 
$
s
h
o
r
t
D
a
y
s
 
&
&
 
$
d
e
p
a
r
t
u
r
e
P
e
r
i
o
d
 
<
 
$
f
i
x
e
d
P
e
r
i
o
d
M
i
n
)
 
{

	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
h
e
c
k
D
e
p
a
r
t
u
r
e
D
a
t
e
:
:
 
D
e
p
a
r
t
u
r
e
 
d
a
t
e
 
c
h
e
c
k
 
f
a
i
l
e
d
,
 
d
e
p
a
r
t
u
r
e
 
p
e
r
i
o
d
 
s
h
o
r
t
e
r
 
t
h
a
n
 
s
h
o
r
t
d
a
y
s
 
a
n
d
 
d
e
p
a
r
t
u
r
e
 
d
a
t
e
 
l
e
s
s
 
t
h
a
n
 
f
i
x
e
d
 
p
e
r
i
o
d
 
m
i
n
i
m
u
m
.
 
'
)
;


	
	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
	
}

	
	
}
 
e
l
s
e
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
 
=
=
 
'
1
'
)
 
{

	
	
	
i
f
 
(
$
d
e
p
a
r
t
u
r
e
P
e
r
i
o
d
 
<
 
$
f
i
x
e
d
P
e
r
i
o
d
M
i
n
)
 
{

	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
h
e
c
k
D
e
p
a
r
t
u
r
e
D
a
t
e
:
:
 
D
e
p
a
r
t
u
r
e
 
p
e
r
i
o
d
 
<
 
f
i
x
e
d
 
p
e
r
i
o
d
 
m
i
n
i
m
u
m
'
)
;


	
	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
	
}

	
	
	
i
f
 
(
$
d
e
p
a
r
t
u
r
e
P
e
r
i
o
d
 
>
 
$
f
i
x
e
d
P
e
r
i
o
d
M
a
x
)
 
{

	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
h
e
c
k
D
e
p
a
r
t
u
r
e
D
a
t
e
:
:
 
D
e
p
a
r
t
u
r
e
 
d
a
t
e
 
c
h
e
c
k
 
f
a
i
l
e
d
,
 
d
e
p
a
r
t
u
r
e
 
p
e
r
i
o
d
 
>
 
f
i
x
e
d
 
p
e
r
i
o
d
 
m
a
x
i
m
u
m
.
 
'
)
;


	
	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
	
}

	
	
	
/
/
i
f
 
(
 
 
$
d
e
p
a
r
t
u
r
e
P
e
r
i
o
d
/
$
f
i
x
e
d
P
e
r
i
o
d
M
i
n
 
!
=
 
0
 
)

	
	
	
/
/
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}


	
	
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
d
e
p
a
r
t
u
r
e
D
a
t
e
)
;

	
	
$
u
n
i
x
D
e
p
a
r
t
u
r
e
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;


	
	
i
f
 
(
!
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
)
 
{

	
	
	
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
t
h
i
s
-
>
t
o
d
a
y
)
;

	
	
	
$
i
n
t
e
r
v
a
l
 
=
 
(
i
n
t
)
 
$
t
h
i
s
-
>
m
i
n
i
n
t
e
r
v
a
l
;


	
	
	
$
m
r
C
o
n
f
i
g
 
=
 
$
t
h
i
s
-
>
m
r
C
o
n
f
i
g
;

	
	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
w
h
o
l
e
d
a
y
_
b
o
o
k
i
n
g
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
	
$
i
n
t
e
r
v
a
l
 
=
 
$
i
n
t
e
r
v
a
l
 
-
 
1
;

	
	
	
}

	
	
	
$
u
n
i
x
T
o
m
o
r
r
o
w
s
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
 
+
 
$
i
n
t
e
r
v
a
l
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;


	
	
	
i
f
 
(
$
u
n
i
x
D
e
p
a
r
t
u
r
e
D
a
t
e
 
<
 
$
u
n
i
x
T
o
m
o
r
r
o
w
s
D
a
t
e
)
 
{

	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
h
e
c
k
D
e
p
a
r
t
u
r
e
D
a
t
e
:
:
 
D
e
p
a
r
t
u
r
e
 
d
a
t
e
 
c
h
e
c
k
 
f
a
i
l
e
d
,
 
u
n
i
x
 
d
e
p
a
r
t
u
r
e
 
d
a
t
e
 
<
 
u
n
i
x
 
t
o
m
o
r
r
o
w
s
 
d
a
t
e
.
 
'
)
;


	
	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
	
}

	
	
}

	
	
i
f
 
(
$
u
n
i
x
D
e
p
a
r
t
u
r
e
D
a
t
e
 
<
=
 
$
t
h
i
s
-
>
u
n
i
x
A
r
r
i
v
a
l
D
a
t
e
)
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
h
e
c
k
D
e
p
a
r
t
u
r
e
D
a
t
e
:
:
 
D
e
p
a
r
t
u
r
e
 
d
a
t
e
 
c
h
e
c
k
 
f
a
i
l
e
d
,
 
u
n
i
x
 
d
e
p
a
r
t
u
r
e
 
<
=
 
u
n
i
x
 
a
r
r
i
v
a
l
 
d
a
t
e
.
 
'
)
;


	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}


	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
}


	
/
*
*

	
 
*
 
G
e
t
s
 
a
 
f
i
x
 
p
e
r
i
o
d
'
s
 
d
e
p
a
r
t
u
r
e
 
d
a
t
e
.
 
P
a
s
s
e
d
 
t
h
e
 
d
e
p
a
r
t
u
r
e
 
p
e
r
i
o
d
,
 
w
i
l
l
 
r
e
t
u
r
n
 
t
h
e
 
a
p
p
r
o
p
r
i
a
t
e
 
d
a
t
e
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
F
i
x
e
d
P
e
r
i
o
d
D
e
p
a
r
t
u
r
e
D
a
t
e
(
$
d
e
p
a
r
t
u
r
e
P
e
r
i
o
d
)

	
{

	
	
$
d
e
p
a
r
t
u
r
e
P
e
r
i
o
d
 
=
 
(
i
n
t
)
 
$
d
e
p
a
r
t
u
r
e
P
e
r
i
o
d
;

	
	
/
/
$
d
e
p
a
r
t
u
r
e
P
e
r
i
o
d
=
$
d
e
p
a
r
t
u
r
e
P
e
r
i
o
d
+
+
;

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
g
e
t
F
i
x
e
d
P
e
r
i
o
d
D
e
p
a
r
t
u
r
e
D
a
t
e
:
:
S
e
t
t
i
n
g
 
f
i
x
e
d
 
p
e
r
i
o
d
 
d
e
p
a
r
t
u
r
e
 
t
o
 
'
.
$
d
e
p
a
r
t
u
r
e
P
e
r
i
o
d
)
;

	
	
$
a
r
r
i
v
a
l
D
a
t
e
 
=
 
$
t
h
i
s
-
>
a
r
r
i
v
a
l
D
a
t
e
;

	
	
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
a
r
r
i
v
a
l
D
a
t
e
)
;

	
	
/
/
$
u
n
i
x
C
u
r
r
e
n
t
D
a
t
e
=
 
m
k
t
i
m
e
(
0
,
0
,
0
,
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
1
]
,
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
2
]
,
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
0
]
)
;

	
	
$
u
n
i
x
D
e
p
a
r
t
u
r
e
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
 
+
 
$
d
e
p
a
r
t
u
r
e
P
e
r
i
o
d
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;

	
	
$
d
e
p
a
r
t
u
r
e
D
a
t
e
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
$
u
n
i
x
D
e
p
a
r
t
u
r
e
D
a
t
e
)
;


	
	
r
e
t
u
r
n
 
$
d
e
p
a
r
t
u
r
e
D
a
t
e
;

	
}


	
/
*
*

	
 
*
 
R
e
t
u
r
n
 
t
h
e
 
d
e
p
a
r
t
u
r
e
 
d
a
t
e
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
D
e
p
a
r
t
u
r
e
D
a
t
e
(
)

	
{

	
	
r
e
t
u
r
n
 
$
t
h
i
s
-
>
d
e
p
a
r
t
u
r
e
D
a
t
e
;

	
}


	
/
*
*

	
 
*
 
M
a
k
e
 
t
h
e
 
d
e
p
a
r
t
u
r
e
 
d
a
t
e
 
o
u
t
p
u
t

	
 
*
 
T
h
i
s
 
v
a
r
i
e
s
 
d
e
p
e
n
d
i
n
g
 
o
n
 
c
o
n
f
i
g
u
r
a
t
i
o
n
 
o
p
t
i
o
n
s
,
 
c
a
n
 
b
e
 
e
i
t
h
e
r
 
a
 
j
a
v
a
s
c
r
i
p
t
 
c
a
l
e
n
d
a
r
 
o
r
 
d
r
o
p
d
o
w
n
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
m
a
k
e
D
e
p
a
r
t
u
r
e
D
a
t
e
O
u
t
p
u
t
(
$
d
e
p
a
r
t
u
r
e
D
a
t
e
)

	
{

	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
 
=
=
 
'
0
'
)
 
{

	
	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
s
h
o
w
d
e
p
a
r
t
u
r
e
i
n
p
u
t
 
=
=
 
'
1
'
)
 
{

	
	
	
	
r
e
t
u
r
n
 
$
t
h
i
s
-
>
g
e
n
e
r
a
t
e
D
a
t
e
I
n
p
u
t
(
'
d
e
p
a
r
t
u
r
e
D
a
t
e
'
,
 
$
d
e
p
a
r
t
u
r
e
D
a
t
e
,
 
'
d
d
'
)
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
r
e
t
u
r
n
 
'
<
i
n
p
u
t
 
t
y
p
e
=
"
h
i
d
d
e
n
"
 
n
a
m
e
=
"
d
e
p
a
r
t
u
r
e
D
a
t
e
"
 
v
a
l
u
e
=
"
'
.
$
d
e
p
a
r
t
u
r
e
D
a
t
e
.
'
"
>
'
;

	
	
	
}

	
	
}
 
e
l
s
e
 
{

	
	
	
$
d
e
f
a
u
l
t
P
e
r
i
o
d
 
=
 
$
t
h
i
s
-
>
c
f
g
_
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
N
u
m
b
e
r
O
f
D
a
y
s
;

	
	
	
$
p
e
r
i
o
d
s
 
=
 
a
r
r
a
y
(
)
;

	
	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
S
h
o
r
t
Y
e
s
N
o
 
=
=
 
'
1
'
)
 
{

	
	
	
	
$
d
e
f
a
u
l
t
P
e
r
i
o
d
 
=
 
$
t
h
i
s
-
>
c
f
g
_
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
S
h
o
r
t
N
u
m
b
e
r
O
f
D
a
y
s
;

	
	
	
	
$
p
e
r
i
o
d
s
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
$
t
h
i
s
-
>
c
f
g
_
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
S
h
o
r
t
N
u
m
b
e
r
O
f
D
a
y
s
,
 
$
t
h
i
s
-
>
c
f
g
_
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
S
h
o
r
t
N
u
m
b
e
r
O
f
D
a
y
s
)
;

	
	
	
}

	
	
	
f
o
r
 
(
$
i
 
=
 
1
,
 
$
n
 
=
 
$
t
h
i
s
-
>
c
f
g
_
n
u
m
b
e
r
o
f
F
i
x
e
d
P
e
r
i
o
d
s
;
 
$
i
 
<
=
 
$
n
;
 
+
+
$
i
)
 
{

	
	
	
	
/
/
$
s
e
l
e
c
t
e
d
=
"
"
;

	
	
	
	
$
s
t
e
p
 
=
 
$
i
 
*
 
$
t
h
i
s
-
>
c
f
g
_
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
N
u
m
b
e
r
O
f
D
a
y
s
;

	
	
	
	
$
p
e
r
i
o
d
s
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
$
s
t
e
p
,
 
$
s
t
e
p
)
;

	
	
	
}

	
	
	
$
f
i
x
e
d
P
e
r
i
o
d
D
r
o
p
d
o
w
n
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
p
e
r
i
o
d
s
,
 
'
f
i
x
e
d
P
e
r
i
o
d
_
p
e
r
i
o
d
s
R
e
q
u
e
s
t
e
d
'
,
 
'
s
i
z
e
=
"
1
"
 
c
l
a
s
s
=
"
i
n
p
u
t
-
m
e
d
i
u
m
"
 
o
n
c
h
a
n
g
e
=
"
g
e
t
R
e
s
p
o
n
s
e
_
p
a
r
t
i
c
u
l
a
r
s
(
\
'
d
e
p
a
r
t
u
r
e
_
p
e
r
i
o
d
\
'
,
t
h
i
s
.
v
a
l
u
e
)
"
;
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
$
d
e
f
a
u
l
t
P
e
r
i
o
d
)
;


	
	
	
r
e
t
u
r
n
 
$
f
i
x
e
d
P
e
r
i
o
d
D
r
o
p
d
o
w
n
;

	
	
}

	
}


	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/

	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/


	
/
/
	
O
t
h
e
r
 
d
a
t
e
 
f
u
n
c
t
i
o
n
s


	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/

	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/


	
/
*
*

	
 
*
 
R
e
t
u
r
n
s
 
t
r
u
e
 
i
f
 
a
n
y
 
o
f
 
t
h
e
 
d
a
t
e
s
 
b
e
t
w
e
e
n
 
a
r
r
i
v
a
l
 
a
n
d
 
d
e
p
a
r
t
u
r
e
 
f
a
l
l
 
o
n
 
a
 
w
e
e
k
e
n
d
 
d
a
y
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
d
a
t
e
R
a
n
g
e
I
n
c
l
u
d
e
s
W
e
e
k
e
n
d
s
(
)

	
{

	
	
$
w
e
e
k
e
n
d
D
a
y
s
 
=
 
$
t
h
i
s
-
>
c
f
g
_
w
e
e
k
e
n
d
d
a
y
s
;

	
	
i
f
 
(
!
e
m
p
t
y
(
$
t
h
i
s
-
>
d
a
t
e
R
a
n
g
e
S
t
r
i
n
g
)
)
 
{

	
	
	
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
t
h
i
s
-
>
d
a
t
e
R
a
n
g
e
S
t
r
i
n
g
)
;

	
	
}
 
e
l
s
e
 
{

	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}

	
	
f
o
r
 
(
$
i
 
=
 
0
,
 
$
n
 
=
 
c
o
u
n
t
(
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
)
;
 
$
i
 
<
 
$
n
;
 
+
+
$
i
)
 
{

	
	
	
$
t
h
i
s
D
o
w
 
=
 
$
t
h
i
s
-
>
g
e
t
D
a
y
O
f
W
e
e
k
(
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
[
 
$
i
 
]
)
;

	
	
	
i
f
 
(
i
n
_
a
r
r
a
y
(
$
t
h
i
s
D
o
w
,
 
$
w
e
e
k
e
n
d
D
a
y
s
)
)
 
{
 
/
/
 
I
n
 
o
t
h
e
r
 
w
o
r
d
s
,
 
o
n
e
 
o
f
 
t
h
e
 
d
a
y
s
 
f
a
l
l
s
 
o
n
 
a
 
w
e
e
k
e
n
d

	
	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
	
	
}

	
	
}


	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
}


	
/
*
*

	
 
*
 
R
e
t
u
r
n
s
 
t
r
u
e
 
a
l
l
 
o
f
 
t
h
e
 
d
a
t
e
s
 
b
e
t
w
e
e
n
 
a
r
r
i
v
a
l
 
a
n
d
 
d
e
p
a
r
t
u
r
e
 
f
a
l
l
 
o
n
 
a
 
w
e
e
k
e
n
d
 
d
a
y
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
d
a
t
e
R
a
n
g
e
I
s
A
l
l
W
e
e
k
e
n
d
s
(
)

	
{

	
	
$
r
a
n
g
e
D
a
y
s
O
f
W
e
e
k
 
=
 
a
r
r
a
y
(
)
;

	
	
$
w
e
e
k
e
n
d
D
a
y
s
 
=
 
$
t
h
i
s
-
>
c
f
g
_
w
e
e
k
e
n
d
d
a
y
s
;

	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
d
a
t
e
R
a
n
g
e
I
s
A
l
l
W
e
e
k
e
n
d
s
:
:
 
W
e
e
k
e
n
d
 
d
a
y
s
 
"
.
s
e
r
i
a
l
i
z
e
(
$
w
e
e
k
e
n
d
D
a
y
s
)
 
)
;

	
	
$
t
m
p
W
E
a
r
r
a
y
 
=
 
a
r
r
a
y
(
)
;

	
	
f
o
r
e
a
c
h
 
(
$
w
e
e
k
e
n
d
D
a
y
s
 
a
s
 
$
v
a
l
)
 
{

	
	
	
$
t
m
p
W
E
a
r
r
a
y
[
 
]
 
=
 
i
n
t
v
a
l
(
$
v
a
l
)
;

	
	
}

	
	
$
w
e
e
k
e
n
d
D
a
y
s
 
=
 
$
t
m
p
W
E
a
r
r
a
y
;

	
	
i
f
 
(
!
e
m
p
t
y
(
$
t
h
i
s
-
>
d
a
t
e
R
a
n
g
e
S
t
r
i
n
g
)
)
 
{

	
	
	
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
t
h
i
s
-
>
d
a
t
e
R
a
n
g
e
S
t
r
i
n
g
)
;

	
	
}
 
e
l
s
e
 
{

	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}

	
	
f
o
r
 
(
$
i
 
=
 
0
,
 
$
n
 
=
 
c
o
u
n
t
(
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
)
;
 
$
i
 
<
 
$
n
;
 
+
+
$
i
)
 
{

	
	
	
$
r
a
n
g
e
D
a
y
s
O
f
W
e
e
k
[
 
]
 
=
 
$
t
h
i
s
-
>
g
e
t
D
a
y
O
f
W
e
e
k
(
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
[
 
$
i
 
]
)
;

	
	
}

	
	
s
o
r
t
(
$
w
e
e
k
e
n
d
D
a
y
s
)
;

	
	
s
o
r
t
(
$
r
a
n
g
e
D
a
y
s
O
f
W
e
e
k
)
;

	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
d
a
t
e
R
a
n
g
e
I
s
A
l
l
W
e
e
k
e
n
d
s
:
:
 
w
e
e
k
e
n
d
D
a
y
s
 
"
.
s
e
r
i
a
l
i
z
e
(
$
w
e
e
k
e
n
d
D
a
y
s
)
 
)
;

	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
d
a
t
e
R
a
n
g
e
I
s
A
l
l
W
e
e
k
e
n
d
s
:
:
 
r
a
n
g
e
D
a
y
s
O
f
W
e
e
k
 
"
.
s
e
r
i
a
l
i
z
e
(
$
r
a
n
g
e
D
a
y
s
O
f
W
e
e
k
)
 
)
;


	
	
f
o
r
e
a
c
h
 
(
$
r
a
n
g
e
D
a
y
s
O
f
W
e
e
k
 
a
s
 
$
r
d
o
w
)
 
{

	
	
	
i
f
 
(
!
i
n
_
a
r
r
a
y
(
$
r
d
o
w
,
 
$
w
e
e
k
e
n
d
D
a
y
s
)
)
 
{

	
	
	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
d
a
t
e
R
a
n
g
e
I
s
A
l
l
W
e
e
k
e
n
d
s
:
:
 
<
b
>
N
o
t
<
/
b
>
 
a
l
l
 
d
a
y
s
 
a
r
e
 
w
e
e
k
e
n
d
 
d
a
y
s
"
 
)
;

	
	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
	
}

	
	
}


	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
d
a
t
e
R
a
n
g
e
I
s
A
l
l
W
e
e
k
e
n
d
s
:
:
 
A
l
l
 
d
a
y
s
 
a
r
e
 
w
e
e
k
e
n
d
 
d
a
y
s
"
)
;

	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
}


	
/
*
*

	
 
*
 
R
e
t
u
r
n
 
t
h
e
 
d
a
y
 
o
f
 
t
h
e
 
w
e
e
k
 
f
o
r
 
a
 
g
i
v
e
n
 
d
a
t
e
.
 
E
x
p
e
c
t
s
 
a
 
d
a
y
 
i
n
 
y
y
y
y
/
m
m
/
d
d
 
f
o
r
m
a
t
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
D
a
y
O
f
W
e
e
k
(
$
d
a
t
e
)

	
{

	
	
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
d
a
t
e
)
;

	
	
$
u
n
i
x
C
u
r
r
e
n
t
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;

	
	
$
d
a
t
e
A
r
r
a
y
 
=
 
g
e
t
d
a
t
e
(
$
u
n
i
x
C
u
r
r
e
n
t
D
a
t
e
)
;


	
	
r
e
t
u
r
n
 
$
d
a
t
e
A
r
r
a
y
[
 
'
w
d
a
y
'
 
]
;

	
}


	
/
*
*

	
 
*
 
C
o
n
s
t
r
u
c
t
 
a
 
s
t
r
i
n
g
 
o
f
 
d
a
t
e
s
 
b
a
s
e
d
 
o
n
 
t
h
e
 
a
r
r
i
v
a
l
 
a
n
d
 
d
e
p
a
r
t
u
r
e
 
d
a
t
e
.
 
P
o
p
u
l
a
t
e
s
 
t
h
e
 
d
a
t
e
R
a
n
g
e
S
t
r
i
n
g
 
w
i
t
h
 
t
h
e
 
r
e
s
u
l
t
 
a
n
d
 
r
e
t
u
r
n
s
 
i
t
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
D
a
t
e
R
a
n
g
e
S
t
r
i
n
g
(
)

	
{

	
	
$
s
t
a
y
D
a
y
s
 
=
 
(
i
n
t
)
 
$
t
h
i
s
-
>
g
e
t
S
t
a
y
D
a
y
s
(
)
;

	
	
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
 
=
 
a
r
r
a
y
(
)
;

	
	
$
c
u
r
r
e
n
t
D
a
y
 
=
 
$
t
h
i
s
-
>
g
e
t
A
r
r
i
v
a
l
D
a
t
e
(
)
;

	
	
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
c
u
r
r
e
n
t
D
a
y
)
;

	
	
$
u
n
i
x
C
u
r
r
e
n
t
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;

	
	
f
o
r
 
(
$
i
 
=
 
0
,
 
$
n
 
=
 
$
s
t
a
y
D
a
y
s
;
 
$
i
 
<
 
$
n
;
 
+
+
$
i
)
 
{

	
	
	
$
c
u
r
r
e
n
t
D
a
y
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
$
u
n
i
x
C
u
r
r
e
n
t
D
a
t
e
)
;

	
	
	
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
[
 
]
 
=
 
$
c
u
r
r
e
n
t
D
a
y
;

	
	
	
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
c
u
r
r
e
n
t
D
a
y
)
;

	
	
	
$
u
n
i
x
C
u
r
r
e
n
t
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
 
+
 
1
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;

	
	
}

	
	
$
t
h
i
s
-
>
d
a
t
e
R
a
n
g
e
S
t
r
i
n
g
 
=
 
i
m
p
l
o
d
e
(
'
,
'
,
 
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
)
;


	
	
r
e
t
u
r
n
 
$
t
h
i
s
-
>
d
a
t
e
R
a
n
g
e
S
t
r
i
n
g
;

	
}


	
/
*
*

	
 
*
 
C
o
n
s
t
r
u
c
t
 
a
 
s
t
r
i
n
g
 
o
f
 
d
a
t
e
s
 
b
a
s
e
d
 
o
n
 
t
h
e
 
a
r
r
i
v
a
l
 
a
n
d
 
d
e
p
a
r
t
u
r
e
 
d
a
t
e
.
 
P
o
p
u
l
a
t
e
s
 
t
h
e
 
d
a
t
e
R
a
n
g
e
S
t
r
i
n
g
 
w
i
t
h
 
t
h
e
 
r
e
s
u
l
t
 
a
n
d
 
r
e
t
u
r
n
s
 
i
t
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
f
i
n
d
D
a
t
e
R
a
n
g
e
F
o
r
D
a
t
e
s
(
$
d
1
,
 
$
d
2
)

	
{

	
	
$
d
a
y
s
 
=
 
(
i
n
t
)
 
$
t
h
i
s
-
>
f
i
n
d
D
a
y
s
F
o
r
D
a
t
e
s
(
$
d
1
,
 
$
d
2
)
;

	
	
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
 
=
 
a
r
r
a
y
(
)
;

	
	
$
c
u
r
r
e
n
t
D
a
y
 
=
 
$
d
1
;

	
	
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
c
u
r
r
e
n
t
D
a
y
)
;

	
	
$
u
n
i
x
C
u
r
r
e
n
t
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;

	
	
f
o
r
 
(
$
i
 
=
 
0
,
 
$
n
 
=
 
$
d
a
y
s
;
 
$
i
 
<
=
 
$
n
;
 
+
+
$
i
)
 
{

	
	
	
$
c
u
r
r
e
n
t
D
a
y
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
$
u
n
i
x
C
u
r
r
e
n
t
D
a
t
e
)
;

	
	
	
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
[
 
]
 
=
 
$
c
u
r
r
e
n
t
D
a
y
;

	
	
	
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
c
u
r
r
e
n
t
D
a
y
)
;

	
	
	
$
u
n
i
x
C
u
r
r
e
n
t
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
 
+
 
1
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;

	
	
}


	
	
r
e
t
u
r
n
 
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
;

	
}


	
/
*
*

	
 
*
 
S
e
t
 
t
h
e
 
s
t
a
y
 
d
a
y
s
,
 
t
h
e
 
n
u
m
b
e
r
 
o
f
 
d
a
y
s
 
t
h
e
 
b
o
o
k
i
n
g
 
c
o
v
e
r
s
,
 
b
a
s
e
d
 
o
n
 
a
r
r
i
v
a
l
 
d
a
t
e
 
a
n
d
 
d
e
p
a
r
t
u
r
e
 
d
a
t
e
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
f
i
n
d
D
a
y
s
F
o
r
D
a
t
e
s
(
$
d
1
,
 
$
d
2
)

	
{

	
	
$
d
i
f
f
 
=
 
d
a
t
e
D
i
f
f
(
'
d
'
,
 
$
d
1
,
 
$
d
2
)
;


	
	
r
e
t
u
r
n
 
$
d
i
f
f
;

	
}


	
/
*
*

	
 
*
 
R
e
t
u
r
n
s
 
t
h
e
 
u
n
i
x
 
t
i
m
e
s
t
a
m
p
 
f
o
r
 
t
h
e
 
a
r
r
i
v
a
l
 
d
a
t
e
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
U
n
i
x
A
r
r
i
v
a
l
D
a
t
e
(
)

	
{

	
	
r
e
t
u
r
n
 
$
t
h
i
s
-
>
u
n
i
x
A
r
r
i
v
a
l
D
a
t
e
;

	
}


	
/
*
*

	
 
*
 
R
e
t
u
r
n
s
 
t
h
e
 
u
n
i
x
 
t
i
m
e
s
t
a
m
p
 
f
o
r
 
t
h
e
 
d
e
p
a
r
t
u
r
e
 
d
a
t
e
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
U
n
i
x
D
e
p
a
r
t
u
r
e
D
a
t
e
(
)

	
{

	
	
r
e
t
u
r
n
 
$
t
h
i
s
-
>
u
n
i
x
D
e
p
a
r
t
u
r
e
D
a
t
e
;

	
}


	
/
*
*

	
 
*
 
S
e
t
 
t
h
e
 
s
t
a
y
 
d
a
y
s
,
 
t
h
e
 
n
u
m
b
e
r
 
o
f
 
d
a
y
s
 
t
h
e
 
b
o
o
k
i
n
g
 
c
o
v
e
r
s
,
 
b
a
s
e
d
 
o
n
 
a
r
r
i
v
a
l
 
d
a
t
e
 
a
n
d
 
d
e
p
a
r
t
u
r
e
 
d
a
t
e
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
S
t
a
y
D
a
y
s
(
)

	
{

	
	
$
m
r
C
o
n
f
i
g
 
=
 
$
t
h
i
s
-
>
m
r
C
o
n
f
i
g
;

	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
w
h
o
l
e
d
a
y
_
b
o
o
k
i
n
g
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
 
=
=
 
'
1
'
)
 
{

	
	
	
	
$
t
h
i
s
-
>
s
t
a
y
D
a
y
s
 
=
 
d
a
t
e
D
i
f
f
(
'
d
'
,
 
$
t
h
i
s
-
>
a
r
r
i
v
a
l
D
a
t
e
,
 
$
t
h
i
s
-
>
d
e
p
a
r
t
u
r
e
D
a
t
e
)
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
t
h
i
s
-
>
s
t
a
y
D
a
y
s
 
=
 
d
a
t
e
D
i
f
f
(
'
d
'
,
 
$
t
h
i
s
-
>
a
r
r
i
v
a
l
D
a
t
e
,
 
$
t
h
i
s
-
>
d
e
p
a
r
t
u
r
e
D
a
t
e
)
 
+
 
1
;

	
	
	
}

	
	
}
 
e
l
s
e
 
{

	
	
	
$
t
h
i
s
-
>
s
t
a
y
D
a
y
s
 
=
 
d
a
t
e
D
i
f
f
(
'
d
'
,
 
$
t
h
i
s
-
>
a
r
r
i
v
a
l
D
a
t
e
,
 
$
t
h
i
s
-
>
d
e
p
a
r
t
u
r
e
D
a
t
e
)
;

	
	
}

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
s
e
t
S
t
a
y
D
a
y
s
:
:
'
.
$
t
h
i
s
-
>
s
t
a
y
D
a
y
s
)
;

	
}


	
/
*
*

	
 
*
 
R
e
t
u
r
n
s
 
t
h
e
 
n
u
m
b
e
r
 
o
f
 
d
a
y
s
 
t
h
a
t
 
t
h
e
 
s
t
a
y
 
c
o
v
e
r
s
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
S
t
a
y
D
a
y
s
(
)

	
{

	
	
r
e
t
u
r
n
 
$
t
h
i
s
-
>
s
t
a
y
D
a
y
s
;

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
_
p
a
r
t
_
o
f
_
s
t
a
y
_
p
e
r
i
o
d
(
$
s
t
a
y
d
a
y
s
)

	
{

	
	
s
w
i
t
c
h
 
(
$
t
h
i
s
-
>
c
f
g
_
b
o
o
k
i
n
g
_
f
o
r
m
_
d
a
i
l
y
_
w
e
e
k
l
y
_
m
o
n
t
h
l
y
)
 
{

	
	
	
c
a
s
e
 
'
D
'
:

	
	
	
	
$
n
u
m
_
p
e
r
i
o
d
 
=
 
$
s
t
a
y
d
a
y
s
;

	
	
	
	
b
r
e
a
k
;

	
	
	
c
a
s
e
 
'
W
'
:

	
	
	
	
$
n
u
m
_
p
e
r
i
o
d
 
=
 
n
u
m
b
e
r
_
f
o
r
m
a
t
(
$
s
t
a
y
d
a
y
s
 
/
 
7
,
 
2
,
 
'
.
'
,
 
'
'
)
;

	
	
	
	
b
r
e
a
k
;

	
	
	
c
a
s
e
 
'
M
'
:

	
	
	
	
$
m
o
n
t
h
 
=
 
d
a
t
e
(
'
m
'
,
 
$
t
h
i
s
-
>
u
n
i
x
A
r
r
i
v
a
l
D
a
t
e
)
;

	
	
	
	
$
y
e
a
r
 
=
 
d
a
t
e
(
'
Y
'
,
 
$
t
h
i
s
-
>
u
n
i
x
A
r
r
i
v
a
l
D
a
t
e
)
;

	
	
	
	
$
n
u
m
 
=
 
c
a
l
_
d
a
y
s
_
i
n
_
m
o
n
t
h
(
C
A
L
_
G
R
E
G
O
R
I
A
N
,
 
$
m
o
n
t
h
,
 
$
y
e
a
r
)
;

	
	
	
	
$
n
u
m
_
p
e
r
i
o
d
 
=
 
n
u
m
b
e
r
_
f
o
r
m
a
t
(
(
$
s
t
a
y
d
a
y
s
 
/
 
$
n
u
m
)
,
 
2
,
 
'
.
'
,
 
'
'
)
;

	
	
	
	
b
r
e
a
k
;

	
	
}


	
	
$
a
r
r
 
=
 
e
x
p
l
o
d
e
(
'
.
'
,
 
$
n
u
m
_
p
e
r
i
o
d
)
;

	
	
i
f
 
(
i
s
s
e
t
(
$
a
r
r
[
 
1
 
]
)
 
&
&
 
$
a
r
r
[
 
1
 
]
 
=
=
 
'
0
0
'
)
 
{

	
	
	
$
n
u
m
_
p
e
r
i
o
d
 
=
 
$
a
r
r
[
 
0
 
]
;

	
	
}


	
	
r
e
t
u
r
n
 
$
n
u
m
_
p
e
r
i
o
d
;

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
_
r
a
t
e
_
p
e
r
_
n
i
g
h
t
_
c
o
n
v
e
r
t
e
d
_
t
o
_
o
u
t
p
u
t
_
p
e
r
i
o
d
(
$
r
a
t
e
p
e
r
n
i
g
h
t
)

	
{

	
	
s
w
i
t
c
h
 
(
$
t
h
i
s
-
>
c
f
g
_
b
o
o
k
i
n
g
_
f
o
r
m
_
d
a
i
l
y
_
w
e
e
k
l
y
_
m
o
n
t
h
l
y
)
 
{

	
	
	
c
a
s
e
 
'
D
'
:

	
	
	
	
$
n
u
m
_
p
e
r
i
o
d
 
=
 
$
r
a
t
e
p
e
r
n
i
g
h
t
;

	
	
	
	
b
r
e
a
k
;

	
	
	
c
a
s
e
 
'
W
'
:

	
	
	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
t
a
r
i
f
f
m
o
d
e
 
=
=
 
'
1
'
 
&
&
 
$
t
h
i
s
-
>
c
f
g
_
t
a
r
i
f
f
C
h
a
r
g
e
s
S
t
o
r
e
d
W
e
e
k
l
y
Y
e
s
N
o
 
=
=
 
'
1
'
)
 
{

	
	
	
	
	
$
n
u
m
_
p
e
r
i
o
d
 
=
 
$
r
a
t
e
p
e
r
n
i
g
h
t
;

	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
$
n
u
m
_
p
e
r
i
o
d
 
=
 
$
r
a
t
e
p
e
r
n
i
g
h
t
 
*
 
7
;

	
	
	
	
}

	
	
	
	
b
r
e
a
k
;

	
	
	
c
a
s
e
 
'
M
'
:

	
	
	
	
$
m
o
n
t
h
 
=
 
d
a
t
e
(
'
m
'
,
 
$
t
h
i
s
-
>
u
n
i
x
A
r
r
i
v
a
l
D
a
t
e
)
;

	
	
	
	
$
y
e
a
r
 
=
 
d
a
t
e
(
'
Y
'
,
 
$
t
h
i
s
-
>
u
n
i
x
A
r
r
i
v
a
l
D
a
t
e
)
;

	
	
	
	
$
n
u
m
 
=
 
c
a
l
_
d
a
y
s
_
i
n
_
m
o
n
t
h
(
C
A
L
_
G
R
E
G
O
R
I
A
N
,
 
$
m
o
n
t
h
,
 
$
y
e
a
r
)
;

	
	
	
	
$
n
u
m
_
p
e
r
i
o
d
 
=
 
$
r
a
t
e
p
e
r
n
i
g
h
t
 
*
 
$
n
u
m
;

	
	
	
	
b
r
e
a
k
;

	
	
}


	
	
r
e
t
u
r
n
 
$
n
u
m
_
p
e
r
i
o
d
;

	
}


	
/
*
*

	
 
*
 
R
e
c
e
i
v
e
s
 
a
 
d
a
t
e
 
i
n
 
y
y
y
y
/
m
m
/
d
d
 
f
o
r
m
a
t
 
a
n
d
 
r
e
f
o
r
m
a
t
s
 
i
t
 
a
c
c
o
r
d
i
n
g
 
t
o
 
c
o
n
f
i
g
u
r
a
t
i
o
n
 
o
p
t
i
o
n
s
 
r
e
q
u
e
s
t
e
d
 
o
u
t
p
u
t
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
o
u
t
p
u
t
D
a
t
e
(
$
t
h
e
d
a
t
e
)

	
{

	
	
/
/
 
A
s
s
u
m
e
s
 
t
h
e
 
d
a
t
e
 
$
t
h
e
D
a
t
e
 
c
o
m
e
s
 
f
r
o
m
 
t
h
e
 
s
y
s
t
e
m
 
i
n
 
t
h
e
 
f
o
r
m
a
t
 
y
y
y
y
/
m
m
/
d
d

	
	
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
t
h
e
d
a
t
e
)
;

	
	
$
u
n
i
x
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;

	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
d
a
t
e
F
o
r
m
a
t
S
t
y
l
e
 
=
=
 
'
1
'
)
 
{

	
	
	
$
f
o
r
m
a
t
t
e
d
D
a
t
e
 
=
 
d
a
t
e
(
$
t
h
i
s
-
>
c
f
g
_
c
a
l
_
o
u
t
p
u
t
,
 
$
u
n
i
x
D
a
t
e
)
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
f
o
r
m
a
t
t
e
d
D
a
t
e
 
=
 
s
t
r
f
t
i
m
e
(
$
t
h
i
s
-
>
c
f
g
_
c
a
l
_
o
u
t
p
u
t
,
 
$
u
n
i
x
D
a
t
e
)
;

	
	
}


	
	
r
e
t
u
r
n
 
$
f
o
r
m
a
t
t
e
d
D
a
t
e
;

	
}


	
/
*
*

	
 
*
 
C
o
n
v
e
r
t
s
 
a
 
d
a
t
e
 
p
a
s
s
e
d
 
t
o
 
i
t
 
t
o
 
t
h
e
 
r
e
q
u
i
r
e
d
 
f
o
r
m
a
t
 
w
h
i
c
h
 
i
s
 
t
h
e
n
 
d
i
s
p
l
a
y
e
d
 
a
s
 
p
a
r
t
 
o
f
 
t
h
e
 
j
a
v
a
s
c
r
i
p
t
 
c
a
l
e
n
d
a
r
 
i
n
p
u
t
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
J
S
C
a
l
m
a
k
e
I
n
p
u
t
D
a
t
e
s
(
$
i
n
p
u
t
D
a
t
e
)

	
{

	
	
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
i
n
p
u
t
D
a
t
e
)
;

	
	
$
u
n
i
x
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;

	
	
s
w
i
t
c
h
 
(
$
t
h
i
s
-
>
c
f
g
_
c
a
l
_
i
n
p
u
t
)
 
{

	
	
	
c
a
s
e
 
'
%
d
/
%
m
/
%
Y
'
:

	
	
	
	
$
t
h
e
D
a
t
e
 
=
 
d
a
t
e
(
'
d
/
m
/
Y
'
,
 
$
u
n
i
x
D
a
t
e
)
;

	
	
	
	
b
r
e
a
k
;

	
	
	
c
a
s
e
 
'
%
Y
/
%
m
/
%
d
'
:

	
	
	
	
$
t
h
e
D
a
t
e
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
$
u
n
i
x
D
a
t
e
)
;

	
	
	
	
b
r
e
a
k
;

	
	
	
c
a
s
e
 
'
%
m
/
%
d
/
%
Y
'
:

	
	
	
	
$
t
h
e
D
a
t
e
 
=
 
d
a
t
e
(
'
m
/
d
/
Y
'
,
 
$
u
n
i
x
D
a
t
e
)
;

	
	
	
	
b
r
e
a
k
;

	
	
	
c
a
s
e
 
'
%
d
-
%
m
-
%
Y
'
:

	
	
	
	
$
t
h
e
D
a
t
e
 
=
 
d
a
t
e
(
'
d
-
m
-
Y
'
,
 
$
u
n
i
x
D
a
t
e
)
;

	
	
	
	
b
r
e
a
k
;

	
	
	
c
a
s
e
 
'
%
Y
-
%
m
-
%
d
'
:

	
	
	
	
$
t
h
e
D
a
t
e
 
=
 
d
a
t
e
(
'
Y
-
m
-
d
'
,
 
$
u
n
i
x
D
a
t
e
)
;

	
	
	
	
b
r
e
a
k
;

	
	
	
c
a
s
e
 
'
%
m
-
%
d
-
%
Y
'
:

	
	
	
	
$
t
h
e
D
a
t
e
 
=
 
d
a
t
e
(
'
m
-
d
-
Y
'
,
 
$
u
n
i
x
D
a
t
e
)
;

	
	
	
	
b
r
e
a
k
;

	
	
	
c
a
s
e
 
'
%
d
.
%
m
.
%
Y
'
:

	
	
	
	
$
t
h
e
D
a
t
e
 
=
 
d
a
t
e
(
'
d
.
m
.
Y
'
,
 
$
u
n
i
x
D
a
t
e
)
;

	
	
	
	
b
r
e
a
k
;

	
	
	
d
e
f
a
u
l
t
:

	
	
	
	
e
c
h
o
 
'
E
r
r
o
r
 
i
n
 
d
a
t
e
 
f
o
r
m
a
t
.
 
C
a
n
n
o
t
 
c
o
n
t
i
n
u
e
.
 
I
f
 
y
o
u
 
h
a
v
e
 
j
u
s
t
 
i
n
s
t
a
l
l
e
d
 
J
o
m
r
e
s
 
y
o
u
 
s
h
o
u
l
d
 
l
o
g
 
i
n
t
o
 
t
h
e
 
f
r
o
n
t
e
n
d
 
a
s
 
a
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
.
 
T
h
i
s
 
w
i
l
l
 
s
e
t
 
u
p
 
s
u
f
f
i
c
i
e
n
t
 
d
a
t
a
 
s
o
 
t
h
a
t
 
y
o
u
 
c
a
n
 
p
r
o
c
e
e
d
.
'
;

	
	
	
	
e
x
i
t
;

	
	
	
	
b
r
e
a
k
;

	
	
}


	
	
r
e
t
u
r
n
 
$
t
h
e
D
a
t
e
;

	
}


	
/
*
*

	
 
*
 
C
o
n
v
e
r
t
s
 
a
 
d
a
t
e
 
p
a
s
s
e
d
 
f
r
o
m
 
t
h
e
 
j
a
v
a
s
c
r
i
p
t
 
c
a
l
e
n
d
a
r
 
i
n
t
o
 
t
h
e
 
y
y
y
y
/
m
m
/
d
d
 
f
o
r
m
a
t
 
t
h
a
t
 
J
o
m
r
e
s
 
e
x
p
e
c
t
s
 
t
o
 
d
e
a
l
 
w
i
t
h
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
J
S
C
a
l
C
o
n
v
e
r
t
I
n
p
u
t
D
a
t
e
s
(
$
i
n
p
u
t
D
a
t
e
)

	
{

	
	
$
i
n
p
u
t
F
o
r
m
a
t
 
=
 
$
t
h
i
s
-
>
c
f
g
_
c
a
l
_
i
n
p
u
t
;

	
	
s
w
i
t
c
h
 
(
$
i
n
p
u
t
F
o
r
m
a
t
)
 
{

	
	
	
c
a
s
e
 
'
%
d
/
%
m
/
%
Y
'
:

	
	
	
	
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
i
n
p
u
t
D
a
t
e
)
;

	
	
	
	
$
u
n
i
x
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
)
;

	
	
	
	
b
r
e
a
k
;

	
	
	
c
a
s
e
 
'
%
Y
/
%
m
/
%
d
'
:

	
	
	
	
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
i
n
p
u
t
D
a
t
e
)
;

	
	
	
	
$
u
n
i
x
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;

	
	
	
	
b
r
e
a
k
;

	
	
	
c
a
s
e
 
'
%
m
/
%
d
/
%
Y
'
:

	
	
	
	
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
i
n
p
u
t
D
a
t
e
)
;

	
	
	
	
$
u
n
i
x
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
)
;

	
	
	
	
b
r
e
a
k
;

	
	
	
c
a
s
e
 
'
%
d
-
%
m
-
%
Y
'
:

	
	
	
	
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
=
 
e
x
p
l
o
d
e
(
'
-
'
,
 
$
i
n
p
u
t
D
a
t
e
)
;

	
	
	
	
$
u
n
i
x
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
)
;

	
	
	
	
b
r
e
a
k
;

	
	
	
c
a
s
e
 
'
%
Y
-
%
m
-
%
d
'
:

	
	
	
	
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
=
 
e
x
p
l
o
d
e
(
'
-
'
,
 
$
i
n
p
u
t
D
a
t
e
)
;

	
	
	
	
$
u
n
i
x
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;

	
	
	
	
b
r
e
a
k
;

	
	
	
c
a
s
e
 
'
%
m
-
%
d
-
%
Y
'
:

	
	
	
	
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
=
 
e
x
p
l
o
d
e
(
'
-
'
,
 
$
i
n
p
u
t
D
a
t
e
)
;

	
	
	
	
$
u
n
i
x
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
)
;

	
	
	
	
b
r
e
a
k
;

	
	
	
c
a
s
e
 
'
%
d
.
%
m
.
%
Y
'
:

	
	
	
	
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
=
 
e
x
p
l
o
d
e
(
'
.
'
,
 
$
i
n
p
u
t
D
a
t
e
)
;

	
	
	
	
$
u
n
i
x
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
)
;

	
	
	
	
b
r
e
a
k
;

	
	
	
d
e
f
a
u
l
t
:

	
	
	
	
e
c
h
o
 
'
E
r
r
o
r
 
i
n
 
d
a
t
e
 
f
o
r
m
a
t
.
 
C
a
n
n
o
t
 
c
o
n
t
i
n
u
e
.
'
;

	
	
	
	
e
x
i
t
;

	
	
	
	
b
r
e
a
k
;

	
	
}

	
	
$
t
h
e
D
a
t
e
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
$
u
n
i
x
D
a
t
e
)
;


	
	
r
e
t
u
r
n
 
$
t
h
e
D
a
t
e
;

	
}


	
/
*
*

	
 
*
 
R
e
t
u
r
n
s
 
a
n
 
a
r
r
a
y
 
o
f
 
f
i
x
e
d
 
p
e
r
i
o
d
 
d
a
t
e
s
 
f
r
o
m
 
a
r
r
i
v
a
l
 
d
a
t
e
 
f
o
r
 
t
h
e
 
n
u
m
b
e
r
 
o
f
 
t
i
m
e
s
 
f
i
x
e
d
A
r
r
i
v
a
l
D
a
t
e
s
R
e
c
u
r
r
i
n
g
 
c
o
n
f
i
g
u
r
a
t
i
o
n
 
o
p
t
i
o
n
 
i
s
 
s
e
t
.

	
 
*
/

	
/
*

	
f
u
n
c
t
i
o
n
 
c
a
l
c
P
e
r
i
o
d
s
(
$
a
r
r
i
v
a
l
D
a
t
e
)

	
	
{

	
	
g
l
o
b
a
l
 
$
m
r
C
o
n
f
i
g
;

	
	
$
i
n
c
r
e
m
e
n
t
 
=
 
7
;

	
	
$
s
t
m
t
 
=
 
'
d
a
y
s
'
;

	
	
$
t
=
0
;

	
	
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
 
=
 
e
x
p
l
o
d
e
(
"
/
"
,
$
a
r
r
i
v
a
l
D
a
t
e
)
;

	
	
$
u
n
i
x
C
u
r
r
e
n
t
D
a
t
e
=
 
m
k
t
i
m
e
(
0
,
0
,
0
,
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
1
]
,
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
2
]
-
(
$
t
h
i
s
-
>
c
f
g
_
f
i
x
e
d
A
r
r
i
v
a
l
D
a
t
e
s
R
e
c
u
r
r
i
n
g
*
$
i
n
c
r
e
m
e
n
t
)
,
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
0
]
)
;
 
/
/

	
	
$
a
r
r
i
v
a
l
D
a
t
e
 
=
 
d
a
t
e
(
"
Y
/
m
/
d
"
,
$
u
n
i
x
C
u
r
r
e
n
t
D
a
t
e
)
;

	
	
$
n
u
m
b
e
r
_
t
i
m
e
s
_
r
e
c
u
r
r
i
n
g
=
$
t
h
i
s
-
>
c
f
g
_
f
i
x
e
d
A
r
r
i
v
a
l
D
a
t
e
s
R
e
c
u
r
r
i
n
g
+
$
t
h
i
s
-
>
c
f
g
_
f
i
x
e
d
A
r
r
i
v
a
l
D
a
t
e
s
R
e
c
u
r
r
i
n
g
;

	
	
$
d
a
t
e
s
A
r
r
a
y
=
a
r
r
a
y
(
)
;

	
	
/
/
w
i
l
l
 
c
o
n
t
i
n
u
e
 
t
o
 
l
o
o
p
 
a
s
 
m
a
n
y
 
t
i
m
e
s
 
a
s
 
t
h
e
 
r
e
c
u
r
r
e
n
c
e
 
(
$
n
u
m
b
e
r
_
t
i
m
e
s
_
r
e
c
u
r
r
i
n
g
)

	
	
w
h
i
l
e
 
(
$
t
<
(
$
n
u
m
b
e
r
_
t
i
m
e
s
_
r
e
c
u
r
r
i
n
g
*
$
i
n
c
r
e
m
e
n
t
)
)

	
	
	
{

	
	
	
/
/
$
c
a
l
e
n
d
a
r
_
s
t
a
r
t
d
a
t
e
 
a
n
d
 
$
c
a
l
e
n
d
a
r
_
e
n
d
d
a
t
e
 
a
r
e
 
p
r
e
-
d
e
t
e
r
m
i
n
e
d
 
a
n
d
 
m
a
t
c
h
 
t
h
e
 
Y
-
m
-
d
 
f
o
r
m
a
t

	
	
	
$
s
t
a
r
t
d
a
t
e
 
=
 
d
a
t
e
(
"
Y
/
m
/
d
"
,
 
s
t
r
t
o
t
i
m
e
(
$
a
r
r
i
v
a
l
D
a
t
e
.
"
 
+
"
.
$
t
.
"
 
"
.
$
s
t
m
t
)
)
;

	
	
	
/
/
$
e
n
d
d
a
t
e
 
=
 
d
a
t
e
(
"
Y
/
m
/
d
"
,
 
s
t
r
t
o
t
i
m
e
(
$
c
a
l
e
n
d
a
r
_
e
n
d
d
a
t
e
.
"
 
+
"
.
$
t
.
"
 
"
.
$
s
t
m
t
)
)
;

	
	
	
$
t
 
=
 
(
$
t
+
$
i
n
c
r
e
m
e
n
t
)
;

	
	
	
$
d
a
t
e
s
A
r
r
a
y
[
]
=
$
s
t
a
r
t
d
a
t
e
;

	
	
	
}

	
	
r
e
t
u
r
n
 
$
d
a
t
e
s
A
r
r
a
y
;

	
	
}

	
*
/


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
c
a
l
c
P
e
r
i
o
d
s
(
$
a
r
r
i
v
a
l
D
a
t
e
)

	
{

	
	
$
i
n
c
r
e
m
e
n
t
 
=
 
7
;

	
	
$
s
t
m
t
 
=
 
'
d
a
y
s
'
;

	
	
$
t
 
=
 
0
;

	
	
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
a
r
r
i
v
a
l
D
a
t
e
)
;

	
	
$
r
e
c
u
r
r
i
n
g
 
=
 
0
;

	
	
$
t
h
i
s
D
a
t
e
 
=
 
$
a
r
r
i
v
a
l
D
a
t
e
;

	
	
w
h
i
l
e
 
(
$
r
e
c
u
r
r
i
n
g
 
<
=
 
$
t
h
i
s
-
>
c
f
g
_
f
i
x
e
d
A
r
r
i
v
a
l
D
a
t
e
s
R
e
c
u
r
r
i
n
g
)
 
{

	
	
	
$
u
n
i
x
C
u
r
r
e
n
t
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
 
-
 
(
$
r
e
c
u
r
r
i
n
g
 
*
 
$
i
n
c
r
e
m
e
n
t
)
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;

	
	
	
$
t
e
m
p
D
a
t
e
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
$
u
n
i
x
C
u
r
r
e
n
t
D
a
t
e
)
;

	
	
	
i
f
 
(
$
t
e
m
p
D
a
t
e
 
<
 
$
t
h
i
s
-
>
t
o
d
a
y
)
 
{

	
	
	
	
b
r
e
a
k
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
t
h
i
s
D
a
t
e
 
=
 
$
t
e
m
p
D
a
t
e
;

	
	
	
}

	
	
	
+
+
$
r
e
c
u
r
r
i
n
g
;

	
	
}


	
	
$
n
u
m
b
e
r
_
t
i
m
e
s
_
r
e
c
u
r
r
i
n
g
 
=
 
$
t
h
i
s
-
>
c
f
g
_
f
i
x
e
d
A
r
r
i
v
a
l
D
a
t
e
s
R
e
c
u
r
r
i
n
g
 
+
 
$
t
h
i
s
-
>
c
f
g
_
f
i
x
e
d
A
r
r
i
v
a
l
D
a
t
e
s
R
e
c
u
r
r
i
n
g
;

	
	
$
d
a
t
e
s
A
r
r
a
y
 
=
 
a
r
r
a
y
(
)
;

	
	
/
/
w
i
l
l
 
c
o
n
t
i
n
u
e
 
t
o
 
l
o
o
p
 
a
s
 
m
a
n
y
 
t
i
m
e
s
 
a
s
 
t
h
e
 
r
e
c
u
r
r
e
n
c
e
 
(
$
n
u
m
b
e
r
_
t
i
m
e
s
_
r
e
c
u
r
r
i
n
g
)

	
	
w
h
i
l
e
 
(
$
t
 
<
 
(
$
n
u
m
b
e
r
_
t
i
m
e
s
_
r
e
c
u
r
r
i
n
g
 
*
 
$
i
n
c
r
e
m
e
n
t
)
)
 
{

	
	
	
/
/
$
c
a
l
e
n
d
a
r
_
s
t
a
r
t
d
a
t
e
 
a
n
d
 
$
c
a
l
e
n
d
a
r
_
e
n
d
d
a
t
e
 
a
r
e
 
p
r
e
-
d
e
t
e
r
m
i
n
e
d
 
a
n
d
 
m
a
t
c
h
 
t
h
e
 
Y
-
m
-
d
 
f
o
r
m
a
t

	
	
	
$
s
t
a
r
t
d
a
t
e
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
s
t
r
t
o
t
i
m
e
(
$
t
h
i
s
D
a
t
e
.
'
 
+
'
.
$
t
.
'
 
'
.
$
s
t
m
t
)
)
;

	
	
	
/
/
$
e
n
d
d
a
t
e
 
=
 
d
a
t
e
(
"
Y
/
m
/
d
"
,
 
s
t
r
t
o
t
i
m
e
(
$
c
a
l
e
n
d
a
r
_
e
n
d
d
a
t
e
.
"
 
+
"
.
$
t
.
"
 
"
.
$
s
t
m
t
)
)
;

	
	
	
$
t
 
=
 
(
$
t
 
+
 
$
i
n
c
r
e
m
e
n
t
)
;

	
	
	
$
d
a
t
e
s
A
r
r
a
y
[
 
]
 
=
 
$
s
t
a
r
t
d
a
t
e
;

	
	
}


	
	
r
e
t
u
r
n
 
$
d
a
t
e
s
A
r
r
a
y
;

	
}


	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/

	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/


	
/
/
	
G
u
e
s
t
 
d
e
t
a
i
l
s


	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/

	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/


	
/
*
*

	
 
*
 
A
n
 
e
x
i
s
t
i
n
g
 
g
u
e
s
t
 
i
s
 
a
 
u
s
e
r
 
w
h
o
 
a
l
r
e
a
d
y
 
e
x
i
s
t
s
 
o
n
 
t
h
e
 
s
y
s
t
e
m
.
 
T
h
i
s
 
m
e
t
h
o
d
 
s
e
t
s
 
i
t
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
G
u
e
s
t
_
e
x
i
s
t
i
n
g
_
i
d
(
$
v
a
l
u
e
)

	
{

	
	
$
t
h
i
s
-
>
e
x
i
s
t
i
n
g
_
i
d
 
=
 
$
v
a
l
u
e
;

	
}


	
/
*
*

	
 
*
 
S
e
t
 
t
h
e
 
o
b
j
e
c
t
'
s
 
f
i
r
s
t
n
a
m
e
 
v
a
r
i
a
b
l
e
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
G
u
e
s
t
_
f
i
r
s
t
n
a
m
e
(
$
v
a
l
u
e
)

	
{

	
	
$
t
h
i
s
-
>
f
i
r
s
t
n
a
m
e
 
=
 
$
v
a
l
u
e
;

	
}


	
/
*
*

	
 
*
 
S
e
t
 
t
h
e
 
o
b
j
e
c
t
'
s
 
s
u
r
n
a
m
e
 
v
a
r
i
a
b
l
e
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
G
u
e
s
t
_
s
u
r
n
a
m
e
(
$
v
a
l
u
e
)

	
{

	
	
$
t
h
i
s
-
>
s
u
r
n
a
m
e
 
=
 
$
v
a
l
u
e
;

	
}


	
/
*
*

	
 
*
 
S
e
t
 
t
h
e
 
o
b
j
e
c
t
'
s
 
h
o
u
s
e
 
v
a
r
i
a
b
l
e
 
(
t
y
p
i
c
a
l
l
y
 
h
o
u
s
e
 
n
u
m
b
e
r
)
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
G
u
e
s
t
_
h
o
u
s
e
(
$
v
a
l
u
e
)

	
{

	
	
$
t
h
i
s
-
>
h
o
u
s
e
 
=
 
$
v
a
l
u
e
;

	
}


	
/
*
*

	
 
*
 
S
e
t
 
t
h
e
 
o
b
j
e
c
t
'
s
 
s
t
r
e
e
t
 
v
a
r
i
a
b
l
e
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
G
u
e
s
t
_
s
t
r
e
e
t
(
$
v
a
l
u
e
)

	
{

	
	
$
t
h
i
s
-
>
s
t
r
e
e
t
 
=
 
$
v
a
l
u
e
;

	
}


	
/
*
*

	
 
*
 
S
e
t
 
t
h
e
 
o
b
j
e
c
t
'
s
 
t
o
w
n
 
v
a
r
i
a
b
l
e
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
G
u
e
s
t
_
t
o
w
n
(
$
v
a
l
u
e
)

	
{

	
	
$
t
h
i
s
-
>
t
o
w
n
 
=
 
$
v
a
l
u
e
;

	
}


	
/
*
*

	
 
*
 
S
e
t
 
t
h
e
 
o
b
j
e
c
t
'
s
 
r
e
g
i
o
n
 
v
a
r
i
a
b
l
e
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
G
u
e
s
t
_
r
e
g
i
o
n
(
$
v
a
l
u
e
)

	
{

	
	
$
t
h
i
s
-
>
r
e
g
i
o
n
 
=
 
$
v
a
l
u
e
;

	
}


	
/
*
*

	
 
*
 
S
e
t
 
t
h
e
 
o
b
j
e
c
t
'
s
 
p
o
s
t
c
o
d
e
 
v
a
r
i
a
b
l
e
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
G
u
e
s
t
_
p
o
s
t
c
o
d
e
(
$
v
a
l
u
e
)

	
{

	
	
$
t
h
i
s
-
>
p
o
s
t
c
o
d
e
 
=
 
$
v
a
l
u
e
;

	
}


	
/
*
*

	
 
*
 
S
e
t
 
t
h
e
 
o
b
j
e
c
t
'
s
 
c
o
u
n
t
r
y
 
v
a
r
i
a
b
l
e
.
 
I
f
 
n
o
t
 
s
e
t
 
t
h
e
n
 
t
h
e
 
c
o
u
n
t
r
y
 
i
s
 
r
e
s
e
t
 
t
o
 
t
h
e
 
d
e
f
a
u
l
t
 
c
o
u
n
t
r
y
 
s
e
t
 
i
n
 
c
o
n
f
i
g
u
r
a
t
i
o
n
 
o
p
t
i
o
n
s
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
G
u
e
s
t
_
c
o
u
n
t
r
y
(
$
v
a
l
u
e
)

	
{

	
	
i
f
 
(
!
i
s
s
e
t
(
$
v
a
l
u
e
)
 
|
|
 
e
m
p
t
y
(
$
v
a
l
u
e
)
)
 
{

	
	
	
$
v
a
l
u
e
 
=
 
$
t
h
i
s
-
>
c
f
g
_
d
e
f
a
u
l
t
c
o
u
n
t
r
y
;

	
	
}

	
	
$
t
h
i
s
-
>
c
o
u
n
t
r
y
 
=
 
$
v
a
l
u
e
;

	
}


	
/
*
*

	
 
*
 
S
e
t
 
t
h
e
 
o
b
j
e
c
t
'
s
 
l
a
n
d
l
i
n
e
 
v
a
r
i
a
b
l
e
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
G
u
e
s
t
_
t
e
l
_
l
a
n
d
l
i
n
e
(
$
v
a
l
u
e
)

	
{

	
	
$
t
h
i
s
-
>
t
e
l
_
l
a
n
d
l
i
n
e
 
=
 
$
v
a
l
u
e
;

	
}


	
/
*
*

	
 
*
 
S
e
t
 
t
h
e
 
o
b
j
e
c
t
'
s
 
m
o
b
i
l
e
 
v
a
r
i
a
b
l
e
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
G
u
e
s
t
_
t
e
l
_
m
o
b
i
l
e
(
$
v
a
l
u
e
)

	
{

	
	
$
t
h
i
s
-
>
t
e
l
_
m
o
b
i
l
e
 
=
 
$
v
a
l
u
e
;

	
}


	
/
*
*

	
 
*
 
S
e
t
 
t
h
e
 
o
b
j
e
c
t
'
s
 
e
m
a
i
l
 
v
a
r
i
a
b
l
e
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
G
u
e
s
t
_
e
m
a
i
l
(
$
v
a
l
u
e
)

	
{

	
	
$
t
h
i
s
-
>
e
m
a
i
l
 
=
 
t
r
i
m
(
$
v
a
l
u
e
)
;

	
}


	
/
*
*

	
 
*
 
S
e
t
 
t
h
e
 
o
b
j
e
c
t
'
s
 
d
i
s
c
o
u
n
t
 
v
a
r
i
a
b
l
e
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
G
u
e
s
t
_
d
i
s
c
o
u
n
t
(
$
v
a
l
u
e
)

	
{

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
s
e
t
G
u
e
s
t
_
d
i
s
c
o
u
n
t
:
:
 
S
e
t
t
i
n
g
 
g
u
e
s
t
'
s
 
d
i
s
c
o
u
n
t
 
t
o
 
"
.
$
v
a
l
u
e
)
;

	
	
$
t
h
i
s
-
>
g
u
e
s
t
_
s
p
e
c
i
f
i
c
_
d
i
s
c
o
u
n
t
 
=
 
$
v
a
l
u
e
;

	
}


	
/
*
*

	
 
*
 
A
 
s
i
m
p
l
e
 
e
m
a
i
l
 
s
t
r
u
c
t
u
r
e
 
c
h
e
c
k
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
c
h
e
c
k
E
m
a
i
l
(
$
v
a
l
u
e
)

	
{

	
	
i
f
 
(
p
r
e
g
_
m
a
t
c
h
(
"
/
[
\
w
\
.
\
-
]
+
@
\
w
+
[
\
w
\
.
\
-
]
*
?
\
.
\
w
{
1
,
4
}
/
"
,
 
$
v
a
l
u
e
)
)
 
{

	
	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
	
}


	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
}


	
/
*
*

	
 
*
 
P
a
s
s
e
d
 
a
n
 
e
x
i
s
t
i
n
g
 
g
u
e
s
t
'
s
 
u
i
d
.

	
 
*
 
I
f
 
t
h
e
 
b
o
o
k
e
r
 
i
s
 
k
n
o
w
n
 
t
o
 
b
e
 
a
 
m
a
n
a
g
e
r
 
t
h
e
n
 
t
h
e
 
o
b
j
e
c
t
'
s
 
g
u
e
s
t
 
d
e
t
a
i
l
s
 
a
r
e
 
r
e
t
r
i
e
v
e
d
 
f
r
o
m
 
t
h
e
 
g
u
e
s
t
'
s
 
t
a
b
l
e
 
a
n
d
 
s
t
o
r
e
d
 
t
e
m
p
o
r
a
r
i
l
y
 
i
n
 
t
h
e
 
t
m
p
g
u
e
s
t
 
b
y
 
t
h
e
 
s
t
o
r
e
 
m
e
t
h
o
d
.

	
 
*
 
W
i
l
l
 
p
o
p
u
l
a
t
e
 
t
h
e
 
o
b
j
e
c
t
'
s
 
g
u
e
s
t
 
d
a
t
a
 
a
n
d
 
r
e
t
u
r
n
 
a
n
d
 
a
r
r
a
y
 
o
f
 
s
a
m
e
 
d
a
t
a
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
E
x
i
s
t
i
n
g
C
u
s
t
o
m
e
r
D
a
t
a
(
$
i
d
)

	
{

	
	
$
t
h
i
s
J
R
U
s
e
r
 
=
 
j
o
m
r
e
s
_
g
e
t
S
i
n
g
l
e
t
o
n
(
'
j
r
_
u
s
e
r
'
)
;


	
	
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
i
s
_
p
a
r
t
n
e
r
 
|
|
 
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
I
s
M
a
n
a
g
e
r
)
 
{

	
	
	
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
I
s
M
a
n
a
g
e
r
)
 
{

	
	
	
	
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
g
u
e
s
t
s
_
u
i
d
,
m
o
s
_
u
s
e
r
i
d
,
f
i
r
s
t
n
a
m
e
,
s
u
r
n
a
m
e
,
h
o
u
s
e
,
s
t
r
e
e
t
,
t
o
w
n
,
c
o
u
n
t
y
 
,
c
o
u
n
t
r
y
,
p
o
s
t
c
o
d
e
,
t
e
l
_
l
a
n
d
l
i
n
e
,
t
e
l
_
m
o
b
i
l
e
,
e
m
a
i
l
,
d
i
s
c
o
u
n
t
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
g
u
e
s
t
s
 
W
H
E
R
E
 
g
u
e
s
t
s
_
u
i
d
 
=
 
'
$
i
d
'
 
A
N
D
 
p
r
o
p
e
r
t
y
_
u
i
d
 
I
N
 
(
"
.
j
o
m
r
e
s
_
i
m
p
l
o
d
e
(
$
t
h
i
s
J
R
U
s
e
r
-
>
a
u
t
h
o
r
i
s
e
d
P
r
o
p
e
r
t
i
e
s
)
.
'
)
 
L
I
M
I
T
 
1
'
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
g
u
e
s
t
s
_
u
i
d
,
m
o
s
_
u
s
e
r
i
d
,
f
i
r
s
t
n
a
m
e
,
s
u
r
n
a
m
e
,
h
o
u
s
e
,
s
t
r
e
e
t
,
t
o
w
n
,
c
o
u
n
t
y
 
,
c
o
u
n
t
r
y
,
p
o
s
t
c
o
d
e
,
t
e
l
_
l
a
n
d
l
i
n
e
,
t
e
l
_
m
o
b
i
l
e
,
e
m
a
i
l
,
d
i
s
c
o
u
n
t
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
g
u
e
s
t
s
 
W
H
E
R
E
 
p
a
r
t
n
e
r
_
i
d
 
=
 
'
.
$
t
h
i
s
J
R
U
s
e
r
-
>
i
d
.
"
 
A
N
D
 
g
u
e
s
t
s
_
u
i
d
 
=
 
'
$
i
d
'
 
L
I
M
I
T
 
1
"
;

	
	
	
}

	
	
	
$
r
e
s
u
l
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
,
 
2
)
;

	
	
	
i
f
 
(
!
e
m
p
t
y
(
$
r
e
s
u
l
t
)
)
 
{

	
	
	
	
i
f
 
(
e
m
p
t
y
(
$
r
e
s
u
l
t
[
 
'
c
o
u
n
t
r
y
'
 
]
)
)
 
{

	
	
	
	
	
$
r
e
s
u
l
t
[
 
'
c
o
u
n
t
r
y
'
 
]
 
=
 
$
t
h
i
s
-
>
c
f
g
_
d
e
f
a
u
l
t
c
o
u
n
t
r
y
;

	
	
	
	
}

	
	
	
	
$
t
h
i
s
-
>
s
e
t
G
u
e
s
t
_
e
x
i
s
t
i
n
g
_
i
d
(
$
i
d
)
;


	
	
	
	
$
t
h
i
s
-
>
m
o
s
_
u
s
e
r
i
d
 
=
 
$
r
e
s
u
l
t
[
 
'
m
o
s
_
u
s
e
r
i
d
'
 
]
;

	
	
	
	
$
t
h
i
s
-
>
s
e
t
G
u
e
s
t
_
f
i
r
s
t
n
a
m
e
(
$
r
e
s
u
l
t
[
 
'
f
i
r
s
t
n
a
m
e
'
 
]
)
;

	
	
	
	
$
t
h
i
s
-
>
s
e
t
G
u
e
s
t
_
s
u
r
n
a
m
e
(
$
r
e
s
u
l
t
[
 
'
s
u
r
n
a
m
e
'
 
]
)
;

	
	
	
	
$
t
h
i
s
-
>
s
e
t
G
u
e
s
t
_
h
o
u
s
e
(
$
r
e
s
u
l
t
[
 
'
h
o
u
s
e
'
 
]
)
;

	
	
	
	
$
t
h
i
s
-
>
s
e
t
G
u
e
s
t
_
s
t
r
e
e
t
(
$
r
e
s
u
l
t
[
 
'
s
t
r
e
e
t
'
 
]
)
;

	
	
	
	
$
t
h
i
s
-
>
s
e
t
G
u
e
s
t
_
t
o
w
n
(
$
r
e
s
u
l
t
[
 
'
t
o
w
n
'
 
]
)
;

	
	
	
	
$
t
h
i
s
-
>
s
e
t
G
u
e
s
t
_
r
e
g
i
o
n
(
$
r
e
s
u
l
t
[
 
'
c
o
u
n
t
y
'
 
]
)
;

	
	
	
	
$
t
h
i
s
-
>
s
e
t
G
u
e
s
t
_
c
o
u
n
t
r
y
(
$
r
e
s
u
l
t
[
 
'
c
o
u
n
t
r
y
'
 
]
)
;

	
	
	
	
$
t
h
i
s
-
>
s
e
t
G
u
e
s
t
_
p
o
s
t
c
o
d
e
(
$
r
e
s
u
l
t
[
 
'
p
o
s
t
c
o
d
e
'
 
]
)
;

	
	
	
	
$
t
h
i
s
-
>
s
e
t
G
u
e
s
t
_
t
e
l
_
l
a
n
d
l
i
n
e
(
$
r
e
s
u
l
t
[
 
'
t
e
l
_
l
a
n
d
l
i
n
e
'
 
]
)
;

	
	
	
	
$
t
h
i
s
-
>
s
e
t
G
u
e
s
t
_
t
e
l
_
m
o
b
i
l
e
(
$
r
e
s
u
l
t
[
 
'
t
e
l
_
m
o
b
i
l
e
'
 
]
)
;

	
	
	
	
i
f
 
(
$
t
h
i
s
-
>
c
h
e
c
k
E
m
a
i
l
(
$
r
e
s
u
l
t
[
 
'
e
m
a
i
l
'
 
]
)
)
 
{

	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
G
u
e
s
t
_
e
m
a
i
l
(
$
r
e
s
u
l
t
[
 
'
e
m
a
i
l
'
 
]
)
;

	
	
	
	
}

	
	
	
	
$
t
h
i
s
-
>
s
e
t
G
u
e
s
t
_
d
i
s
c
o
u
n
t
(
$
r
e
s
u
l
t
[
 
'
d
i
s
c
o
u
n
t
'
 
]
)
;


	
	
	
	
r
e
t
u
r
n
 
$
r
e
s
u
l
t
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
	
}

	
	
}
 
e
l
s
e
 
{

	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}

	
}


	
/
*
*

	
 
*
 
C
l
e
a
r
 
t
h
e
 
g
u
e
s
t
s
 
d
a
t
a
 
t
o
 
e
m
p
t
y
 
v
a
l
u
e
s
.
 
T
r
i
g
g
e
r
e
d
 
b
y
 
t
h
e
 
g
u
e
s
t
 
d
r
o
p
d
o
w
n
 
b
e
i
n
g
 
r
e
s
e
t
 
t
o
 
e
m
p
t
y
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
r
e
s
e
t
E
x
i
s
t
i
n
g
C
u
s
t
o
m
e
r
(
)

	
{

	
	
$
t
h
i
s
J
R
U
s
e
r
 
=
 
j
o
m
r
e
s
_
g
e
t
S
i
n
g
l
e
t
o
n
(
'
j
r
_
u
s
e
r
'
)
;


	
	
$
t
h
i
s
-
>
s
e
t
G
u
e
s
t
_
e
x
i
s
t
i
n
g
_
i
d
(
'
'
)
;

	
	
$
t
h
i
s
-
>
s
e
t
G
u
e
s
t
_
f
i
r
s
t
n
a
m
e
(
'
'
)
;

	
	
$
t
h
i
s
-
>
s
e
t
G
u
e
s
t
_
s
u
r
n
a
m
e
(
'
'
)
;

	
	
$
t
h
i
s
-
>
s
e
t
G
u
e
s
t
_
h
o
u
s
e
(
'
'
)
;

	
	
$
t
h
i
s
-
>
s
e
t
G
u
e
s
t
_
s
t
r
e
e
t
(
'
'
)
;

	
	
$
t
h
i
s
-
>
s
e
t
G
u
e
s
t
_
t
o
w
n
(
'
'
)
;

	
	
$
t
h
i
s
-
>
s
e
t
G
u
e
s
t
_
r
e
g
i
o
n
(
'
'
)
;

	
	
$
t
h
i
s
-
>
s
e
t
G
u
e
s
t
_
c
o
u
n
t
r
y
(
'
'
)
;

	
	
$
t
h
i
s
-
>
s
e
t
G
u
e
s
t
_
p
o
s
t
c
o
d
e
(
'
'
)
;

	
	
$
t
h
i
s
-
>
s
e
t
G
u
e
s
t
_
t
e
l
_
l
a
n
d
l
i
n
e
(
'
'
)
;

	
	
$
t
h
i
s
-
>
s
e
t
G
u
e
s
t
_
t
e
l
_
m
o
b
i
l
e
(
'
'
)
;

	
	
i
f
 
(
!
$
t
h
i
s
J
R
U
s
e
r
-
>
i
s
_
p
a
r
t
n
e
r
)
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
G
u
e
s
t
_
e
m
a
i
l
(
'
'
)
;

	
	
}

	
	
$
t
h
i
s
-
>
s
e
t
G
u
e
s
t
_
d
i
s
c
o
u
n
t
(
0
)
;

	
}


	
/
*
*

	
 
*
 
F
i
l
l
 
t
h
e
 
v
a
r
i
a
b
l
e
s
 
o
f
 
t
h
e
 
R
e
q
u
i
r
e
d
 
f
i
e
l
d
s
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
m
a
k
e
R
e
q
u
i
r
e
d
I
c
o
n
s
(
)

	
{

	
	
$
m
r
C
o
n
f
i
g
 
=
 
$
t
h
i
s
-
>
m
r
C
o
n
f
i
g
;

	
	
$
o
u
t
p
u
t
 
=
 
a
r
r
a
y
(
)
;

	
	
$
i
c
o
n
 
=
 
'
*
'
;

	
	
$
o
u
t
p
u
t
[
 
'
V
A
L
I
D
A
T
I
O
N
_
F
I
R
S
T
N
A
M
E
'
 
]
 
=
 
'
f
a
l
s
e
'
;

	
	
$
o
u
t
p
u
t
[
 
'
V
A
L
I
D
A
T
I
O
N
_
S
U
R
N
A
M
E
'
 
]
 
=
 
'
f
a
l
s
e
'
;

	
	
$
o
u
t
p
u
t
[
 
'
V
A
L
I
D
A
T
I
O
N
_
H
O
U
S
E
N
O
'
 
]
 
=
 
'
f
a
l
s
e
'
;

	
	
$
o
u
t
p
u
t
[
 
'
V
A
L
I
D
A
T
I
O
N
_
S
T
R
E
E
T
'
 
]
 
=
 
'
f
a
l
s
e
'
;

	
	
$
o
u
t
p
u
t
[
 
'
V
A
L
I
D
A
T
I
O
N
_
T
O
W
N
'
 
]
 
=
 
'
f
a
l
s
e
'
;

	
	
$
o
u
t
p
u
t
[
 
'
V
A
L
I
D
A
T
I
O
N
_
P
O
S
T
C
O
D
E
'
 
]
 
=
 
'
f
a
l
s
e
'
;

	
	
$
o
u
t
p
u
t
[
 
'
V
A
L
I
D
A
T
I
O
N
_
R
E
G
I
O
N
'
 
]
 
=
 
'
f
a
l
s
e
'
;

	
	
$
o
u
t
p
u
t
[
 
'
V
A
L
I
D
A
T
I
O
N
_
C
O
U
N
T
R
Y
'
 
]
 
=
 
'
f
a
l
s
e
'
;

	
	
$
o
u
t
p
u
t
[
 
'
V
A
L
I
D
A
T
I
O
N
_
L
A
N
D
L
I
N
E
'
 
]
 
=
 
'
f
a
l
s
e
'
;

	
	
$
o
u
t
p
u
t
[
 
'
V
A
L
I
D
A
T
I
O
N
_
C
E
L
L
M
O
B
I
L
E
'
 
]
 
=
 
'
f
a
l
s
e
'
;

	
	
$
o
u
t
p
u
t
[
 
'
V
A
L
I
D
A
T
I
O
N
_
E
M
A
I
L
'
 
]
 
=
 
'
f
a
l
s
e
'
;


	
	
$
o
u
t
p
u
t
[
 
'
B
O
O
T
S
T
R
A
P
_
F
I
R
S
T
N
A
M
E
_
W
A
R
N
I
N
G
'
 
]
 
=
 
'
'
;

	
	
$
o
u
t
p
u
t
[
 
'
B
O
O
T
S
T
R
A
P
_
S
U
R
N
A
M
E
_
W
A
R
N
I
N
G
'
 
]
 
=
 
'
'
;

	
	
$
o
u
t
p
u
t
[
 
'
B
O
O
T
S
T
R
A
P
_
H
O
U
S
E
N
O
_
W
A
R
N
I
N
G
'
 
]
 
=
 
'
'
;

	
	
$
o
u
t
p
u
t
[
 
'
B
O
O
T
S
T
R
A
P
_
S
T
R
E
E
T
_
W
A
R
N
I
N
G
'
 
]
 
=
 
'
'
;

	
	
$
o
u
t
p
u
t
[
 
'
B
O
O
T
S
T
R
A
P
_
T
O
W
N
_
W
A
R
N
I
N
G
'
 
]
 
=
 
'
'
;

	
	
$
o
u
t
p
u
t
[
 
'
B
O
O
T
S
T
R
A
P
_
P
O
S
T
C
O
D
E
_
W
A
R
N
I
N
G
'
 
]
 
=
 
'
'
;

	
	
$
o
u
t
p
u
t
[
 
'
B
O
O
T
S
T
R
A
P
_
R
E
G
I
O
N
_
W
A
R
N
I
N
G
'
 
]
 
=
 
'
'
;

	
	
$
o
u
t
p
u
t
[
 
'
B
O
O
T
S
T
R
A
P
_
C
O
U
N
T
R
Y
_
W
A
R
N
I
N
G
'
 
]
 
=
 
'
'
;

	
	
$
o
u
t
p
u
t
[
 
'
B
O
O
T
S
T
R
A
P
_
L
A
N
D
L
I
N
E
_
W
A
R
N
I
N
G
'
 
]
 
=
 
'
'
;

	
	
$
o
u
t
p
u
t
[
 
'
B
O
O
T
S
T
R
A
P
_
C
E
L
L
M
O
B
I
L
E
_
W
A
R
N
I
N
G
'
 
]
 
=
 
'
'
;

	
	
$
o
u
t
p
u
t
[
 
'
B
O
O
T
S
T
R
A
P
_
E
M
A
I
L
_
W
A
R
N
I
N
G
'
 
]
 
=
 
'
'
;


	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
n
a
m
e
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
$
o
u
t
p
u
t
[
 
'
R
E
Q
U
I
R
E
D
_
F
I
R
S
T
N
A
M
E
'
 
]
 
=
 
'
<
f
o
n
t
 
c
o
l
o
r
=
"
r
e
d
"
>
'
.
$
i
c
o
n
.
'
<
/
f
o
n
t
>
'
;

	
	
	
$
o
u
t
p
u
t
[
 
'
V
A
L
I
D
A
T
I
O
N
_
F
I
R
S
T
N
A
M
E
'
 
]
 
=
 
'
t
r
u
e
'
;

	
	
	
$
o
u
t
p
u
t
[
 
'
B
O
O
T
S
T
R
A
P
_
F
I
R
S
T
N
A
M
E
_
W
A
R
N
I
N
G
'
 
]
 
=
 
'
 
w
a
r
n
i
n
g
'
;

	
	
}

	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
s
u
r
n
a
m
e
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
$
o
u
t
p
u
t
[
 
'
R
E
Q
U
I
R
E
D
_
S
U
R
N
A
M
E
'
 
]
 
=
 
'
<
f
o
n
t
 
c
o
l
o
r
=
"
r
e
d
"
>
'
.
$
i
c
o
n
.
'
<
/
f
o
n
t
>
'
;

	
	
	
$
o
u
t
p
u
t
[
 
'
V
A
L
I
D
A
T
I
O
N
_
S
U
R
N
A
M
E
'
 
]
 
=
 
'
t
r
u
e
'
;

	
	
	
$
o
u
t
p
u
t
[
 
'
B
O
O
T
S
T
R
A
P
_
S
U
R
N
A
M
E
_
W
A
R
N
I
N
G
'
 
]
 
=
 
'
 
w
a
r
n
i
n
g
'
;

	
	
}

	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
h
o
u
s
e
n
o
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
$
o
u
t
p
u
t
[
 
'
R
E
Q
U
I
R
E
D
_
H
O
U
S
E
N
O
'
 
]
 
=
 
'
<
f
o
n
t
 
c
o
l
o
r
=
"
r
e
d
"
>
'
.
$
i
c
o
n
.
'
<
/
f
o
n
t
>
'
;

	
	
	
$
o
u
t
p
u
t
[
 
'
V
A
L
I
D
A
T
I
O
N
_
H
O
U
S
E
N
O
'
 
]
 
=
 
'
t
r
u
e
'
;

	
	
	
$
o
u
t
p
u
t
[
 
'
B
O
O
T
S
T
R
A
P
_
H
O
U
S
E
N
O
_
W
A
R
N
I
N
G
'
 
]
 
=
 
'
 
w
a
r
n
i
n
g
'
;

	
	
}

	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
s
t
r
e
e
t
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
$
o
u
t
p
u
t
[
 
'
R
E
Q
U
I
R
E
D
_
S
T
R
E
E
T
'
 
]
 
=
 
'
<
f
o
n
t
 
c
o
l
o
r
=
"
r
e
d
"
>
'
.
$
i
c
o
n
.
'
<
/
f
o
n
t
>
'
;

	
	
	
$
o
u
t
p
u
t
[
 
'
V
A
L
I
D
A
T
I
O
N
_
S
T
R
E
E
T
'
 
]
 
=
 
'
t
r
u
e
'
;

	
	
	
$
o
u
t
p
u
t
[
 
'
B
O
O
T
S
T
R
A
P
_
S
T
R
E
E
T
_
W
A
R
N
I
N
G
'
 
]
 
=
 
'
 
w
a
r
n
i
n
g
'
;

	
	
}

	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
t
o
w
n
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
$
o
u
t
p
u
t
[
 
'
R
E
Q
U
I
R
E
D
_
T
O
W
N
'
 
]
 
=
 
'
<
f
o
n
t
 
c
o
l
o
r
=
"
r
e
d
"
>
'
.
$
i
c
o
n
.
'
<
/
f
o
n
t
>
'
;

	
	
	
$
o
u
t
p
u
t
[
 
'
V
A
L
I
D
A
T
I
O
N
_
T
O
W
N
'
 
]
 
=
 
'
t
r
u
e
'
;

	
	
	
$
o
u
t
p
u
t
[
 
'
B
O
O
T
S
T
R
A
P
_
T
O
W
N
_
W
A
R
N
I
N
G
'
 
]
 
=
 
'
 
w
a
r
n
i
n
g
'
;

	
	
}

	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
p
o
s
t
c
o
d
e
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
$
o
u
t
p
u
t
[
 
'
R
E
Q
U
I
R
E
D
_
P
O
S
T
C
O
D
E
'
 
]
 
=
 
'
<
f
o
n
t
 
c
o
l
o
r
=
"
r
e
d
"
>
'
.
$
i
c
o
n
.
'
<
/
f
o
n
t
>
'
;

	
	
	
$
o
u
t
p
u
t
[
 
'
V
A
L
I
D
A
T
I
O
N
_
P
O
S
T
C
O
D
E
'
 
]
 
=
 
'
t
r
u
e
'
;

	
	
	
$
o
u
t
p
u
t
[
 
'
B
O
O
T
S
T
R
A
P
_
P
O
S
T
C
O
D
E
_
W
A
R
N
I
N
G
'
 
]
 
=
 
'
 
w
a
r
n
i
n
g
'
;

	
	
}

	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
r
e
g
i
o
n
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
$
o
u
t
p
u
t
[
 
'
R
E
Q
U
I
R
E
D
_
R
E
G
I
O
N
'
 
]
 
=
 
'
<
f
o
n
t
 
c
o
l
o
r
=
"
r
e
d
"
>
'
.
$
i
c
o
n
.
'
<
/
f
o
n
t
>
'
;

	
	
	
$
o
u
t
p
u
t
[
 
'
V
A
L
I
D
A
T
I
O
N
_
R
E
G
I
O
N
'
 
]
 
=
 
'
t
r
u
e
'
;

	
	
	
$
o
u
t
p
u
t
[
 
'
B
O
O
T
S
T
R
A
P
_
R
E
G
I
O
N
_
W
A
R
N
I
N
G
'
 
]
 
=
 
'
 
w
a
r
n
i
n
g
'
;

	
	
}

	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
c
o
u
n
t
r
y
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
$
o
u
t
p
u
t
[
 
'
R
E
Q
U
I
R
E
D
_
C
O
U
N
T
R
Y
'
 
]
 
=
 
'
<
f
o
n
t
 
c
o
l
o
r
=
"
r
e
d
"
>
'
.
$
i
c
o
n
.
'
<
/
f
o
n
t
>
'
;

	
	
	
$
o
u
t
p
u
t
[
 
'
V
A
L
I
D
A
T
I
O
N
_
C
O
U
N
T
R
Y
'
 
]
 
=
 
'
t
r
u
e
'
;

	
	
	
$
o
u
t
p
u
t
[
 
'
B
O
O
T
S
T
R
A
P
_
C
O
U
N
T
R
Y
_
W
A
R
N
I
N
G
'
 
]
 
=
 
'
 
w
a
r
n
i
n
g
'
;

	
	
}

	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
t
e
l
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
$
o
u
t
p
u
t
[
 
'
R
E
Q
U
I
R
E
D
_
L
A
N
D
L
I
N
E
'
 
]
 
=
 
'
<
f
o
n
t
 
c
o
l
o
r
=
"
r
e
d
"
>
'
.
$
i
c
o
n
.
'
<
/
f
o
n
t
>
'
;

	
	
	
$
o
u
t
p
u
t
[
 
'
V
A
L
I
D
A
T
I
O
N
_
L
A
N
D
L
I
N
E
'
 
]
 
=
 
'
t
r
u
e
'
;

	
	
	
$
o
u
t
p
u
t
[
 
'
B
O
O
T
S
T
R
A
P
_
L
A
N
D
L
I
N
E
_
W
A
R
N
I
N
G
'
 
]
 
=
 
'
 
w
a
r
n
i
n
g
'
;

	
	
}

	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
m
o
b
i
l
e
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
$
o
u
t
p
u
t
[
 
'
R
E
Q
U
I
R
E
D
_
C
E
L
L
M
O
B
I
L
E
'
 
]
 
=
 
'
<
f
o
n
t
 
c
o
l
o
r
=
"
r
e
d
"
>
'
.
$
i
c
o
n
.
'
<
/
f
o
n
t
>
'
;

	
	
	
$
o
u
t
p
u
t
[
 
'
V
A
L
I
D
A
T
I
O
N
_
C
E
L
L
M
O
B
I
L
E
'
 
]
 
=
 
'
t
r
u
e
'
;

	
	
	
$
o
u
t
p
u
t
[
 
'
B
O
O
T
S
T
R
A
P
_
C
E
L
L
M
O
B
I
L
E
_
W
A
R
N
I
N
G
'
 
]
 
=
 
'
 
w
a
r
n
i
n
g
'
;

	
	
}

	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
f
o
r
m
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
e
m
a
i
l
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
$
o
u
t
p
u
t
[
 
'
R
E
Q
U
I
R
E
D
_
E
M
A
I
L
'
 
]
 
=
 
'
<
f
o
n
t
 
c
o
l
o
r
=
"
r
e
d
"
>
'
.
$
i
c
o
n
.
'
<
/
f
o
n
t
>
'
;

	
	
	
$
o
u
t
p
u
t
[
 
'
V
A
L
I
D
A
T
I
O
N
_
E
M
A
I
L
'
 
]
 
=
 
'
t
r
u
e
'
;

	
	
	
$
o
u
t
p
u
t
[
 
'
B
O
O
T
S
T
R
A
P
_
E
M
A
I
L
_
W
A
R
N
I
N
G
'
 
]
 
=
 
'
 
w
a
r
n
i
n
g
'
;

	
	
}


	
	
r
e
t
u
r
n
 
$
o
u
t
p
u
t
;

	
}


	
/
*
*

	
 
*
 
I
n
i
t
i
a
l
i
s
e
 
t
h
e
 
g
u
e
s
t
s
 
d
e
t
a
i
l
s
.
 
I
f
 
t
h
e
 
u
s
e
r
 
i
s
 
a
 
r
e
g
i
s
t
e
r
e
d
 
u
s
e
r
 
a
n
y
 
e
x
i
s
t
i
n
g
 
d
a
t
a
 
w
i
l
l
 
b
e
 
f
o
u
n
d
 
f
o
r
 
t
h
e
m
 
a
n
d
 
t
h
e
 
a
p
p
r
o
p
r
i
a
t
e
 
f
i
e
l
d
s
 
p
r
e
f
i
l
l
e
d
.

	
 
*
 
T
h
i
s
 
f
u
n
c
t
i
o
n
 
s
e
t
s
 
t
h
e
 
b
o
o
k
i
n
g
 
o
b
j
e
c
t
'
s
 
d
e
t
a
i
l
s
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
i
n
i
t
G
u
e
s
t
D
e
t
a
i
l
s
(
&
$
b
k
g
,
 
$
g
u
e
s
t
_
d
e
e
t
s
)

	
{

	
	
$
t
h
i
s
J
R
U
s
e
r
 
=
 
j
o
m
r
e
s
_
g
e
t
S
i
n
g
l
e
t
o
n
(
'
j
r
_
u
s
e
r
'
)
;


	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
 
=
 
j
o
m
r
e
s
_
g
e
t
S
i
n
g
l
e
t
o
n
(
'
j
o
m
r
e
s
_
t
e
m
p
_
b
o
o
k
i
n
g
_
h
a
n
d
l
e
r
'
)
;

	
	
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
 
=
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
g
e
t
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
a
m
e
n
d
_
c
o
n
t
r
a
c
t
'
)
;

	
	
i
f
 
(
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
)
 
{

	
	
	
$
t
h
i
s
-
>
e
x
i
s
t
i
n
g
_
i
d
 
=
 
$
t
h
i
s
-
>
g
u
e
s
t
s
_
u
i
d
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
b
k
g
-
>
s
e
t
G
u
e
s
t
_
e
x
i
s
t
i
n
g
_
i
d
(
$
g
u
e
s
t
_
d
e
e
t
s
[
 
'
E
X
I
S
T
I
N
G
I
D
'
 
]
)
;

	
	
}

	
	
$
b
k
g
-
>
s
e
t
G
u
e
s
t
_
f
i
r
s
t
n
a
m
e
(
$
g
u
e
s
t
_
d
e
e
t
s
[
 
'
F
I
R
S
T
N
A
M
E
'
 
]
)
;

	
	
$
b
k
g
-
>
s
e
t
G
u
e
s
t
_
s
u
r
n
a
m
e
(
$
g
u
e
s
t
_
d
e
e
t
s
[
 
'
S
U
R
N
A
M
E
'
 
]
)
;

	
	
$
b
k
g
-
>
s
e
t
G
u
e
s
t
_
h
o
u
s
e
(
$
g
u
e
s
t
_
d
e
e
t
s
[
 
'
H
O
U
S
E
N
O
'
 
]
)
;

	
	
$
b
k
g
-
>
s
e
t
G
u
e
s
t
_
s
t
r
e
e
t
(
$
g
u
e
s
t
_
d
e
e
t
s
[
 
'
S
T
R
E
E
T
'
 
]
)
;

	
	
$
b
k
g
-
>
s
e
t
G
u
e
s
t
_
t
o
w
n
(
$
g
u
e
s
t
_
d
e
e
t
s
[
 
'
T
O
W
N
'
 
]
)
;

	
	
$
b
k
g
-
>
s
e
t
G
u
e
s
t
_
r
e
g
i
o
n
(
$
g
u
e
s
t
_
d
e
e
t
s
[
 
'
R
E
G
I
O
N
'
 
]
)
;

	
	
$
b
k
g
-
>
s
e
t
G
u
e
s
t
_
c
o
u
n
t
r
y
(
$
g
u
e
s
t
_
d
e
e
t
s
[
 
'
H
I
D
D
E
N
C
O
U
N
T
R
Y
'
 
]
)
;

	
	
$
b
k
g
-
>
s
e
t
G
u
e
s
t
_
p
o
s
t
c
o
d
e
(
$
g
u
e
s
t
_
d
e
e
t
s
[
 
'
P
O
S
T
C
O
D
E
'
 
]
)
;

	
	
$
b
k
g
-
>
s
e
t
G
u
e
s
t
_
t
e
l
_
l
a
n
d
l
i
n
e
(
$
g
u
e
s
t
_
d
e
e
t
s
[
 
'
T
E
L
'
 
]
)
;

	
	
$
b
k
g
-
>
s
e
t
G
u
e
s
t
_
t
e
l
_
m
o
b
i
l
e
(
$
g
u
e
s
t
_
d
e
e
t
s
[
 
'
M
O
B
I
L
E
'
 
]
)
;

	
	
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
i
s
_
p
a
r
t
n
e
r
)
 
{

	
	
	
$
b
k
g
-
>
s
e
t
G
u
e
s
t
_
e
m
a
i
l
(
$
t
h
i
s
J
R
U
s
e
r
-
>
e
m
a
i
l
)
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
b
k
g
-
>
s
e
t
G
u
e
s
t
_
e
m
a
i
l
(
$
g
u
e
s
t
_
d
e
e
t
s
[
 
'
E
M
A
I
L
'
 
]
)
;

	
	
}

	
	
$
b
k
g
-
>
s
e
t
G
u
e
s
t
_
d
i
s
c
o
u
n
t
(
(
i
n
t
)
 
$
g
u
e
s
t
_
d
e
e
t
s
[
 
'
D
I
S
C
O
U
N
T
'
 
]
)
;

	
}


	
/
*
*

	
 
*
 
M
a
k
e
 
t
h
e
 
G
u
e
s
t
,
 
p
u
t
 
t
h
e
m
 
i
n
t
o
 
a
n
 
a
r
r
a
y
 
f
o
r
 
p
a
t
T
e
m
p
l
a
t
e
 
a
n
d
 
r
e
t
u
r
n
 
t
h
e
 
a
r
r
a
y
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
m
a
k
e
G
u
e
s
t
D
a
t
a
(
)

	
{

	
	
$
t
h
i
s
J
R
U
s
e
r
 
=
 
j
o
m
r
e
s
_
g
e
t
S
i
n
g
l
e
t
o
n
(
'
j
r
_
u
s
e
r
'
)
;

	
	
$
u
s
e
r
I
s
M
a
n
a
g
e
r
 
=
 
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
I
s
M
a
n
a
g
e
r
;

	
	
$
g
u
e
s
t
s
_
u
i
d
 
=
 
0
;

	
	
/
*

	
	
$
g
u
e
s
t
_
f
i
r
s
t
n
a
m
e
	
=
	
"
"
;

	
	
$
g
u
e
s
t
_
s
u
r
n
a
m
e
	
	
=
	
"
"
;

	
	
$
g
u
e
s
t
_
h
o
u
s
e
	
	
=
	
"
"
;

	
	
$
g
u
e
s
t
_
s
t
r
e
e
t
	
	
=
	
"
"
;

	
	
$
g
u
e
s
t
_
t
o
w
n
	
	
	
=
	
"
"
;

	
	
$
g
u
e
s
t
_
r
e
g
i
o
n
	
	
=
	
"
"
;

	
	
$
g
u
e
s
t
_
c
o
u
n
t
r
y
	
	
=
	
$
m
r
C
o
n
f
i
g
[
'
d
e
f
a
u
l
t
c
o
u
n
t
r
y
'
]
;

	
	
$
g
u
e
s
t
_
p
o
s
t
c
o
d
e
	
=
	
"
"
;

	
	
$
g
u
e
s
t
_
t
e
l
_
l
a
n
d
l
i
n
e
	
=
	
"
"
;

	
	
$
g
u
e
s
t
_
t
e
l
_
m
o
b
i
l
e
	
=
	
"
"
;

	
	
$
g
u
e
s
t
_
e
m
a
i
l
	
	
=
	
"
"
;

	
	
*
/


	
	
$
g
u
e
s
t
_
f
i
r
s
t
n
a
m
e
 
=
 
$
t
h
i
s
-
>
f
i
r
s
t
n
a
m
e
;

	
	
$
g
u
e
s
t
_
s
u
r
n
a
m
e
 
=
 
$
t
h
i
s
-
>
s
u
r
n
a
m
e
;

	
	
$
g
u
e
s
t
_
h
o
u
s
e
 
=
 
$
t
h
i
s
-
>
h
o
u
s
e
;

	
	
$
g
u
e
s
t
_
s
t
r
e
e
t
 
=
 
$
t
h
i
s
-
>
s
t
r
e
e
t
;

	
	
$
g
u
e
s
t
_
t
o
w
n
 
=
 
$
t
h
i
s
-
>
t
o
w
n
;

	
	
$
g
u
e
s
t
_
r
e
g
i
o
n
 
=
 
$
t
h
i
s
-
>
r
e
g
i
o
n
;

	
	
$
g
u
e
s
t
_
c
o
u
n
t
r
y
 
=
 
$
t
h
i
s
-
>
c
o
u
n
t
r
y
;

	
	
$
g
u
e
s
t
_
p
o
s
t
c
o
d
e
 
=
 
$
t
h
i
s
-
>
p
o
s
t
c
o
d
e
;

	
	
$
g
u
e
s
t
_
t
e
l
_
l
a
n
d
l
i
n
e
 
=
 
$
t
h
i
s
-
>
t
e
l
_
l
a
n
d
l
i
n
e
;

	
	
$
g
u
e
s
t
_
t
e
l
_
m
o
b
i
l
e
 
=
 
$
t
h
i
s
-
>
t
e
l
_
m
o
b
i
l
e
;


	
	
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
i
s
_
p
a
r
t
n
e
r
)
 
{

	
	
	
$
g
u
e
s
t
_
e
m
a
i
l
 
=
 
$
t
h
i
s
J
R
U
s
e
r
-
>
e
m
a
i
l
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
g
u
e
s
t
_
e
m
a
i
l
 
=
 
$
t
h
i
s
-
>
e
m
a
i
l
;

	
	
}


	
	
$
g
u
e
s
t
_
d
i
s
c
o
u
n
t
 
=
 
(
i
n
t
)
 
$
t
h
i
s
-
>
g
u
e
s
t
_
s
p
e
c
i
f
i
c
_
d
i
s
c
o
u
n
t
;


	
	
/
/
$
t
h
i
s
-
>
m
o
s
_
u
s
e
r
i
d
=
$
t
h
i
s
J
R
U
s
e
r
-
>
i
d
;

	
	
$
i
d
 
=
 
$
t
h
i
s
J
R
U
s
e
r
-
>
i
d
;

	
	
i
f
 
(
$
u
s
e
r
I
s
M
a
n
a
g
e
r
 
|
|
 
$
t
h
i
s
J
R
U
s
e
r
-
>
i
s
_
p
a
r
t
n
e
r
)
 
{

	
	
	
$
g
u
e
s
t
_
d
e
e
t
s
[
 
'
G
U
E
S
T
D
R
O
P
D
O
W
N
'
 
]
 
=
 
$
t
h
i
s
-
>
A
J
g
e
t
G
u
e
s
t
D
r
o
p
d
o
w
n
(
)
;

	
	
}


	
	
i
f
 
(
$
i
d
 
!
=
 
0
 
&
&
 
!
$
u
s
e
r
I
s
M
a
n
a
g
e
r
)
 
{

	
	
	
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
g
u
e
s
t
s
_
u
i
d
,
m
o
s
_
u
s
e
r
i
d
,
f
i
r
s
t
n
a
m
e
,
s
u
r
n
a
m
e
,
h
o
u
s
e
,
s
t
r
e
e
t
,
t
o
w
n
,
c
o
u
n
t
y
,
c
o
u
n
t
r
y
,
p
o
s
t
c
o
d
e
,
t
e
l
_
l
a
n
d
l
i
n
e
,
t
e
l
_
m
o
b
i
l
e
,
t
e
l
_
f
a
x
,
e
m
a
i
l
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
g
u
e
s
t
s
 
W
H
E
R
E
 
m
o
s
_
u
s
e
r
i
d
 
=
 
'
$
i
d
'
"
;

	
	
	
$
g
u
e
s
t
L
i
s
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;

	
	
	
/
/
e
c
h
o
 
$
q
u
e
r
y
;
e
x
i
t
;

	
	
	
/
/
v
a
r
_
d
u
m
p
(
$
g
u
e
s
t
L
i
s
t
)
;
e
x
i
t
;

	
	
	
i
f
 
(
!
e
m
p
t
y
(
$
g
u
e
s
t
L
i
s
t
)
)
 
{

	
	
	
	
f
o
r
e
a
c
h
 
(
$
g
u
e
s
t
L
i
s
t
 
a
s
 
$
d
a
t
a
)
 
{

	
	
	
	
	
$
g
u
e
s
t
s
_
u
i
d
 
=
 
$
d
a
t
a
-
>
g
u
e
s
t
s
_
u
i
d
;

	
	
	
	
	
$
g
u
e
s
t
_
f
i
r
s
t
n
a
m
e
 
=
 
$
d
a
t
a
-
>
f
i
r
s
t
n
a
m
e
;

	
	
	
	
	
$
g
u
e
s
t
_
s
u
r
n
a
m
e
 
=
 
$
d
a
t
a
-
>
s
u
r
n
a
m
e
;

	
	
	
	
	
$
g
u
e
s
t
_
h
o
u
s
e
 
=
 
$
d
a
t
a
-
>
h
o
u
s
e
;

	
	
	
	
	
$
g
u
e
s
t
_
s
t
r
e
e
t
 
=
 
$
d
a
t
a
-
>
s
t
r
e
e
t
;

	
	
	
	
	
$
g
u
e
s
t
_
t
o
w
n
 
=
 
$
d
a
t
a
-
>
t
o
w
n
;

	
	
	
	
	
$
g
u
e
s
t
_
r
e
g
i
o
n
 
=
 
$
d
a
t
a
-
>
c
o
u
n
t
y
;

	
	
	
	
	
$
g
u
e
s
t
_
c
o
u
n
t
r
y
 
=
 
$
d
a
t
a
-
>
c
o
u
n
t
r
y
;

	
	
	
	
	
$
g
u
e
s
t
_
p
o
s
t
c
o
d
e
 
=
 
$
d
a
t
a
-
>
p
o
s
t
c
o
d
e
;

	
	
	
	
	
$
g
u
e
s
t
_
t
e
l
_
l
a
n
d
l
i
n
e
 
=
 
$
d
a
t
a
-
>
t
e
l
_
l
a
n
d
l
i
n
e
;

	
	
	
	
	
$
g
u
e
s
t
_
t
e
l
_
m
o
b
i
l
e
 
=
 
$
d
a
t
a
-
>
t
e
l
_
m
o
b
i
l
e
;

	
	
	
	
	
$
g
u
e
s
t
_
e
m
a
i
l
 
=
 
$
d
a
t
a
-
>
e
m
a
i
l
;

	
	
	
	
	
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
d
i
s
c
o
u
n
t
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
g
u
e
s
t
s
 
W
H
E
R
E
 
m
o
s
_
u
s
e
r
i
d
 
=
 
'
$
i
d
'
 
A
N
D
 
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
'
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
'
 
l
i
m
i
t
 
1
"
;

	
	
	
	
	
$
d
i
s
c
o
u
n
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
,
 
1
)
;

	
	
	
	
	
$
g
u
e
s
t
_
s
p
e
c
i
f
i
c
_
d
i
s
c
o
u
n
t
 
=
 
$
d
i
s
c
o
u
n
t
;

	
	
	
	
}

	
	
	
}

	
	
}


	
	
/
/
$
g
u
e
s
t
_
d
e
e
t
s
[
'
C
O
U
N
T
R
Y
'
]
=
c
r
e
a
t
e
S
i
m
p
l
e
C
o
u
n
t
r
i
e
s
D
r
o
p
d
o
w
n
(
$
g
u
e
s
t
_
c
o
u
n
t
r
y
)
;

	
	
$
g
u
e
s
t
_
d
e
e
t
s
[
 
'
H
F
I
R
S
T
N
A
M
E
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
D
I
S
P
G
U
E
S
T
_
F
I
R
S
T
N
A
M
E
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
D
I
S
P
G
U
E
S
T
_
F
I
R
S
T
N
A
M
E
'
,
 
f
a
l
s
e
)
;

	
	
$
g
u
e
s
t
_
d
e
e
t
s
[
 
'
H
S
U
R
N
A
M
E
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
D
I
S
P
G
U
E
S
T
_
S
U
R
N
A
M
E
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
D
I
S
P
G
U
E
S
T
_
S
U
R
N
A
M
E
'
,
 
f
a
l
s
e
)
;

	
	
$
g
u
e
s
t
_
d
e
e
t
s
[
 
'
H
H
O
U
S
E
N
O
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
H
O
U
S
E
_
E
X
P
L
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
H
O
U
S
E
_
E
X
P
L
'
,
 
f
a
l
s
e
)
;

	
	
$
g
u
e
s
t
_
d
e
e
t
s
[
 
'
H
S
T
R
E
E
T
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
S
T
R
E
E
T
_
E
X
P
L
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
S
T
R
E
E
T
_
E
X
P
L
'
,
 
f
a
l
s
e
)
;

	
	
$
g
u
e
s
t
_
d
e
e
t
s
[
 
'
H
T
O
W
N
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
T
O
W
N
_
E
X
P
L
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
T
O
W
N
_
E
X
P
L
'
,
 
f
a
l
s
e
)
;

	
	
$
g
u
e
s
t
_
d
e
e
t
s
[
 
'
H
P
O
S
T
C
O
D
E
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
P
O
S
T
C
O
D
E
_
E
X
P
L
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
P
O
S
T
C
O
D
E
_
E
X
P
L
'
,
 
f
a
l
s
e
)
;

	
	
$
g
u
e
s
t
_
d
e
e
t
s
[
 
'
H
R
E
G
I
O
N
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
R
E
G
I
O
N
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
R
E
G
I
O
N
'
,
 
f
a
l
s
e
)
;

	
	
$
g
u
e
s
t
_
d
e
e
t
s
[
 
'
H
C
O
U
N
T
R
Y
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
C
O
U
N
T
R
Y
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
C
O
U
N
T
R
Y
'
,
 
f
a
l
s
e
)
;

	
	
$
g
u
e
s
t
_
d
e
e
t
s
[
 
'
H
T
E
L
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
L
A
N
D
L
I
N
E
_
E
X
P
L
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
L
A
N
D
L
I
N
E
_
E
X
P
L
'
,
 
f
a
l
s
e
)
;

	
	
$
g
u
e
s
t
_
d
e
e
t
s
[
 
'
H
M
O
B
I
L
E
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
M
O
B
I
L
E
_
E
X
P
L
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
M
O
B
I
L
E
_
E
X
P
L
'
,
 
f
a
l
s
e
)
;

	
	
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
i
s
_
p
a
r
t
n
e
r
)
 
{

	
	
	
$
g
u
e
s
t
_
d
e
e
t
s
[
 
'
H
E
M
A
I
L
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
D
E
B
U
G
G
I
N
G
_
Y
O
U
R
E
M
A
I
L
'
,
 
'
_
J
O
M
R
E
S
_
D
E
B
U
G
G
I
N
G
_
Y
O
U
R
E
M
A
I
L
'
,
 
f
a
l
s
e
)
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
g
u
e
s
t
_
d
e
e
t
s
[
 
'
H
E
M
A
I
L
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
E
M
A
I
L
_
E
X
P
L
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
E
M
A
I
L
_
E
X
P
L
'
,
 
f
a
l
s
e
)
;

	
	
}


	
	
$
g
u
e
s
t
_
d
e
e
t
s
[
 
'
E
X
I
S
T
I
N
G
I
D
'
 
]
 
=
 
$
g
u
e
s
t
s
_
u
i
d
;

	
	
$
g
u
e
s
t
_
d
e
e
t
s
[
 
'
F
I
R
S
T
N
A
M
E
'
 
]
 
=
 
$
g
u
e
s
t
_
f
i
r
s
t
n
a
m
e
;

	
	
$
g
u
e
s
t
_
d
e
e
t
s
[
 
'
S
U
R
N
A
M
E
'
 
]
 
=
 
$
g
u
e
s
t
_
s
u
r
n
a
m
e
;

	
	
$
g
u
e
s
t
_
d
e
e
t
s
[
 
'
H
O
U
S
E
N
O
'
 
]
 
=
 
$
g
u
e
s
t
_
h
o
u
s
e
;

	
	
$
g
u
e
s
t
_
d
e
e
t
s
[
 
'
S
T
R
E
E
T
'
 
]
 
=
 
$
g
u
e
s
t
_
s
t
r
e
e
t
;

	
	
$
g
u
e
s
t
_
d
e
e
t
s
[
 
'
T
O
W
N
'
 
]
 
=
 
$
g
u
e
s
t
_
t
o
w
n
;

	
	
$
g
u
e
s
t
_
d
e
e
t
s
[
 
'
P
O
S
T
C
O
D
E
'
 
]
 
=
 
$
g
u
e
s
t
_
p
o
s
t
c
o
d
e
;

	
	
i
f
 
(
s
t
r
l
e
n
(
$
g
u
e
s
t
_
c
o
u
n
t
r
y
)
 
=
=
 
0
 
|
|
 
i
s
_
n
u
l
l
(
$
g
u
e
s
t
_
c
o
u
n
t
r
y
)
 
|
|
 
$
g
u
e
s
t
_
c
o
u
n
t
r
y
 
=
=
 
'
n
u
l
l
'
)
 
{

	
	
	
$
g
u
e
s
t
_
c
o
u
n
t
r
y
 
=
 
$
t
h
i
s
-
>
c
f
g
_
d
e
f
a
u
l
t
c
o
u
n
t
r
y
;

	
	
}

	
	
$
g
u
e
s
t
_
d
e
e
t
s
[
 
'
H
I
D
D
E
N
C
O
U
N
T
R
Y
'
 
]
 
=
 
$
g
u
e
s
t
_
c
o
u
n
t
r
y
;

	
	
$
g
u
e
s
t
_
d
e
e
t
s
[
 
'
C
O
U
N
T
R
Y
'
 
]
 
=
 
$
t
h
i
s
-
>
b
o
o
k
i
n
g
C
o
u
n
t
r
i
e
s
D
r
o
p
d
o
w
n
(
$
g
u
e
s
t
_
c
o
u
n
t
r
y
)
;

	
	
$
g
u
e
s
t
_
d
e
e
t
s
[
 
'
R
E
G
I
O
N
'
 
]
 
=
 
$
g
u
e
s
t
_
r
e
g
i
o
n
;


	
	
$
g
u
e
s
t
_
d
e
e
t
s
[
 
'
T
E
L
'
 
]
 
=
 
$
g
u
e
s
t
_
t
e
l
_
l
a
n
d
l
i
n
e
;

	
	
$
g
u
e
s
t
_
d
e
e
t
s
[
 
'
M
O
B
I
L
E
'
 
]
 
=
 
$
g
u
e
s
t
_
t
e
l
_
m
o
b
i
l
e
;

	
	
$
g
u
e
s
t
_
d
e
e
t
s
[
 
'
E
M
A
I
L
'
 
]
 
=
 
$
g
u
e
s
t
_
e
m
a
i
l
;

	
	
i
f
 
(
i
s
s
e
t
(
$
g
u
e
s
t
_
s
p
e
c
i
f
i
c
_
d
i
s
c
o
u
n
t
)
)
 
{

	
	
	
$
g
u
e
s
t
_
d
e
e
t
s
[
 
'
D
I
S
C
O
U
N
T
'
 
]
 
=
 
$
g
u
e
s
t
_
s
p
e
c
i
f
i
c
_
d
i
s
c
o
u
n
t
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
g
u
e
s
t
_
d
e
e
t
s
[
 
'
D
I
S
C
O
U
N
T
'
 
]
 
=
 
0
;

	
	
}


	
	
r
e
t
u
r
n
 
$
g
u
e
s
t
_
d
e
e
t
s
;

	
}


	
/
*
*

	
 
*
 
M
a
k
e
s
 
t
h
e
 
g
u
e
s
t
 
d
r
o
p
d
o
w
n
 
t
h
a
t
 
m
a
n
a
g
e
r
s
/
r
e
c
e
p
t
i
o
n
s
 
s
e
e
 
s
o
 
t
h
a
t
 
t
h
e
y
 
c
a
n
 
a
u
t
m
a
t
i
c
a
l
l
y
 
f
i
l
l
 
t
h
e
 
b
o
o
k
i
n
g
 
f
o
r
m
 
w
i
t
h
 
t
h
e
 
g
u
e
s
t
'
s
 
d
e
t
a
i
l
s
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
A
J
g
e
t
G
u
e
s
t
D
r
o
p
d
o
w
n
(
)

	
{

	
	
$
d
r
o
p
D
o
w
n
L
i
s
t
 
=
 
'
'
;

	
	
$
e
x
i
s
t
i
n
g
C
u
s
t
o
m
e
r
s
 
=
 
a
r
r
a
y
(
)
;

	
	
$
t
h
i
s
J
R
U
s
e
r
 
=
 
j
o
m
r
e
s
_
g
e
t
S
i
n
g
l
e
t
o
n
(
'
j
r
_
u
s
e
r
'
)
;


	
	
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
i
s
_
p
a
r
t
n
e
r
)
 
{

	
	
	
$
p
a
r
t
n
e
r
s
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
o
m
r
e
s
_
p
a
r
t
n
e
r
s
'
)
;

	
	
	
$
g
u
e
s
t
_
i
d
s
 
=
 
$
p
a
r
t
n
e
r
s
-
>
g
e
t
_
g
u
e
s
t
_
u
i
d
s
_
f
o
r
_
p
a
r
t
n
e
r
(
$
t
h
i
s
J
R
U
s
e
r
-
>
i
d
)
;

	
	
	
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
g
u
e
s
t
s
_
u
i
d
,
s
u
r
n
a
m
e
,
 
f
i
r
s
t
n
a
m
e
,
 
h
o
u
s
e
,
 
s
t
r
e
e
t
,
t
o
w
n
,
c
o
u
n
t
y
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
g
u
e
s
t
s
 
W
H
E
R
E
 
p
a
r
t
n
e
r
_
i
d
 
=
 
'
.
$
t
h
i
s
J
R
U
s
e
r
-
>
i
d
.
'
 
O
R
D
E
R
 
B
Y
 
s
u
r
n
a
m
e
'
;

	
	
	
$
e
x
i
s
t
i
n
g
C
u
s
t
o
m
e
r
s
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;

	
	
}
 
e
l
s
e
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
I
s
M
a
n
a
g
e
r
)
 
{

	
	
	
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
g
u
e
s
t
s
_
u
i
d
,
s
u
r
n
a
m
e
,
 
f
i
r
s
t
n
a
m
e
,
 
h
o
u
s
e
,
 
s
t
r
e
e
t
,
t
o
w
n
,
c
o
u
n
t
y
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
g
u
e
s
t
s
 
W
H
E
R
E
 
p
r
o
p
e
r
t
y
_
u
i
d
 
I
N
 
(
'
.
j
o
m
r
e
s
_
i
m
p
l
o
d
e
(
$
t
h
i
s
J
R
U
s
e
r
-
>
a
u
t
h
o
r
i
s
e
d
P
r
o
p
e
r
t
i
e
s
)
.
'
)
 
O
R
D
E
R
 
B
Y
 
s
u
r
n
a
m
e
'
;

	
	
	
$
e
x
i
s
t
i
n
g
C
u
s
t
o
m
e
r
s
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;

	
	
}


	
	
i
f
 
(
!
e
m
p
t
y
(
$
e
x
i
s
t
i
n
g
C
u
s
t
o
m
e
r
s
)
)
 
{

	
	
	
$
e
c
 
=
 
a
r
r
a
y
(
)
;


	
	
	
$
e
c
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
0
'
,
 
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
L
E
A
R
_
G
U
E
S
T
_
D
E
T
A
I
L
S
'
,
 
'
_
J
O
M
R
E
S
_
C
L
E
A
R
_
G
U
E
S
T
_
D
E
T
A
I
L
S
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
	
f
o
r
e
a
c
h
 
(
$
e
x
i
s
t
i
n
g
C
u
s
t
o
m
e
r
s
 
a
s
 
$
c
u
s
t
o
m
e
r
)
 
{

	
	
	
	
$
e
c
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
$
c
u
s
t
o
m
e
r
-
>
g
u
e
s
t
s
_
u
i
d
,
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
c
u
s
t
o
m
e
r
-
>
s
u
r
n
a
m
e
)
.
'
,
 
'
.
s
t
r
i
p
s
l
a
s
h
e
s
(
$
c
u
s
t
o
m
e
r
-
>
f
i
r
s
t
n
a
m
e
)
)
;

	
	
	
}

	
	
	
$
d
r
o
p
D
o
w
n
L
i
s
t
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
e
c
,
 
'
e
x
i
s
t
i
n
g
C
u
s
t
o
m
e
r
s
'
,
 
'
 
o
n
c
h
a
n
g
e
=
"
g
e
t
R
e
s
p
o
n
s
e
_
e
x
i
s
t
i
n
g
(
\
'
e
x
i
s
t
i
n
g
C
u
s
t
o
m
e
r
s
\
'
,
t
h
i
s
.
v
a
l
u
e
)
;
"
 
s
i
z
e
=
"
1
"
 
c
l
a
s
s
=
"
i
n
p
u
t
-
m
e
d
i
u
m
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
0
)
;

	
	
}


	
	
r
e
t
u
r
n
 
$
d
r
o
p
D
o
w
n
L
i
s
t
;

	
}


	
/
*
*

	
 
*
 
M
a
k
e
s
 
t
h
e
 
c
o
u
n
t
r
i
e
s
 
d
r
o
p
d
o
w
n
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
b
o
o
k
i
n
g
C
o
u
n
t
r
i
e
s
D
r
o
p
d
o
w
n
(
$
s
e
l
e
c
t
e
d
C
o
u
n
t
r
y
)

	
{

	
	
i
f
 
(
!
i
s
s
e
t
(
$
s
e
l
e
c
t
e
d
C
o
u
n
t
r
y
)
 
|
|
 
e
m
p
t
y
(
$
s
e
l
e
c
t
e
d
C
o
u
n
t
r
y
)
)
 
{

	
	
	
$
s
e
l
e
c
t
e
d
C
o
u
n
t
r
y
 
=
 
$
t
h
i
s
-
>
c
f
g
_
d
e
f
a
u
l
t
c
o
u
n
t
r
y
;

	
	
}


	
	
$
s
e
l
e
c
t
e
d
C
o
u
n
t
r
y
 
=
 
s
t
r
t
o
u
p
p
e
r
(
$
s
e
l
e
c
t
e
d
C
o
u
n
t
r
y
)
;

	
	
/
/
$
c
o
u
n
t
r
y
N
a
m
e
s
=
c
o
u
n
t
r
y
N
a
m
e
A
r
r
a
y
(
)
;

	
	
$
c
o
u
n
t
r
y
C
o
d
e
s
 
=
 
c
o
u
n
t
r
y
C
o
d
e
s
A
r
r
a
y
(
)
;

	
	
a
s
o
r
t
(
$
c
o
u
n
t
r
y
C
o
d
e
s
)
;

	
	
f
o
r
e
a
c
h
 
(
$
c
o
u
n
t
r
y
C
o
d
e
s
 
a
s
 
$
k
 
=
>
 
$
v
)
 
{

	
	
	
$
t
h
e
c
o
u
n
t
r
y
C
o
d
e
s
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
$
k
,
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
C
O
U
N
T
R
Y
N
A
M
E
S
_
'
.
$
v
,
 
$
v
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
}

	
	
$
c
o
u
n
t
r
y
D
r
o
p
d
o
w
n
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
t
h
e
c
o
u
n
t
r
y
C
o
d
e
s
,
 
'
c
o
u
n
t
r
y
'
,
 
'
 
c
l
a
s
s
=
"
i
n
p
u
t
-
m
e
d
i
u
m
"
 
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
$
s
e
l
e
c
t
e
d
C
o
u
n
t
r
y
)
;


	
	
r
e
t
u
r
n
 
$
c
o
u
n
t
r
y
D
r
o
p
d
o
w
n
;

	
}


	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/

	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/


	
/
/
	
R
o
o
m
 
u
p
d
a
t
e
 
f
u
n
c
t
i
o
n
s


	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/

	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/


	
/
*
*

	
 
*
 
U
p
d
a
t
e
s
 
t
h
e
 
s
e
l
e
c
t
e
d
 
r
o
o
m
 
w
i
t
h
 
t
h
e
 
r
o
o
m
^
t
a
r
i
f
f
 
s
t
r
i
n
g

	
 
*
 
I
f
 
r
o
o
m
^
t
a
r
i
f
f
 
a
r
e
 
a
l
r
e
a
d
y
 
i
n
 
t
h
e
 
r
e
q
u
e
s
t
e
d
R
o
o
m
 
a
r
r
a
y
 
t
h
e
n
 
i
t
 
w
i
l
l
 
b
e
 
r
e
m
o
v
e
d

	
 
*
 
o
t
h
e
r
w
i
s
e
 
i
t
 
i
s
 
a
d
d
e
d
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
u
p
d
a
t
e
S
e
l
e
c
t
e
d
R
o
o
m
(
$
r
o
o
m
A
n
d
T
a
r
i
f
f
)

	
{

	
	
j
r
_
i
m
p
o
r
t
(
'
j
o
m
r
e
s
_
r
o
o
m
l
o
c
k
s
'
)
;

	
	
$
r
o
o
m
_
l
o
c
k
e
r
 
=
 
n
e
w
 
j
o
m
r
e
s
_
r
o
o
m
l
o
c
k
s
(
)
;

	
	
i
f
 
(
!
e
m
p
t
y
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
)
)
 
{
 
/
/
 
T
h
e
 
r
e
q
u
e
s
t
e
d
R
o
o
m
s
 
l
i
s
t
 
i
s
 
n
o
t
 
e
m
p
t
y
,
 
l
e
t
'
s
 
s
e
e
 
o
f
 
w
e
'
r
e
 
a
d
d
i
n
g
 
o
r
 
r
e
m
o
v
i
n
g
 
t
h
i
s
 
s
e
l
e
c
t
i
o
n

	
	
	
/
/
 
S
e
e
 
i
f
 
w
e
'
r
e
 
a
c
t
u
a
l
l
y
 
r
e
m
o
v
i
n
g
 
a
 
r
o
o
m
 
f
r
o
m
 
t
h
e
 
l
i
s
t
 
o
f
 
t
h
o
s
e
 
s
e
l
e
c
t
e
d

	
	
	
i
f
 
(
i
n
_
a
r
r
a
y
(
$
r
o
o
m
A
n
d
T
a
r
i
f
f
,
 
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
)
)
 
{

	
	
	
	
$
t
h
i
s
-
>
c
h
e
c
k
E
x
i
s
t
i
n
g
R
o
o
m
s
T
a
r
i
f
f
s
F
o
r
R
o
o
m
s
T
a
r
i
f
f
s
W
h
e
r
e
M
i
n
R
o
o
m
S
e
t
t
i
n
g
I
s
N
o
L
o
n
g
e
r
M
e
t
(
$
r
o
o
m
A
n
d
T
a
r
i
f
f
)
;

	
	
	
	
i
f
 
(
$
t
h
i
s
-
>
r
e
m
o
v
e
F
r
o
m
S
e
l
e
c
t
e
d
R
o
o
m
s
(
$
r
o
o
m
A
n
d
T
a
r
i
f
f
)
)
 
{

	
	
	
	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
	
	
}

	
	
	
}
 
e
l
s
e
 
{
 
/
/
 
W
e
 
a
r
e
 
a
d
d
i
n
g
 
t
h
e
 
r
o
o
m
 
t
o
 
t
h
e
 
l
i
s
t

	
	
	
	
/
/
 
L
e
t
'
s
 
c
h
e
c
k
 
t
h
a
t
 
t
h
i
s
 
t
a
r
i
f
f
 
t
a
l
l
i
e
s
 
w
i
t
h
 
t
h
i
s
 
r
o
o
m
 
t
y
p
e

	
	
	
	
i
f
 
(
$
t
h
i
s
-
>
a
d
d
T
o
S
e
l
e
c
t
e
d
R
o
o
m
s
(
$
r
o
o
m
A
n
d
T
a
r
i
f
f
)
)
 
{

	
	
	
	
	
$
r
o
o
m
_
l
o
c
k
e
r
-
>
l
o
c
k
_
r
o
o
m
(
$
r
o
o
m
A
n
d
T
a
r
i
f
f
,
 
$
t
h
i
s
-
>
d
a
t
e
R
a
n
g
e
S
t
r
i
n
g
)
;


	
	
	
	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
	
	
}

	
	
	
}

	
	
}
 
e
l
s
e
 
{
 
/
/
 
W
e
'
v
e
 
g
o
t
 
t
o
 
b
e
 
a
d
d
i
n
g
 
t
h
e
 
r
o
o
m
 
t
o
 
t
h
e
 
c
u
r
r
e
n
t
l
y
 
e
m
p
t
y
 
l
i
s
t
 
o
f
 
r
e
q
u
e
s
t
e
d
 
r
o
o
m
s

	
	
	
i
f
 
(
$
t
h
i
s
-
>
a
d
d
T
o
S
e
l
e
c
t
e
d
R
o
o
m
s
(
$
r
o
o
m
A
n
d
T
a
r
i
f
f
)
)
 
{

	
	
	
	
$
r
o
o
m
_
l
o
c
k
e
r
-
>
l
o
c
k
_
r
o
o
m
(
$
r
o
o
m
A
n
d
T
a
r
i
f
f
,
 
$
t
h
i
s
-
>
d
a
t
e
R
a
n
g
e
S
t
r
i
n
g
)
;


	
	
	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
	
}

	
	
}

	
}


	
/
/
 
N
o
t
 
c
u
r
r
e
n
t
l
y
 
u
s
e
d
.
 
D
e
v
e
l
o
p
e
d
 
w
h
e
n
 
t
h
e
 
a
s
s
i
g
n
a
t
i
o
n
 
c
o
d
e
 
w
a
s
 
f
i
r
s
t
 
d
e
v
e
l
o
p
e
d
 
h
o
w
e
v
e
r
 
i
t
 
w
a
s
n
'
t
 
n
e
e
d
e
d
.
 
I
'
l
l
 
l
e
a
v
e
 
i
t
 
i
n
 
s
i
t
u
 
f
o
r
 
n
o
w
 
i
n
 
c
a
s
e
 
w
e
 
d
e
c
i
d
e
 
t
o
 
a
d
d
 
t
h
e
 
o
p
t
i
o
n
 
f
o
r
 
g
u
e
s
t
s
 
t
o
 
c
h
o
o
s
e
 
t
h
e
 
n
u
m
b
e
r
s
 
i
n
 
e
a
c
h
 
r
o
o
m
,
 
h
o
w
e
v
e
r
 
t
h
i
s
 
i
s
 
u
n
l
i
k
e
l
y
 
t
o
 
b
e
 
d
e
v
e
l
o
p
e
d
 
a
t
 
t
h
i
s
 
t
i
m
e
.

	
/
/
 
A
d
d
/
r
e
m
o
v
e
 
a
 
n
u
m
b
e
r
 
o
f
 
g
u
e
s
t
s
 
t
o
 
t
h
e
 
$
t
h
i
s
-
>
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
 
v
a
r
i
a
b
l
e
,
 
w
e
'
l
l
 
u
s
e
 
i
t
 
l
a
t
e
r
 
t
o
 
c
a
l
c
u
l
a
t
e
 
t
h
e
 
s
i
n
g
l
e
 
p
e
r
s
o
n
 
s
u
p
p
l
e
m
e
n
t
s
.

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
u
p
d
a
t
e
R
o
o
m
A
l
l
o
c
a
t
i
o
n
(
$
a
d
d
_
a
l
l
o
c
a
t
i
o
n
 
=
 
t
r
u
e
,
 
$
r
m
_
i
d
 
=
 
0
,
 
$
n
u
m
_
o
f
_
g
u
e
s
t
s
 
=
 
0
)

	
{

	
	
i
f
 
(
$
r
m
_
i
d
 
=
=
 
0
)
 
{

	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}

	
	
i
f
 
(
$
a
d
d
_
a
l
l
o
c
a
t
i
o
n
)
 
{

	
	
	
i
f
 
(
$
n
u
m
_
o
f
_
g
u
e
s
t
s
 
<
=
 
(
i
n
t
)
 
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
R
o
o
m
s
[
 
$
r
m
_
i
d
 
]
[
 
'
m
a
x
_
p
e
o
p
l
e
'
 
]
)
 
{

	
	
	
	
$
t
h
i
s
-
>
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
[
 
$
r
m
_
i
d
 
]
 
=
 
$
n
u
m
_
o
f
_
g
u
e
s
t
s
;


	
	
	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
	
}

	
	
}
 
e
l
s
e
 
{

	
	
	
u
n
s
e
t
(
$
t
h
i
s
-
>
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
[
 
$
r
m
_
i
d
 
]
)
;


	
	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
	
}

	
}


	
/
/
 
S
a
n
i
t
y
 
c
h
e
c
k
 
t
h
e
 
$
t
h
i
s
-
>
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
 
v
a
r
a
i
b
l
e
.
 
W
e
'
l
l
 
c
o
u
n
t
 
t
h
e
 
n
u
m
b
e
r
 
o
f
 
g
u
e
s
t
s
 
a
n
d
 
e
n
s
u
r
e
 
t
h
a
t
 
e
a
c
h
 
s
e
l
e
c
t
e
d
 
r
o
o
m
 
h
a
s
 
a
t
 
l
e
a
s
t
 
o
n
e
 
g
u
e
s
t

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
c
h
e
c
k
A
l
l
G
u
e
s
t
s
A
l
l
o
c
a
t
e
d
T
o
R
o
o
m
s
(
)

	
{

	
	
$
t
h
i
s
-
>
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
 
=
 
a
r
r
a
y
(
)
;

	
	
$
g
u
e
s
t
s
 
=
 
$
t
h
i
s
-
>
g
e
t
V
a
r
i
a
n
t
s
O
f
T
y
p
e
(
'
g
u
e
s
t
t
y
p
e
'
)
;


	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
h
e
c
k
A
l
l
G
u
e
s
t
s
A
l
l
o
c
a
t
e
d
T
o
R
o
o
m
s
:
:
S
t
a
r
t
i
n
g
 
'
)
;

	
	
i
f
 
(
!
e
m
p
t
y
(
$
g
u
e
s
t
s
)
)
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
h
e
c
k
A
l
l
G
u
e
s
t
s
A
l
l
o
c
a
t
e
d
T
o
R
o
o
m
s
:
:
 
c
o
u
n
t
(
$
g
u
e
s
t
s
)
 
>
 
0
 
'
)
;

	
	
	
$
t
o
t
a
l
N
u
m
b
e
r
O
f
G
u
e
s
t
s
 
=
 
0
;


	
	
	
i
f
 
(
e
m
p
t
y
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
)
)
 
{

	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
h
e
c
k
A
l
l
G
u
e
s
t
s
A
l
l
o
c
a
t
e
d
T
o
R
o
o
m
s
:
:
 
N
o
 
r
o
o
m
s
 
h
a
v
e
 
b
e
e
n
 
s
e
l
e
c
t
e
d
 
y
e
t
'
)
;


	
	
	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
	
	
}


	
	
	
f
o
r
e
a
c
h
 
(
$
g
u
e
s
t
s
 
a
s
 
$
g
)
 
{

	
	
	
	
$
t
o
t
a
l
N
u
m
b
e
r
O
f
G
u
e
s
t
s
 
=
 
$
t
o
t
a
l
N
u
m
b
e
r
O
f
G
u
e
s
t
s
 
+
 
$
g
[
 
'
q
t
y
'
 
]
;

	
	
	
}


	
	
	
/
/
 
L
e
t
'
s
 
f
i
n
d
 
t
h
e
 
m
a
x
_
p
e
o
p
l
e
 
o
p
t
i
o
n
s
 
f
o
r
 
e
a
c
h
 
r
o
o
m

	
	
	
$
a
l
l
S
e
l
e
c
t
e
d
R
o
o
m
s
M
a
x
P
e
o
p
l
e
 
=
 
a
r
r
a
y
(
)
;

	
	
	
$
r
o
o
m
_
s
p
r
e
a
d
_
a
r
r
a
y
 
=
 
a
r
r
a
y
(
)
;

	
	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
 
a
s
 
$
r
)
 
{

	
	
	
	
$
r
m
_
i
d
A
r
r
 
=
 
e
x
p
l
o
d
e
(
'
^
'
,
 
$
r
)
;

	
	
	
	
$
r
m
_
i
d
 
=
 
$
r
m
_
i
d
A
r
r
[
 
0
 
]
;

	
	
	
	
$
a
l
l
S
e
l
e
c
t
e
d
R
o
o
m
s
M
a
x
P
e
o
p
l
e
[
 
$
r
m
_
i
d
 
]
 
=
 
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
R
o
o
m
s
[
 
$
r
m
_
i
d
 
]
[
 
'
m
a
x
_
p
e
o
p
l
e
'
 
]
;

	
	
	
	
$
m
a
x
_
c
o
u
n
t
 
=
 
(
i
n
t
)
 
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
R
o
o
m
s
[
 
$
r
m
_
i
d
 
]
[
 
'
m
a
x
_
p
e
o
p
l
e
'
 
]
;

	
	
	
	
f
o
r
 
(
$
i
 
=
 
1
;
 
$
i
 
<
=
 
$
m
a
x
_
c
o
u
n
t
;
 
+
+
$
i
)
 
{

	
	
	
	
	
$
k
e
y
 
=
 
$
i
.
'
_
'
.
$
r
m
_
i
d
;

	
	
	
	
	
$
r
o
o
m
_
s
p
r
e
a
d
_
a
r
r
a
y
[
 
$
k
e
y
 
]
 
=
 
0
;

	
	
	
	
}

	
	
	
}

	
	
	
k
s
o
r
t
(
$
r
o
o
m
_
s
p
r
e
a
d
_
a
r
r
a
y
)
;

	
	
	
$
n
u
m
b
e
r
O
f
S
e
l
e
c
t
e
d
R
o
o
m
s
 
=
 
c
o
u
n
t
(
$
a
l
l
S
e
l
e
c
t
e
d
R
o
o
m
s
M
a
x
P
e
o
p
l
e
)
;

	
	
	
/
/
 
i
f
 
$
n
u
m
b
e
r
O
f
S
e
l
e
c
t
e
d
R
o
o
m
s
 
=
=
 
$
t
o
t
a
l
N
u
m
b
e
r
O
f
G
u
e
s
t
s
 
t
h
e
n
 
w
e
 
c
a
n
 
p
u
t
 
o
n
e
 
p
e
r
s
o
n
 
i
n
 
e
a
c
h
 
r
o
o
m
 
a
n
d
 
r
e
t
u
r
n

	
	
	
i
f
 
(
$
n
u
m
b
e
r
O
f
S
e
l
e
c
t
e
d
R
o
o
m
s
 
=
=
 
$
t
o
t
a
l
N
u
m
b
e
r
O
f
G
u
e
s
t
s
)
 
{

	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
h
e
c
k
A
l
l
G
u
e
s
t
s
A
l
l
o
c
a
t
e
d
T
o
R
o
o
m
s
:
:
$
n
u
m
b
e
r
O
f
S
e
l
e
c
t
e
d
R
o
o
m
s
 
=
=
 
$
t
o
t
a
l
N
u
m
b
e
r
O
f
G
u
e
s
t
s
 
'
)
;

	
	
	
	
f
o
r
e
a
c
h
 
(
$
a
l
l
S
e
l
e
c
t
e
d
R
o
o
m
s
M
a
x
P
e
o
p
l
e
 
a
s
 
$
r
m
_
i
d
 
=
>
 
$
r
o
o
m
)
 
{

	
	
	
	
	
$
t
h
i
s
-
>
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
[
 
$
r
m
_
i
d
 
]
[
 
'
n
u
m
b
e
r
_
a
l
l
o
c
a
t
e
d
'
 
]
 
=
 
1
;

	
	
	
	
}

	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
h
e
c
k
A
l
l
G
u
e
s
t
s
A
l
l
o
c
a
t
e
d
T
o
R
o
o
m
s
:
:
 
$
t
h
i
s
-
>
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
 
>
 
0
 
'
.
s
e
r
i
a
l
i
z
e
(
$
t
h
i
s
-
>
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
)
)
;


	
	
	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
	
	
}
 
e
l
s
e
 
{
 
/
/
 
T
h
e
r
e
 
a
r
e
 
m
o
r
e
 
g
u
e
s
t
s
 
t
h
a
n
 
t
h
e
r
e
 
a
r
e
 
r
o
o
m
s
,
 
w
e
'
l
l
 
n
e
e
d
 
t
o
 
p
u
t
 
o
n
e
 
p
e
r
s
o
n
 
i
n
 
e
a
c
h
 
r
o
o
m
,
 
t
h
e
n
 
s
e
e
 
w
h
a
t
'
s
 
l
e
f
t
 
o
v
e
r
.

	
	
	
	
/
/
 
F
i
r
s
t
 
w
e
'
l
l
 
p
o
p
u
l
a
t
e
 
t
h
e
 
r
o
o
m
 
s
p
r
e
a
d
 
a
r
r
a
y
.
 
W
e
'
v
e
 
s
o
r
t
e
d
 
t
h
e
 
k
e
y
s
 
s
o
 
t
h
a
t
 
r
o
o
m
 
1
 
f
o
r
 
e
a
c
h
 
r
o
o
m
 
i
s
 
a
t
 
t
h
e
 
b
e
g
i
n
n
i
n
g
 
o
f
 
t
h
e
 
a
r
r
a
y
,
 
e
n
s
u
r
i
n
g
 
t
h
a
t
 
w
h
e
r
e
e
v
e
r
 
p
o
s
s
i
b
l
e
 
t
h
e
r
e
'
s
 
a
t
 
l
e
a
s
t
 
o
n
e
 
p
e
r
s
o
n
 
i
n
 
e
a
c
h
 
r
o
o
m

	
	
	
	
$
r
e
m
a
i
n
i
n
g
G
u
e
s
t
s
 
=
 
$
t
o
t
a
l
N
u
m
b
e
r
O
f
G
u
e
s
t
s
;

	
	
	
	
f
o
r
e
a
c
h
 
(
$
r
o
o
m
_
s
p
r
e
a
d
_
a
r
r
a
y
 
a
s
 
$
k
e
y
 
=
>
 
$
v
a
l
)
 
{

	
	
	
	
	
i
f
 
(
$
r
e
m
a
i
n
i
n
g
G
u
e
s
t
s
 
>
 
0
)
 
{

	
	
	
	
	
	
$
r
o
o
m
_
s
p
r
e
a
d
_
a
r
r
a
y
 
[
 
$
k
e
y
 
]
 
=
 
1
;

	
	
	
	
	
	
-
-
$
r
e
m
a
i
n
i
n
g
G
u
e
s
t
s
;

	
	
	
	
	
}

	
	
	
	
}


	
	
	
	
f
o
r
e
a
c
h
 
(
$
r
o
o
m
_
s
p
r
e
a
d
_
a
r
r
a
y
 
a
s
 
$
k
e
y
 
=
>
 
$
v
a
l
)
 
{

	
	
	
	
	
$
t
m
p
_
a
r
r
 
=
 
e
x
p
l
o
d
e
(
'
_
'
,
 
$
k
e
y
)
;

	
	
	
	
	
$
r
o
o
m
_
i
n
d
e
x
 
=
 
$
t
m
p
_
a
r
r
[
 
0
 
]
;

	
	
	
	
	
$
r
m
_
i
d
 
=
 
$
t
m
p
_
a
r
r
[
 
1
 
]
;

	
	
	
	
	
i
f
 
(
!
i
s
s
e
t
(
$
t
h
i
s
-
>
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
[
 
$
r
m
_
i
d
 
]
[
 
'
n
u
m
b
e
r
_
a
l
l
o
c
a
t
e
d
'
 
]
)
)
 
{

	
	
	
	
	
	
$
t
h
i
s
-
>
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
[
 
$
r
m
_
i
d
 
]
[
 
'
n
u
m
b
e
r
_
a
l
l
o
c
a
t
e
d
'
 
]
 
=
 
0
;

	
	
	
	
	
}

	
	
	
	
	
$
t
h
i
s
-
>
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
[
 
$
r
m
_
i
d
 
]
[
 
'
n
u
m
b
e
r
_
a
l
l
o
c
a
t
e
d
'
 
]
 
=
 
$
t
h
i
s
-
>
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
[
 
$
r
m
_
i
d
 
]
[
 
'
n
u
m
b
e
r
_
a
l
l
o
c
a
t
e
d
'
 
]
 
+
 
$
v
a
l
;

	
	
	
	
}


	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
h
e
c
k
A
l
l
G
u
e
s
t
s
A
l
l
o
c
a
t
e
d
T
o
R
o
o
m
s
:
:
 
$
t
h
i
s
-
>
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
 
>
 
0
 
'
.
s
e
r
i
a
l
i
z
e
(
$
t
h
i
s
-
>
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
)
)
;


	
	
	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
	
	
}

	
	
}
 
e
l
s
e
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
h
e
c
k
A
l
l
G
u
e
s
t
s
A
l
l
o
c
a
t
e
d
T
o
R
o
o
m
s
:
:
N
o
 
g
u
e
s
t
 
t
y
p
e
s
 
s
e
l
e
c
t
e
d
 
'
)
;

	
	
}

	
}


	
/
*
*

	
 
*
 
N
o
w
 
w
e
 
n
e
e
d
 
t
o
 
c
h
e
c
k
 
a
n
d
 
s
e
e
 
i
f
 
t
h
e
r
e
 
a
r
e
 
a
n
y
 
m
i
n
i
-
m
a
x
 
r
o
o
m
/
t
a
r
i
f
f
 
c
o
m
b
i
n
a
t
i
o
n
s
 
s
e
l
e
c
t
e
d
.
 
I
f
 
t
h
e
r
e
 
a
r
e
 
a
n
d
 
t
h
e
 
c
u
r
r
e
n
t
 
n
u
m
b
e
r
 
o
f
 
r
o
o
m
s
 
s
e
l
e
c
t
e
d
 
<
 
m
i
n
 
o
r
 
m
a
x
,
 
t
h
e
n
 
w
e
 
n
e
e
d
 
t
o
 
r
e
m
o
v
e
 
t
h
o
s
e
 
p
a
r
t
i
c
u
l
a
r
 
r
o
o
m
s

	
 
*
 
n
e
w
 
f
o
r
 
v
4
.
4
.
1
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
c
h
e
c
k
E
x
i
s
t
i
n
g
R
o
o
m
s
T
a
r
i
f
f
s
F
o
r
R
o
o
m
s
T
a
r
i
f
f
s
W
h
e
r
e
M
i
n
R
o
o
m
S
e
t
t
i
n
g
I
s
N
o
L
o
n
g
e
r
M
e
t
(
$
r
o
o
m
A
n
d
T
a
r
i
f
f
)

	
{

	
	
$
r
t
A
r
r
a
y
 
=
 
e
x
p
l
o
d
e
(
'
^
'
,
 
$
r
o
o
m
A
n
d
T
a
r
i
f
f
)
;

	
	
$
t
a
r
i
f
f
_
i
d
_
t
o
_
b
e
_
r
e
m
o
v
e
d
 
=
 
$
r
t
A
r
r
a
y
[
 
1
 
]
;

	
	
$
r
e
s
t
r
i
c
t
i
o
n
s
_
i
n
_
p
l
a
c
e
 
=
 
f
a
l
s
e
;

	
	
$
r
e
s
t
r
i
c
t
e
d
_
t
a
r
i
f
f
s
 
=
 
a
r
r
a
y
(
)
;

	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
 
a
s
 
$
r
t
)
 
{

	
	
	
$
r
t
A
r
r
a
y
 
=
 
e
x
p
l
o
d
e
(
'
^
'
,
 
$
r
t
)
;

	
	
	
$
t
a
r
i
f
f
_
i
d
 
=
 
$
r
t
A
r
r
a
y
[
 
1
 
]
;

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
h
e
c
k
E
x
i
s
t
i
n
g
R
o
o
m
s
T
a
r
i
f
f
s
F
o
r
R
o
o
m
s
T
a
r
i
f
f
s
W
h
e
r
e
M
i
n
M
a
x
S
e
t
t
i
n
g
I
s
N
o
L
o
n
g
e
r
M
e
t
:
:
t
a
r
i
f
f
_
i
d
 
=
 
'
.
$
t
a
r
i
f
f
_
i
d
)
;

	
	
	
$
m
i
n
_
r
o
o
m
s
 
=
 
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
T
a
r
i
f
f
s
[
 
$
t
a
r
i
f
f
_
i
d
 
]
[
 
'
m
i
n
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
d
'
 
]
;

	
	
	
i
f
 
(
$
m
i
n
_
r
o
o
m
s
 
>
 
0
)
 
{

	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
h
e
c
k
E
x
i
s
t
i
n
g
R
o
o
m
s
T
a
r
i
f
f
s
F
o
r
R
o
o
m
s
T
a
r
i
f
f
s
W
h
e
r
e
M
i
n
M
a
x
S
e
t
t
i
n
g
I
s
N
o
L
o
n
g
e
r
M
e
t
:
:
R
e
s
t
r
i
c
t
i
o
n
s
 
a
r
e
 
i
n
 
p
l
a
c
e
.
 
O
n
e
 
r
o
o
m
 
i
n
 
s
e
l
e
c
t
i
o
n
 
h
a
s
 
a
 
m
i
n
 
r
o
o
m
s
 
>
 
0
 
'
)
;

	
	
	
	
$
r
e
s
t
r
i
c
t
i
o
n
s
_
i
n
_
p
l
a
c
e
 
=
 
t
r
u
e
;

	
	
	
}

	
	
}


	
	
i
f
 
(
$
r
e
s
t
r
i
c
t
i
o
n
s
_
i
n
_
p
l
a
c
e
)
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
h
e
c
k
E
x
i
s
t
i
n
g
R
o
o
m
s
T
a
r
i
f
f
s
F
o
r
R
o
o
m
s
T
a
r
i
f
f
s
W
h
e
r
e
M
i
n
M
a
x
S
e
t
t
i
n
g
I
s
N
o
L
o
n
g
e
r
M
e
t
:
:
A
s
 
o
n
e
 
t
a
r
i
f
f
 
h
a
s
 
r
e
s
t
r
i
c
t
i
o
n
s
,
 
a
n
d
 
b
e
c
a
u
s
e
 
a
 
t
a
r
i
f
f
 
i
s
 
b
e
i
n
g
 
r
e
m
o
v
e
d
,
 
w
e
 
a
r
e
 
n
o
w
 
c
l
e
a
r
i
n
g
 
a
l
l
 
s
e
l
e
c
t
e
d
 
r
o
o
m
s
 
f
r
o
m
 
t
h
e
 
l
i
s
t
 
'
)
;

	
	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
 
a
s
 
$
r
t
)
 
{

	
	
	
	
$
r
t
A
r
r
a
y
 
=
 
e
x
p
l
o
d
e
(
'
^
'
,
 
$
r
t
)
;

	
	
	
	
$
t
h
i
s
-
>
r
e
m
o
v
e
F
r
o
m
S
e
l
e
c
t
e
d
R
o
o
m
s
(
$
r
t
)
;

	
	
	
}

	
	
}

	
}


	
/
*
*

	
 
*
 
R
e
b
u
i
l
d
 
t
h
e
 
r
e
q
u
e
s
t
e
d
R
o
o
m
 
a
r
r
a
y
 
e
x
c
l
u
d
i
n
g
 
t
h
e
 
o
n
e
 
w
e
 
d
o
n
'
t
 
w
a
n
t
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
r
e
m
o
v
e
F
r
o
m
S
e
l
e
c
t
e
d
R
o
o
m
s
(
$
r
o
o
m
A
n
d
T
a
r
i
f
f
)

	
{

	
	
j
r
_
i
m
p
o
r
t
(
'
j
o
m
r
e
s
_
r
o
o
m
l
o
c
k
s
'
)
;

	
	
$
r
o
o
m
_
l
o
c
k
e
r
 
=
 
n
e
w
 
j
o
m
r
e
s
_
r
o
o
m
l
o
c
k
s
(
)
;


	
	
$
t
m
p
A
r
r
a
y
 
=
 
a
r
r
a
y
(
)
;

	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
 
a
s
 
$
r
t
)
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
r
e
m
o
v
e
F
r
o
m
S
e
l
e
c
t
e
d
R
o
o
m
s
:
:
C
h
e
c
k
i
n
g
 
t
o
 
s
e
e
 
i
f
 
$
r
t
 
i
s
 
t
o
 
b
e
 
r
e
m
o
v
e
d
.
"
)
;

	
	
	
i
f
 
(
$
r
t
 
!
=
 
$
r
o
o
m
A
n
d
T
a
r
i
f
f
)
 
{

	
	
	
	
$
t
m
p
A
r
r
a
y
[
 
]
 
=
 
$
r
t
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
r
o
o
m
_
l
o
c
k
e
r
-
>
u
n
l
o
c
k
_
r
o
o
m
(
$
r
o
o
m
A
n
d
T
a
r
i
f
f
,
 
$
t
h
i
s
-
>
d
a
t
e
R
a
n
g
e
S
t
r
i
n
g
)
;

	
	
	
}

	
	
}

	
	
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
 
=
 
$
t
m
p
A
r
r
a
y
;

	
	
$
t
h
i
s
-
>
c
h
e
c
k
A
l
l
G
u
e
s
t
s
A
l
l
o
c
a
t
e
d
T
o
R
o
o
m
s
(
)
;

	
}


	
/
*
*

	
 
*
 
A
d
d
 
r
o
o
m
^
t
a
r
i
f
f
 
t
o
 
r
e
q
u
e
s
t
e
d
R
o
o
m
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
a
d
d
T
o
S
e
l
e
c
t
e
d
R
o
o
m
s
(
$
r
o
o
m
A
n
d
T
a
r
i
f
f
)

	
{

	
	
$
r
t
A
r
r
a
y
 
=
 
e
x
p
l
o
d
e
(
'
^
'
,
 
$
r
o
o
m
A
n
d
T
a
r
i
f
f
)
;

	
	
i
f
 
(
$
t
h
i
s
-
>
c
h
e
c
k
T
a
r
i
f
f
T
a
l
l
i
e
s
W
i
t
h
R
o
o
m
(
$
r
t
A
r
r
a
y
)
)
 
{

	
	
	
i
f
 
(
$
t
h
i
s
-
>
c
h
e
c
k
R
o
o
m
N
o
t
A
l
r
e
a
d
y
S
e
l
e
c
t
e
d
(
$
r
t
A
r
r
a
y
)
)
 
{

	
	
	
	
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
[
 
]
 
=
 
$
r
o
o
m
A
n
d
T
a
r
i
f
f
;

	
	
	
	
$
t
h
i
s
-
>
c
h
e
c
k
A
l
l
G
u
e
s
t
s
A
l
l
o
c
a
t
e
d
T
o
R
o
o
m
s
(
)
;


	
	
	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
	
}

	
	
}
 
e
l
s
e
 
{

	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}

	
}


	
/
*
*

	
 
*
 
R
e
t
u
r
n
s
 
t
h
e
 
n
u
m
b
e
r
 
o
f
 
c
u
r
r
e
n
t
l
y
 
s
e
l
e
c
t
e
d
 
r
o
o
m
s
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
n
u
m
b
e
r
O
f
C
u
r
r
e
n
t
l
y
S
e
l
e
c
t
e
d
R
o
o
m
s
(
)

	
{

	
	
r
e
t
u
r
n
 
c
o
u
n
t
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
)
;

	
}


	
/
*
*

	
 
*
 
C
h
e
c
k
s
 
t
h
a
t
 
a
 
r
o
o
m
^
t
a
r
i
f
f
 
h
a
s
n
'
t
 
a
l
r
e
a
d
y
 
b
e
e
n
 
s
e
l
e
c
t
e
d
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
c
h
e
c
k
R
o
o
m
N
o
t
A
l
r
e
a
d
y
S
e
l
e
c
t
e
d
(
$
r
t
A
r
r
a
y
)

	
{

	
	
i
f
 
(
!
e
m
p
t
y
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
)
)
 
{

	
	
	
$
r
m
i
d
s
A
r
r
a
y
 
=
 
a
r
r
a
y
(
)
;

	
	
	
$
r
o
o
m
 
=
 
$
r
t
A
r
r
a
y
[
 
0
 
]
;

	
	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
 
a
s
 
$
r
t
)
 
{

	
	
	
	
$
r
m
 
=
 
e
x
p
l
o
d
e
(
'
^
'
,
 
$
r
t
)
;

	
	
	
	
$
r
m
i
d
 
=
 
$
r
m
[
 
0
 
]
;

	
	
	
	
$
r
m
i
d
s
A
r
r
a
y
[
 
]
 
=
 
$
r
m
i
d
;

	
	
	
}

	
	
	
i
f
 
(
!
e
m
p
t
y
(
$
r
m
i
d
s
A
r
r
a
y
)
)
 
{

	
	
	
	
$
r
m
i
d
s
A
r
r
a
y
 
=
 
a
r
r
a
y
_
u
n
i
q
u
e
(
$
r
m
i
d
s
A
r
r
a
y
)
;

	
	
	
}

	
	
	
i
f
 
(
i
n
_
a
r
r
a
y
(
$
r
o
o
m
,
 
$
r
m
i
d
s
A
r
r
a
y
)
)
 
{

	
	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
	
	
}

	
	
}


	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
}


	
/
*
*

	
 
*
 
C
h
e
c
k
s
 
t
h
a
t
 
i
t
 
i
s
 
l
o
g
i
c
a
l
 
t
o
 
s
e
l
e
c
t
 
a
 
r
o
o
m
 
w
i
t
h
 
a
 
g
i
v
e
n
 
t
a
r
i
f
f
.
 
F
i
n
d
s
 
t
h
e
 
r
o
o
m
 
t
y
p
e
 
t
h
e
n
 
c
h
e
c
k
s
 
t
h
a
t
 
t
h
e
 
t
a
r
i
f
f
 
h
a
s
 
t
h
e
 
s
a
m
e
 
r
o
o
m
 
t
y
p
e
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
c
h
e
c
k
T
a
r
i
f
f
T
a
l
l
i
e
s
W
i
t
h
R
o
o
m
(
$
r
t
A
r
r
a
y
)

	
{

	
	
$
r
o
o
m
 
=
 
$
r
t
A
r
r
a
y
[
 
0
 
]
;

	
	
/
*

	
	
$
q
u
e
r
y
=
"
S
E
L
E
C
T
 
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
r
o
o
m
s
 
W
H
E
R
E
 
r
o
o
m
_
u
i
d
 
=
 
'
"
.
$
r
o
o
m
.
"
'
"
;

	
	
$
r
o
o
m
s
L
i
s
t
=
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;

	
	
f
o
r
e
a
c
h
 
(
$
r
o
o
m
s
L
i
s
t
 
a
s
 
$
r
o
o
m
C
l
a
s
s
)

	
	
	
{

	
	
	
$
r
o
o
m
_
c
l
a
s
s
=
$
r
o
o
m
C
l
a
s
s
-
>
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
;

	
	
	
}

	
	
$
q
u
e
r
y
=
"
S
E
L
E
C
T
 
r
a
t
e
s
_
u
i
d
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
r
a
t
e
s
 
W
H
E
R
E
 
r
a
t
e
s
_
u
i
d
 
=
 
'
"
.
$
r
t
A
r
r
a
y
[
1
]
.
"
'
 
A
N
D
 
r
o
o
m
c
l
a
s
s
_
u
i
d
 
=
 
'
"
.
$
r
o
o
m
_
c
l
a
s
s
.
"
'
 
A
N
D
 
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
'
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
'
 
"
;

	
	
$
r
a
t
e
s
L
i
s
t
=
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;

	
	
*
/

	
	
$
r
a
t
e
s
L
i
s
t
 
=
 
a
r
r
a
y
(
)
;

	
	
$
r
o
o
m
_
c
l
a
s
s
 
=
 
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
R
o
o
m
s
[
 
$
r
o
o
m
 
]
[
 
'
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
'
 
]
;

	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
T
a
r
i
f
f
s
 
a
s
 
$
t
a
r
i
f
f
)
 
{

	
	
	
i
f
 
(
$
t
a
r
i
f
f
[
 
'
r
a
t
e
s
_
u
i
d
'
 
]
 
=
=
 
$
r
t
A
r
r
a
y
[
 
1
 
]
 
&
&
 
$
t
a
r
i
f
f
[
 
'
r
o
o
m
c
l
a
s
s
_
u
i
d
'
 
]
 
=
=
 
$
r
o
o
m
_
c
l
a
s
s
)
 
{

	
	
	
	
$
r
a
t
e
s
L
i
s
t
[
 
]
 
=
 
$
t
a
r
i
f
f
[
 
'
r
a
t
e
s
_
u
i
d
'
 
]
;

	
	
	
}

	
	
}

	
	
i
f
 
(
e
m
p
t
y
(
$
r
a
t
e
s
L
i
s
t
)
)
 
{

	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}
 
e
l
s
e
 
{

	
	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
	
}

	
}


	
/
*
*

	
 
*
 
S
t
r
i
n
g
 
o
u
t
p
u
t
 
o
f
 
t
h
e
 
c
u
r
r
e
n
t
l
y
 
s
e
l
e
c
t
e
d
 
r
o
o
m
s
.
 
R
e
t
u
r
n
s
 
o
v
e
r
l
i
b
'
d
 
o
u
t
p
u
t
 
a
s
 
a
 
s
t
r
i
n
g
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
l
i
s
t
C
u
r
r
e
n
t
l
y
S
e
l
e
c
t
e
d
R
o
o
m
s
(
)

	
{

	
	
$
r
e
t
u
r
n
_
o
u
t
p
u
t
 
=
 
'
'
;

	
	
/
/
i
f
 
(
 
$
t
h
i
s
-
>
c
f
g
_
b
o
o
k
i
n
g
_
f
o
r
m
_
r
o
o
m
s
_
l
i
s
t
_
s
t
y
l
e
 
=
=
 
"
1
"
 
)

	
	
/
/
	
{

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
l
i
s
t
C
u
r
r
e
n
t
l
y
S
e
l
e
c
t
e
d
R
o
o
m
s
:
:
R
e
q
u
e
s
t
e
d
 
r
o
o
m
s
:
 
'
.
g
e
t
t
y
p
e
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
)
)
;


	
	
i
f
 
(
!
e
m
p
t
y
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
)
)
 
{

	
	
	
$
r
e
t
u
r
n
_
o
u
t
p
u
t
 
=
 
'
<
d
i
v
 
i
d
=
"
r
o
o
m
b
u
t
t
o
n
c
o
n
t
a
i
n
e
r
_
s
e
l
e
c
t
e
d
2
"
>
<
d
i
v
 
i
d
=
"
r
o
o
m
b
u
t
t
o
n
_
s
e
l
e
c
t
e
d
"
>
'
;

	
	
	
$
t
a
r
i
f
f
_
h
e
a
d
e
r
s
_
a
r
r
a
y
 
=
 
$
t
h
i
s
-
>
m
a
k
e
T
a
r
i
f
f
H
e
a
d
e
r
s
(
)
;

	
	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
 
a
s
 
$
r
r
)
 
{

	
	
	
	
$
c
u
r
r
e
n
t
U
i
d
s
 
=
 
e
x
p
l
o
d
e
(
'
^
'
,
 
$
r
r
)
;

	
	
	
	
$
r
e
s
u
l
t
 
=
 
$
t
h
i
s
-
>
m
a
k
e
R
o
o
m
T
a
r
i
f
f
D
e
t
a
i
l
s
(
$
c
u
r
r
e
n
t
U
i
d
s
[
 
0
 
]
,
 
$
c
u
r
r
e
n
t
U
i
d
s
[
 
1
 
]
)
;

	
	
	
	
$
r
o
o
m
T
a
r
i
f
f
O
u
t
p
u
t
I
d
 
=
 
$
r
e
s
u
l
t
[
 
'
r
e
q
u
e
s
t
e
d
R
o
o
m
'
 
]
;

	
	
	
	
$
r
o
o
m
T
a
r
i
f
f
O
u
t
p
u
t
T
e
x
t
 
=
 
$
r
e
s
u
l
t
[
 
'
r
o
o
m
a
n
d
t
a
r
i
f
f
i
n
f
o
'
 
]
;

	
	
	
	
$
r
o
o
m
D
e
e
t
s
[
 
]
 
=
 
$
t
h
i
s
-
>
m
a
k
e
R
o
o
m
O
v
e
r
l
i
b
d
a
t
a
(
$
c
u
r
r
e
n
t
U
i
d
s
[
 
0
 
]
,
 
$
c
u
r
r
e
n
t
U
i
d
s
[
 
1
 
]
,
 
$
r
o
o
m
T
a
r
i
f
f
O
u
t
p
u
t
I
d
,
 
$
r
o
o
m
T
a
r
i
f
f
O
u
t
p
u
t
T
e
x
t
,
 
t
r
u
e
)
;

	
	
	
}

	
	
	
$
p
a
g
e
o
u
t
p
u
t
 
=
 
a
r
r
a
y
(
)
;


	
	
	
$
p
a
g
e
o
u
t
p
u
t
[
 
]
 
=
 
$
t
a
r
i
f
f
_
h
e
a
d
e
r
s
_
a
r
r
a
y
;

	
	
	
$
t
m
p
l
 
=
 
n
e
w
 
p
a
t
T
e
m
p
l
a
t
e
(
)
;

	
	
	
$
t
m
p
l
-
>
s
e
t
R
o
o
t
(
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
P
A
T
H
_
F
R
O
N
T
E
N
D
)
;

	
	
	
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
p
a
g
e
o
u
t
p
u
t
'
,
 
$
p
a
g
e
o
u
t
p
u
t
)
;

	
	
	
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
r
o
w
s
'
,
 
$
r
o
o
m
D
e
e
t
s
)
;

	
	
	
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
b
o
o
k
i
n
g
_
f
o
r
m
_
c
l
a
s
s
i
c
_
r
o
o
m
s
l
i
s
t
_
s
e
l
e
c
t
e
d
.
h
t
m
l
'
)
;

	
	
	
$
t
e
m
p
l
a
t
e
_
o
u
t
p
u
t
 
=
 
$
t
m
p
l
-
>
g
e
t
P
a
r
s
e
d
T
e
m
p
l
a
t
e
(
)
;

	
	
	
$
r
e
t
u
r
n
_
o
u
t
p
u
t
 
.
=
 
$
t
e
m
p
l
a
t
e
_
o
u
t
p
u
t
;


	
	
	
$
r
e
t
u
r
n
_
o
u
t
p
u
t
 
.
=
 
'
<
/
d
i
v
>
<
/
d
i
v
>
'
;

	
	
}

	
	
/
/
	
}

	
	
r
e
t
u
r
n
 
$
r
e
t
u
r
n
_
o
u
t
p
u
t
;

	
}


	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/

	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/


	
/
/
	
R
o
o
m
 
l
i
s
t
i
n
g
 
f
u
n
c
t
i
o
n
s


	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/

	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/


	
/
*
*

	
 
*
 
G
e
t
 
a
l
l
 
o
f
 
t
h
e
 
r
o
o
m
s
 
f
o
r
 
t
h
i
s
 
p
r
o
p
e
r
t
y
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
A
l
l
R
o
o
m
U
i
d
s
F
o
r
P
r
o
p
e
r
t
y
(
)

	
{

	
	
$
r
o
o
m
_
u
i
d
s
A
r
r
a
y
 
=
 
a
r
r
a
y
(
)
;

	
	
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
r
o
o
m
_
u
i
d
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
r
o
o
m
s
 
W
H
E
R
E
 
p
r
o
p
e
r
t
y
s
_
u
i
d
 
=
 
'
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
'
"
;

	
	
$
r
o
o
m
s
L
i
s
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;

	
	
f
o
r
e
a
c
h
 
(
$
r
o
o
m
s
L
i
s
t
 
a
s
 
$
r
o
o
m
s
)
 
{

	
	
	
$
r
o
o
m
_
u
i
d
s
A
r
r
a
y
[
 
]
 
=
 
$
r
o
o
m
s
-
>
r
o
o
m
_
u
i
d
;

	
	
}


	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
T
h
i
s
 
p
r
o
p
e
r
t
y
 
h
a
s
 
t
h
e
s
e
 
r
o
o
m
s
:
 
"
.
s
e
r
i
a
l
i
z
e
(
$
r
o
o
m
_
u
i
d
s
A
r
r
a
y
)
 
)
;

	
	
r
e
t
u
r
n
 
$
r
o
o
m
_
u
i
d
s
A
r
r
a
y
;

	
}


	
/
*
*

	
 
*
 
F
r
o
m
 
t
h
e
 
f
r
e
e
 
r
o
o
m
s
 
a
r
r
a
y
,
 
s
t
r
i
p
s
 
o
u
t
 
a
n
y
 
r
o
o
m
s
 
t
h
a
t
 
h
a
v
e
 
a
l
r
e
a
d
y
 
b
e
e
n
 
s
e
l
e
c
t
e
d
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
r
e
m
o
v
e
R
o
o
m
u
i
d
s
A
l
r
e
a
d
y
I
n
T
h
i
s
B
o
o
k
i
n
g
(
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
)

	
{

	
	
$
r
e
t
_
u
i
d
s
 
=
 
a
r
r
a
y
(
)
;

	
	
$
t
m
p
A
r
r
a
y
 
=
 
a
r
r
a
y
(
)
;

	
	
i
f
 
(
!
e
m
p
t
y
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
)
 
&
&
 
!
e
m
p
t
y
(
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
)
)
 
{

	
	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
 
a
s
 
$
r
r
)
 
{

	
	
	
	
$
c
u
r
r
e
n
t
U
i
d
s
 
=
 
e
x
p
l
o
d
e
(
'
^
'
,
 
$
r
r
)
;

	
	
	
	
$
t
m
p
A
r
r
a
y
[
 
]
 
=
 
$
c
u
r
r
e
n
t
U
i
d
s
[
 
0
 
]
;

	
	
	
}

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
r
e
m
o
v
e
R
o
o
m
u
i
d
s
A
l
r
e
a
d
y
I
n
T
h
i
s
B
o
o
k
i
n
g
:
:
S
e
r
i
a
l
i
z
e
d
 
t
m
p
A
r
r
a
y
 
'
.
s
e
r
i
a
l
i
z
e
(
$
t
m
p
A
r
r
a
y
)
)
;

	
	
	
f
o
r
e
a
c
h
 
(
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
 
a
s
 
$
i
d
)
 
{

	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
r
e
m
o
v
e
R
o
o
m
u
i
d
s
A
l
r
e
a
d
y
I
n
T
h
i
s
B
o
o
k
i
n
g
:
:
 
i
d
 
'
.
$
i
d
)
;

	
	
	
	
i
f
 
(
!
i
n
_
a
r
r
a
y
(
$
i
d
,
 
$
t
m
p
A
r
r
a
y
)
)
 
{

	
	
	
	
	
$
r
e
t
_
u
i
d
s
[
 
]
 
=
 
$
i
d
;

	
	
	
	
}

	
	
	
}

	
	
}
 
e
l
s
e
 
{

	
	
	
$
r
e
t
_
u
i
d
s
 
=
 
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
;

	
	
}

	
	
i
f
 
(
e
m
p
t
y
(
$
r
e
t
_
u
i
d
s
)
 
&
&
 
!
e
m
p
t
y
(
$
t
m
p
A
r
r
a
y
)
)
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
r
e
m
o
v
e
R
o
o
m
u
i
d
s
A
l
r
e
a
d
y
I
n
T
h
i
s
B
o
o
k
i
n
g
:
:
R
o
o
m
s
 
r
e
m
o
v
e
d
 
a
s
 
a
l
r
e
a
d
y
 
i
n
 
b
o
o
k
i
n
g
'
)
;

	
	
}


	
	
r
e
t
u
r
n
 
$
r
e
t
_
u
i
d
s
;

	
}


	
/
*
*

	
 
*
 
F
i
n
d
 
r
o
o
m
s
 
t
h
a
t
 
a
r
e
 
f
r
e
e
 
w
i
t
h
i
n
 
t
h
e
 
a
r
r
i
v
a
l
 
a
n
d
 
d
e
p
a
r
t
u
r
e
 
d
a
t
e
s
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
f
i
n
d
F
r
e
e
R
o
o
m
s
I
n
D
a
t
e
R
a
n
g
e
(
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
)

	
{

	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
C
o
n
t
e
n
t
s
 
o
f
 
t
h
e
 
f
r
e
e
R
o
o
m
s
A
r
r
a
y
 
w
h
e
n
 
l
o
o
k
i
n
g
 
f
o
r
 
f
r
e
e
 
r
o
o
m
s
:
 
"
.
s
e
r
i
a
l
i
z
e
(
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
)
 
)
;

	
	
$
t
m
p
A
r
r
a
y
 
=
 
a
r
r
a
y
(
)
;

	
	
i
f
 
(
!
e
m
p
t
y
(
$
t
h
i
s
-
>
d
a
t
e
R
a
n
g
e
S
t
r
i
n
g
)
)
 
{

	
	
	
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
t
h
i
s
-
>
d
a
t
e
R
a
n
g
e
S
t
r
i
n
g
)
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
f
i
n
d
F
r
e
e
R
o
o
m
s
I
n
D
a
t
e
R
a
n
g
e
:
:
D
a
t
e
 
r
a
n
g
e
 
a
r
r
a
y
 
e
m
p
t
y
'
)
;


	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}

	
	
/
/
v
a
r
_
d
u
m
p
(
$
t
h
i
s
-
>
a
l
l
B
o
o
k
i
n
g
s
)
;
e
x
i
t
;

	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
L
o
o
k
i
n
g
 
f
o
r
 
f
r
e
e
 
r
o
o
m
s
 
i
n
 
d
a
t
e
 
r
a
n
g
e
:
 
"
.
s
e
r
i
a
l
i
z
e
(
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
)
 
)
;

	
	
i
f
 
(
!
e
m
p
t
y
(
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
)
)
 
{

	
	
	
f
o
r
e
a
c
h
 
(
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
 
a
s
 
$
r
o
o
m
U
i
d
)
 
{

	
	
	
	
/
/
v
a
r
_
d
u
m
p
(
$
r
o
o
m
U
i
d
)
;

	
	
	
	
$
r
o
o
m
I
s
F
r
e
e
 
=
 
t
r
u
e
;

	
	
	
	
f
o
r
e
a
c
h
 
(
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
 
a
s
 
$
e
a
c
h
d
a
t
e
)
 
{

	
	
	
	
	
i
f
 
(
i
s
s
e
t
(
$
t
h
i
s
-
>
a
l
l
B
o
o
k
i
n
g
s
[
 
$
e
a
c
h
d
a
t
e
 
]
[
 
$
r
o
o
m
U
i
d
 
]
)
)
 
{

	
	
	
	
	
	
/
/
v
a
r
_
d
u
m
p
(
$
t
h
i
s
-
>
a
l
l
B
o
o
k
i
n
g
s
[
$
e
a
c
h
d
a
t
e
]
[
$
r
o
o
m
U
i
d
]
)
;

	
	
	
	
	
	
/
/
$
a
r
r
i
v
a
l
D
a
t
e
=
$
c
y
c
l
e
D
a
t
e
;

	
	
	
	
	
	
$
r
o
o
m
I
s
F
r
e
e
 
=
 
f
a
l
s
e
;


	
	
	
	
	
	
b
r
e
a
k
;

	
	
	
	
	
}

	
	
	
	
}


	
	
	
	
i
f
 
(
$
r
o
o
m
I
s
F
r
e
e
)
 
{

	
	
	
	
	
$
t
m
p
A
r
r
a
y
[
 
]
 
=
 
$
r
o
o
m
U
i
d
;

	
	
	
	
}

	
	
	
}

	
	
	
/
/
v
a
r
_
d
u
m
p
(
$
t
m
p
A
r
r
a
y
)
;
e
x
i
t
;

	
	
	
i
f
 
(
e
m
p
t
y
(
$
t
m
p
A
r
r
a
y
)
)
 
{

	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
f
i
n
d
F
r
e
e
R
o
o
m
s
I
n
D
a
t
e
R
a
n
g
e
:
:
N
o
 
f
r
e
e
 
r
o
o
m
s
 
f
o
u
n
d
 
i
n
 
d
a
t
e
 
r
a
n
g
e
'
)
;

	
	
	
}

	
	
}
 
e
l
s
e
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
f
i
n
d
F
r
e
e
R
o
o
m
s
I
n
D
a
t
e
R
a
n
g
e
:
:
R
o
o
m
 
u
i
d
s
 
a
r
r
a
y
 
e
m
p
t
y
'
)
;

	
	
}


	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
C
o
n
t
e
n
t
s
 
o
f
 
t
h
e
 
f
r
e
e
R
o
o
m
s
A
r
r
a
y
 
a
f
t
e
r
 
l
o
o
k
i
n
g
 
f
o
r
 
f
r
e
e
 
r
o
o
m
s
:
 
"
.
s
e
r
i
a
l
i
z
e
(
$
t
m
p
A
r
r
a
y
)
 
)
;

	
	
r
e
t
u
r
n
 
$
t
m
p
A
r
r
a
y
;

	
}


	
/
*
*

	
 
*
 
F
i
l
t
e
r
s
 
r
o
o
m
s
 
o
u
t
 
t
h
a
t
 
h
a
v
e
 
b
e
e
n
 
l
o
c
k
e
d
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
e
x
t
r
a
c
t
L
o
c
k
e
d
R
o
o
m
s
(
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
)

	
{

	
	
j
r
_
i
m
p
o
r
t
(
'
j
o
m
r
e
s
_
r
o
o
m
l
o
c
k
s
'
)
;

	
	
$
r
o
o
m
_
l
o
c
k
e
r
 
=
 
n
e
w
 
j
o
m
r
e
s
_
r
o
o
m
l
o
c
k
s
(
)
;

	
	
$
t
m
p
A
r
r
a
y
 
=
 
a
r
r
a
y
(
)
;

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
e
x
t
r
a
c
t
L
o
c
k
e
d
R
o
o
m
s
 
:
:
 
L
o
o
k
i
n
g
 
f
o
r
 
f
r
e
e
 
r
o
o
m
s
 
i
n
 
d
a
t
e
 
r
a
n
g
e
:
 
'
.
s
e
r
i
a
l
i
z
e
(
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
)
)
;

	
	
i
f
 
(
!
e
m
p
t
y
(
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
)
)
 
{

	
	
	
f
o
r
e
a
c
h
 
(
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
 
a
s
 
$
r
o
o
m
U
i
d
)
 
{

	
	
	
	
$
r
o
o
m
I
s
F
r
e
e
 
=
 
t
r
u
e
;

	
	
	
	
i
f
 
(
$
r
o
o
m
_
l
o
c
k
e
r
-
>
i
s
_
r
o
o
m
_
l
o
c
k
e
d
(
$
r
o
o
m
U
i
d
,
 
$
t
h
i
s
-
>
d
a
t
e
R
a
n
g
e
S
t
r
i
n
g
)
)
 
{

	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
e
x
t
r
a
c
t
L
o
c
k
e
d
R
o
o
m
s
 
:
:
 
R
e
m
o
v
i
n
g
 
r
o
o
m
:
 
'
.
$
r
o
o
m
U
i
d
.
'
 
A
s
 
i
s
 
l
o
c
k
e
d
.
'
)
;

	
	
	
	
	
$
r
o
o
m
I
s
F
r
e
e
 
=
 
f
a
l
s
e
;

	
	
	
	
}

	
	
	
	
i
f
 
(
$
r
o
o
m
I
s
F
r
e
e
)
 
{

	
	
	
	
	
$
t
m
p
A
r
r
a
y
[
 
]
 
=
 
$
r
o
o
m
U
i
d
;

	
	
	
	
}

	
	
	
}

	
	
	
i
f
 
(
e
m
p
t
y
(
$
t
m
p
A
r
r
a
y
)
)
 
{

	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
e
x
t
r
a
c
t
L
o
c
k
e
d
R
o
o
m
s
:
:
N
o
 
f
r
e
e
 
r
o
o
m
s
 
f
o
u
n
d
 
i
n
 
d
a
t
e
 
r
a
n
g
e
'
)
;

	
	
	
}

	
	
}
 
e
l
s
e
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
e
x
t
r
a
c
t
L
o
c
k
e
d
R
o
o
m
s
:
:
R
o
o
m
 
u
i
d
s
 
a
r
r
a
y
 
e
m
p
t
y
'
)
;

	
	
}

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
e
x
t
r
a
c
t
L
o
c
k
e
d
R
o
o
m
s
:
:
C
o
n
t
e
n
t
s
 
o
f
 
t
h
e
 
f
r
e
e
R
o
o
m
s
A
r
r
a
y
 
a
f
t
e
r
 
l
o
o
k
i
n
g
 
f
o
r
 
f
r
e
e
 
r
o
o
m
s
:
 
'
.
s
e
r
i
a
l
i
z
e
(
$
t
m
p
A
r
r
a
y
)
)
;


	
	
r
e
t
u
r
n
 
$
t
m
p
A
r
r
a
y
;

	
}


	
/
*
*

	
 
*
 
F
i
n
d
s
 
t
h
e
 
t
o
t
a
l
 
n
u
m
b
e
r
 
o
f
 
b
e
d
s
 
t
h
a
t
 
a
r
e
 
u
n
b
o
o
k
e
d
 
i
n
 
t
h
i
s
 
p
r
o
p
e
r
t
y
 
a
t
 
t
h
i
s
 
t
i
m
e
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
c
h
e
c
k
P
e
o
p
l
e
N
u
m
b
e
r
s
(
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
)

	
{

	
	
$
t
o
t
a
l
F
r
e
e
B
e
d
s
 
=
 
0
;

	
	
i
f
 
(
!
e
m
p
t
y
(
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
)
)
 
{

	
	
	
$
n
 
=
 
c
o
u
n
t
(
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
)
;

	
	
	
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
r
o
o
m
_
u
i
d
,
m
a
x
_
p
e
o
p
l
e
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
r
o
o
m
s
 
W
H
E
R
E
 
'
;

	
	
	
$
q
u
e
r
y
 
.
=
 
'
 
(
r
o
o
m
_
u
i
d
 
=
 
'
;

	
	
	
f
o
r
 
(
$
i
 
=
 
0
;
 
$
i
 
<
 
$
n
;
 
+
+
$
i
)
 
{

	
	
	
	
$
q
u
e
r
y
 
.
=
 
"
'
"
.
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
[
 
$
i
 
]
.
"
'
"
;

	
	
	
	
i
f
 
(
$
i
 
<
 
(
$
n
 
-
 
1
)
)
 
{

	
	
	
	
	
$
q
u
e
r
y
 
.
=
 
'
 
O
R
 
r
o
o
m
_
u
i
d
 
=
 
'
;

	
	
	
	
}

	
	
	
}

	
	
	
$
q
u
e
r
y
 
.
=
 
'
)
 
'
;


	
	
	
$
f
r
e
e
R
o
o
m
s
C
a
p
a
c
i
t
y
L
i
s
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;


	
	
	
f
o
r
e
a
c
h
 
(
$
f
r
e
e
R
o
o
m
s
C
a
p
a
c
i
t
y
L
i
s
t
 
a
s
 
$
r
o
o
m
)
 
{

	
	
	
	
$
t
o
t
a
l
F
r
e
e
B
e
d
s
 
=
 
$
t
o
t
a
l
F
r
e
e
B
e
d
s
 
+
 
(
i
n
t
)
 
$
r
o
o
m
-
>
m
a
x
_
p
e
o
p
l
e
;

	
	
	
}

	
	
}


	
	
$
t
h
i
s
-
>
b
e
d
s
_
a
v
a
i
l
a
b
l
e
 
=
 
$
t
o
t
a
l
F
r
e
e
B
e
d
s
;

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
h
e
c
k
P
e
o
p
l
e
N
u
m
b
e
r
s
:
:
T
h
e
 
n
u
m
b
e
r
 
o
f
 
b
e
d
s
 
a
v
a
i
l
a
b
l
e
 
o
n
 
t
h
i
s
 
d
a
t
e
 
'
.
$
t
o
t
a
l
F
r
e
e
B
e
d
s
)
;


	
	
r
e
t
u
r
n
 
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
;

	
}
 
/
/
 
e
n
d
 
f
u
n
c
t
i
o
n
 
c
h
e
c
k
P
e
o
p
l
e
N
u
m
b
e
r
s


	
/
*
*

	
 
*
 
A
d
d
s
 
t
h
e
 
t
o
t
a
l
 
s
e
l
e
c
t
e
d
 
g
u
e
s
t
t
y
p
e
s
 
t
o
 
f
i
n
d
 
t
h
e
 
t
o
t
a
l
 
i
n
 
t
h
e
 
p
a
r
t
y
.
 
R
e
t
u
r
n
s
 
t
h
e
 
i
n
t
e
g
e
r
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
T
o
t
a
l
I
n
P
a
r
t
y
(
)

	
{

	
	
$
s
u
b
t
o
t
a
l
 
=
 
0
;

	
	
$
n
 
=
 
c
o
u
n
t
(
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
t
y
p
e
s
)
;

	
	
f
o
r
 
(
$
i
 
=
 
0
;
 
$
i
 
<
 
$
n
;
 
+
+
$
i
)
 
{

	
	
	
i
f
 
(
i
s
s
e
t
(
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
t
y
p
e
s
[
 
$
i
 
]
)
 
&
&
 
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
t
y
p
e
s
[
 
$
i
 
]
 
=
=
 
'
g
u
e
s
t
t
y
p
e
'
)
 
{

	
	
	
	
$
s
u
b
t
o
t
a
l
 
=
 
$
s
u
b
t
o
t
a
l
 
+
 
$
t
h
i
s
-
>
v
a
r
i
a
n
c
e
q
t
y
[
 
$
i
 
]
;

	
	
	
}

	
	
}

	
	
$
t
h
i
s
-
>
t
o
t
a
l
_
i
n
_
p
a
r
t
y
 
=
 
$
s
u
b
t
o
t
a
l
;


	
	
r
e
t
u
r
n
 
$
t
h
i
s
-
>
t
o
t
a
l
_
i
n
_
p
a
r
t
y
;

	
}


	
/
*
*

	
 
*
 
P
a
s
s
e
d
 
a
n
 
a
r
r
a
y
,
 
i
t
'
l
l
 
c
r
e
a
t
e
 
a
n
 
o
b
j
e
c
t
 
a
n
d
 
p
a
s
s
 
i
t
 
b
a
c
k
.
 
v
2
.
6
.
0
.
3
 
d
o
b
o
o
k
i
n
g
_
f
u
n
c
t
i
o
n
s
 
w
a
s
 
c
h
a
n
g
e
d
 
t
o
 
r
e
d
u
c
e
 
t
h
e
 
n
u
m
b
e
r
 
o
f
 
q
u
e
r
i
e
s
 
b
y
 
c
o
l
l
e
c
t
i
n
g
 
m
u
c
h
 
o
f
 
t
h
e
 
r
e
q
u
i
r
e
d
 
d
a
t
a
 
i
n
 
a
 
f
e
w
 
q
u
i
c
k
 
q
u
e
r
i
e
s
 
w
h
e
n
 
t
h
e
 
b
o
o
k
i
n
g
 
o
b
j
e
c
t
 
i
s
 
c
r
e
a
t
e
d
.
 
T
h
i
s
 
i
n
f
o
r
m
a
t
i
o
n
 
i
s
 
t
h
e
n
 
s
t
o
r
e
d
 
i
n
 
m
e
m
o
r
y
 
a
s
 
a
n
 
a
r
r
a
y
 
b
e
c
a
u
s
e
 
i
t
'
s
 
e
a
s
y
 
t
o
 
a
c
c
e
s
s
 
d
i
r
e
c
t
l
y
,
 
h
o
w
e
v
e
r
 
s
o
m
e
 
o
f
 
t
h
e
 
c
o
d
e
 
i
n
 
d
o
b
o
o
k
i
n
g
_
f
u
n
c
t
i
o
n
s
 
e
x
p
e
c
t
s
 
t
o
 
b
e
 
p
a
s
s
e
d
 
t
h
e
 
a
r
r
a
y
(
o
b
j
)
 
t
h
a
t
 
w
a
s
 
p
u
l
l
e
d
 
f
r
o
m
 
d
b
 
q
u
e
r
i
e
s
 
s
o
 
i
n
s
t
e
a
d
 
o
f
 
r
e
w
r
i
t
i
n
g
 
b
u
n
c
h
e
s
 
o
f
 
c
o
d
e
 
s
o
 
t
h
a
t
 
t
h
e
y
 
n
o
w
 
s
e
e
 
b
a
s
i
c
 
a
r
r
a
y
s
,
 
w
e
'
l
l
 
r
e
c
o
n
v
e
r
t
 
(
i
n
 
m
e
m
o
r
y
)
 
t
h
e
 
a
r
r
a
y
 
f
o
u
n
d
 
t
o
 
a
n
 
a
n
 
o
b
j
e
c
t
.
 
T
h
e
 
m
e
t
h
o
d
 
c
a
l
l
i
n
g
 
t
h
i
s
 
m
e
t
h
o
d
 
w
i
l
l
 
a
c
t
u
a
l
l
y
 
c
r
e
a
t
e
 
t
h
e
 
a
r
r
a
y
(
o
b
j
)
 
t
o
 
b
e
 
p
a
s
s
e
d
 
b
a
c
k
 
t
o
 
i
t
'
s
 
p
a
r
e
n
t
 
m
e
t
h
o
d
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
c
o
n
v
e
r
t
A
r
r
a
y
T
o
O
b
j
e
c
t
(
$
t
m
p
A
r
r
a
y
)

	
{

	
	
$
o
b
j
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

	
	
f
o
r
e
a
c
h
 
(
$
t
m
p
A
r
r
a
y
 
a
s
 
$
k
e
y
 
=
>
 
$
v
a
l
)
 
{

	
	
	
$
o
b
j
-
>
$
k
e
y
 
=
 
$
v
a
l
;

	
	
}


	
	
r
e
t
u
r
n
 
$
o
b
j
;

	
}


	
/
*
*

	
 
*
 
P
a
s
s
 
a
 
r
o
o
m
 
u
i
d
,
 
t
h
i
s
 
m
e
t
h
o
d
 
w
i
l
l
 
r
e
t
u
r
n
 
a
l
l
 
t
a
r
i
f
f
s
 
f
o
r
 
t
h
a
t
 
r
o
o
m
 
u
i
d
'
s
 
c
l
a
s
s
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
T
a
r
i
f
f
s
F
o
r
R
o
o
m
U
i
d
B
y
C
l
a
s
s
(
$
r
o
o
m
_
u
i
d
)

	
{

	
	
$
r
e
s
u
l
t
 
=
 
a
r
r
a
y
(
)
;


	
	
i
f
 
(
i
s
s
e
t
(
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
R
o
o
m
s
[
 
$
r
o
o
m
_
u
i
d
 
]
[
 
'
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
'
 
]
)
)
 
{

	
	
	
$
r
o
o
m
T
y
p
e
 
=
 
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
R
o
o
m
s
[
 
$
r
o
o
m
_
u
i
d
 
]
[
 
'
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
'
 
]
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
r
o
o
m
T
y
p
e
 
=
 
0
;

	
	
}

	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
g
e
t
T
a
r
i
f
f
s
F
o
r
R
o
o
m
U
i
d
B
y
C
l
a
s
s
:
:
a
l
l
P
r
o
p
e
r
t
y
R
o
o
m
s
 
"
.
s
e
r
i
a
l
i
z
e
(
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
R
o
o
m
s
[
$
r
o
o
m
_
u
i
d
]
)
)
;

	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
g
e
t
T
a
r
i
f
f
s
F
o
r
R
o
o
m
U
i
d
B
y
C
l
a
s
s
:
:
a
l
l
P
r
o
p
e
r
t
y
T
a
r
i
f
f
s
 
"
.
s
e
r
i
a
l
i
z
e
(
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
T
a
r
i
f
f
s
)
)
;

	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
T
a
r
i
f
f
s
 
a
s
 
$
t
)
 
{

	
	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
g
e
t
T
a
r
i
f
f
s
F
o
r
R
o
o
m
U
i
d
B
y
C
l
a
s
s
:
:
t
[
'
r
o
o
m
c
l
a
s
s
_
u
i
d
'
]
 
"
.
$
t
[
'
r
o
o
m
c
l
a
s
s
_
u
i
d
'
]
)
;

	
	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
g
e
t
T
a
r
i
f
f
s
F
o
r
R
o
o
m
U
i
d
B
y
C
l
a
s
s
:
:
r
o
o
m
T
y
p
e
 
"
.
$
r
o
o
m
T
y
p
e
)
;

	
	
	
i
f
 
(
$
t
[
 
'
r
o
o
m
c
l
a
s
s
_
u
i
d
'
 
]
 
=
=
 
$
r
o
o
m
T
y
p
e
)
 
{

	
	
	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
g
e
t
T
a
r
i
f
f
s
F
o
r
R
o
o
m
U
i
d
B
y
C
l
a
s
s
:
:
a
l
l
P
r
o
p
e
r
t
y
R
o
o
m
s
 
"
.
s
e
r
i
a
l
i
z
e
(
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
R
o
o
m
s
[
$
r
o
o
m
_
u
i
d
]
)
)
;

	
	
	
	
$
r
e
s
u
l
t
[
 
]
 
=
 
$
t
h
i
s
-
>
c
o
n
v
e
r
t
A
r
r
a
y
T
o
O
b
j
e
c
t
(
$
t
)
;

	
	
	
}

	
	
}


	
	
r
e
t
u
r
n
 
$
r
e
s
u
l
t
;

	
}


	
/
*
*

	
 
*
 
P
a
s
s
 
a
 
r
o
o
m
C
l
a
s
s
 
u
i
d
,
 
t
h
i
s
 
m
e
t
h
o
d
 
w
i
l
l
 
r
e
t
u
r
n
 
a
l
l
 
t
a
r
i
f
f
s
 
f
o
r
 
t
h
a
t
 
c
l
a
s
s
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
T
a
r
i
f
f
s
F
o
r
R
o
o
m
C
l
a
s
s
(
$
r
o
o
m
C
l
a
s
s
)

	
{

	
	
$
r
e
s
u
l
t
 
=
 
a
r
r
a
y
(
)
;

	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
T
a
r
i
f
f
s
 
a
s
 
$
t
)
 
{

	
	
	
i
f
 
(
$
t
[
 
'
r
o
o
m
c
l
a
s
s
_
u
i
d
'
 
]
 
=
=
 
$
r
o
o
m
C
l
a
s
s
)
 
{

	
	
	
	
$
r
e
s
u
l
t
[
 
]
 
=
 
$
t
h
i
s
-
>
c
o
n
v
e
r
t
A
r
r
a
y
T
o
O
b
j
e
c
t
(
$
t
)
;

	
	
	
}

	
	
}


	
	
r
e
t
u
r
n
 
$
r
e
s
u
l
t
;

	
}


	
/
*
*

	
 
*
 
F
i
n
d
 
a
n
y
 
t
a
r
i
f
f
s
 
t
h
a
t
 
a
r
e
 
v
a
l
i
d
 
f
o
r
 
t
h
e
 
a
v
a
i
l
a
b
l
e
 
r
o
o
m
s

	
 
*
 
F
i
n
d
s
 
a
l
l
 
t
a
r
i
f
f
s
 
f
o
r
 
a
 
g
i
v
e
n
 
r
o
o
m
 
t
y
p
e

	
 
*
 
C
h
e
c
k
s
 
t
h
a
t
 
a
r
r
i
v
a
l
 
a
n
d
 
d
e
p
a
r
t
u
r
e
 
d
a
t
e
s
 
f
a
l
l
 
b
e
t
w
e
e
n
 
t
h
e
 
v
a
l
i
d
 
f
r
o
m
 
-
>
 
t
o
 
d
a
t
e
s

	
 
*
 
C
h
e
c
k
s
 
t
h
a
t
 
m
i
n
 
&
 
m
a
x
 
d
a
y
s
 
o
f
 
t
h
e
 
b
o
o
k
i
n
g
 
(
s
t
a
y
D
a
y
s
)
 
a
r
e
 
a
p
p
l
i
c
a
b
l
e

	
 
*
 
C
h
e
c
k
s
 
t
h
a
t
 
t
h
e
 
m
i
n
 
&
 
m
a
x
 
p
e
o
p
l
e
 
i
n
 
t
h
e
 
p
a
r
t
y
 
d
o
 
a
r
e
 
a
p
p
l
i
c
a
b
l
e
 
t
o
 
t
h
e
 
t
a
r
i
f
f

	
 
*
 
C
h
e
c
k
s
 
t
o
 
s
e
e
 
i
f
 
t
h
e
 
t
a
r
i
f
f
 
a
l
l
o
w
s
 
b
o
o
k
i
n
g
s
 
t
h
a
t
 
i
n
c
l
u
d
e
 
w
e
e
k
e
n
d
s
 
i
f
 
t
h
e
 
d
a
t
e
 
r
a
n
g
e
 
i
n
c
l
u
d
e
s
 
a
 
w
e
e
k
e
n
d
 
d
a
y

	
 
*
 
R
e
t
u
r
n
s
 
a
n
 
a
r
r
a
y
 
$
r
o
o
m
A
n
d
T
a
r
i
f
f
A
r
r
a
y
 
w
h
i
c
h
 
i
s
 
a
 
m
u
l
t
i
-
d
i
m
e
n
s
i
o
n
a
l
 
a
r
r
a
y
 
o
f
 
r
o
o
m
s
 
a
n
d
 
t
a
r
i
f
f
s
 
t
h
a
t
 
c
a
n
 
b
e
 
a
p
p
l
i
e
d
 
t
o
 
t
h
e
 
r
o
o
m
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
T
a
r
i
f
f
s
F
o
r
R
o
o
m
U
i
d
s
(
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
)

	
{

	
	
$
m
r
C
o
n
f
i
g
 
=
 
$
t
h
i
s
-
>
m
r
C
o
n
f
i
g
;

	
	
$
t
h
i
s
-
>
b
u
i
l
d
_
t
a
r
i
f
f
_
t
o
_
d
a
t
e
_
m
a
p
(
)
;

	
	
$
r
o
o
m
A
n
d
T
a
r
i
f
f
A
r
r
a
y
 
=
 
a
r
r
a
y
(
)
;

	
	
$
a
l
r
e
a
d
y
_
f
o
u
n
d
_
t
a
r
i
f
f
s
 
=
 
a
r
r
a
y
(
)
;

	
	
$
t
h
i
s
-
>
t
a
r
i
f
f
_
t
y
p
e
s
_
m
i
n
_
d
a
y
s
 
=
 
a
r
r
a
y
(
)
;

	
	
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
t
h
i
s
-
>
d
a
t
e
R
a
n
g
e
S
t
r
i
n
g
)
;

	
	
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
_
c
o
u
n
t
 
=
 
c
o
u
n
t
(
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
)
;

	
	
$
f
i
l
t
e
r
e
d
_
o
u
t
_
t
y
p
e
_
t
y
p
e
_
i
d
s
 
=
 
a
r
r
a
y
(
)
;

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
g
e
t
T
a
r
i
f
f
s
F
o
r
R
o
o
m
U
i
d
s
:
:
 
t
a
r
i
f
f
 
m
a
p
 
'
.
s
e
r
i
a
l
i
z
e
(
$
t
h
i
s
-
>
m
i
c
r
o
m
a
n
a
g
e
_
t
a
r
i
f
f
t
y
p
e
_
t
o
_
d
a
t
e
_
m
a
p
)
)
;

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
'
)
;

	
	
i
f
 
(
!
e
m
p
t
y
(
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
)
 
&
&
 
i
s
_
a
r
r
a
y
(
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
)
)
 
{

	
	
	
$
u
n
i
x
A
r
r
i
v
a
l
D
a
t
e
 
=
 
$
t
h
i
s
-
>
g
e
t
M
k
T
i
m
e
(
$
t
h
i
s
-
>
a
r
r
i
v
a
l
D
a
t
e
)
;

	
	
	
$
u
n
i
x
D
e
p
a
r
t
u
r
e
D
a
t
e
 
=
 
$
t
h
i
s
-
>
g
e
t
M
k
T
i
m
e
(
$
t
h
i
s
-
>
d
e
p
a
r
t
u
r
e
D
a
t
e
)
;


	
	
	
f
o
r
e
a
c
h
 
(
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
 
a
s
 
$
r
o
o
m
_
u
i
d
)
 
{

	
	
	
	
$
r
a
t
e
D
e
e
t
s
 
=
 
$
t
h
i
s
-
>
g
e
t
T
a
r
i
f
f
s
F
o
r
R
o
o
m
U
i
d
B
y
C
l
a
s
s
(
$
r
o
o
m
_
u
i
d
)
;

	
	
	
	
f
o
r
e
a
c
h
 
(
$
r
a
t
e
D
e
e
t
s
 
a
s
 
$
t
a
r
i
f
f
)
 
{

	
	
	
	
	
$
d
a
t
e
s
V
a
l
i
d
 
=
 
$
t
h
i
s
-
>
f
i
l
t
e
r
_
t
a
r
i
f
f
s
_
o
n
_
d
a
t
e
s
(
$
t
a
r
i
f
f
,
 
$
u
n
i
x
A
r
r
i
v
a
l
D
a
t
e
,
 
$
u
n
i
x
D
e
p
a
r
t
u
r
e
D
a
t
e
)
;
 
/
/
 
D
o
e
s
 
t
h
e
 
t
a
r
i
f
f
'
s
 
f
r
o
m
/
t
o
 
d
a
t
e
s
 
f
a
l
l
 
w
i
t
h
i
n
 
t
h
e
 
b
o
o
k
i
n
g
'
s
 
d
a
t
e
s
?
 
T
h
e
r
e
 
w
i
l
l
 
b
e
 
s
o
m
e
 
o
v
e
r
l
a
p
 
h
e
r
e
 
i
f
 
w
e
 
u
s
e
 
A
d
v
a
n
c
e
d
 
o
r
 
M
i
c
r
o
m
a
n
a
g
e
 
m
o
d
e
.
 
T
h
a
t
'
s
 
w
h
e
r
e
 
t
h
e
 
t
a
r
i
f
f
_
t
o
_
d
a
t
e
_
m
a
p
 
w
i
l
l
 
c
o
m
e
 
i
n
t
o
 
p
l
a
y

	
	
	
	
	
$
s
t
a
y
D
a
y
s
V
a
l
i
d
 
=
 
$
t
h
i
s
-
>
f
i
l
t
e
r
_
t
a
r
i
f
f
s
_
s
t
a
y
d
a
y
s
(
$
t
a
r
i
f
f
)
;
 
/
/
 
T
h
i
s
 
w
i
l
l
 
a
l
s
o
 
u
s
e
 
t
h
e
 
m
a
p
,
 
i
t
'
l
l
 
h
e
l
p
 
t
o
 
c
a
l
c
u
l
a
t
e
 
a
l
s
o
 
t
h
e
 
m
i
n
i
m
u
m
 
i
n
t
e
r
v
a
l

	
	
	
	
	
$
r
o
o
m
s
A
l
r
e
a
d
y
S
e
l
e
c
t
e
d
T
e
s
t
s
 
=
 
$
t
h
i
s
-
>
f
i
l
t
e
r
_
t
a
r
i
f
f
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
d
c
h
e
c
k
(
$
t
a
r
i
f
f
)
;
 
/
/
 
I
f
 
t
h
e
 
t
a
r
i
f
f
 
c
a
n
 
o
n
l
y
 
b
e
 
s
e
l
e
c
t
e
d
 
w
h
e
n
 
N
 
n
u
m
b
e
r
 
o
f
 
r
o
o
m
s
 
h
a
v
e
 
a
l
r
e
a
d
y
 
b
e
e
n
 
s
e
l
e
c
t
e
d
?

	
	
	
	
	
$
n
u
m
b
e
r
P
e
o
p
l
e
V
a
l
i
d
 
=
 
$
t
h
i
s
-
>
f
i
l
t
e
r
_
t
a
r
i
f
f
s
_
p
e
o
p
l
e
n
u
m
b
e
r
c
h
e
c
k
(
$
t
a
r
i
f
f
)
;
 
/
/
 
I
f
 
t
h
e
 
t
o
t
a
l
 
n
u
m
b
e
r
 
o
f
 
p
e
o
p
l
e
 
i
n
 
t
h
e
 
b
o
o
k
i
n
g
 
f
a
l
l
 
w
i
t
h
i
n
 
t
h
e
 
t
a
r
i
f
f
'
s
 
m
i
n
/
m
a
x
 
p
e
o
p
l
e
 
r
a
n
g
e
?

	
	
	
	
	
$
d
o
w
C
h
e
c
k
 
=
 
$
t
h
i
s
-
>
f
i
l
t
e
r
_
t
a
r
i
f
f
s
_
d
o
w
c
h
e
c
k
(
$
t
a
r
i
f
f
)
;
 
/
/
 
D
o
e
s
 
t
h
e
 
t
a
r
i
f
f
 
a
l
l
o
w
 
s
e
l
e
c
t
i
o
n
s
 
o
n
 
t
h
e
 
a
r
r
i
v
a
l
 
d
a
t
e
'
s
 
d
a
y
 
o
f
 
w
e
e
k
?


	
	
	
	
	
$
r
a
t
e
s
_
u
i
d
 
=
 
$
t
a
r
i
f
f
-
>
r
a
t
e
s
_
u
i
d
;

	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
g
e
t
T
a
r
i
f
f
s
F
o
r
R
o
o
m
U
i
d
s
:
:
 
C
h
e
c
k
i
n
g
 
t
a
r
i
f
f
 
i
d
 
'
.
$
r
a
t
e
s
_
u
i
d
.
'
 
'
)
;

	
	
	
	
	
i
f
 
(
$
d
a
t
e
s
V
a
l
i
d
 
&
&
 
$
s
t
a
y
D
a
y
s
V
a
l
i
d
 
&
&
 
$
n
u
m
b
e
r
P
e
o
p
l
e
V
a
l
i
d
 
&
&
 
$
d
o
w
C
h
e
c
k
 
&
&
 
$
r
o
o
m
s
A
l
r
e
a
d
y
S
e
l
e
c
t
e
d
T
e
s
t
s
)
 
{

	
	
	
	
	
	
$
t
a
r
i
f
f
_
t
y
p
e
_
i
d
 
=
 
0
;

	
	
	
	
	
	
i
f
 
(
i
s
s
e
t
(
$
t
h
i
s
-
>
a
l
l
_
t
a
r
i
f
f
_
i
d
_
t
o
_
t
a
r
i
f
f
_
t
y
p
e
_
x
r
e
f
[
 
$
r
a
t
e
s
_
u
i
d
 
]
[
 
0
 
]
)
)
 
{

	
	
	
	
	
	
	
$
t
a
r
i
f
f
_
t
y
p
e
_
i
d
 
=
 
$
t
h
i
s
-
>
a
l
l
_
t
a
r
i
f
f
_
i
d
_
t
o
_
t
a
r
i
f
f
_
t
y
p
e
_
x
r
e
f
[
 
$
r
a
t
e
s
_
u
i
d
 
]
[
 
0
 
]
;

	
	
	
	
	
	
}

	
	
	
	
	
	
i
f
 
(
!
i
s
s
e
t
(
$
a
l
r
e
a
d
y
_
f
o
u
n
d
_
t
a
r
i
f
f
s
[
 
$
t
a
r
i
f
f
_
t
y
p
e
_
i
d
.
'
 
'
.
$
r
o
o
m
_
u
i
d
 
]
)
 
&
&
 
!
i
n
_
a
r
r
a
y
(
$
t
a
r
i
f
f
_
t
y
p
e
_
i
d
,
 
$
f
i
l
t
e
r
e
d
_
o
u
t
_
t
y
p
e
_
t
y
p
e
_
i
d
s
)
)
 
{

	
	
	
	
	
	
	
$
p
a
s
s
_
p
r
i
c
e
_
c
h
e
c
k
 
=
 
t
r
u
e
;

	
	
	
	
	
	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
t
a
r
i
f
f
m
o
d
e
'
 
]
 
=
=
 
'
2
'
)
 
{
 
/
/
 
I
f
 
t
a
r
i
f
f
m
o
d
e
 
=
 
2
,
 
w
e
 
n
e
e
d
 
t
o
 
f
i
n
a
l
l
y
 
s
c
a
n
 
$
t
h
i
s
-
>
m
i
c
r
o
m
a
n
a
g
e
_
t
a
r
i
f
f
t
y
p
e
_
t
o
_
d
a
t
e
_
m
a
p
,
 
t
o
 
e
n
s
u
r
e
 
t
h
a
t
 
a
l
l
 
d
a
t
e
s
 
h
a
v
e
 
a
 
p
r
i
c
e
 
s
e
t

	
	
	
	
	
	
	
	
i
f
 
(
e
m
p
t
y
(
$
t
h
i
s
-
>
m
i
c
r
o
m
a
n
a
g
e
_
t
a
r
i
f
f
t
y
p
e
_
t
o
_
d
a
t
e
_
m
a
p
)
)
 
{

	
	
	
	
	
	
	
	
	
$
p
a
s
s
_
p
r
i
c
e
_
c
h
e
c
k
 
=
 
f
a
l
s
e
;

	
	
	
	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
	
	
	
/
/
$
t
h
i
s
-
>
s
e
t
P
o
p
u
p
M
e
s
s
a
g
e
(
 
s
t
r
_
r
e
p
l
a
c
e
(
"
;
"
,
 
"
 
"
 
,
s
e
r
i
a
l
i
z
e
(
 
$
t
h
i
s
-
>
m
i
c
r
o
m
a
n
a
g
e
_
t
a
r
i
f
f
t
y
p
e
_
t
o
_
d
a
t
e
_
m
a
p
[
$
t
a
r
i
f
f
_
t
y
p
e
_
i
d
]
 
)
 
)
 
)
;

	
	
	
	
	
	
	
	
	
$
m
a
p
_
c
o
u
n
t
 
=
 
c
o
u
n
t
(
$
t
h
i
s
-
>
m
i
c
r
o
m
a
n
a
g
e
_
t
a
r
i
f
f
t
y
p
e
_
t
o
_
d
a
t
e
_
m
a
p
[
 
$
t
a
r
i
f
f
_
t
y
p
e
_
i
d
 
]
)
;

	
	
	
	
	
	
	
	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
m
i
c
r
o
m
a
n
a
g
e
_
t
a
r
i
f
f
t
y
p
e
_
t
o
_
d
a
t
e
_
m
a
p
[
 
$
t
a
r
i
f
f
_
t
y
p
e
_
i
d
 
]
 
a
s
 
$
d
a
t
e
s
)
 
{

	
	
	
	
	
	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
g
e
t
T
a
r
i
f
f
s
F
o
r
R
o
o
m
U
i
d
s
:
:
 
C
o
u
n
t
 
d
a
t
e
s
 
'
.
$
m
a
p
_
c
o
u
n
t
.
'
 
C
o
u
n
t
 
d
a
t
e
r
a
n
g
e
 
a
r
r
a
y
 
'
.
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
_
c
o
u
n
t
.
'
 
'
)
;

	
	
	
	
	
	
	
	
	
	
i
f
 
(
$
m
a
p
_
c
o
u
n
t
 
!
=
 
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
_
c
o
u
n
t
)
 
{
 
/
/
 
T
h
e
r
e
 
a
r
e
 
m
o
r
e
 
d
a
t
e
s
 
i
n
 
t
h
e
 
d
a
t
e
 
r
a
n
g
e
 
a
r
r
a
y
 
t
h
a
n
 
t
h
e
r
e
 
a
r
e
 
v
a
l
i
d
 
t
a
r
i
f
f
s
.
 
T
h
i
s
 
m
e
a
n
s
 
t
h
a
t
 
d
u
r
i
n
g
 
t
h
e
 
m
a
p
 
b
u
i
l
d
i
n
g
 
p
h
a
s
e
 
w
e
 
p
a
s
s
e
d
 
t
h
e
 
d
a
t
e
 
o
f
 
t
h
e
 
l
a
s
t
 
t
a
r
i
f
f
 
f
o
u
n
d

	
	
	
	
	
	
	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
g
e
t
T
a
r
i
f
f
s
F
o
r
R
o
o
m
U
i
d
s
:
:
 
t
a
r
i
f
f
 
m
a
p
 
c
o
u
n
t
 
!
=
 
d
a
t
e
s
 
c
o
u
n
t
 
'
)
;

	
	
	
	
	
	
	
	
	
	
	
$
p
a
s
s
_
p
r
i
c
e
_
c
h
e
c
k
 
=
 
f
a
l
s
e
;

	
	
	
	
	
	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
	
	
	
	
	
i
f
 
(
(
f
l
o
a
t
)
 
$
d
a
t
e
s
[
 
'
p
r
i
c
e
'
 
]
 
=
=
 
0
 
&
&
 
$
d
a
t
e
s
[
 
'
t
a
r
i
f
f
_
t
y
p
e
_
i
d
'
 
]
 
=
=
 
$
t
a
r
i
f
f
_
t
y
p
e
_
i
d
)
 
{

	
	
	
	
	
	
	
	
	
	
	
	
$
p
a
s
s
_
p
r
i
c
e
_
c
h
e
c
k
 
=
 
f
a
l
s
e
;

	
	
	
	
	
	
	
	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
g
e
t
T
a
r
i
f
f
s
F
o
r
R
o
o
m
U
i
d
s
:
:
 
R
e
m
o
v
i
n
g
 
a
 
t
a
r
i
f
f
 
a
s
 
a
t
 
l
e
a
s
t
 
o
n
e
 
o
t
h
e
r
 
t
a
r
i
f
f
 
i
n
 
t
h
e
 
s
e
r
i
e
s
 
i
s
 
s
e
t
 
t
o
 
0
.
 
T
a
r
i
f
f
 
t
y
p
e
 
i
d
 
=
 
'
.
$
t
a
r
i
f
f
_
t
y
p
e
_
i
d
)
;

	
	
	
	
	
	
	
	
	
	
	
	
$
f
i
l
t
e
r
e
d
_
o
u
t
_
t
y
p
e
_
t
y
p
e
_
i
d
s
[
 
]
 
=
 
$
t
a
r
i
f
f
_
t
y
p
e
_
i
d
;

	
	
	
	
	
	
	
	
	
	
	
}

	
	
	
	
	
	
	
	
	
	
}

	
	
	
	
	
	
	
	
	
}

	
	
	
	
	
	
	
	
}

	
	
	
	
	
	
	
}


	
	
	
	
	
	
	
i
f
 
(
$
p
a
s
s
_
p
r
i
c
e
_
c
h
e
c
k
)
 
{

	
	
	
	
	
	
	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
t
a
r
i
f
f
m
o
d
e
'
 
]
 
=
=
 
'
2
'
)
 
{

	
	
	
	
	
	
	
	
	
$
a
l
r
e
a
d
y
_
f
o
u
n
d
_
t
a
r
i
f
f
s
[
 
$
t
a
r
i
f
f
_
t
y
p
e
_
i
d
.
'
 
'
.
$
r
o
o
m
_
u
i
d
 
]
 
=
 
1
;

	
	
	
	
	
	
	
	
}
 
/
/
 
W
i
t
h
o
u
t
 
t
h
i
s
 
t
h
e
r
e
 
w
i
l
l
 
b
e
 
d
u
p
l
i
c
a
t
e
s
 
r
e
t
u
r
n
e
d
 
t
o
 
t
h
e
 
r
o
o
m
s
 
l
i
s
t
 
i
n
 
t
h
e
 
b
o
o
k
i
n
g
 
f
o
r
m

	
	
	
	
	
	
	
	
$
r
o
o
m
A
n
d
T
a
r
i
f
f
A
r
r
a
y
[
 
]
 
=
 
a
r
r
a
y
(
$
r
o
o
m
_
u
i
d
,
 
$
r
a
t
e
s
_
u
i
d
)
;

	
	
	
	
	
	
	
}

	
	
	
	
	
	
}

	
	
	
	
	
}
 
e
l
s
e
i
f
 
(
$
d
a
t
e
s
V
a
l
i
d
 
&
&
 
!
$
s
t
a
y
D
a
y
s
V
a
l
i
d
 
&
&
 
$
n
u
m
b
e
r
P
e
o
p
l
e
V
a
l
i
d
 
&
&
 
$
d
o
w
C
h
e
c
k
 
&
&
 
$
r
o
o
m
s
A
l
r
e
a
d
y
S
e
l
e
c
t
e
d
T
e
s
t
s
 
&
&
 
$
m
r
C
o
n
f
i
g
[
 
'
t
a
r
i
f
f
m
o
d
e
'
 
]
 
=
=
 
'
1
'
)
 
{
 
/
/
 
E
v
e
r
y
t
h
i
n
g
 
p
a
s
s
e
d
 
e
x
c
e
p
t
 
t
h
e
 
n
u
m
b
e
r
 
o
f
 
d
a
y
s
 
i
n
 
t
h
e
 
b
o
o
k
i
n
g

	
	
	
	
	
	
$
m
i
n
d
a
y
s
 
=
 
$
t
h
i
s
-
>
s
i
m
p
l
e
_
t
a
r
i
f
f
_
t
o
_
d
a
t
e
_
m
a
p
[
 
$
r
a
t
e
s
_
u
i
d
 
]
[
 
'
m
i
n
d
a
y
s
'
 
]
;

	
	
	
	
	
	
i
f
 
(
$
m
i
n
d
a
y
s
 
<
 
$
t
h
i
s
-
>
m
i
n
i
n
t
e
r
v
a
l
)
 
{

	
	
	
	
	
	
	
$
t
h
i
s
-
>
m
i
n
i
n
t
e
r
v
a
l
 
=
 
$
m
i
n
d
a
y
s
;

	
	
	
	
	
	
}

	
	
	
	
	
}

	
	
	
	
}

	
	
	
}

	
	
}
 
e
l
s
e
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
g
e
t
T
a
r
i
f
f
s
F
o
r
R
o
o
m
U
i
d
s
:
:
c
o
u
n
t
(
f
r
e
e
R
o
o
m
s
A
r
r
a
y
)
 
=
 
0
'
)
;

	
	
}

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
'
)
;


	
	
i
f
 
(
e
m
p
t
y
(
$
r
o
o
m
A
n
d
T
a
r
i
f
f
A
r
r
a
y
)
 
&
&
 
$
m
r
C
o
n
f
i
g
[
 
'
t
a
r
i
f
f
m
o
d
e
'
 
]
 
=
=
 
'
2
'
)
 
{

	
	
	
i
f
 
(
!
e
m
p
t
y
(
$
t
h
i
s
-
>
t
a
r
i
f
f
_
t
y
p
e
s
_
m
i
n
_
d
a
y
s
)
)
 
{

	
	
	
	
$
t
h
i
s
-
>
m
i
n
i
n
t
e
r
v
a
l
 
=
 
1
0
0
0
;
 
/
/
 
W
e
 
M
U
S
T
 
r
e
s
e
t
 
t
h
e
 
m
i
n
i
m
u
m
 
i
n
t
e
r
v
a
l
 
h
e
r
e
,
 
a
s
 
i
t
'
s
 
g
o
i
n
g
 
t
o
 
b
e
 
r
e
c
a
l
c
u
l
a
t
e
d
.

	
	
	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
t
a
r
i
f
f
_
t
y
p
e
s
_
m
i
n
_
d
a
y
s
 
a
s
 
$
m
i
n
d
a
y
s
)
 
{

	
	
	
	
	
i
f
 
(
$
m
i
n
d
a
y
s
 
<
 
$
t
h
i
s
-
>
m
i
n
i
n
t
e
r
v
a
l
)
 
{

	
	
	
	
	
	
$
t
h
i
s
-
>
m
i
n
i
n
t
e
r
v
a
l
 
=
 
$
m
i
n
d
a
y
s
;

	
	
	
	
	
}

	
	
	
	
}

	
	
	
}

	
	
}


	
	
r
e
t
u
r
n
 
$
r
o
o
m
A
n
d
T
a
r
i
f
f
A
r
r
a
y
;

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
f
i
l
t
e
r
_
t
a
r
i
f
f
s
_
s
t
a
y
d
a
y
s
(
$
t
a
r
i
f
f
)

	
{

	
	
$
m
r
C
o
n
f
i
g
 
=
 
$
t
h
i
s
-
>
m
r
C
o
n
f
i
g
;

	
	
$
s
t
a
y
D
a
y
s
 
=
 
$
t
h
i
s
-
>
g
e
t
S
t
a
y
D
a
y
s
(
)
;

	
	
$
s
t
a
y
D
a
y
s
V
a
l
i
d
 
=
 
f
a
l
s
e
;


	
	
$
m
a
x
d
a
y
s
 
=
 
$
t
a
r
i
f
f
-
>
m
a
x
d
a
y
s
;


	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
t
a
r
i
f
f
m
o
d
e
'
 
]
 
=
=
 
'
2
'
)
 
{

	
	
	
/
/
 
W
e
'
v
e
 
b
e
e
n
 
p
a
s
s
e
d
 
t
h
e
 
t
a
r
i
f
f
,
 
w
e
 
n
o
w
 
n
e
e
d
 
t
o
 
f
i
n
d
 
t
h
e
 
t
a
r
i
f
f
 
t
y
p
e
 
f
o
r
 
t
h
i
s
 
t
a
r
i
f
f
,
 
t
h
e
n
 
f
i
n
d
 
a
l
l
 
r
e
l
a
t
e
d
 
t
a
r
i
f
f
s

	
	
	
$
t
a
r
i
f
f
_
t
y
p
e
_
i
d
 
=
 
$
t
h
i
s
-
>
a
l
l
_
t
a
r
i
f
f
_
i
d
_
t
o
_
t
a
r
i
f
f
_
t
y
p
e
_
x
r
e
f
[
 
$
t
a
r
i
f
f
-
>
r
a
t
e
s
_
u
i
d
 
]
[
 
0
 
]
;

	
	
	
$
a
l
l
_
a
s
s
o
c
i
a
t
e
d
_
t
a
r
i
f
f
_
i
d
s
 
=
 
$
t
h
i
s
-
>
a
l
l
_
t
a
r
i
f
f
_
t
y
p
e
s
_
t
o
_
t
a
r
i
f
f
_
i
d
_
x
r
e
f
[
 
$
t
a
r
i
f
f
_
t
y
p
e
_
i
d
 
]
;


	
	
	
$
m
i
n
d
a
y
s
 
=
 
1
;

	
	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
m
i
c
r
o
m
a
n
a
g
e
_
t
a
r
i
f
f
t
y
p
e
_
t
o
_
d
a
t
e
_
m
a
p
 
a
s
 
$
d
a
t
e
s
)
 
{

	
	
	
	
f
o
r
e
a
c
h
 
(
$
d
a
t
e
s
 
a
s
 
$
d
)
 
{

	
	
	
	
	
i
f
 
(
$
d
[
 
'
t
a
r
i
f
f
_
t
y
p
e
_
i
d
'
 
]
 
=
=
 
$
t
a
r
i
f
f
_
t
y
p
e
_
i
d
)
 
{

	
	
	
	
	
	
i
f
 
(
(
i
n
t
)
 
$
d
[
 
'
m
i
n
d
a
y
s
'
 
]
 
>
 
$
m
i
n
d
a
y
s
)
 
{

	
	
	
	
	
	
	
$
t
h
i
s
-
>
t
a
r
i
f
f
_
t
y
p
e
s
_
m
i
n
_
d
a
y
s
[
 
$
t
a
r
i
f
f
_
t
y
p
e
_
i
d
 
]
 
=
 
(
i
n
t
)
 
$
d
[
 
'
m
i
n
d
a
y
s
'
 
]
;

	
	
	
	
	
	
	
$
m
i
n
d
a
y
s
 
=
 
(
i
n
t
)
 
$
d
[
 
'
m
i
n
d
a
y
s
'
 
]
;

	
	
	
	
	
	
}

	
	
	
	
	
}

	
	
	
	
}

	
	
	
}


	
	
	
i
f
 
(
$
m
i
n
d
a
y
s
 
<
 
$
t
h
i
s
-
>
m
i
n
i
n
t
e
r
v
a
l
)
 
{

	
	
	
	
$
t
h
i
s
-
>
m
i
n
i
n
t
e
r
v
a
l
 
=
 
$
m
i
n
d
a
y
s
;

	
	
	
}


	
	
	
i
f
 
(
$
s
t
a
y
D
a
y
s
 
>
=
 
$
m
i
n
d
a
y
s
 
&
&
 
$
s
t
a
y
D
a
y
s
 
<
=
 
$
m
a
x
d
a
y
s
)
 
{

	
	
	
	
$
s
t
a
y
D
a
y
s
V
a
l
i
d
 
=
 
t
r
u
e
;

	
	
	
}

	
	
}
 
e
l
s
e
 
{

	
	
	
$
m
i
n
d
a
y
s
 
=
 
$
t
a
r
i
f
f
-
>
m
i
n
d
a
y
s
;

	
	
	
i
f
 
(
$
s
t
a
y
D
a
y
s
 
>
=
 
$
m
i
n
d
a
y
s
 
&
&
 
$
s
t
a
y
D
a
y
s
 
<
=
 
$
m
a
x
d
a
y
s
)
 
{

	
	
	
	
$
s
t
a
y
D
a
y
s
V
a
l
i
d
 
=
 
t
r
u
e
;

	
	
	
}

	
	
}

	
	
i
f
 
(
!
$
s
t
a
y
D
a
y
s
V
a
l
i
d
)
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
f
i
l
t
e
r
_
t
a
r
i
f
f
s
_
s
t
a
y
d
a
y
s
:
:
 
S
t
a
y
 
d
a
y
s
 
n
o
t
 
v
a
l
i
d
 
f
o
r
 
t
a
r
i
f
f
 
u
i
d
 
'
.
$
t
a
r
i
f
f
-
>
r
a
t
e
s
_
u
i
d
)
;

	
	
}


	
	
r
e
t
u
r
n
 
$
s
t
a
y
D
a
y
s
V
a
l
i
d
;

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
f
i
l
t
e
r
_
t
a
r
i
f
f
s
_
o
n
_
d
a
t
e
s
(
$
t
a
r
i
f
f
,
 
$
u
n
i
x
A
r
r
i
v
a
l
D
a
t
e
,
 
$
u
n
i
x
D
e
p
a
r
t
u
r
e
D
a
t
e
)

	
{

	
	
$
m
r
C
o
n
f
i
g
 
=
 
$
t
h
i
s
-
>
m
r
C
o
n
f
i
g
;

	
	
$
v
a
l
i
d
F
r
o
m
 
=
 
$
t
a
r
i
f
f
-
>
v
a
l
i
d
f
r
o
m
;

	
	
$
v
a
l
i
d
T
o
 
=
 
$
t
a
r
i
f
f
-
>
v
a
l
i
d
t
o
;


	
	
$
u
n
i
x
V
a
l
i
d
F
r
o
m
D
a
t
e
 
=
 
$
t
h
i
s
-
>
g
e
t
M
k
T
i
m
e
(
$
v
a
l
i
d
F
r
o
m
)
;

	
	
$
u
n
i
x
V
a
l
i
d
T
o
D
a
t
e
 
=
 
$
t
h
i
s
-
>
g
e
t
M
k
T
i
m
e
(
$
v
a
l
i
d
T
o
)
;


	
	
$
m
i
n
d
a
y
s
 
=
 
$
t
a
r
i
f
f
-
>
m
i
n
d
a
y
s
;

	
	
$
m
a
x
d
a
y
s
 
=
 
$
t
a
r
i
f
f
-
>
m
a
x
d
a
y
s
;


	
	
$
d
a
t
e
s
V
a
l
i
d
 
=
 
f
a
l
s
e
;

	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
t
a
r
i
f
f
m
o
d
e
'
 
]
 
=
=
 
'
2
'
)
 
{
 
/
/
 
T
h
i
s
 
i
s
 
r
e
a
l
l
y
 
a
 
c
u
r
s
o
r
y
 
c
h
e
c
k
.
 
M
o
s
t
 
o
f
 
t
h
e
 
t
i
m
e
 
t
h
e
r
e
 
w
i
l
l
 
b
e
/
s
h
o
u
l
d
 
b
e
 
p
r
i
c
e
s
 
c
o
v
e
r
i
n
g
 
e
v
e
r
y
 
d
a
y
 
i
n
 
t
h
e
 
p
e
r
i
o
d
 
i
n
 
q
u
e
s
t
i
o
n
,
 
b
u
t
 
i
f
 
n
o
t
 
w
e
'
l
l
 
f
i
n
d
 
o
u
t
 
h
e
r
e

	
	
	
$
t
a
r
i
f
f
_
t
y
p
e
_
i
d
 
=
 
$
t
h
i
s
-
>
a
l
l
_
t
a
r
i
f
f
_
i
d
_
t
o
_
t
a
r
i
f
f
_
t
y
p
e
_
x
r
e
f
[
 
$
t
a
r
i
f
f
-
>
r
a
t
e
s
_
u
i
d
 
]
[
 
0
 
]
;

	
	
	
$
a
l
l
_
a
s
s
o
c
i
a
t
e
d
_
t
a
r
i
f
f
_
i
d
s
 
=
 
$
t
h
i
s
-
>
a
l
l
_
t
a
r
i
f
f
_
t
y
p
e
s
_
t
o
_
t
a
r
i
f
f
_
i
d
_
x
r
e
f
[
 
$
t
a
r
i
f
f
_
t
y
p
e
_
i
d
 
]
;

	
	
	
$
s
t
a
y
D
a
y
s
 
=
 
$
t
h
i
s
-
>
g
e
t
S
t
a
y
D
a
y
s
(
)
;

	
	
	
$
d
a
t
e
s
V
a
l
i
d
 
=
 
t
r
u
e
;

	
	
}
 
e
l
s
e
 
{

	
	
	
i
f
 
(
$
u
n
i
x
A
r
r
i
v
a
l
D
a
t
e
 
>
=
 
$
u
n
i
x
V
a
l
i
d
F
r
o
m
D
a
t
e
 
&
&
 
$
u
n
i
x
A
r
r
i
v
a
l
D
a
t
e
 
<
=
 
$
u
n
i
x
V
a
l
i
d
T
o
D
a
t
e
)
 
{

	
	
	
	
$
d
a
t
e
s
V
a
l
i
d
 
=
 
t
r
u
e
;

	
	
	
}

	
	
}

	
	
i
f
 
(
!
$
d
a
t
e
s
V
a
l
i
d
)
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
f
i
l
t
e
r
_
t
a
r
i
f
f
s
_
o
n
_
d
a
t
e
s
:
:
 
D
a
t
e
s
 
n
o
t
 
v
a
l
i
d
 
f
o
r
 
t
a
r
i
f
f
 
u
i
d
 
'
.
$
t
a
r
i
f
f
-
>
r
a
t
e
s
_
u
i
d
)
;

	
	
}


	
	
r
e
t
u
r
n
 
$
d
a
t
e
s
V
a
l
i
d
;

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
f
i
l
t
e
r
_
t
a
r
i
f
f
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
d
c
h
e
c
k
(
$
t
a
r
i
f
f
)

	
{

	
	
$
n
u
m
b
e
r
O
f
R
o
o
m
s
A
l
r
e
a
d
y
S
e
l
e
c
t
e
d
 
=
 
c
o
u
n
t
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
)
;

	
	
$
r
o
o
m
s
A
l
r
e
a
d
y
S
e
l
e
c
t
e
d
T
e
s
t
s
 
=
 
f
a
l
s
e
;

	
	
i
f
 
(
!
i
s
s
e
t
(
$
t
a
r
i
f
f
-
>
m
i
n
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
d
)
 
|
|
 
$
t
a
r
i
f
f
-
>
m
i
n
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
d
 
=
=
 
'
'
)
 
{

	
	
	
$
m
i
n
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
d
 
=
 
0
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
m
i
n
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
d
 
=
 
$
t
a
r
i
f
f
-
>
m
i
n
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
d
;

	
	
}

	
	
i
f
 
(
!
i
s
s
e
t
(
$
t
a
r
i
f
f
-
>
m
a
x
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
d
)
 
|
|
 
$
t
a
r
i
f
f
-
>
m
a
x
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
d
 
=
=
 
'
'
)
 
{

	
	
	
$
m
a
x
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
d
 
=
 
1
0
0
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
m
a
x
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
d
 
=
 
$
t
a
r
i
f
f
-
>
m
a
x
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
d
;

	
	
}


	
	
i
f
 
(
$
n
u
m
b
e
r
O
f
R
o
o
m
s
A
l
r
e
a
d
y
S
e
l
e
c
t
e
d
 
>
=
 
$
m
i
n
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
d
 
&
&
 
$
n
u
m
b
e
r
O
f
R
o
o
m
s
A
l
r
e
a
d
y
S
e
l
e
c
t
e
d
 
<
 
$
m
a
x
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
d
)
 
{

	
	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
g
e
t
T
a
r
i
f
f
s
F
o
r
R
o
o
m
U
i
d
s
:
:
 
P
a
s
s
e
d
 
t
e
s
t
 
1
"
 
)
;

	
	
	
$
r
o
o
m
s
A
l
r
e
a
d
y
S
e
l
e
c
t
e
d
T
e
s
t
s
 
=
 
t
r
u
e
;

	
	
}
 
e
l
s
e
 
{

	
	
	
i
f
 
(
$
n
u
m
b
e
r
O
f
R
o
o
m
s
A
l
r
e
a
d
y
S
e
l
e
c
t
e
d
 
>
=
 
$
m
i
n
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
d
 
&
&
 
$
n
u
m
b
e
r
O
f
R
o
o
m
s
A
l
r
e
a
d
y
S
e
l
e
c
t
e
d
 
<
 
$
m
a
x
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
d
)
 
{

	
	
	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
g
e
t
T
a
r
i
f
f
s
F
o
r
R
o
o
m
U
i
d
s
:
:
 
P
a
s
s
e
d
 
t
e
s
t
 
2
"
 
)
;

	
	
	
	
$
r
o
o
m
s
A
l
r
e
a
d
y
S
e
l
e
c
t
e
d
T
e
s
t
s
 
=
 
t
r
u
e
;

	
	
	
}

	
	
}

	
	
i
f
 
(
!
$
r
o
o
m
s
A
l
r
e
a
d
y
S
e
l
e
c
t
e
d
T
e
s
t
s
)
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
f
i
l
t
e
r
_
t
a
r
i
f
f
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
d
c
h
e
c
k
:
:
 
T
a
r
i
f
f
 
a
l
r
e
a
d
y
 
s
e
l
e
c
t
e
d
 
t
a
r
i
f
f
 
u
i
d
 
'
.
$
t
a
r
i
f
f
-
>
r
a
t
e
s
_
u
i
d
)
;

	
	
}


	
	
r
e
t
u
r
n
 
$
r
o
o
m
s
A
l
r
e
a
d
y
S
e
l
e
c
t
e
d
T
e
s
t
s
;

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
f
i
l
t
e
r
_
t
a
r
i
f
f
s
_
p
e
o
p
l
e
n
u
m
b
e
r
c
h
e
c
k
(
$
t
a
r
i
f
f
)

	
{

	
	
$
n
u
m
b
e
r
P
e
o
p
l
e
V
a
l
i
d
 
=
 
f
a
l
s
e
;


	
	
$
t
o
t
a
l
I
n
P
a
r
t
y
 
=
 
$
t
h
i
s
-
>
g
e
t
T
o
t
a
l
I
n
P
a
r
t
y
(
)
;

	
	
$
m
i
n
p
e
o
p
l
e
 
=
 
$
t
a
r
i
f
f
-
>
m
i
n
p
e
o
p
l
e
;

	
	
$
m
a
x
p
e
o
p
l
e
 
=
 
$
t
a
r
i
f
f
-
>
m
a
x
p
e
o
p
l
e
;


	
	
i
f
 
(
$
t
o
t
a
l
I
n
P
a
r
t
y
 
>
 
0
)
 
{

	
	
	
i
f
 
(
$
t
o
t
a
l
I
n
P
a
r
t
y
 
>
=
 
$
m
i
n
p
e
o
p
l
e
 
&
&
 
$
t
o
t
a
l
I
n
P
a
r
t
y
 
<
=
 
$
m
a
x
p
e
o
p
l
e
)
 
{

	
	
	
	
$
n
u
m
b
e
r
P
e
o
p
l
e
V
a
l
i
d
 
=
 
t
r
u
e
;

	
	
	
}

	
	
}
 
e
l
s
e
 
{

	
	
	
$
n
u
m
b
e
r
P
e
o
p
l
e
V
a
l
i
d
 
=
 
t
r
u
e
;

	
	
}

	
	
i
f
 
(
!
$
n
u
m
b
e
r
P
e
o
p
l
e
V
a
l
i
d
)
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
f
i
l
t
e
r
_
t
a
r
i
f
f
s
_
p
e
o
p
l
e
n
u
m
b
e
r
c
h
e
c
k
:
:
 
P
e
o
p
l
e
 
n
u
m
b
e
r
s
 
d
o
n
'
t
 
m
a
t
c
h
 
f
o
r
 
t
a
r
i
f
f
 
u
i
d
 
"
.
$
t
a
r
i
f
f
-
>
r
a
t
e
s
_
u
i
d
)
;

	
	
}


	
	
r
e
t
u
r
n
 
$
n
u
m
b
e
r
P
e
o
p
l
e
V
a
l
i
d
;

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
f
i
l
t
e
r
_
t
a
r
i
f
f
s
_
d
o
w
c
h
e
c
k
(
$
t
a
r
i
f
f
)

	
{

	
	
$
d
a
t
e
R
a
n
g
e
I
n
c
l
u
d
e
s
W
e
e
k
e
n
d
 
=
 
$
t
h
i
s
-
>
d
a
t
e
R
a
n
g
e
I
n
c
l
u
d
e
s
W
e
e
k
e
n
d
s
(
)
;

	
	
$
d
a
t
e
R
a
n
g
e
I
s
A
l
l
W
e
e
k
e
n
d
s
 
=
 
$
t
h
i
s
-
>
d
a
t
e
R
a
n
g
e
I
s
A
l
l
W
e
e
k
e
n
d
s
(
)
;


	
	
$
a
l
l
o
w
_
w
e
 
=
 
$
t
a
r
i
f
f
-
>
a
l
l
o
w
_
w
e
;

	
	
$
w
e
e
k
e
n
d
o
n
l
y
 
=
 
$
t
a
r
i
f
f
-
>
w
e
e
k
e
n
d
o
n
l
y
;

	
	
$
t
a
r
i
f
f
_
d
a
y
o
f
w
e
e
k
 
=
 
$
t
a
r
i
f
f
-
>
d
a
y
o
f
w
e
e
k
;


	
	
$
d
o
w
C
h
e
c
k
 
=
 
t
r
u
e
;

	
	
i
f
 
(
$
a
l
l
o
w
_
w
e
 
=
=
 
'
0
'
 
&
&
 
$
d
a
t
e
R
a
n
g
e
I
n
c
l
u
d
e
s
W
e
e
k
e
n
d
)
 
{

	
	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
g
e
t
T
a
r
i
f
f
s
F
o
r
R
o
o
m
U
i
d
s
:
:
A
l
l
o
w
 
W
E
 
=
1
 
a
n
d
 
d
a
t
e
R
a
n
g
e
I
n
c
l
u
d
e
s
W
e
e
k
e
n
d
"
)
;

	
	
	
$
d
o
w
C
h
e
c
k
 
=
 
f
a
l
s
e
;

	
	
}


	
	
i
f
 
(
$
w
e
e
k
e
n
d
o
n
l
y
 
=
=
 
'
1
'
 
&
&
 
$
d
a
t
e
R
a
n
g
e
I
s
A
l
l
W
e
e
k
e
n
d
s
)
 
{

	
	
	
$
d
o
w
C
h
e
c
k
 
=
 
t
r
u
e
;

	
	
}
 
e
l
s
e
 
{

	
	
	
i
f
 
(
$
w
e
e
k
e
n
d
o
n
l
y
 
=
=
 
'
1
'
 
&
&
 
!
$
d
a
t
e
R
a
n
g
e
I
s
A
l
l
W
e
e
k
e
n
d
s
)
 
{

	
	
	
	
$
d
o
w
C
h
e
c
k
 
=
 
f
a
l
s
e
;

	
	
	
}

	
	
}


	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
g
e
t
T
a
r
i
f
f
s
F
o
r
R
o
o
m
U
i
d
s
:
:
D
a
y
 
o
f
 
w
e
e
k
 
c
h
e
c
k
,
 
t
a
r
i
f
f
 
d
o
w
 
=
 
"
.
$
t
a
r
i
f
f
_
d
a
y
o
f
w
e
e
k
 
)
;

	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
g
e
t
T
a
r
i
f
f
s
F
o
r
R
o
o
m
U
i
d
s
:
:
D
a
y
 
o
f
 
w
e
e
k
 
c
h
e
c
k
,
 
a
r
r
i
v
a
l
 
d
a
t
e
 
d
o
w
 
=
"
.
$
t
h
i
s
-
>
g
e
t
D
a
y
O
f
W
e
e
k
(
$
u
n
i
x
A
r
r
i
v
a
l
D
a
t
e
)
)
;

	
	
i
f
 
(
$
t
a
r
i
f
f
_
d
a
y
o
f
w
e
e
k
 
<
 
7
)
 
{

	
	
	
i
f
 
(
$
t
h
i
s
-
>
g
e
t
D
a
y
O
f
W
e
e
k
(
$
t
h
i
s
-
>
a
r
r
i
v
a
l
D
a
t
e
)
 
=
=
 
$
t
a
r
i
f
f
_
d
a
y
o
f
w
e
e
k
)
 
{

	
	
	
	
$
d
o
w
C
h
e
c
k
 
=
 
t
r
u
e
;

	
	
	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
g
e
t
T
a
r
i
f
f
s
F
o
r
R
o
o
m
U
i
d
s
:
:
D
a
y
 
o
f
 
w
e
e
k
 
c
h
e
c
k
,
 
<
b
>
 
T
R
U
E
 
<
/
b
>
"
)
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
d
o
w
C
h
e
c
k
 
=
 
f
a
l
s
e
;

	
	
	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
g
e
t
T
a
r
i
f
f
s
F
o
r
R
o
o
m
U
i
d
s
:
:
D
a
y
 
o
f
 
w
e
e
k
 
c
h
e
c
k
,
 
<
b
>
 
F
A
L
S
E
 
<
/
b
>
"
)
;

	
	
	
}

	
	
}

	
	
i
f
 
(
!
$
d
o
w
C
h
e
c
k
)
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
f
i
l
t
e
r
_
t
a
r
i
f
f
s
_
d
o
w
c
h
e
c
k
:
:
 
D
a
y
 
o
f
 
w
e
e
k
 
c
h
e
c
k
 
f
a
i
l
e
d
 
f
o
r
 
t
a
r
i
f
f
 
u
i
d
 
'
.
$
t
a
r
i
f
f
-
>
r
a
t
e
s
_
u
i
d
)
;

	
	
}


	
	
r
e
t
u
r
n
 
$
d
o
w
C
h
e
c
k
;

	
}


	
/
*

	
f
u
n
c
t
i
o
n
 
c
h
e
c
k
_
o
t
h
e
r
_
d
a
t
e
s
_
f
o
r
_
t
h
i
s
_
t
a
r
i
f
f
_
t
y
p
e
_
v
a
l
i
d
(
$
t
a
r
i
f
f
_
u
i
d
,
$
d
a
t
e
_
r
a
n
g
e
_
a
r
r
a
y
)
 
 
/
/
 
W
e
'
r
e
 
l
o
o
k
i
n
g
 
f
o
r
 
m
i
n
 
i
n
t
e
r
v
a
l
s
 
f
o
r
 
a
l
l
 
t
a
r
i
f
f
s
 
w
h
e
r
e
 
t
h
e
 
t
a
r
i
f
f
 
h
a
s
 
a
l
r
e
a
d
y
 
b
e
e
n
 
s
e
e
n
 
t
o
 
p
r
o
b
a
b
l
y
 
m
a
t
c
h
.
 
N
o
w
 
l
e
t
'
s
 
l
o
o
k
 
a
t
 
t
h
e
 
r
e
s
t
 
o
f
 
t
h
e
 
t
a
r
i
f
f
s
 
o
v
e
r
 
t
h
i
s
 
p
e
r
i
o
d
 
a
n
d
 
s
e
e
 
i
f
 
t
h
e
 
p
r
i
c
e
 
i
s
 
s
t
i
l
l
 
v
a
l
i
d
.
 
I
f
 
t
h
e
 
p
r
i
c
e
 
i
s
 
=
=
 
0
 
t
h
e
n
 
i
t
'
s
 
n
o
t
 
a
 
m
a
t
c
h
.

	
	
{

	
	
$
t
a
r
i
f
f
_
v
a
l
i
d
 
=
 
t
r
u
e
;

	
	
$
m
r
C
o
n
f
i
g
 
=
 
$
t
h
i
s
-
>
m
r
C
o
n
f
i
g
;

	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
c
h
e
c
k
_
o
t
h
e
r
_
d
a
t
e
s
_
f
o
r
_
t
h
i
s
_
t
a
r
i
f
f
_
t
y
p
e
_
v
a
l
i
d
:
:
S
t
a
y
 
d
a
y
s
 
"
.
$
t
h
i
s
-
>
s
t
a
y
D
a
y
s
)
;

	
	
i
f
 
(
 
$
m
r
C
o
n
f
i
g
[
'
t
a
r
i
f
f
m
o
d
e
'
]
=
=
"
2
"
)

	
	
	
{

	
	
	
/
/
 
N
o
w
,
 
w
e
 
n
e
e
d
 
t
o
 
f
i
n
d
 
a
l
l
 
t
h
e
 
o
t
h
e
r
 
t
a
r
i
f
f
 
i
d
s
 
t
h
a
t
 
a
r
e
 
a
p
p
r
o
p
r
i
a
t
e
 
f
o
r
 
t
h
i
s
 
t
a
r
i
f
f
'
s
 
t
y
p
e

	
	
	
i
f
 
(
i
s
s
e
t
(
$
t
h
i
s
-
>
a
l
l
_
t
a
r
i
f
f
_
i
d
_
t
o
_
t
a
r
i
f
f
_
t
y
p
e
_
x
r
e
f
[
$
t
a
r
i
f
f
_
u
i
d
]
 
)
 
)
 
/
/
 
S
o
m
e
t
h
i
n
g
 
h
a
s
 
g
o
n
e
 
h
i
d
e
o
u
s
l
y
 
w
r
o
n
g
 
i
f
 
t
h
i
s
 
i
s
 
f
a
l
s
e
,
 
t
h
e
 
t
a
r
i
f
f
 
d
o
e
s
n
'
t
 
h
a
v
e
 
a
n
y
 
t
y
p
e
s
 
a
s
s
o
c
i
a
t
e
d
 
w
i
t
h
 
i
t
.
 
A
l
l
 
w
e
 
c
a
n
 
d
o
 
i
s
 
r
e
t
u
r
n
 
f
a
l
s
e

	
	
	
	
{

	
	
	
	
$
t
a
r
i
f
f
_
t
y
p
e
_
i
d
 
=
 
$
t
h
i
s
-
>
a
l
l
_
t
a
r
i
f
f
_
i
d
_
t
o
_
t
a
r
i
f
f
_
t
y
p
e
_
x
r
e
f
[
$
t
a
r
i
f
f
_
u
i
d
]
[
0
]
;

	
	
	
	
/
/
 
N
o
w
 
w
e
 
c
a
n
 
g
e
t
 
a
l
l
 
o
f
 
t
h
e
 
t
a
r
i
f
f
 
u
i
d
s
 
t
h
a
t
 
a
r
e
 
a
s
s
o
c
i
a
t
e
d
 
w
i
t
h
 
t
h
i
s
 
t
a
r
i
f
f
 
t
y
p
e

	
	
	
	
$
a
l
l
_
a
s
s
o
c
i
a
t
e
d
_
t
a
r
i
f
f
_
i
d
s
 
=
 
$
t
h
i
s
-
>
a
l
l
_
t
a
r
i
f
f
_
t
y
p
e
s
_
t
o
_
t
a
r
i
f
f
_
i
d
_
x
r
e
f
[
$
t
a
r
i
f
f
_
t
y
p
e
_
i
d
]
;

	
	
	
	
/
/
 
F
i
r
s
t
 
w
e
'
l
l
 
q
u
i
c
k
l
y
 
r
u
n
 
t
h
r
o
u
g
h
 
t
h
e
 
p
r
i
c
e
s
 
a
s
s
o
c
i
a
t
e
d
 
w
i
t
h
 
t
h
i
s
 
t
y
p
e
.
 
I
f
 
n
o
n
e
 
o
f
 
t
h
e
 
p
r
i
c
e
s
 
a
r
e
 
0
 
t
h
e
n
 
w
e
'
l
l
 
f
o
r
g
o
 
a
n
y
 
f
u
r
t
h
e
r
 
c
h
e
c
k
i
n
g

	
	
	
	
$
t
a
r
i
f
f
_
i
n
c
l
u
d
e
s
_
z
e
r
o
_
p
r
i
c
e
s
 
=
 
f
a
l
s
e
;

	
	
	
	
f
o
r
e
a
c
h
 
(
$
a
l
l
_
a
s
s
o
c
i
a
t
e
d
_
t
a
r
i
f
f
_
i
d
s
 
a
s
 
$
t
_
i
d
)

	
	
	
	
	
{

	
	
	
	
	
$
t
a
r
i
f
f
_
i
n
f
o
 
=
 
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
T
a
r
i
f
f
s
[
$
t
_
i
d
]
;

	
	
	
	
	
i
f
 
(
 
(
f
l
o
a
t
)
$
t
a
r
i
f
f
_
i
n
f
o
[
'
r
o
o
m
r
a
t
e
p
e
r
d
a
y
'
]
 
=
=
 
0
.
0
0
 
)

	
	
	
	
	
	
$
t
a
r
i
f
f
_
i
n
c
l
u
d
e
s
_
z
e
r
o
_
p
r
i
c
e
s
 
=
 
t
r
u
e
;

	
	
	
	
	
}


	
	
	
	
i
f
 
(
$
t
a
r
i
f
f
_
i
n
c
l
u
d
e
s
_
z
e
r
o
_
p
r
i
c
e
s
)
 
 
/
/
 
N
o
w
 
w
e
'
l
l
 
g
o
 
t
h
r
o
u
g
h
 
e
a
c
h
 
t
a
r
i
f
f
 
a
s
s
o
c
i
a
t
e
d
 
w
i
t
h
 
t
h
i
s
 
t
y
p
e
.
 
W
e
'
l
l
 
c
h
e
c
k
 
t
h
e
 
d
a
t
e
s
 
o
f
 
t
h
e
 
t
a
r
i
f
f
,
 
i
f
 
a
 
d
a
t
e
 
f
a
l
l
s
 
w
i
t
h
i
n
 
t
h
e
 
a
r
r
i
v
a
l
 
a
n
d
 
d
e
p
a
r
t
u
r
e
 
d
a
t
e
s
 
w
e
'
l
l
 
l
o
o
k
 
t
o
 
s
e
e
 
i
f
 
t
h
e
 
p
r
i
c
e
 
a
t
 
t
h
a
t
 
t
i
m
e
 
i
s
 
z
e
r
o
.
 
I
f
 
i
t
 
i
s
,
 
t
h
e
n
 
t
h
e
 
t
a
r
i
f
f
 
t
y
p
e
 
a
s
 
a
 
g
r
o
u
p
 
i
s
n
'
t
 
a
 
m
a
t
c
h
.
 
W
e
'
l
l
 
p
a
s
s
 
b
a
c
k
 
f
a
l
s
e
 
t
o
 
t
h
e
 
g
e
t
T
a
r
i
f
f
s
F
o
r
R
o
o
m
U
i
d
s
 
m
e
t
h
o
d
 
i
n
 
t
h
a
t
 
c
a
s
e
.

	
	
	
	
	
{

	
	
	
	
	
/
/
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
 
=
 
e
x
p
l
o
d
e
(
"
/
"
,
$
t
h
i
s
-
>
a
r
r
i
v
a
l
D
a
t
e
)
;

	
	
	
	
	
/
/
 
$
u
n
i
x
A
r
r
i
v
a
l
D
a
t
e
=
 
m
k
t
i
m
e
(
0
,
0
,
0
,
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
1
]
,
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
2
]
,
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
0
]
)
;

	
	
	
	
	
/
/
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
 
=
 
e
x
p
l
o
d
e
(
"
/
"
,
$
t
h
i
s
-
>
d
e
p
a
r
t
u
r
e
D
a
t
e
)
;

	
	
	
	
	
/
/
 
$
u
n
i
x
D
e
p
a
r
t
u
r
e
D
a
t
e
=
 
m
k
t
i
m
e
(
0
,
0
,
0
,
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
1
]
,
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
2
]
,
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
0
]
)
;


	
	
	
	
	
$
u
n
i
x
A
r
r
i
v
a
l
D
a
t
e
 
=
 
$
t
h
i
s
-
>
g
e
t
M
k
T
i
m
e
(
$
t
h
i
s
-
>
a
r
r
i
v
a
l
D
a
t
e
)
;

	
	
	
	
	
$
u
n
i
x
D
e
p
a
r
t
u
r
e
D
a
t
e
 
=
 
$
t
h
i
s
-
>
g
e
t
M
k
T
i
m
e
(
$
t
h
i
s
-
>
d
e
p
a
r
t
u
r
e
D
a
t
e
)
;


	
	
	
	
	
f
o
r
e
a
c
h
 
(
$
a
l
l
_
a
s
s
o
c
i
a
t
e
d
_
t
a
r
i
f
f
_
i
d
s
 
a
s
 
$
t
_
i
d
)

	
	
	
	
	
	
{

	
	
	
	
	
	
$
t
a
r
i
f
f
_
i
n
f
o
 
=
 
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
T
a
r
i
f
f
s
[
$
t
_
i
d
]
;

	
	
	
	
	
	
/
/
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
 
=
 
e
x
p
l
o
d
e
(
"
/
"
,
$
t
a
r
i
f
f
_
i
n
f
o
[
'
v
a
l
i
d
f
r
o
m
'
]
 
)
;

	
	
	
	
	
	
/
/
 
$
u
n
i
x
V
a
l
i
d
F
r
o
m
D
a
t
e
=
 
m
k
t
i
m
e
(
0
,
0
,
0
,
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
1
]
,
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
2
]
,
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
0
]
)
;

	
	
	
	
	
	
/
/
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
 
=
 
e
x
p
l
o
d
e
(
"
/
"
,
$
t
a
r
i
f
f
_
i
n
f
o
[
'
v
a
l
i
d
t
o
'
]
)
;

	
	
	
	
	
	
/
/
 
$
u
n
i
x
V
a
l
i
d
T
o
D
a
t
e
=
 
m
k
t
i
m
e
(
0
,
0
,
0
,
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
1
]
,
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
2
]
,
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
0
]
)
;


	
	
	
	
	
	
$
u
n
i
x
V
a
l
i
d
F
r
o
m
D
a
t
e
 
=
 
$
t
h
i
s
-
>
g
e
t
M
k
T
i
m
e
(
$
t
a
r
i
f
f
_
i
n
f
o
[
'
v
a
l
i
d
f
r
o
m
'
]
)
;

	
	
	
	
	
	
$
u
n
i
x
V
a
l
i
d
T
o
D
a
t
e
 
=
 
$
t
h
i
s
-
>
g
e
t
M
k
T
i
m
e
(
$
t
a
r
i
f
f
_
i
n
f
o
[
'
v
a
l
i
d
t
o
'
]
)
;


	
	
	
	
	
	
/
/
 
T
e
s
t
 
s
c
e
n
a
r
i
o
 
:
 
t
a
r
i
f
f
 
1
 
a
l
l
 
d
a
y
s
 
1
0
0
 
e
x
c
e
p
t
 
1
0
-
2
0
 
d
e
c
 
w
h
i
c
h
 
a
r
e
 
0
 
t
a
r
i
f
f
 
2
 
a
l
l
 
d
a
y
s
 
a
r
e
 
1
0
0
 
e
x
c
e
p
t
 
1
0
 
-
 
2
0
 
d
e
c
 
w
h
i
c
h
 
a
r
e
 
1
5
0


	
	
	
	
	
	
/
/
 
a
r
r
 
9
/
1
2
 
d
e
p
 
1
2
/
1
2

	
	
	
	
	
	
i
f
 
(
 
$
u
n
i
x
A
r
r
i
v
a
l
D
a
t
e
 
<
=
 
$
u
n
i
x
V
a
l
i
d
F
r
o
m
D
a
t
e
 
&
&
 
$
u
n
i
x
A
r
r
i
v
a
l
D
a
t
e
 
<
=
 
$
u
n
i
x
V
a
l
i
d
T
o
D
a
t
e
 
&
&
 
$
u
n
i
x
D
e
p
a
r
t
u
r
e
D
a
t
e
 
>
 
$
u
n
i
x
V
a
l
i
d
F
r
o
m
D
a
t
e
 
&
&
 
$
u
n
i
x
D
e
p
a
r
t
u
r
e
D
a
t
e
 
<
=
 
$
u
n
i
x
V
a
l
i
d
T
o
D
a
t
e
 
)

	
	
	
	
	
	
	
{

	
	
	
	
	
	
	
i
f
 
(
 
(
f
l
o
a
t
)
$
t
a
r
i
f
f
_
i
n
f
o
[
'
r
o
o
m
r
a
t
e
p
e
r
d
a
y
'
]
 
=
=
 
0
.
0
0
 
)

	
	
	
	
	
	
	
	
{

	
	
	
	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
c
h
e
c
k
_
o
t
h
e
r
_
d
a
t
e
s
_
f
o
r
_
t
h
i
s
_
t
a
r
i
f
f
_
t
y
p
e
_
v
a
l
i
d
:
:
F
i
l
t
e
r
i
n
g
 
o
u
t
 
t
a
r
i
f
f
,
 
t
e
s
t
 
1
.
 
"
.
$
t
h
i
s
-
>
c
f
g
_
m
i
n
i
m
u
m
i
n
t
e
r
v
a
l
)
;

	
	
	
	
	
	
	
	
$
t
a
r
i
f
f
_
v
a
l
i
d
=
f
a
l
s
e
;

	
	
	
	
	
	
	
	
}

	
	
	
	
	
	
	
}


	
	
	
	
	
	
/
/
 
a
r
r

	
	
	
	
	
	
i
f
 
(
$
u
n
i
x
A
r
r
i
v
a
l
D
a
t
e
>
=
 
$
u
n
i
x
V
a
l
i
d
F
r
o
m
D
a
t
e
 
&
&
 
$
u
n
i
x
A
r
r
i
v
a
l
D
a
t
e
 
<
=
 
$
u
n
i
x
V
a
l
i
d
T
o
D
a
t
e
 
)

	
	
	
	
	
	
	
{

	
	
	
	
	
	
	
i
f
 
(
 
(
f
l
o
a
t
)
$
t
a
r
i
f
f
_
i
n
f
o
[
'
r
o
o
m
r
a
t
e
p
e
r
d
a
y
'
]
 
=
=
 
0
.
0
0
 
)

	
	
	
	
	
	
	
	
{

	
	
	
	
	
	
	
	
$
t
a
r
i
f
f
_
v
a
l
i
d
=
f
a
l
s
e
;

	
	
	
	
	
	
	
	
}

	
	
	
	
	
	
	
}


	
	
	
	
	
	
/
/

	
	
	
	
	
	
i
f
 
(
$
u
n
i
x
A
r
r
i
v
a
l
D
a
t
e
 
<
=
 
$
u
n
i
x
V
a
l
i
d
F
r
o
m
D
a
t
e
 
&
&
 
$
u
n
i
x
D
e
p
a
r
t
u
r
e
D
a
t
e
 
>
=
 
$
u
n
i
x
V
a
l
i
d
T
o
D
a
t
e
 
)

	
	
	
	
	
	
	
{

	
	
	
	
	
	
	
i
f
 
(
 
(
f
l
o
a
t
)
$
t
a
r
i
f
f
_
i
n
f
o
[
'
r
o
o
m
r
a
t
e
p
e
r
d
a
y
'
]
 
=
=
 
0
.
0
0
 
)

	
	
	
	
	
	
	
	
{

	
	
	
	
	
	
	
	
$
t
a
r
i
f
f
_
v
a
l
i
d
=
f
a
l
s
e
;

	
	
	
	
	
	
	
	
}

	
	
	
	
	
	
	
}


	
	
	
	
	
	
}

	
	
	
	
	
}

	
	
	
	
u
n
s
e
t
(
$
a
l
l
_
a
s
s
o
c
i
a
t
e
d
_
t
a
r
i
f
f
_
i
d
s
)
;

	
	
	
	
}

	
	
	
e
l
s
e

	
	
	
	
$
t
a
r
i
f
f
_
v
a
l
i
d
 
=
 
f
a
l
s
e
;

	
	
	
}

	
	
e
l
s
e
 
/
/
 
W
e
'
r
e
 
u
s
i
n
g
 
t
h
e
 
A
d
v
a
n
c
e
d
 
t
a
r
i
f
f
 
m
o
d
e
,
 
t
h
e
r
e
f
o
r
e
 
t
h
i
s
 
q
u
e
s
t
i
o
n
 
d
o
e
s
 
n
o
t
 
a
p
p
l
y

	
	
	
$
t
a
r
i
f
f
_
v
a
l
i
d
 
=
 
t
r
u
e
;


	
	
r
e
t
u
r
n
 
$
t
a
r
i
f
f
_
v
a
l
i
d
;

	
	
}


 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
b
u
i
l
d
_
t
a
r
i
f
f
_
t
o
_
d
a
t
e
_
m
a
p
(
)

	
{

	
	
$
t
h
i
s
-
>
s
i
m
p
l
e
_
t
a
r
i
f
f
_
t
o
_
d
a
t
e
_
m
a
p
 
=
 
a
r
r
a
y
(
)
;

	
	
$
t
h
i
s
-
>
m
i
c
r
o
m
a
n
a
g
e
_
t
a
r
i
f
f
t
y
p
e
_
t
o
_
d
a
t
e
_
m
a
p
 
=
 
a
r
r
a
y
(
)
;


	
	
$
m
r
C
o
n
f
i
g
 
=
 
$
t
h
i
s
-
>
m
r
C
o
n
f
i
g
;


	
	
/
/
 
f
o
r
 
t
e
s
t
i
n
g

	
	
/
/
$
t
h
i
s
-
>
d
a
t
e
R
a
n
g
e
S
t
r
i
n
g
 
=
 
"
2
0
1
2
/
1
0
/
3
0
,
2
0
1
2
/
1
0
/
3
1
,
2
0
1
2
/
1
1
/
0
1
,
2
0
1
2
/
1
1
/
0
2
"
;

	
	
/
/
$
m
r
C
o
n
f
i
g
[
'
t
a
r
i
f
f
m
o
d
e
'
]
=
"
1
"
;


	
	
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
t
h
i
s
-
>
d
a
t
e
R
a
n
g
e
S
t
r
i
n
g
)
;


	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
T
a
r
i
f
f
s
 
a
s
 
$
t
a
r
i
f
f
)
 
{

	
	
	
$
t
a
r
i
f
f
_
u
i
d
 
=
 
$
t
a
r
i
f
f
[
 
'
r
a
t
e
s
_
u
i
d
'
 
]
;

	
	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
t
a
r
i
f
f
m
o
d
e
'
 
]
 
=
=
 
'
2
'
)
 
{

	
	
	
	
$
t
a
r
i
f
f
_
t
y
p
e
_
i
d
 
=
 
$
t
h
i
s
-
>
a
l
l
_
t
a
r
i
f
f
_
i
d
_
t
o
_
t
a
r
i
f
f
_
t
y
p
e
_
x
r
e
f
[
 
$
t
a
r
i
f
f
_
u
i
d
 
]
[
 
0
 
]
;


	
	
	
	
/
/
 
N
o
w
 
w
e
 
c
a
n
 
g
e
t
 
a
l
l
 
o
f
 
t
h
e
 
t
a
r
i
f
f
 
u
i
d
s
 
t
h
a
t
 
a
r
e
 
a
s
s
o
c
i
a
t
e
d
 
w
i
t
h
 
t
h
i
s
 
t
a
r
i
f
f
 
t
y
p
e

	
	
	
	
$
a
l
l
_
a
s
s
o
c
i
a
t
e
d
_
t
a
r
i
f
f
_
i
d
s
 
=
 
$
t
h
i
s
-
>
a
l
l
_
t
a
r
i
f
f
_
t
y
p
e
s
_
t
o
_
t
a
r
i
f
f
_
i
d
_
x
r
e
f
[
 
$
t
a
r
i
f
f
_
t
y
p
e
_
i
d
 
]
;

	
	
	
	
/
/
 
W
e
'
l
l
 
b
u
i
l
d
 
a
 
m
a
p
 
o
f
 
t
h
e
 
d
a
t
e
s
 
i
n
 
t
h
i
s
 
b
o
o
k
i
n
g
,
 
c
r
o
s
s
 
r
e
f
e
r
e
n
c
e
d
 
t
o
 
t
h
e
 
t
a
r
i
f
f
 
u
i
d
s
,
 
a
n
d
 
t
h
e
 
p
r
i
c
e
s

	
	
	
	
f
o
r
e
a
c
h
 
(
$
a
l
l
_
a
s
s
o
c
i
a
t
e
d
_
t
a
r
i
f
f
_
i
d
s
 
a
s
 
$
t
_
i
d
)
 
{

	
	
	
	
	
i
f
 
(
i
s
s
e
t
(
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
T
a
r
i
f
f
s
[
 
$
t
_
i
d
 
]
)
)
 
{

	
	
	
	
	
	
$
t
a
r
i
f
f
_
i
n
f
o
 
=
 
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
T
a
r
i
f
f
s
[
 
$
t
_
i
d
 
]
;

	
	
	
	
	
	
i
f
 
(
i
s
s
e
t
(
$
t
a
r
i
f
f
_
i
n
f
o
[
 
'
t
a
r
i
f
f
_
d
a
t
e
s
'
 
]
)
)
 
{

	
	
	
	
	
	
	
$
d
a
t
e
s
 
=
 
$
t
a
r
i
f
f
_
i
n
f
o
[
 
'
t
a
r
i
f
f
_
d
a
t
e
s
'
 
]
;

	
	
	
	
	
	
	
f
o
r
e
a
c
h
 
(
$
d
a
t
e
s
 
a
s
 
$
d
)
 
{

	
	
	
	
	
	
	
	
i
f
 
(
i
n
_
a
r
r
a
y
(
$
d
,
 
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
)
 
&
&
 
i
s
s
e
t
(
$
t
a
r
i
f
f
_
i
n
f
o
[
 
'
r
o
o
m
r
a
t
e
p
e
r
d
a
y
'
 
]
)
)
 
{

	
	
	
	
	
	
	
	
	
$
t
h
i
s
-
>
m
i
c
r
o
m
a
n
a
g
e
_
t
a
r
i
f
f
t
y
p
e
_
t
o
_
d
a
t
e
_
m
a
p
[
 
$
t
a
r
i
f
f
_
t
y
p
e
_
i
d
 
]
[
 
$
d
 
]
 
=
 
a
r
r
a
y
(
'
p
r
i
c
e
'
 
=
>
 
$
t
a
r
i
f
f
_
i
n
f
o
[
 
'
r
o
o
m
r
a
t
e
p
e
r
d
a
y
'
 
]
,
 
'
m
i
n
d
a
y
s
'
 
=
>
 
$
t
a
r
i
f
f
_
i
n
f
o
[
 
'
m
i
n
d
a
y
s
'
 
]
,
 
'
r
a
t
e
s
_
u
i
d
'
 
=
>
 
$
t
a
r
i
f
f
_
i
n
f
o
[
 
'
r
a
t
e
s
_
u
i
d
'
 
]
,
 
'
t
a
r
i
f
f
_
t
y
p
e
_
i
d
'
 
=
>
 
$
t
a
r
i
f
f
_
t
y
p
e
_
i
d
)
;

	
	
	
	
	
	
	
	
}

	
	
	
	
	
	
	
}

	
	
	
	
	
	
}

	
	
	
	
	
}

	
	
	
	
}

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
t
a
r
i
f
f
_
i
n
f
o
 
=
 
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
T
a
r
i
f
f
s
[
 
$
t
a
r
i
f
f
_
u
i
d
 
]
;

	
	
	
	
i
f
 
(
i
s
s
e
t
(
$
t
a
r
i
f
f
_
i
n
f
o
[
 
'
t
a
r
i
f
f
_
d
a
t
e
s
'
 
]
)
)
 
{

	
	
	
	
	
$
d
a
t
e
s
 
=
 
$
t
a
r
i
f
f
_
i
n
f
o
[
 
'
t
a
r
i
f
f
_
d
a
t
e
s
'
 
]
;

	
	
	
	
	
f
o
r
e
a
c
h
 
(
$
d
a
t
e
s
 
a
s
 
$
d
)
 
{

	
	
	
	
	
	
i
f
 
(
i
n
_
a
r
r
a
y
(
$
d
,
 
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
)
 
&
&
 
i
s
s
e
t
(
$
t
a
r
i
f
f
_
i
n
f
o
[
 
'
r
o
o
m
r
a
t
e
p
e
r
d
a
y
'
 
]
)
)
 
{

	
	
	
	
	
	
	
$
t
h
i
s
-
>
s
i
m
p
l
e
_
t
a
r
i
f
f
_
t
o
_
d
a
t
e
_
m
a
p
[
 
$
t
a
r
i
f
f
_
u
i
d
 
]
 
=
 
a
r
r
a
y
(
'
p
r
i
c
e
'
 
=
>
 
$
t
a
r
i
f
f
_
i
n
f
o
[
 
'
r
o
o
m
r
a
t
e
p
e
r
d
a
y
'
 
]
,
 
'
m
i
n
d
a
y
s
'
 
=
>
 
$
t
a
r
i
f
f
_
i
n
f
o
[
 
'
m
i
n
d
a
y
s
'
 
]
,
 
'
r
a
t
e
s
_
u
i
d
'
 
=
>
 
$
t
a
r
i
f
f
_
i
n
f
o
[
 
'
r
a
t
e
s
_
u
i
d
'
 
]
)
;

	
	
	
	
	
	
}

	
	
	
	
	
}

	
	
	
	
}

	
	
	
}

	
	
}

	
}


	
/
/
 
T
h
i
s
 
f
u
n
c
t
i
o
n
 
i
s
 
s
l
o
w
e
r
 
t
h
a
n
 
t
h
e
 
o
n
e
 
t
h
a
t
 
u
s
e
s
 
d
a
t
e
I
n
t
e
r
v
a
l
.
 
I
 
w
i
l
l
 
l
e
a
v
e
 
i
t
 
i
n
-
s
i
t
u
 
a
s
 
a
 
r
e
m
i
n
d
e
r
 
n
o
t
 
t
o
 
u
s
e
 
i
t
 
:
)

	
/
*

	
f
u
n
c
t
i
o
n
 
g
e
t
_
p
e
r
i
o
d
s
(
$
s
t
a
r
t
,
$
e
n
d
)

	
	
{

	
	
$
c
u
r
r
e
n
t
 
=
 
s
t
r
t
o
t
i
m
e
(
$
s
t
a
r
t
)
;

	
	
$
l
a
s
t
 
=
 
s
t
r
t
o
t
i
m
e
(
$
e
n
d
)
;

	
	
w
h
i
l
e
(
 
$
c
u
r
r
e
n
t
 
<
=
 
$
l
a
s
t
 
)

	
	
	
{

	
	
	
$
d
a
t
e
s
[
]
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
$
c
u
r
r
e
n
t
)
;

	
	
	
$
c
u
r
r
e
n
t
 
=
 
s
t
r
t
o
t
i
m
e
(
'
+
1
 
d
a
y
'
,
 
$
c
u
r
r
e
n
t
)
;

	
	
	
}

	
	
r
e
t
u
r
n
 
$
d
a
t
e
s
;

	
	
}

	
*
/


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
_
p
e
r
i
o
d
s
(
$
s
t
a
r
t
,
 
$
e
n
d
,
 
$
i
n
t
e
r
v
a
l
 
=
 
n
u
l
l
)

	
{

	
	
$
s
t
a
r
t
 
=
 
n
e
w
 
D
a
t
e
T
i
m
e
(
$
s
t
a
r
t
)
;

	
	
$
e
n
d
 
=
 
n
e
w
 
D
a
t
e
T
i
m
e
(
$
e
n
d
)
;

	
	
i
f
 
(
i
s
_
n
u
l
l
(
$
i
n
t
e
r
v
a
l
)
)
 
{

	
	
	
$
i
n
t
e
r
v
a
l
 
=
 
n
e
w
 
D
a
t
e
I
n
t
e
r
v
a
l
(
'
P
1
D
'
)
;

	
	
}


	
	
$
p
e
r
i
o
d
 
=
 
n
e
w
 
D
a
t
e
P
e
r
i
o
d
(
$
s
t
a
r
t
,
 
$
i
n
t
e
r
v
a
l
,
 
$
e
n
d
)
;

	
	
$
d
a
t
e
s
 
=
 
a
r
r
a
y
(
)
;

	
	
f
o
r
e
a
c
h
 
(
$
p
e
r
i
o
d
 
a
s
 
$
d
a
t
e
)
 
{

	
	
	
$
d
 
=
 
$
d
a
t
e
-
>
f
o
r
m
a
t
(
'
Y
/
m
/
d
'
)
;

	
	
	
$
d
a
t
e
s
[
 
]
 
=
 
$
d
;

	
	
}


	
	
r
e
t
u
r
n
 
$
d
a
t
e
s
;

	
}


	
/
*
*

	
 
*
 
L
i
m
i
t
s
 
t
h
e
 
n
u
m
b
e
r
 
o
f
 
r
o
o
m
s
 
t
h
a
t
 
c
a
n
 
b
e
 
d
i
s
p
l
a
y
e
d
 
i
f
 
t
h
e
 
c
o
n
f
i
g
 
o
p
t
i
o
n
 
r
e
t
u
r
n
R
o
o
m
s
L
i
m
i
t
 
i
s
 
s
e
t
 
t
o
 
g
r
e
a
t
e
r
 
t
h
a
n
 
0
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
l
i
m
i
t
R
o
o
m
s
L
i
s
t
(
$
r
o
o
m
A
n
d
T
a
r
i
f
f
A
r
r
a
y
)

	
{

	
	
i
f
 
(
$
t
h
i
s
-
>
b
o
o
k
e
r
_
c
l
a
s
s
 
=
=
 
'
1
0
0
'
)
 
{

	
	
	
r
e
t
u
r
n
 
$
r
o
o
m
A
n
d
T
a
r
i
f
f
A
r
r
a
y
;

	
	
}

	
	
$
r
e
t
u
r
n
R
o
o
m
s
L
i
m
i
t
 
=
 
(
i
n
t
)
 
$
t
h
i
s
-
>
c
f
g
_
r
e
t
u
r
n
R
o
o
m
s
L
i
m
i
t
;

	
	
$
t
m
p
A
r
r
a
y
 
=
 
a
r
r
a
y
(
)
;

	
	
$
t
a
r
i
f
f
s
A
r
r
a
y
 
=
 
a
r
r
a
y
(
)
;

	
	
f
o
r
e
a
c
h
 
(
$
r
o
o
m
A
n
d
T
a
r
i
f
f
A
r
r
a
y
 
a
s
 
$
r
t
)
 
{

	
	
	
$
r
o
o
m
u
i
d
 
=
 
$
r
t
[
 
0
 
]
;

	
	
	
$
t
a
r
i
f
f
u
i
d
 
=
 
$
r
t
[
 
1
 
]
;

	
	
	
$
t
a
r
i
f
f
s
A
r
r
a
y
[
 
$
t
a
r
i
f
f
u
i
d
 
]
[
 
]
 
=
 
$
r
o
o
m
u
i
d
;

	
	
}


	
	
f
o
r
e
a
c
h
 
(
$
t
a
r
i
f
f
s
A
r
r
a
y
 
a
s
 
$
k
e
y
 
=
>
 
$
v
a
l
)
 
{

	
	
	
$
t
a
r
i
f
f
u
i
d
 
=
 
$
k
e
y
;


	
	
	
f
o
r
 
(
$
i
 
=
 
0
;
 
$
i
 
<
 
$
r
e
t
u
r
n
R
o
o
m
s
L
i
m
i
t
;
 
+
+
$
i
)
 
{

	
	
	
	
$
r
o
o
m
u
i
d
 
=
 
@
$
v
a
l
[
 
$
i
 
]
;

	
	
	
	
i
f
 
(
i
s
s
e
t
(
$
v
a
l
[
 
$
i
 
]
)
)
 
{

	
	
	
	
	
$
t
m
p
A
r
r
a
y
[
 
]
 
=
 
a
r
r
a
y
(
$
r
o
o
m
u
i
d
,
 
$
t
a
r
i
f
f
u
i
d
)
;

	
	
	
	
}

	
	
	
}

	
	
}


	
	
r
e
t
u
r
n
 
$
t
m
p
A
r
r
a
y
;

	
}


	
/
*
*

	
 
*
 
G
e
n
e
r
a
t
e
s
 
t
h
e
 
o
v
e
r
l
i
b
 
r
o
o
m
s
 
l
i
s
t
 
a
n
d
 
r
e
t
u
r
n
s
 
a
 
s
t
r
i
n
g
 
f
o
r
 
d
i
s
p
l
a
y
 
i
n
 
t
h
e
 
b
o
o
k
i
n
g
 
f
o
r
m
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
n
e
r
a
t
e
R
o
o
m
s
L
i
s
t
(
$
r
o
o
m
A
n
d
T
a
r
i
f
f
A
r
r
a
y
)

	
{

	
	
$
r
e
t
u
r
n
_
o
u
t
p
u
t
 
=
 
'
<
d
i
v
 
i
d
=
"
r
o
o
m
b
u
t
t
o
n
c
o
n
t
a
i
n
e
r
2
"
>
<
d
i
v
 
i
d
=
"
r
o
o
m
b
u
t
t
o
n
"
>
'
;

	
	
i
f
 
(
(
i
n
t
)
 
$
t
h
i
s
-
>
c
f
g
_
r
e
t
u
r
n
R
o
o
m
s
L
i
m
i
t
 
>
 
0
 
&
&
 
$
t
h
i
s
-
>
c
f
g
_
b
o
o
k
i
n
g
_
f
o
r
m
_
r
o
o
m
s
_
l
i
s
t
_
s
t
y
l
e
 
=
=
 
'
1
'
)
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
g
e
n
e
r
a
t
e
R
o
o
m
s
L
i
s
t
:
:
 
L
i
m
i
t
i
n
g
 
r
o
o
m
s
 
l
i
s
t
 
'
)
;

	
	
	
$
r
o
o
m
A
n
d
T
a
r
i
f
f
A
r
r
a
y
 
=
 
$
t
h
i
s
-
>
l
i
m
i
t
R
o
o
m
s
L
i
s
t
(
$
r
o
o
m
A
n
d
T
a
r
i
f
f
A
r
r
a
y
)
;

	
	
}

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
g
e
n
e
r
a
t
e
R
o
o
m
s
L
i
s
t
:
:
G
e
n
e
r
a
t
i
n
g
 
r
o
o
m
s
 
l
i
s
t
'
)
;


	
	
$
t
a
r
i
f
f
_
h
e
a
d
e
r
s
_
a
r
r
a
y
 
=
 
$
t
h
i
s
-
>
m
a
k
e
T
a
r
i
f
f
H
e
a
d
e
r
s
(
)
;

	
	
i
f
 
(
$
t
h
i
s
-
>
c
h
e
c
k
A
r
r
i
v
a
l
D
a
t
e
(
$
t
h
i
s
-
>
a
r
r
i
v
a
l
D
a
t
e
)
)
 
{

	
	
	
i
f
 
(
!
e
m
p
t
y
(
$
r
o
o
m
A
n
d
T
a
r
i
f
f
A
r
r
a
y
)
)
 
{

	
	
	
	
/
/
 
N
o
w
 
w
e
'
r
e
 
g
o
i
n
g
 
t
o
 
r
e
j
i
g
 
t
h
s
 
r
o
o
m
a
n
d
t
a
r
i
f
f
a
r
r
a
y
 
s
o
 
t
h
a
t
 
i
t
'
s
 
o
r
d
e
r
e
d
 
b
y
 
t
h
e
 
t
a
r
i
f
f
 
u
i
d
,
 
n
o
t
 
t
h
e
 
r
o
o
m
 
u
i
d

	
	
	
	
/
/
/
/
/

	
	
	
	
$
t
m
p
A
r
r
 
=
 
a
r
r
a
y
(
)
;

	
	
	
	
f
o
r
e
a
c
h
 
(
$
r
o
o
m
A
n
d
T
a
r
i
f
f
A
r
r
a
y
 
a
s
 
$
e
l
e
m
e
n
t
)
 
{

	
	
	
	
	
$
r
o
o
m
_
u
i
d
 
=
 
$
e
l
e
m
e
n
t
[
 
0
 
]
;

	
	
	
	
	
$
t
a
r
i
f
f
_
u
i
d
 
=
 
$
e
l
e
m
e
n
t
[
 
1
 
]
;

	
	
	
	
	
$
t
m
p
A
r
r
[
 
$
t
a
r
i
f
f
_
u
i
d
.
'
_
'
.
$
r
o
o
m
_
u
i
d
 
]
 
=
 
a
r
r
a
y
(
$
t
a
r
i
f
f
_
u
i
d
,
 
$
r
o
o
m
_
u
i
d
)
;

	
	
	
	
}

	
	
	
	
s
o
r
t
(
$
t
m
p
A
r
r
)
;

	
	
	
	
$
r
o
o
m
A
n
d
T
a
r
i
f
f
A
r
r
a
y
 
=
 
a
r
r
a
y
(
)
;

	
	
	
	
f
o
r
e
a
c
h
 
(
$
t
m
p
A
r
r
 
a
s
 
$
e
l
e
m
e
n
t
)
 
{

	
	
	
	
	
$
r
o
o
m
_
u
i
d
 
=
 
$
e
l
e
m
e
n
t
[
 
1
 
]
;

	
	
	
	
	
$
t
a
r
i
f
f
_
u
i
d
 
=
 
$
e
l
e
m
e
n
t
[
 
0
 
]
;

	
	
	
	
	
$
r
o
o
m
A
n
d
T
a
r
i
f
f
A
r
r
a
y
[
 
]
 
=
 
a
r
r
a
y
(
$
r
o
o
m
_
u
i
d
,
 
$
t
a
r
i
f
f
_
u
i
d
)
;

	
	
	
	
}

	
	
	
	
/
/
/
/
/
/

	
	
	
	
$
r
o
o
m
D
e
e
t
s
 
=
 
a
r
r
a
y
(
)
;

	
	
	
	
$
r
o
o
m
U
i
d
A
r
r
a
y
 
=
 
a
r
r
a
y
(
)
;

	
	
	
	
$
t
a
r
i
f
f
U
i
d
A
r
r
a
y
 
=
 
a
r
r
a
y
(
)
;

	
	
	
	
$
r
o
o
m
D
e
e
t
s
 
=
 
a
r
r
a
y
(
)
;

	
	
	
	
$
n
u
m
b
e
r
 
=
 
c
o
u
n
t
(
$
r
o
o
m
A
n
d
T
a
r
i
f
f
A
r
r
a
y
)
;

	
	
	
	
f
o
r
 
(
$
i
 
=
 
0
;
 
$
i
 
<
 
$
n
u
m
b
e
r
;
 
+
+
$
i
)
 
{

	
	
	
	
	
$
r
o
o
m
u
i
d
 
=
 
$
r
o
o
m
A
n
d
T
a
r
i
f
f
A
r
r
a
y
[
 
$
i
 
]
[
 
0
 
]
;

	
	
	
	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
g
e
n
e
r
a
t
e
R
o
o
m
s
L
i
s
t
:
:
R
o
o
m
 
u
i
d
"
.
$
r
o
o
m
u
i
d
)
;

	
	
	
	
	
$
t
a
r
i
f
f
u
i
d
 
=
 
$
r
o
o
m
A
n
d
T
a
r
i
f
f
A
r
r
a
y
[
 
$
i
 
]
[
 
1
 
]
;

	
	
	
	
	
$
r
e
s
u
l
t
 
=
 
$
t
h
i
s
-
>
m
a
k
e
R
o
o
m
T
a
r
i
f
f
D
e
t
a
i
l
s
(
$
r
o
o
m
u
i
d
,
 
$
t
a
r
i
f
f
u
i
d
)
;


	
	
	
	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
 
=
=
 
'
0
'
)
 
{

	
	
	
	
	
	
$
r
o
o
m
T
a
r
i
f
f
O
u
t
p
u
t
I
d
 
=
 
$
r
e
s
u
l
t
[
 
'
r
e
q
u
e
s
t
e
d
R
o
o
m
'
 
]
;

	
	
	
	
	
	
$
r
o
o
m
T
a
r
i
f
f
O
u
t
p
u
t
T
e
x
t
 
=
 
$
r
e
s
u
l
t
[
 
'
r
o
o
m
a
n
d
t
a
r
i
f
f
i
n
f
o
'
 
]
;

	
	
	
	
	
	
$
r
o
o
m
U
i
d
A
r
r
a
y
[
 
]
 
=
 
$
r
o
o
m
u
i
d
;

	
	
	
	
	
	
$
t
a
r
i
f
f
U
i
d
A
r
r
a
y
[
 
]
 
=
 
$
t
a
r
i
f
f
u
i
d
;

	
	
	
	
	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
b
o
o
k
i
n
g
_
f
o
r
m
_
r
o
o
m
s
_
l
i
s
t
_
s
t
y
l
e
 
=
=
 
'
1
'
)
 
{

	
	
	
	
	
	
	
$
r
o
o
m
D
e
e
t
s
[
 
]
 
=
 
$
t
h
i
s
-
>
m
a
k
e
R
o
o
m
O
v
e
r
l
i
b
d
a
t
a
(
$
r
o
o
m
u
i
d
,
 
$
t
a
r
i
f
f
u
i
d
,
 
$
r
o
o
m
T
a
r
i
f
f
O
u
t
p
u
t
I
d
,
 
$
r
o
o
m
T
a
r
i
f
f
O
u
t
p
u
t
T
e
x
t
)
;

	
	
	
	
	
	
}

	
	
	
	
	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
b
o
o
k
i
n
g
_
f
o
r
m
_
r
o
o
m
s
_
l
i
s
t
_
s
t
y
l
e
 
=
=
 
'
2
'
)
 
{

	
	
	
	
	
	
	
$
t
h
i
s
-
>
m
a
k
e
R
o
o
m
O
v
e
r
l
i
b
d
a
t
a
(
$
r
o
o
m
u
i
d
,
 
$
t
a
r
i
f
f
u
i
d
,
 
$
r
o
o
m
T
a
r
i
f
f
O
u
t
p
u
t
I
d
,
 
$
r
o
o
m
T
a
r
i
f
f
O
u
t
p
u
t
T
e
x
t
)
;

	
	
	
	
	
	
}

	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
$
r
e
t
u
r
n
_
o
u
t
p
u
t
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
S
R
P
_
W
E
H
A
V
E
V
A
C
A
N
C
I
E
S
'
,
 
'
_
J
O
M
R
E
S
_
S
R
P
_
W
E
H
A
V
E
V
A
C
A
N
C
I
E
S
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
.
'
<
f
o
n
t
 
c
o
l
o
r
=
"
w
h
i
t
e
"
>
~
<
/
f
o
n
t
>
<
d
i
v
 
i
d
=
"
a
v
a
i
l
R
o
o
m
s
"
 
c
l
a
s
s
=
"
r
o
o
m
s
l
i
s
t
"
>
<
/
d
i
v
>
'
;

	
	
	
	
	
	
$
t
h
i
s
-
>
a
d
d
T
o
S
e
l
e
c
t
e
d
R
o
o
m
s
(
$
r
e
s
u
l
t
[
 
'
r
e
q
u
e
s
t
e
d
R
o
o
m
'
 
]
)
;

	
	
	
	
	
}

	
	
	
	
}

	
	
	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
 
=
=
 
'
0
'
)
 
{

	
	
	
	
	
/
/
 
N
o
w
 
w
e
 
c
a
n
 
m
a
k
e
 
o
u
r
 
t
e
m
p
l
a
t
e
'
s
 
o
u
t
p
u
t


	
	
	
	
	
$
p
a
g
e
o
u
t
p
u
t
 
=
 
a
r
r
a
y
(
)
;

	
	
	
	
	
$
o
u
t
p
u
t
 
=
 
$
t
a
r
i
f
f
_
h
e
a
d
e
r
s
_
a
r
r
a
y
;


	
	
	
	
	
$
p
a
g
e
o
u
t
p
u
t
[
 
]
 
=
 
$
o
u
t
p
u
t
;

	
	
	
	
	
$
t
m
p
l
 
=
 
n
e
w
 
p
a
t
T
e
m
p
l
a
t
e
(
)
;

	
	
	
	
	
$
t
m
p
l
-
>
s
e
t
R
o
o
t
(
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
P
A
T
H
_
F
R
O
N
T
E
N
D
)
;

	
	
	
	
	
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
p
a
g
e
o
u
t
p
u
t
'
,
 
$
p
a
g
e
o
u
t
p
u
t
)
;

	
	
	
	
	
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
r
o
w
s
'
,
 
$
r
o
o
m
D
e
e
t
s
)
;

	
	
	
	
	
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
b
o
o
k
i
n
g
_
f
o
r
m
_
c
l
a
s
s
i
c
_
r
o
o
m
s
l
i
s
t
.
h
t
m
l
'
)
;

	
	
	
	
	
$
t
e
m
p
l
a
t
e
_
o
u
t
p
u
t
 
=
 
$
t
m
p
l
-
>
g
e
t
P
a
r
s
e
d
T
e
m
p
l
a
t
e
(
)
;

	
	
	
	
	
$
r
e
t
u
r
n
_
o
u
t
p
u
t
 
.
=
 
$
t
e
m
p
l
a
t
e
_
o
u
t
p
u
t
.
'
<
/
d
i
v
>
<
/
d
i
v
>
'
;

	
	
	
	
}

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
<
b
>
g
e
n
e
r
a
t
e
R
o
o
m
s
L
i
s
t
:
:
 
r
o
o
m
A
n
d
T
a
r
i
f
f
A
r
r
a
y
 
i
s
 
e
m
p
t
y
:
 
<
/
b
>
'
)
;

	
	
	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
 
=
=
 
'
0
'
)
 
{

	
	
	
	
	
i
f
 
(
e
m
p
t
y
(
$
r
o
o
m
A
n
d
T
a
r
i
f
f
A
r
r
a
y
)
 
&
&
 
e
m
p
t
y
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
)
)
 
{

	
	
	
	
	
	
$
r
e
t
u
r
n
_
o
u
t
p
u
t
 
=
 
'
<
d
i
v
 
c
l
a
s
s
=
"
u
i
-
s
t
a
t
e
-
h
i
g
h
l
i
g
h
t
"
>
'
.
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
Q
U
I
C
K
R
E
S
_
S
T
E
P
2
_
N
O
R
O
O
M
S
I
N
R
A
N
G
E
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
Q
U
I
C
K
R
E
S
_
S
T
E
P
2
_
N
O
R
O
O
M
S
I
N
R
A
N
G
E
'
,
 
f
a
l
s
e
)
.
'
<
/
d
i
v
>
'
;

	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
$
r
e
t
u
r
n
_
o
u
t
p
u
t
 
=
 
'
'
;

	
	
	
	
	
}

	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
$
r
e
t
u
r
n
_
o
u
t
p
u
t
 
=
 
'
<
d
i
v
>
'
.
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
S
R
P
_
W
E
H
A
V
E
N
O
V
A
C
A
N
C
I
E
S
'
,
 
'
_
J
O
M
R
E
S
_
S
R
P
_
W
E
H
A
V
E
N
O
V
A
C
A
N
C
I
E
S
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
.
'
<
f
o
n
t
 
c
o
l
o
r
=
"
w
h
i
t
e
"
>
~
<
/
f
o
n
t
>
<
d
i
v
>
<
/
d
i
v
 
i
d
=
"
a
v
a
i
l
R
o
o
m
s
"
 
c
l
a
s
s
=
"
u
i
-
s
t
a
t
e
-
e
r
r
o
r
"
>
<
/
d
i
v
>
'
;

	
	
	
	
}

	
	
	
}

	
	
}

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
g
e
n
e
r
a
t
e
R
o
o
m
s
L
i
s
t
:
:
R
e
t
u
r
n
i
n
g
 
r
o
o
m
s
 
l
i
s
t
'
)
;


	
	
r
e
t
u
r
n
 
$
r
e
t
u
r
n
_
o
u
t
p
u
t
;

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
n
e
r
a
t
e
_
r
o
o
m
_
t
y
p
e
_
d
r
o
p
d
o
w
n
s
(
)

	
{

	
	
$
d
r
o
p
d
o
w
n
_
o
u
t
p
u
t
 
=
 
a
r
r
a
y
(
)
;

	
	
/
/
 
W
e
 
n
e
e
d
 
t
o
 
s
t
r
i
p
 
o
u
t
 
r
o
o
m
s
 
f
r
o
m
 
t
h
e
 
a
v
a
i
l
a
b
l
e
 
a
r
r
a
y
s
 
i
f
 
t
h
e
y
'
v
e
 
a
l
r
e
a
d
y

	
	
/
/
 
b
e
e
n
 
s
e
l
e
c
t
e
d
 
i
n
 
c
o
n
j
u
n
c
t
i
o
n
 
w
i
t
h
 
a
n
o
t
h
e
r
 
t
a
r
i
f
f

	
	
i
f
 
(
i
s
s
e
t
(
$
t
h
i
s
-
>
r
o
o
m
_
t
y
p
e
_
s
t
y
l
e
_
o
u
t
p
u
t
)
)
 
{

	
	
	
i
f
 
(
!
e
m
p
t
y
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
)
)
 
{

	
	
	
	
/
/
 
P
a
r
s
e
 
e
a
c
h
 
o
f
 
t
h
e
 
a
l
r
e
a
d
y
 
s
e
l
e
c
t
e
d
 
r
o
o
m
s

	
	
	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
 
a
s
 
$
r
m
)
 
{

	
	
	
	
	
$
r
o
o
m
 
=
 
e
x
p
l
o
d
e
(
'
^
'
,
 
$
r
m
)
;

	
	
	
	
	
$
a
l
r
e
a
d
y
_
s
e
l
e
c
t
e
d
_
t
a
r
i
f
f
_
i
d
 
=
 
$
r
o
o
m
[
 
1
 
]
;

	
	
	
	
	
$
a
l
r
e
a
d
y
_
s
e
l
e
c
t
e
d
_
r
o
o
m
_
i
d
 
=
 
$
r
o
o
m
[
 
0
 
]
;

	
	
	
	
	
/
/
 
F
o
r
 
e
a
c
h
 
o
f
 
t
h
e
 
c
o
l
l
e
c
t
e
d
 
t
a
r
i
f
f
s
,
 
l
e
t
'
s
 
g
o
 
t
h
r
u
 
e
v
e
r
y
 
r
o
o
m
T
a
r
i
f
f
O
u
t
p
u
t
I
d

	
	
	
	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
r
o
o
m
_
t
y
p
e
_
s
t
y
l
e
_
o
u
t
p
u
t
 
a
s
 
$
t
a
r
i
f
f
_
i
d
 
=
>
 
$
t
a
r
i
f
f
_
a
n
d
_
r
o
o
m
t
y
p
e
s
)
 
{

	
	
	
	
	
	
/
/
 
I
f
 
w
e
'
r
e
 
n
o
t
 
i
n
 
t
h
e
 
c
o
l
l
e
c
t
e
d
 
t
a
r
i
f
f
s
 
s
e
t
 
t
h
a
t
 
a
r
e
 
t
h
e
 
p
a
r
t
 
o
f
 
t
h
e
 
a
l
r
e
a
d
y
 
s
e
l
e
c
t
e
d
 
s
e
t

	
	
	
	
	
	
i
f
 
(
$
t
a
r
i
f
f
_
i
d
 
!
=
 
$
a
l
r
e
a
d
y
_
s
e
l
e
c
t
e
d
_
t
a
r
i
f
f
_
i
d
)
 
{

	
	
	
	
	
	
	
$
c
u
r
r
e
n
t
_
r
o
o
m
_
c
o
u
n
t
 
=
 
c
o
u
n
t
(
$
t
a
r
i
f
f
_
a
n
d
_
r
o
o
m
t
y
p
e
s
[
 
'
r
o
o
m
T
a
r
i
f
f
O
u
t
p
u
t
I
d
'
 
]
)
;

	
	
	
	
	
	
	
/
/
 
L
o
o
p
 
t
h
r
u
 
t
a
r
i
f
f
_
a
n
d
_
r
o
o
m
t
y
p
e
s
[
'
r
o
o
m
T
a
r
i
f
f
O
u
t
p
u
t
I
d
'
]
 
a
n
d
 
s
t
r
i
p
 
o
u
t
 
a
l
l
 
r
o
o
m
s
 
t
h
a
t
 
h
a
v
e
 
t
h
e
 
s
a
m
e

	
	
	
	
	
	
	
/
/
 
i
d
 
a
s
 
a
l
r
e
a
d
y
_
s
e
l
e
c
t
e
d
_
r
o
o
m
_
i
d

	
	
	
	
	
	
	
f
o
r
e
a
c
h
 
(
$
t
a
r
i
f
f
_
a
n
d
_
r
o
o
m
t
y
p
e
s
[
 
'
r
o
o
m
T
a
r
i
f
f
O
u
t
p
u
t
I
d
'
 
]
 
a
s
 
$
k
e
y
 
=
>
 
$
r
o
o
m
T
a
r
i
f
f
O
u
t
p
u
t
I
d
)
 
{

	
	
	
	
	
	
	
	
$
c
o
l
l
e
c
t
e
d
_
r
o
o
m
_
d
a
t
a
 
=
 
e
x
p
l
o
d
e
(
'
^
'
,
 
$
r
o
o
m
T
a
r
i
f
f
O
u
t
p
u
t
I
d
)
;

	
	
	
	
	
	
	
	
$
t
h
i
s
_
r
o
o
m
_
i
d
 
=
 
$
c
o
l
l
e
c
t
e
d
_
r
o
o
m
_
d
a
t
a
[
 
0
 
]
;

	
	
	
	
	
	
	
	
i
f
 
(
$
t
h
i
s
_
r
o
o
m
_
i
d
 
=
=
 
$
a
l
r
e
a
d
y
_
s
e
l
e
c
t
e
d
_
r
o
o
m
_
i
d
)
 
{

	
	
	
	
	
	
	
	
	
u
n
s
e
t
(
$
t
h
i
s
-
>
r
o
o
m
_
t
y
p
e
_
s
t
y
l
e
_
o
u
t
p
u
t
[
 
$
t
a
r
i
f
f
_
i
d
 
]
[
 
'
r
o
o
m
T
a
r
i
f
f
O
u
t
p
u
t
I
d
'
 
]
[
 
$
k
e
y
 
]
)
;

	
	
	
	
	
	
	
	
}

	
	
	
	
	
	
	
}

	
	
	
	
	
	
}

	
	
	
	
	
}

	
	
	
	
}

	
	
	
}


	
	
	
/
/
F
i
x
 
a
n
y
 
b
r
o
k
e
n
 
i
n
d
e
c
i
e
s

	
	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
r
o
o
m
_
t
y
p
e
_
s
t
y
l
e
_
o
u
t
p
u
t
 
a
s
 
$
t
a
r
i
f
f
_
i
d
 
=
>
 
$
t
a
r
i
f
f
_
a
n
d
_
r
o
o
m
t
y
p
e
s
)
 
{

	
	
	
	
$
a
_
n
e
w
_
a
r
r
a
y
 
=
 
a
r
r
a
y
(
)
;

	
	
	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
r
o
o
m
_
t
y
p
e
_
s
t
y
l
e
_
o
u
t
p
u
t
[
 
$
t
a
r
i
f
f
_
i
d
 
]
[
 
'
r
o
o
m
T
a
r
i
f
f
O
u
t
p
u
t
I
d
'
 
]
 
a
s
 
$
r
o
o
m
T
a
r
i
f
f
O
u
t
p
u
t
I
d
)
 
{

	
	
	
	
	
$
a
_
n
e
w
_
a
r
r
a
y
[
 
]
 
=
 
$
r
o
o
m
T
a
r
i
f
f
O
u
t
p
u
t
I
d
;

	
	
	
	
}

	
	
	
	
$
t
h
i
s
-
>
r
o
o
m
_
t
y
p
e
_
s
t
y
l
e
_
o
u
t
p
u
t
[
 
$
t
a
r
i
f
f
_
i
d
 
]
[
 
'
r
o
o
m
T
a
r
i
f
f
O
u
t
p
u
t
I
d
'
 
]
 
=
 
$
a
_
n
e
w
_
a
r
r
a
y
;

	
	
	
}


	
	
	
k
s
o
r
t
(
$
t
h
i
s
-
>
r
o
o
m
_
t
y
p
e
_
s
t
y
l
e
_
o
u
t
p
u
t
)
;

	
	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
r
o
o
m
_
t
y
p
e
_
s
t
y
l
e
_
o
u
t
p
u
t
 
a
s
 
$
t
a
r
i
f
f
_
i
d
 
=
>
 
$
t
a
r
i
f
f
_
a
n
d
_
r
o
o
m
t
y
p
e
s
)
 
{

	
	
	
	
$
n
u
m
b
e
r
_
o
f
_
r
o
o
m
s
 
=
 
c
o
u
n
t
(
$
t
a
r
i
f
f
_
a
n
d
_
r
o
o
m
t
y
p
e
s
[
 
'
r
o
o
m
T
a
r
i
f
f
O
u
t
p
u
t
I
d
'
 
]
)
;


	
	
	
	
/
/
 
T
h
i
s
 
a
l
l
o
w
s
 
u
s
 
t
o
 
s
e
t
 
t
h
e
 
n
e
w
l
y
 
g
e
n
e
r
a
t
e
d
 
d
r
o
p
d
o
w
n
 
t
o
 
t
h
e
 
c
h
o
s
e
n
 
n
u
m
b
e
r
 
(
1
,
 
2
,
 
3
 
e
t
c
)

	
	
	
	
$
a
l
r
e
a
d
y
_
s
e
l
e
c
t
e
d
_
s
t
r
i
n
g
 
=
 
'
'
;

	
	
	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
 
a
s
 
$
r
m
)
 
{

	
	
	
	
	
$
r
o
o
m
 
=
 
e
x
p
l
o
d
e
(
'
^
'
,
 
$
r
m
)
;

	
	
	
	
	
$
a
l
r
e
a
d
y
_
s
e
l
e
c
t
e
d
_
t
a
r
i
f
f
_
i
d
 
=
 
$
r
o
o
m
[
 
1
 
]
;

	
	
	
	
	
i
f
 
(
$
a
l
r
e
a
d
y
_
s
e
l
e
c
t
e
d
_
t
a
r
i
f
f
_
i
d
 
=
=
 
$
t
a
r
i
f
f
_
i
d
)
 
{

	
	
	
	
	
	
$
a
l
r
e
a
d
y
_
s
e
l
e
c
t
e
d
_
s
t
r
i
n
g
 
.
=
 
$
r
m
.
'
,
'
;

	
	
	
	
	
}

	
	
	
	
}


	
	
	
	
/
/
$
t
h
i
s
-
>
s
e
t
P
o
p
u
p
M
e
s
s
a
g
e
(
"
r
o
o
m
_
t
y
p
e
_
s
t
y
l
e
_
o
u
t
p
u
t
 
"
.
$
t
a
r
i
f
f
_
i
d
.
"
 
"
.
s
e
r
i
a
l
i
z
e
(
$
a
l
r
e
a
d
y
_
s
e
l
e
c
t
e
d
_
a
r
r
a
y
)
)
;

	
	
	
	
$
r
o
o
m
_
a
n
d
_
t
a
r
i
f
f
_
o
u
t
p
u
t
I
d
s
_
s
t
r
i
n
g
 
=
 
'
'
;

	
	
	
	
$
r
o
o
m
s
_
l
i
s
t
_
s
t
y
l
e
_
d
r
o
p
d
o
w
n
 
=
 
a
r
r
a
y
(
)
;

	
	
	
	
$
r
o
o
m
s
_
l
i
s
t
_
s
t
y
l
e
_
d
r
o
p
d
o
w
n
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
0
^
'
.
$
t
a
r
i
f
f
_
i
d
,
 
s
p
r
i
n
t
f
(
'
%
0
2
d
'
,
 
0
)
)
;

	
	
	
	
f
o
r
 
(
$
i
 
=
 
1
;
 
$
i
 
<
=
 
$
n
u
m
b
e
r
_
o
f
_
r
o
o
m
s
;
 
+
+
$
i
)
 
{

	
	
	
	
	
$
r
o
o
m
_
a
n
d
_
t
a
r
i
f
f
_
o
u
t
p
u
t
I
d
s
_
s
t
r
i
n
g
 
.
=
 
$
t
a
r
i
f
f
_
a
n
d
_
r
o
o
m
t
y
p
e
s
[
 
'
r
o
o
m
T
a
r
i
f
f
O
u
t
p
u
t
I
d
'
 
]
[
 
$
i
 
-
 
1
 
]
.
'
,
'
;

	
	
	
	
	
$
r
o
o
m
s
_
l
i
s
t
_
s
t
y
l
e
_
d
r
o
p
d
o
w
n
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
$
r
o
o
m
_
a
n
d
_
t
a
r
i
f
f
_
o
u
t
p
u
t
I
d
s
_
s
t
r
i
n
g
,
 
s
p
r
i
n
t
f
(
'
%
0
2
d
'
,
 
$
i
)
)
;

	
	
	
	
}

	
	
	
	
$
d
r
o
p
d
o
w
n
_
o
u
t
p
u
t
[
 
$
t
a
r
i
f
f
_
i
d
 
]
[
 
'
d
r
o
p
d
o
w
n
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
r
o
o
m
s
_
l
i
s
t
_
s
t
y
l
e
_
d
r
o
p
d
o
w
n
,
 
'
f
r
e
d
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
-
m
i
n
i
"
 
s
i
z
e
=
"
1
"
 
 
a
u
t
o
c
o
m
p
l
e
t
e
=
"
o
f
f
"
 
o
n
c
h
a
n
g
e
=
"
g
e
t
R
e
s
p
o
n
s
e
_
m
u
l
t
i
r
o
o
m
_
s
e
l
e
c
t
(
\
'
m
u
l
t
i
r
o
o
m
_
s
e
l
e
c
t
\
'
,
t
h
i
s
.
v
a
l
u
e
)
;
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
$
a
l
r
e
a
d
y
_
s
e
l
e
c
t
e
d
_
s
t
r
i
n
g
)
;

	
	
	
	
$
d
r
o
p
d
o
w
n
_
o
u
t
p
u
t
[
 
$
t
a
r
i
f
f
_
i
d
 
]
[
 
'
r
o
o
m
_
t
y
p
e
'
 
]
 
=
 
$
t
a
r
i
f
f
_
a
n
d
_
r
o
o
m
t
y
p
e
s
[
 
'
r
o
o
m
_
t
y
p
e
'
 
]
;

	
	
	
	
$
d
r
o
p
d
o
w
n
_
o
u
t
p
u
t
[
 
$
t
a
r
i
f
f
_
i
d
 
]
[
 
'
t
a
r
i
f
f
_
t
i
t
l
e
'
 
]
 
=
 
$
t
a
r
i
f
f
_
a
n
d
_
r
o
o
m
t
y
p
e
s
[
 
'
t
a
r
i
f
f
_
t
i
t
l
e
'
 
]
;

	
	
	
	
$
d
r
o
p
d
o
w
n
_
o
u
t
p
u
t
[
 
$
t
a
r
i
f
f
_
i
d
 
]
[
 
'
r
o
o
m
_
p
r
i
c
e
_
i
n
c
_
t
a
x
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
t
a
r
i
f
f
_
a
n
d
_
r
o
o
m
t
y
p
e
s
[
 
'
r
o
o
m
_
p
r
i
c
e
_
i
n
c
_
t
a
x
'
 
]
)
;


	
	
	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
r
o
o
m
l
i
s
t
_
s
h
o
w
m
a
x
p
e
o
p
l
e
 
=
=
 
'
1
'
)
 
{

	
	
	
	
	
$
d
r
o
p
d
o
w
n
_
o
u
t
p
u
t
[
 
$
t
a
r
i
f
f
_
i
d
 
]
[
 
'
m
a
x
_
g
u
e
s
t
s
_
p
e
r
_
r
o
o
m
'
 
]
 
=
 
$
t
a
r
i
f
f
_
a
n
d
_
r
o
o
m
t
y
p
e
s
[
 
'
m
a
x
_
g
u
e
s
t
s
_
p
e
r
_
r
o
o
m
'
 
]
;

	
	
	
	
}


	
	
	
	
$
d
r
o
p
d
o
w
n
_
o
u
t
p
u
t
[
 
$
t
a
r
i
f
f
_
i
d
 
]
[
 
'
m
a
x
_
g
u
e
s
t
s
_
p
e
r
_
b
o
o
k
i
n
g
'
 
]
 
=
 
$
t
a
r
i
f
f
_
a
n
d
_
r
o
o
m
t
y
p
e
s
[
 
'
m
a
x
_
g
u
e
s
t
s
_
p
e
r
_
b
o
o
k
i
n
g
'
 
]
;

	
	
	
	
$
d
r
o
p
d
o
w
n
_
o
u
t
p
u
t
[
 
$
t
a
r
i
f
f
_
i
d
 
]
[
 
'
n
u
m
b
e
r
_
o
f
_
r
o
o
m
s
'
 
]
 
=
 
$
n
u
m
b
e
r
_
o
f
_
r
o
o
m
s
;

	
	
	
}

	
	
}


	
	
$
n
o
r
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
N
U
M
B
E
R
_
O
F
_
R
O
O
M
S
'
,
 
'
_
J
O
M
R
E
S
_
N
U
M
B
E
R
_
O
F
_
R
O
O
M
S
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

	
	
$
g
p
r
_
t
e
x
t
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
M
A
X
_
G
U
E
S
T
S
_
P
E
R
_
R
O
O
M
'
,
 
'
_
J
O
M
R
E
S
_
M
A
X
_
G
U
E
S
T
S
_
P
E
R
_
R
O
O
M
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

	
	
$
r
m
t
y
p
e
_
t
e
x
t
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
T
Y
P
E
S
_
H
E
A
D
E
R
_
L
I
N
K
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
T
Y
P
E
S
_
H
E
A
D
E
R
_
L
I
N
K
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

	
	
$
t
a
r
i
f
f
n
a
m
e
_
t
e
x
t
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
T
I
T
L
E
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
T
I
T
L
E
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;


	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
t
a
r
i
f
f
C
h
a
r
g
e
s
S
t
o
r
e
d
W
e
e
k
l
y
Y
e
s
N
o
 
!
=
 
'
1
'
)
 
{

	
	
	
i
f
 
(
$
t
h
i
s
-
>
m
r
C
o
n
f
i
g
[
 
'
w
h
o
l
e
d
a
y
_
b
o
o
k
i
n
g
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
	
$
r
a
t
e
_
t
e
x
t
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
N
_
D
A
Y
_
W
H
O
L
E
D
A
Y
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
N
_
D
A
Y
_
W
H
O
L
E
D
A
Y
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
r
a
t
e
_
t
e
x
t
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
R
O
O
M
R
A
T
E
P
E
R
D
A
Y
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
R
O
O
M
R
A
T
E
P
E
R
D
A
Y
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
	
}

	
	
}
 
e
l
s
e
 
{

	
	
	
$
r
a
t
e
_
t
e
x
t
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
R
O
O
M
R
A
T
E
P
E
R
W
E
E
K
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
R
O
O
M
R
A
T
E
P
E
R
W
E
E
K
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
}


	
	
$
g
p
b
_
t
e
x
t
 
=
 
'
'
;

	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
r
o
o
m
l
i
s
t
_
s
h
o
w
m
a
x
p
e
o
p
l
e
 
=
=
 
'
1
'
)
 
{

	
	
	
$
g
p
b
_
t
e
x
t
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
M
A
X
_
G
U
E
S
T
S
_
P
E
R
_
B
O
O
K
I
N
G
'
,
 
'
_
J
O
M
R
E
S
_
M
A
X
_
G
U
E
S
T
S
_
P
E
R
_
B
O
O
K
I
N
G
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

	
	
}


	
	
/
/
 
N
e
w
 
f
o
r
 
6
.
6
.
6

	
	
$
p
a
g
e
o
u
t
p
u
t
 
=
 
a
r
r
a
y
(
)
;

	
	
$
o
u
t
p
u
t
 
=
 
a
r
r
a
y
(
)
;


	
	
$
o
u
t
p
u
t
[
 
'
H
G
U
E
S
T
P
E
R
_
R
O
O
M
'
 
]
 
=
 
$
g
p
r
_
t
e
x
t
;

	
	
$
o
u
t
p
u
t
[
 
'
H
G
U
E
S
T
P
E
R
_
B
O
O
K
I
N
G
'
 
]
 
=
 
$
g
p
b
_
t
e
x
t
;

	
	
$
o
u
t
p
u
t
[
 
'
H
N
U
M
B
E
R
O
F
R
O
O
M
S
'
 
]
 
=
 
$
n
o
r
;

	
	
$
o
u
t
p
u
t
[
 
'
H
R
O
O
M
_
T
Y
P
E
_
T
E
X
T
'
 
]
 
=
 
$
r
m
t
y
p
e
_
t
e
x
t
;

	
	
$
o
u
t
p
u
t
[
 
'
H
T
A
R
I
F
F
_
N
A
M
E
_
T
E
X
T
'
 
]
 
=
 
$
t
a
r
i
f
f
n
a
m
e
_
t
e
x
t
;

	
	
$
o
u
t
p
u
t
[
 
'
H
R
A
T
E
_
T
E
X
T
'
 
]
 
=
 
$
r
a
t
e
_
t
e
x
t
;


	
	
$
r
o
w
s
 
=
 
a
r
r
a
y
(
)
;

	
	
f
o
r
e
a
c
h
 
(
$
d
r
o
p
d
o
w
n
_
o
u
t
p
u
t
 
a
s
 
$
r
o
u
t
p
u
t
)
 
{

	
	
	
$
r
 
=
 
a
r
r
a
y
(
)
;

	
	
	
$
r
[
 
'
G
U
E
S
T
P
E
R
_
R
O
O
M
'
 
]
 
=
 
$
r
o
u
t
p
u
t
[
 
'
m
a
x
_
g
u
e
s
t
s
_
p
e
r
_
r
o
o
m
'
 
]
;

	
	
	
$
r
[
 
'
G
U
E
S
T
P
E
R
_
B
O
O
K
I
N
G
'
 
]
 
=
 
$
r
o
u
t
p
u
t
[
 
'
m
a
x
_
g
u
e
s
t
s
_
p
e
r
_
b
o
o
k
i
n
g
'
 
]
;

	
	
	
$
r
[
 
'
N
U
M
B
E
R
O
F
R
O
O
M
S
'
 
]
 
=
 
$
r
o
u
t
p
u
t
[
 
'
d
r
o
p
d
o
w
n
'
 
]
;

	
	
	
$
r
[
 
'
R
O
O
M
_
T
Y
P
E
_
T
E
X
T
'
 
]
 
=
 
$
r
o
u
t
p
u
t
[
 
'
r
o
o
m
_
t
y
p
e
'
 
]
;

	
	
	
$
r
[
 
'
T
A
R
I
F
F
_
N
A
M
E
_
T
E
X
T
'
 
]
 
=
 
$
r
o
u
t
p
u
t
[
 
'
t
a
r
i
f
f
_
t
i
t
l
e
'
 
]
;

	
	
	
$
r
[
 
'
R
A
T
E
_
T
E
X
T
'
 
]
 
=
 
$
r
o
u
t
p
u
t
[
 
'
r
o
o
m
_
p
r
i
c
e
_
i
n
c
_
t
a
x
'
 
]
;

	
	
	
$
r
[
 
'
N
U
M
B
E
R
_
O
F
_
R
O
O
M
S
'
 
]
 
=
 
$
r
o
u
t
p
u
t
[
 
'
n
u
m
b
e
r
_
o
f
_
r
o
o
m
s
'
 
]
;

	
	
	
$
r
[
 
'
N
U
M
B
E
R
_
O
F
_
R
O
O
M
S
_
P
R
E
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
H
N
U
M
B
E
R
_
O
F
_
R
O
O
M
S
_
P
R
E
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
H
N
U
M
B
E
R
_
O
F
_
R
O
O
M
S
_
P
R
E
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

	
	
	
$
r
[
 
'
N
U
M
B
E
R
_
O
F
_
R
O
O
M
S
_
P
O
S
T
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
H
N
U
M
B
E
R
_
O
F
_
R
O
O
M
S
_
P
O
S
T
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
H
N
U
M
B
E
R
_
O
F
_
R
O
O
M
S
_
P
O
S
T
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;


	
	
	
$
r
o
w
s
[
 
]
 
=
 
$
r
;

	
	
}


	
	
$
p
a
g
e
o
u
t
p
u
t
[
 
]
 
=
 
$
o
u
t
p
u
t
;

	
	
$
t
m
p
l
 
=
 
n
e
w
 
p
a
t
T
e
m
p
l
a
t
e
(
)
;

	
	
$
t
m
p
l
-
>
s
e
t
R
o
o
t
(
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
P
A
T
H
_
F
R
O
N
T
E
N
D
)
;

	
	
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
p
a
g
e
o
u
t
p
u
t
'
,
 
$
p
a
g
e
o
u
t
p
u
t
)
;

	
	
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
r
o
w
s
'
,
 
$
r
o
w
s
)
;

	
	
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
b
o
o
k
i
n
g
_
f
o
r
m
_
r
o
o
m
t
y
p
e
_
r
o
o
m
s
l
i
s
t
.
h
t
m
l
'
)
;


	
	
r
e
t
u
r
n
 
$
t
m
p
l
-
>
g
e
t
P
a
r
s
e
d
T
e
m
p
l
a
t
e
(
)
;


	
	
/
/
r
e
t
u
r
n
 
$
r
e
t
u
r
n
_
o
u
t
p
u
t
;

	
}


	
/
*
*

	
 
*
 
F
i
n
d
 
o
u
t
 
i
f
 
t
h
i
s
 
t
a
r
i
f
f
 
h
a
s
 
a
l
r
e
a
d
y
 
b
e
e
n
 
s
e
l
e
c
t
e
d
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
i
s
A
l
r
e
a
d
y
A
S
e
l
e
c
t
e
d
O
p
t
i
o
n
(
$
r
o
o
m
T
a
r
i
f
f
O
u
t
p
u
t
I
d
)

	
{

	
	
i
f
 
(
!
e
m
p
t
y
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
)
)
 
{

	
	
	
$
c
u
r
r
e
n
t
U
i
d
s
A
r
r
a
y
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
)
;

	
	
	
f
o
r
e
a
c
h
 
(
$
c
u
r
r
e
n
t
U
i
d
s
A
r
r
a
y
 
a
s
 
$
r
o
o
m
_
t
a
r
i
f
f
)
 
{

	
	
	
	
i
f
 
(
$
r
o
o
m
T
a
r
i
f
f
O
u
t
p
u
t
I
d
 
=
=
 
$
r
o
o
m
_
t
a
r
i
f
f
)
 
{

	
	
	
	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
	
	
	
}

	
	
	
}


	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}
 
e
l
s
e
 
{

	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}

	
}


	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/

	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/


	
/
/
	
M
a
k
i
n
g
 
t
h
e
 
r
o
o
m
 
a
n
d
 
t
a
r
i
f
f
 
o
u
t
p
u
t


	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/

	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/


	
/
*
*

	
 
*
 
R
e
c
e
i
v
e
s
 
t
h
e
 
r
o
o
m
 
a
n
d
 
t
a
r
i
f
f
 
u
i
d
.
 
C
o
n
s
t
r
u
c
t
s
 
t
h
e
 
r
o
o
m
 
a
n
d
 
t
a
r
i
f
f
 
o
u
t
p
u
t
 
d
e
p
e
n
d
i
n
g
 
o
n
 
c
o
n
f
i
g
u
r
a
t
i
o
n
 
s
e
t
t
i
n
g
s
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
m
a
k
e
R
o
o
m
T
a
r
i
f
f
D
e
t
a
i
l
s
(
$
r
o
o
m
u
i
d
,
 
$
t
a
r
i
f
f
u
i
d
)

	
{

	
	
$
t
h
i
s
-
>
r
o
o
m
I
m
a
g
e
P
a
t
h
 
=
 
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
R
o
o
m
s
 
[
 
$
r
o
o
m
u
i
d
 
]
 
[
 
'
s
m
a
l
l
_
r
o
o
m
_
i
m
a
g
e
'
 
]
;

	
	
$
r
o
o
m
T
a
r
i
f
f
O
u
t
p
u
t
I
d
 
=
 
$
r
o
o
m
u
i
d
.
'
^
'
.
$
t
a
r
i
f
f
u
i
d
;

	
	
$
r
o
o
m
T
a
r
i
f
f
O
u
t
p
u
t
T
e
x
t
 
=
 
'
'
;


	
	
$
c
l
a
s
s
I
d
 
=
 
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
R
o
o
m
s
[
 
$
r
o
o
m
u
i
d
 
]
[
 
'
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
'
 
]
;


	
	
$
t
h
i
s
-
>
t
y
p
e
I
m
a
g
e
 
=
 
J
O
M
R
E
S
_
I
M
A
G
E
L
O
C
A
T
I
O
N
_
R
E
L
P
A
T
H
.
'
r
m
t
y
p
e
s
/
'
.
$
t
h
i
s
-
>
a
l
l
R
o
o
m
C
l
a
s
s
e
s
[
 
$
c
l
a
s
s
I
d
 
]
[
 
'
i
m
a
g
e
'
 
]
;


	
	
r
e
t
u
r
n
 
a
r
r
a
y
(
'
r
e
q
u
e
s
t
e
d
R
o
o
m
'
 
=
>
 
$
r
o
o
m
T
a
r
i
f
f
O
u
t
p
u
t
I
d
,
 
'
r
o
o
m
a
n
d
t
a
r
i
f
f
i
n
f
o
'
 
=
>
 
$
r
o
o
m
T
a
r
i
f
f
O
u
t
p
u
t
T
e
x
t
)
;

	
}


	
/
*
*

	
 
*
 
M
a
k
e
 
t
h
e
 
o
v
e
r
l
i
b
 
d
a
t
a
 
f
o
r
 
t
h
e
 
r
o
o
m
 
&
 
t
a
r
i
f
f
.
 
R
e
t
u
r
n
s
 
a
 
s
t
r
i
n
g
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
m
a
k
e
R
o
o
m
O
v
e
r
l
i
b
d
a
t
a
(
$
r
o
o
m
U
i
d
,
 
$
t
a
r
i
f
f
U
i
d
,
 
$
r
o
o
m
T
a
r
i
f
f
O
u
t
p
u
t
I
d
,
 
$
r
o
o
m
T
a
r
i
f
f
O
u
t
p
u
t
T
e
x
t
,
 
$
r
e
m
o
v
i
n
g
 
=
 
f
a
l
s
e
)

	
{

	
	
$
m
r
C
o
n
f
i
g
 
=
 
$
t
h
i
s
-
>
m
r
C
o
n
f
i
g
;


	
	
$
b
a
s
i
c
_
r
o
o
m
_
d
e
t
a
i
l
s
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
b
a
s
i
c
_
r
o
o
m
_
d
e
t
a
i
l
s
'
)
;

	
	
$
b
a
s
i
c
_
r
o
o
m
_
d
e
t
a
i
l
s
-
>
g
e
t
_
a
l
l
_
r
o
o
m
s
(
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
)
;


	
	
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
'
)
;

	
	
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
g
e
t
_
i
m
a
g
e
s
(
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
,
 
a
r
r
a
y
(
'
r
o
o
m
_
f
e
a
t
u
r
e
s
'
)
)
;


	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
b
o
o
k
i
n
g
_
f
o
r
m
_
r
o
o
m
s
_
l
i
s
t
_
s
t
y
l
e
 
=
=
 
'
2
'
)
 
{

	
	
	
i
f
 
(
!
i
s
s
e
t
(
$
t
h
i
s
-
>
r
o
o
m
s
_
l
i
s
t
_
s
t
y
l
e
_
r
o
o
m
s
t
a
r
i
f
f
s
)
)
 
{

	
	
	
	
$
t
h
i
s
-
>
r
o
o
m
s
_
l
i
s
t
_
s
t
y
l
e
_
r
o
o
m
s
t
a
r
i
f
f
s
 
=
 
a
r
r
a
y
(
)
;

	
	
	
	
$
t
h
i
s
-
>
r
o
o
m
s
_
l
i
s
t
_
s
t
y
l
e
_
r
o
o
m
s
t
a
r
i
f
f
s
_
c
o
n
s
t
r
u
c
t
e
d
_
d
a
t
a
 
=
 
a
r
r
a
y
(
)
;

	
	
	
	
$
t
h
i
s
-
>
r
o
o
m
_
t
y
p
e
_
s
t
y
l
e
_
o
u
t
p
u
t
 
=
 
a
r
r
a
y
(
)
;

	
	
	
}

	
	
}


	
	
$
t
a
r
i
f
f
S
t
u
f
f
 
=
 
$
t
h
i
s
-
>
G
e
t
T
a
r
i
f
f
D
e
t
a
i
l
s
(
$
t
a
r
i
f
f
U
i
d
)
;

	
	
$
r
o
o
m
S
t
u
f
f
 
=
 
$
t
h
i
s
-
>
G
e
t
R
o
o
m
D
e
t
a
i
l
s
(
$
r
o
o
m
U
i
d
)
;

	
	
i
f
 
(
!
$
r
e
m
o
v
i
n
g
)
 
{

	
	
	
$
r
o
o
m
S
t
u
f
f
[
 
'
I
C
O
N
'
 
]
 
=
 
'
i
c
o
n
-
p
l
u
s
-
2
'
;

	
	
	
$
r
o
o
m
S
t
u
f
f
[
 
'
B
U
T
T
O
N
_
C
L
A
S
S
'
 
]
 
=
 
'
b
t
n
-
s
u
c
c
e
s
s
'
;

	
	
	
$
c
a
p
t
i
o
n
 
=
 
s
a
n
i
t
i
s
e
O
v
e
r
l
i
b
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
C
L
I
C
K
H
E
R
E
C
A
P
T
I
O
N
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
C
L
I
C
K
H
E
R
E
C
A
P
T
I
O
N
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
r
o
o
m
S
t
u
f
f
[
 
'
I
C
O
N
'
 
]
 
=
 
'
i
c
o
n
-
m
i
n
u
s
-
2
'
;

	
	
	
$
r
o
o
m
S
t
u
f
f
[
 
'
B
U
T
T
O
N
_
C
L
A
S
S
'
 
]
 
=
 
'
b
t
n
-
d
a
n
g
e
r
'
;

	
	
	
$
c
a
p
t
i
o
n
 
=
 
s
a
n
i
t
i
s
e
O
v
e
r
l
i
b
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
C
L
I
C
K
H
E
R
E
C
A
P
T
I
O
N
_
R
E
M
O
V
E
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
C
L
I
C
K
H
E
R
E
C
A
P
T
I
O
N
_
R
E
M
O
V
E
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
}


	
	
i
f
 
(
$
t
h
i
s
-
>
t
a
r
i
f
f
M
o
d
e
l
 
=
=
 
'
2
'
 
&
&
 
$
m
r
C
o
n
f
i
g
[
 
'
t
a
r
i
f
f
m
o
d
e
'
 
]
 
=
=
 
'
2
'
)
 
{

	
	
	
$
t
a
r
i
f
f
S
t
u
f
f
[
 
'
R
A
T
E
P
E
R
N
I
G
H
T
'
 
]
 
=
 
$
t
h
i
s
-
>
e
s
t
i
m
a
t
e
_
A
v
e
r
a
g
e
R
a
t
e
(
$
r
o
o
m
U
i
d
,
 
$
t
a
r
i
f
f
U
i
d
)
;

	
	
}


	
	
$
r
o
o
m
_
p
r
i
c
e
_
i
n
c
_
t
a
x
 
=
 
$
t
h
i
s
-
>
c
a
l
c
u
l
a
t
e
R
o
o
m
P
r
i
c
e
I
n
c
V
a
t
(
$
t
a
r
i
f
f
S
t
u
f
f
[
 
'
R
A
T
E
P
E
R
N
I
G
H
T
'
 
]
)
;

	
	
$
t
h
i
s
-
>
r
o
o
m
_
t
y
p
e
_
s
t
y
l
e
_
o
u
t
p
u
t
[
 
$
t
a
r
i
f
f
U
i
d
 
]
[
 
'
r
o
o
m
_
p
r
i
c
e
_
i
n
c
_
t
a
x
'
 
]
 
=
 
$
r
o
o
m
_
p
r
i
c
e
_
i
n
c
_
t
a
x
;


	
	
$
t
a
r
i
f
f
S
t
u
f
f
[
 
'
F
O
R
M
A
T
T
E
D
_
P
R
I
C
E
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
t
h
i
s
-
>
g
e
t
_
r
a
t
e
_
p
e
r
_
n
i
g
h
t
_
c
o
n
v
e
r
t
e
d
_
t
o
_
o
u
t
p
u
t
_
p
e
r
i
o
d
(
$
r
o
o
m
_
p
r
i
c
e
_
i
n
c
_
t
a
x
)
)
;

	
	
$
t
a
r
i
f
f
S
t
u
f
f
[
 
'
R
O
O
M
T
A
R
I
F
F
O
U
T
P
U
T
I
D
'
 
]
 
=
 
$
r
o
o
m
T
a
r
i
f
f
O
u
t
p
u
t
I
d
;

	
	
$
t
a
r
i
f
f
S
t
u
f
f
[
 
'
C
A
P
T
I
O
N
'
 
]
 
=
 
$
c
a
p
t
i
o
n
;


	
	
$
r
o
o
m
S
t
u
f
f
[
 
'
R
O
O
M
_
T
Y
P
E
_
I
M
A
G
E
'
 
]
 
=
 
$
t
h
i
s
-
>
t
y
p
e
I
m
a
g
e
;

	
	
$
r
o
o
m
S
t
u
f
f
[
 
'
R
O
O
M
_
I
M
A
G
E
'
 
]
 
=
 
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
R
o
o
m
s
 
[
 
$
r
o
o
m
U
i
d
 
]
 
[
 
'
s
m
a
l
l
_
r
o
o
m
_
i
m
a
g
e
'
 
]
;

	
	
$
r
o
o
m
S
t
u
f
f
[
 
'
R
O
O
M
_
I
M
A
G
E
_
M
E
D
I
U
M
'
 
]
 
=
 
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
R
o
o
m
s
 
[
 
$
r
o
o
m
U
i
d
 
]
 
[
 
'
m
e
d
i
u
m
_
r
o
o
m
_
i
m
a
g
e
'
 
]
;

	
	

	
	
$
r
o
o
m
S
t
u
f
f
[
 
'
T
A
G
L
I
N
E
'
 
]
 
=
 
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
R
o
o
m
s
 
[
 
$
r
o
o
m
U
i
d
 
]
 
[
 
'
t
a
g
l
i
n
e
'
 
]
;

	
	
$
r
o
o
m
S
t
u
f
f
[
 
'
D
E
S
C
R
I
P
T
I
O
N
'
 
]
 
=
 
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
R
o
o
m
s
 
[
 
$
r
o
o
m
U
i
d
 
]
 
[
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
]
;

	
	

	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
b
o
o
k
i
n
g
_
f
o
r
m
_
r
o
o
m
s
_
l
i
s
t
_
s
t
y
l
e
 
=
=
 
'
2
'
)
 
{

	
	
	
$
t
h
i
s
-
>
r
o
o
m
s
_
l
i
s
t
_
s
t
y
l
e
_
r
o
o
m
s
t
a
r
i
f
f
s
[
 
$
t
a
r
i
f
f
U
i
d
 
]
 
=
 
a
r
r
a
y
(
'
r
o
o
m
_
t
y
p
e
_
i
d
'
 
=
>
 
$
t
a
r
i
f
f
S
t
u
f
f
[
 
'
T
A
R
I
F
F
_
R
O
O
M
T
Y
P
E
'
 
]
,
 
'
r
o
o
m
_
i
d
'
 
=
>
 
$
r
o
o
m
U
i
d
,
 
'
t
a
r
i
f
f
_
i
d
'
 
=
>
 
$
t
a
r
i
f
f
U
i
d
,
 
'
r
o
o
m
T
a
r
i
f
f
O
u
t
p
u
t
I
d
'
 
=
>
 
$
r
o
o
m
T
a
r
i
f
f
O
u
t
p
u
t
I
d
,
 
'
t
a
r
i
f
f
S
t
u
f
f
'
 
=
>
 
$
t
a
r
i
f
f
S
t
u
f
f
,
 
'
r
o
o
m
S
t
u
f
f
'
 
=
>
 
$
r
o
o
m
S
t
u
f
f
)
;


	
	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
a
l
l
R
o
o
m
C
l
a
s
s
e
s
 
a
s
 
$
r
o
o
m
_
t
y
p
e
_
i
d
 
=
>
 
$
r
o
o
m
_
t
y
p
e
)
 
{

	
	
	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
r
o
o
m
s
_
l
i
s
t
_
s
t
y
l
e
_
r
o
o
m
s
t
a
r
i
f
f
s
 
a
s
 
$
t
a
r
i
f
f
_
i
d
 
=
>
 
$
r
o
o
m
_
a
n
d
_
t
a
r
i
f
f
_
d
a
t
a
)
 
{

	
	
	
	
	
i
f
 
(
$
r
o
o
m
_
a
n
d
_
t
a
r
i
f
f
_
d
a
t
a
[
 
'
r
o
o
m
_
t
y
p
e
_
i
d
'
 
]
 
=
=
 
$
r
o
o
m
_
t
y
p
e
_
i
d
)
 
{

	
	
	
	
	
	
$
t
h
i
s
-
>
r
o
o
m
_
t
y
p
e
_
s
t
y
l
e
_
o
u
t
p
u
t
[
 
$
t
a
r
i
f
f
_
i
d
 
]
[
 
'
t
a
r
i
f
f
_
t
i
t
l
e
'
 
]
 
=
 
$
r
o
o
m
_
a
n
d
_
t
a
r
i
f
f
_
d
a
t
a
[
 
'
t
a
r
i
f
f
S
t
u
f
f
'
 
]
[
 
'
T
I
T
L
E
'
 
]
;

	
	
	
	
	
	
$
t
h
i
s
-
>
r
o
o
m
_
t
y
p
e
_
s
t
y
l
e
_
o
u
t
p
u
t
[
 
$
t
a
r
i
f
f
_
i
d
 
]
[
 
'
r
o
o
m
_
t
y
p
e
'
 
]
 
=
 
$
r
o
o
m
_
a
n
d
_
t
a
r
i
f
f
_
d
a
t
a
[
 
'
r
o
o
m
S
t
u
f
f
'
 
]
[
 
'
R
O
O
M
T
Y
P
E
'
 
]
;

	
	
	
	
	
	
$
t
h
i
s
-
>
r
o
o
m
_
t
y
p
e
_
s
t
y
l
e
_
o
u
t
p
u
t
[
 
$
t
a
r
i
f
f
_
i
d
 
]
[
 
'
r
o
o
m
T
a
r
i
f
f
O
u
t
p
u
t
I
d
'
 
]
[
 
]
 
=
 
$
r
o
o
m
_
a
n
d
_
t
a
r
i
f
f
_
d
a
t
a
[
 
'
r
o
o
m
T
a
r
i
f
f
O
u
t
p
u
t
I
d
'
 
]
;

	
	
	
	
	
	
$
t
h
i
s
-
>
r
o
o
m
_
t
y
p
e
_
s
t
y
l
e
_
o
u
t
p
u
t
[
 
$
t
a
r
i
f
f
_
i
d
 
]
[
 
'
r
o
o
m
T
a
r
i
f
f
O
u
t
p
u
t
I
d
'
 
]
 
=
 
a
r
r
a
y
_
u
n
i
q
u
e
(
$
t
h
i
s
-
>
r
o
o
m
_
t
y
p
e
_
s
t
y
l
e
_
o
u
t
p
u
t
[
 
$
t
a
r
i
f
f
_
i
d
 
]
[
 
'
r
o
o
m
T
a
r
i
f
f
O
u
t
p
u
t
I
d
'
 
]
)
;

	
	
	
	
	
	
$
t
h
i
s
-
>
r
o
o
m
_
t
y
p
e
_
s
t
y
l
e
_
o
u
t
p
u
t
[
 
$
t
a
r
i
f
f
_
i
d
 
]
[
 
'
m
a
x
_
g
u
e
s
t
s
_
p
e
r
_
r
o
o
m
'
 
]
 
=
 
$
r
o
o
m
_
a
n
d
_
t
a
r
i
f
f
_
d
a
t
a
[
 
'
r
o
o
m
S
t
u
f
f
'
 
]
[
 
'
M
A
X
P
E
O
P
L
E
_
I
N
R
O
O
M
'
 
]
;

	
	
	
	
	
	
$
t
h
i
s
-
>
r
o
o
m
_
t
y
p
e
_
s
t
y
l
e
_
o
u
t
p
u
t
[
 
$
t
a
r
i
f
f
_
i
d
 
]
[
 
'
m
a
x
_
g
u
e
s
t
s
_
p
e
r
_
b
o
o
k
i
n
g
'
 
]
 
=
 
$
r
o
o
m
_
a
n
d
_
t
a
r
i
f
f
_
d
a
t
a
[
 
'
t
a
r
i
f
f
S
t
u
f
f
'
 
]
[
 
'
M
A
X
P
E
O
P
L
E
'
 
]
;

	
	
	
	
	
}

	
	
	
	
}

	
	
	
}

	
	
}

	
	

	
	
i
f
 
(
u
s
i
n
g
_
b
o
o
t
s
t
r
a
p
(
)
 
&
&
 
j
o
m
r
e
s
_
b
o
o
t
s
t
r
a
p
_
v
e
r
s
i
o
n
(
)
 
=
=
 
'
3
'
)
 
{

	
	
	
$
e
n
d
r
u
n
_
j
a
v
a
s
c
r
i
p
t
_
f
o
r
_
e
v
a
l
_
b
y
_
h
a
n
d
l
e
r
e
q
 
=
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
e
n
d
r
u
n
_
j
a
v
a
s
c
r
i
p
t
_
f
o
r
_
e
v
a
l
_
b
y
_
h
a
n
d
l
e
r
e
q
'
)
;

	
	
	
$
e
n
d
r
u
n
_
j
a
v
a
s
c
r
i
p
t
_
f
o
r
_
e
v
a
l
_
b
y
_
h
a
n
d
l
e
r
e
q
[
$
r
o
o
m
U
i
d
.
'
_
'
.
$
t
a
r
i
f
f
U
i
d
]
 
=
 
'
;
j
o
m
r
e
s
J
q
u
e
r
y
(
d
o
c
u
m
e
n
t
)
.
r
e
a
d
y
(
f
u
n
c
t
i
o
n
(
)
{
i
f
 
(
j
o
m
r
e
s
J
q
u
e
r
y
(
\
'
b
o
d
y
 
>
 
#
r
o
o
m
d
e
t
a
i
l
s
'
.
$
r
o
o
m
U
i
d
.
'
_
'
.
$
t
a
r
i
f
f
U
i
d
.
'
\
'
)
.
l
e
n
g
t
h
 
<
 
1
)
{
j
o
m
r
e
s
J
q
u
e
r
y
(
\
'
#
r
o
o
m
d
e
t
a
i
l
s
'
.
$
r
o
o
m
U
i
d
.
'
_
'
.
$
t
a
r
i
f
f
U
i
d
.
'
\
'
)
.
a
p
p
e
n
d
T
o
(
"
b
o
d
y
"
)
;
}
e
l
s
e
{
j
o
m
r
e
s
J
q
u
e
r
y
(
\
'
b
o
d
y
 
>
 
#
r
o
o
m
d
e
t
a
i
l
s
'
.
$
r
o
o
m
U
i
d
.
'
_
'
.
$
t
a
r
i
f
f
U
i
d
.
'
\
'
)
.
r
e
p
l
a
c
e
W
i
t
h
(
j
o
m
r
e
s
J
q
u
e
r
y
(
\
'
#
r
o
o
m
d
e
t
a
i
l
s
'
.
$
r
o
o
m
U
i
d
.
'
_
'
.
$
t
a
r
i
f
f
U
i
d
.
'
\
'
)
)
;
}
;
j
o
m
r
e
s
J
q
u
e
r
y
(
\
'
.
j
o
m
r
e
s
_
b
t
_
t
o
o
l
t
i
p
_
f
e
a
t
u
r
e
s
\
'
)
.
t
i
p
s
y
(
{
h
t
m
l
:
 
t
r
u
e
,
 
f
a
d
e
:
 
t
r
u
e
,
 
g
r
a
v
i
t
y
:
 
\
'
s
w
\
'
,
 
d
e
l
a
y
O
u
t
:
 
1
0
0
}
)
;
}
)
;
'
;

	
	
	
s
e
t
_
s
h
o
w
t
i
m
e
(
'
e
n
d
r
u
n
_
j
a
v
a
s
c
r
i
p
t
_
f
o
r
_
e
v
a
l
_
b
y
_
h
a
n
d
l
e
r
e
q
'
,
 
$
e
n
d
r
u
n
_
j
a
v
a
s
c
r
i
p
t
_
f
o
r
_
e
v
a
l
_
b
y
_
h
a
n
d
l
e
r
e
q
)
;

	
	
}

	
	

	
	
r
e
t
u
r
n
 
a
r
r
a
y
_
m
e
r
g
e
(
$
r
o
o
m
S
t
u
f
f
,
 
$
t
a
r
i
f
f
S
t
u
f
f
)
;

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
c
a
l
c
u
l
a
t
e
R
o
o
m
P
r
i
c
e
I
n
c
V
a
t
(
$
p
r
i
c
e
)

	
{

	
	
i
f
 
(
$
t
h
i
s
-
>
a
c
c
o
m
m
o
d
a
t
i
o
n
_
t
a
x
_
r
a
t
e
 
>
 
0
)
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
a
l
c
u
l
a
t
e
R
o
o
m
P
r
i
c
e
I
n
c
V
a
t
:
:
T
a
x
 
r
a
t
e
 
d
e
t
e
c
t
e
d
 
a
s
 
'
.
$
t
h
i
s
-
>
a
c
c
o
m
m
o
d
a
t
i
o
n
_
t
a
x
_
r
a
t
e
)
;

	
	
	
$
p
e
r
c
e
n
t
a
g
e
T
o
A
d
d
 
=
 
$
p
r
i
c
e
 
*
 
(
$
t
h
i
s
-
>
a
c
c
o
m
m
o
d
a
t
i
o
n
_
t
a
x
_
r
a
t
e
 
/
 
1
0
0
)
;

	
	
	
$
p
r
i
c
e
 
=
 
$
p
r
i
c
e
 
+
 
$
p
e
r
c
e
n
t
a
g
e
T
o
A
d
d
;

	
	
}


	
	
r
e
t
u
r
n
 
$
p
r
i
c
e
;

	
}


	
/
*
*

	
 
*
 
R
e
t
u
r
n
s
 
d
e
t
a
i
l
s
 
o
f
 
a
 
g
i
v
e
n
 
r
o
o
m
 
a
c
c
o
r
d
i
n
g
 
t
o
 
t
h
e
 
p
a
s
s
e
d
 
r
o
o
m
 
i
d
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
G
e
t
R
o
o
m
D
e
t
a
i
l
s
(
$
r
o
o
m
U
i
d
)

	
{

	
	
$
b
a
s
i
c
_
r
o
o
m
_
d
e
t
a
i
l
s
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
b
a
s
i
c
_
r
o
o
m
_
d
e
t
a
i
l
s
'
)
;

	
	
$
b
a
s
i
c
_
r
o
o
m
_
d
e
t
a
i
l
s
-
>
g
e
t
_
a
l
l
_
r
o
o
m
s
(
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
)
;


	
	
$
r
o
o
m
 
=
 
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
R
o
o
m
s
[
 
$
r
o
o
m
U
i
d
 
]
;


	
	
$
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
 
=
 
$
r
o
o
m
[
 
'
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
'
 
]
;

	
	
$
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
 
=
 
$
r
o
o
m
[
 
'
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
'
 
]
;


	
	
$
c
l
a
s
s
A
b
b
v
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
R
O
O
M
C
L
A
S
S
_
D
E
S
C
R
I
P
T
I
O
N
'
.
$
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
,
 
$
t
h
i
s
-
>
a
l
l
R
o
o
m
C
l
a
s
s
e
s
[
 
$
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
 
]
[
 
'
r
o
o
m
_
c
l
a
s
s
_
a
b
b
v
'
 
]
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;


	
	
$
r
o
o
m
R
o
w
 
=
 
a
r
r
a
y
(
)
;

	
	
$
r
o
o
m
R
o
w
[
 
'
F
E
A
T
U
R
E
S
'
 
]
 
=
 
'
'
;


	
	
$
r
o
o
m
F
e
a
t
u
r
e
U
i
d
s
A
r
r
a
y
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
)
;

	
	
i
f
 
(
$
r
o
o
m
F
e
a
t
u
r
e
U
i
d
s
A
r
r
a
y
)
 
{

	
	
	
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
'
)
;

	
	
	
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
g
e
t
_
i
m
a
g
e
s
(
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
,
 
a
r
r
a
y
(
'
r
o
o
m
_
f
e
a
t
u
r
e
s
'
)
)
;


	
	
	
$
r
o
o
m
F
e
a
t
u
r
e
D
e
s
c
r
i
p
t
i
o
n
s
 
=
 
'
'
;

	
	
	
f
o
r
e
a
c
h
 
(
$
r
o
o
m
F
e
a
t
u
r
e
U
i
d
s
A
r
r
a
y
 
a
s
 
$
f
)
 
{

	
	
	
	
i
f
 
(
i
s
s
e
t
(
$
b
a
s
i
c
_
r
o
o
m
_
d
e
t
a
i
l
s
-
>
a
l
l
_
r
o
o
m
_
f
e
a
t
u
r
e
s
[
 
$
f
 
]
[
'
t
o
o
l
t
i
p
'
]
)
)
 
{

	
	
	
	
	
$
r
o
o
m
R
o
w
[
 
'
F
E
A
T
U
R
E
S
'
 
]
 
.
=

	
	
	
	
	
	
$
b
a
s
i
c
_
r
o
o
m
_
d
e
t
a
i
l
s
-
>
a
l
l
_
r
o
o
m
_
f
e
a
t
u
r
e
s
[
 
$
f
 
]
[
'
t
o
o
l
t
i
p
'
]
;

	
	
	
	
}

	
	
	
}

	
	
}
 
e
l
s
e
 
{

	
	
	
$
r
o
o
m
R
o
w
[
 
'
F
E
A
T
U
R
E
S
'
 
]
 
=
 
'
'
;

	
	
}


	
	
$
r
o
o
m
R
o
w
[
 
'
H
E
A
D
E
R
_
R
O
O
M
N
U
M
B
E
R
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
N
U
M
B
E
R
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
N
U
M
B
E
R
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
$
r
o
o
m
R
o
w
[
 
'
H
E
A
D
E
R
_
R
O
O
M
T
Y
P
E
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
T
Y
P
E
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
T
Y
P
E
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
$
r
o
o
m
R
o
w
[
 
'
H
E
A
D
E
R
_
R
O
O
M
N
A
M
E
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
N
A
M
E
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
N
A
M
E
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
$
r
o
o
m
R
o
w
[
 
'
H
E
A
D
E
R
_
R
O
O
M
F
L
O
O
R
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
F
L
O
O
R
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
F
L
O
O
R
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
$
r
o
o
m
R
o
w
[
 
'
H
E
A
D
E
R
_
M
A
X
P
E
O
P
L
E
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
M
A
X
P
E
O
P
L
E
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
M
A
X
P
E
O
P
L
E
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
$
r
o
o
m
R
o
w
[
 
'
H
E
A
D
E
R
_
F
E
A
T
U
R
E
S
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
F
E
A
T
U
R
E
S
_
L
I
S
T
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
F
E
A
T
U
R
E
S
_
L
I
S
T
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
$
r
o
o
m
R
o
w
[
 
'
H
T
I
T
L
E
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
T
I
T
L
E
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
T
I
T
L
E
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
$
r
o
o
m
R
o
w
[
 
'
H
M
O
R
E
I
N
F
O
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
C
L
I
C
K
F
O
R
M
O
R
E
I
N
F
O
R
M
A
T
I
O
N
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
C
L
I
C
K
F
O
R
M
O
R
E
I
N
F
O
R
M
A
T
I
O
N
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;


	
	
$
r
o
o
m
R
o
w
[
 
'
R
O
O
M
U
I
D
'
 
]
 
=
 
$
r
o
o
m
U
i
d
;

	
	
$
r
o
o
m
R
o
w
[
 
'
R
O
O
M
N
U
M
B
E
R
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
s
t
r
i
p
s
l
a
s
h
e
s
(
$
r
o
o
m
[
 
'
r
o
o
m
_
n
u
m
b
e
r
'
 
]
)
)
;

	
	
$
r
o
o
m
R
o
w
[
 
'
R
O
O
M
T
Y
P
E
'
 
]
 
=
 
$
c
l
a
s
s
A
b
b
v
;

	
	
/
/
$
r
o
o
m
R
o
w
[
'
R
O
O
M
T
Y
P
E
I
M
A
G
E
'
]
=
 
$
t
y
p
e
I
m
a
g
e
;

	
	
$
r
o
o
m
R
o
w
[
 
'
R
O
O
M
N
A
M
E
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
R
O
O
M
N
A
M
E
_
T
I
T
L
E
'
.
$
r
o
o
m
U
i
d
,
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
r
o
o
m
[
 
'
r
o
o
m
_
n
a
m
e
'
 
]
)
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
$
r
o
o
m
R
o
w
[
 
'
R
O
O
M
F
L
O
O
R
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
s
t
r
i
p
s
l
a
s
h
e
s
(
$
r
o
o
m
[
 
'
r
o
o
m
_
f
l
o
o
r
'
 
]
)
)
;

	
	
$
r
o
o
m
R
o
w
[
 
'
M
A
X
P
E
O
P
L
E
_
I
N
R
O
O
M
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
$
r
o
o
m
[
 
'
m
a
x
_
p
e
o
p
l
e
'
 
]
)
;


	
	
r
e
t
u
r
n
 
$
r
o
o
m
R
o
w
;

	
}


	
/
*
*

	
 
*
 
R
e
t
u
r
n
s
 
d
e
t
a
i
l
s
 
o
f
 
a
 
g
i
v
e
n
 
t
a
r
i
f
f
 
a
c
c
o
r
d
i
n
g
 
t
o
 
t
h
e
 
p
a
s
s
e
d
 
t
a
r
i
f
f
 
i
d
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
G
e
t
T
a
r
i
f
f
D
e
t
a
i
l
s
(
$
t
a
r
i
f
f
U
i
d
)

	
{

	
	
$
m
r
C
o
n
f
i
g
 
=
 
$
t
h
i
s
-
>
m
r
C
o
n
f
i
g
;

	
	
$
t
a
r
i
f
f
 
=
 
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
T
a
r
i
f
f
s
[
 
$
t
a
r
i
f
f
U
i
d
 
]
;

	
	

	
	
$
o
u
t
p
u
t
[
 
'
T
A
R
I
F
F
U
I
D
'
 
]
 
=
 
$
t
a
r
i
f
f
U
i
d
;


	
	
$
o
u
t
p
u
t
[
 
'
H
T
I
T
L
E
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
T
I
T
L
E
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
T
I
T
L
E
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
$
o
u
t
p
u
t
[
 
'
H
D
E
S
C
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
D
E
S
C
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
D
E
S
C
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
$
o
u
t
p
u
t
[
 
'
H
S
T
A
R
T
S
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
S
T
A
R
T
S
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
S
T
A
R
T
S
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
$
o
u
t
p
u
t
[
 
'
H
E
N
D
S
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
E
N
D
S
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
E
N
D
S
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
$
o
u
t
p
u
t
[
 
'
H
M
I
N
D
A
Y
S
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
I
N
D
A
Y
S
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
I
N
D
A
Y
S
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
$
o
u
t
p
u
t
[
 
'
H
M
A
X
D
A
Y
S
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
A
X
D
A
Y
S
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
A
X
D
A
Y
S
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
$
o
u
t
p
u
t
[
 
'
H
M
I
N
P
E
E
P
S
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
I
N
P
E
E
P
S
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
I
N
P
E
E
P
S
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
$
o
u
t
p
u
t
[
 
'
H
M
A
X
P
E
E
P
S
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
A
X
P
E
E
P
S
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
A
X
P
E
E
P
S
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;


	
	
s
w
i
t
c
h
 
(
$
t
h
i
s
-
>
c
f
g
_
b
o
o
k
i
n
g
_
f
o
r
m
_
d
a
i
l
y
_
w
e
e
k
l
y
_
m
o
n
t
h
l
y
)
 
{

	
	
	
c
a
s
e
 
'
D
'
:

	
	
	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
w
h
o
l
e
d
a
y
_
b
o
o
k
i
n
g
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
	
	
$
o
u
t
p
u
t
[
 
'
H
R
A
T
E
P
E
R
N
I
G
H
T
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
N
_
D
A
Y
_
W
H
O
L
E
D
A
Y
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
N
_
D
A
Y
_
W
H
O
L
E
D
A
Y
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
i
f
 
(
$
t
a
r
i
f
f
[
 
'
i
g
n
o
r
e
_
p
p
p
n
'
 
]
 
|
|
 
$
t
h
i
s
-
>
c
f
g
_
p
e
r
P
e
r
s
o
n
P
e
r
N
i
g
h
t
 
=
=
 
'
0
'
)
 
{

	
	
	
	
	
	
$
o
u
t
p
u
t
[
 
'
H
R
A
T
E
P
E
R
N
I
G
H
T
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
N
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
N
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
$
o
u
t
p
u
t
[
 
'
H
R
A
T
E
P
E
R
N
I
G
H
T
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
P
P
N
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
P
P
N
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
	
	
	
}

	
	
	
	
}

	
	
	
	
b
r
e
a
k
;

	
	
	
c
a
s
e
 
'
W
'
:

	
	
	
	
$
o
u
t
p
u
t
[
 
'
H
R
A
T
E
P
E
R
N
I
G
H
T
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
R
O
O
M
R
A
T
E
P
E
R
W
E
E
K
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
R
O
O
M
R
A
T
E
P
E
R
W
E
E
K
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
	
	
b
r
e
a
k
;

	
	
	
c
a
s
e
 
'
M
'
:

	
	
	
	
$
o
u
t
p
u
t
[
 
'
H
R
A
T
E
P
E
R
N
I
G
H
T
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
M
O
N
T
H
L
Y
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
M
O
N
T
H
L
Y
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
	
	
b
r
e
a
k
;

	
	
	
}


	
	
$
o
u
t
p
u
t
[
 
'
H
R
O
O
M
_
D
E
T
A
I
L
S
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
H
R
O
O
M
_
D
E
T
A
I
L
S
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
H
R
O
O
M
_
D
E
T
A
I
L
S
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
$
o
u
t
p
u
t
[
 
'
H
T
A
R
I
F
F
_
D
E
T
A
I
L
S
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
H
T
A
R
I
F
F
_
D
E
T
A
I
L
S
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
H
T
A
R
I
F
F
_
D
E
T
A
I
L
S
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;


	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
t
a
r
i
f
f
m
o
d
e
 
=
=
 
'
2
'
)
 
{

	
	
	
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
t
a
r
i
f
f
t
y
p
e
_
i
d
 
F
R
O
M
 
#
_
_
j
o
m
c
o
m
p
_
t
a
r
i
f
f
t
y
p
e
_
r
a
t
e
_
x
r
e
f
 
W
H
E
R
E
 
t
a
r
i
f
f
_
i
d
 
=
 
'
.
(
i
n
t
)
 
$
t
a
r
i
f
f
U
i
d
;

	
	
	
$
t
a
r
i
f
f
t
y
p
e
i
d
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
,
 
1
)
;

	
	
	
$
o
u
t
p
u
t
[
 
'
T
I
T
L
E
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
T
A
R
I
F
F
_
T
I
T
L
E
_
T
A
R
I
F
F
T
Y
P
E
_
I
D
'
.
$
t
a
r
i
f
f
t
y
p
e
i
d
,
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
t
a
r
i
f
f
[
 
'
r
a
t
e
_
t
i
t
l
e
'
 
]
)
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
	
$
o
u
t
p
u
t
[
 
'
D
E
S
C
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
T
A
R
I
F
F
D
E
S
C
'
.
$
t
a
r
i
f
f
t
y
p
e
i
d
,
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
t
a
r
i
f
f
[
 
'
r
a
t
e
_
d
e
s
c
r
i
p
t
i
o
n
'
 
]
)
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
o
u
t
p
u
t
[
 
'
T
I
T
L
E
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
T
A
R
I
F
F
_
T
I
T
L
E
'
.
$
t
a
r
i
f
f
U
i
d
,
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
t
a
r
i
f
f
[
 
'
r
a
t
e
_
t
i
t
l
e
'
 
]
)
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
	
$
o
u
t
p
u
t
[
 
'
D
E
S
C
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
T
A
R
I
F
F
D
E
S
C
'
.
$
t
a
r
i
f
f
U
i
d
,
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
t
a
r
i
f
f
[
 
'
r
a
t
e
_
d
e
s
c
r
i
p
t
i
o
n
'
 
]
)
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
}

	
	
$
o
u
t
p
u
t
[
 
'
V
A
L
I
D
F
R
O
M
'
 
]
 
=
 
$
t
h
i
s
-
>
o
u
t
p
u
t
D
a
t
e
(
$
t
a
r
i
f
f
[
 
'
v
a
l
i
d
f
r
o
m
'
 
]
)
;

	
	
$
o
u
t
p
u
t
[
 
'
V
A
L
I
D
T
O
'
 
]
 
=
 
$
t
h
i
s
-
>
o
u
t
p
u
t
D
a
t
e
(
$
t
a
r
i
f
f
[
 
'
v
a
l
i
d
t
o
'
 
]
)
;

	
	
$
o
u
t
p
u
t
[
 
'
M
I
N
D
A
Y
S
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
$
t
a
r
i
f
f
[
 
'
m
i
n
d
a
y
s
'
 
]
)
;

	
	
$
o
u
t
p
u
t
[
 
'
M
A
X
D
A
Y
S
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
$
t
a
r
i
f
f
[
 
'
m
a
x
d
a
y
s
'
 
]
)
;

	
	
$
o
u
t
p
u
t
[
 
'
M
I
N
P
E
O
P
L
E
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
$
t
a
r
i
f
f
[
 
'
m
i
n
p
e
o
p
l
e
'
 
]
)
;

	
	
$
o
u
t
p
u
t
[
 
'
M
A
X
P
E
O
P
L
E
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
$
t
a
r
i
f
f
[
 
'
m
a
x
p
e
o
p
l
e
'
 
]
)
;

	
	
$
o
u
t
p
u
t
[
 
'
R
A
T
E
P
E
R
N
I
G
H
T
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
$
t
a
r
i
f
f
[
 
'
r
o
o
m
r
a
t
e
p
e
r
d
a
y
'
 
]
)
;


	
	
$
o
u
t
p
u
t
[
 
'
T
A
R
I
F
F
_
R
O
O
M
T
Y
P
E
'
 
]
 
=
 
$
t
a
r
i
f
f
[
 
'
r
o
o
m
c
l
a
s
s
_
u
i
d
'
 
]
;


	
	
i
f
 
(
e
m
p
t
y
(
$
t
h
i
s
-
>
c
f
g
_
r
a
t
e
m
u
l
t
i
p
l
i
e
r
)
)
 
{

	
	
	
$
t
h
i
s
-
>
c
f
g
_
r
a
t
e
m
u
l
t
i
p
l
i
e
r
 
=
 
1
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
t
h
i
s
-
>
c
f
g
_
r
a
t
e
m
u
l
t
i
p
l
i
e
r
 
+
=
 
0
;

	
	
}


	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
w
h
o
l
e
d
a
y
_
b
o
o
k
i
n
g
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
i
f
 
(
$
t
a
r
i
f
f
[
 
'
i
g
n
o
r
e
_
p
p
p
n
'
 
]
 
|
|
 
$
t
h
i
s
-
>
c
f
g
_
p
e
r
P
e
r
s
o
n
P
e
r
N
i
g
h
t
 
=
=
 
'
0
'
)
 
{

	
	
	
	
$
o
u
t
p
u
t
[
 
'
R
O
O
M
R
A
T
E
P
E
R
D
A
Y
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
(
$
t
h
i
s
-
>
c
f
g
_
r
a
t
e
m
u
l
t
i
p
l
i
e
r
 
*
 
$
t
a
r
i
f
f
[
 
'
r
o
o
m
r
a
t
e
p
e
r
d
a
y
'
 
]
)
)
.
'
 
'
.
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
N
_
D
A
Y
_
W
H
O
L
E
D
A
Y
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
N
_
D
A
Y
_
W
H
O
L
E
D
A
Y
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
o
u
t
p
u
t
[
 
'
R
O
O
M
R
A
T
E
P
E
R
D
A
Y
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
(
$
t
h
i
s
-
>
c
f
g
_
r
a
t
e
m
u
l
t
i
p
l
i
e
r
 
*
 
$
t
a
r
i
f
f
[
 
'
r
o
o
m
r
a
t
e
p
e
r
d
a
y
'
 
]
)
)
.
'
 
'
.
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
P
P
N
_
D
A
Y
_
W
H
O
L
E
D
A
Y
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
P
P
N
_
D
A
Y
_
W
H
O
L
E
D
A
Y
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
	
}

	
	
}
 
e
l
s
e
 
{

	
	
	
i
f
 
(
$
t
a
r
i
f
f
[
 
'
i
g
n
o
r
e
_
p
p
p
n
'
 
]
 
|
|
 
$
t
h
i
s
-
>
c
f
g
_
p
e
r
P
e
r
s
o
n
P
e
r
N
i
g
h
t
 
=
=
 
'
0
'
)
 
{

	
	
	
	
$
o
u
t
p
u
t
[
 
'
R
O
O
M
R
A
T
E
P
E
R
D
A
Y
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
(
$
t
h
i
s
-
>
c
f
g
_
r
a
t
e
m
u
l
t
i
p
l
i
e
r
 
*
 
$
t
a
r
i
f
f
[
 
'
r
o
o
m
r
a
t
e
p
e
r
d
a
y
'
 
]
)
)
.
'
 
'
.
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
N
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
N
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
o
u
t
p
u
t
[
 
'
R
O
O
M
R
A
T
E
P
E
R
D
A
Y
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
(
$
t
h
i
s
-
>
c
f
g
_
r
a
t
e
m
u
l
t
i
p
l
i
e
r
 
*
 
$
t
a
r
i
f
f
[
 
'
r
o
o
m
r
a
t
e
p
e
r
d
a
y
'
 
]
)
)
.
'
 
'
.
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
P
P
N
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
P
P
N
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
	
}

	
	
}


	
	
i
f
 
(
$
t
a
r
i
f
f
[
 
'
a
l
l
o
w
_
w
e
'
 
]
 
=
=
 
'
0
'
)
 
{

	
	
	
$
o
u
t
p
u
t
[
 
'
N
O
T
W
E
E
K
E
N
D
S
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
N
O
T
W
E
E
K
E
N
D
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
N
O
T
W
E
E
K
E
N
D
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

	
	
}


	
	
r
e
t
u
r
n
 
$
o
u
t
p
u
t
;

	
}


	
/
*
*

	
 
*
 
W
e
 
w
i
l
l
 
e
s
t
i
m
a
t
e
 
t
h
e
 
a
v
e
r
a
t
e
 
r
a
t
e
 
o
v
e
r
 
t
h
e
 
b
o
o
k
i
n
g
 
p
e
r
i
o
d
 
u
s
i
n
g
 
t
h
i
s
 
m
o
d
i
f
i
e
d
 
a
n
d
 
c
u
t
 
d
o
w
n
 
v
e
r
s
i
o
n
 
o
f
 
t
h
e
 
a
v
e
r
a
g
e
 
c
a
l
c
u
l
a
t
i
o
n
 
f
u
n
c
t
i
o
n
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
e
s
t
i
m
a
t
e
_
A
v
e
r
a
g
e
R
a
t
e
(
$
r
o
o
m
U
i
d
,
 
$
t
a
r
i
f
f
U
i
d
)

	
{

	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
e
s
t
i
m
a
t
e
_
A
v
e
r
a
g
e
R
a
t
e
:
:
 
S
t
a
r
t
e
d
"
)
;

	
	
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
t
h
i
s
-
>
d
a
t
e
R
a
n
g
e
S
t
r
i
n
g
)
;

	
	
$
n
u
m
b
e
r
O
f
G
u
e
s
t
T
y
p
e
s
 
=
 
$
t
h
i
s
-
>
g
e
t
V
a
r
i
a
n
t
s
O
f
T
y
p
e
(
'
g
u
e
s
t
t
y
p
e
'
)
;

	
	
$
t
o
t
a
l
 
=
 
0
.
0
0
;

	
	
$
s
t
a
y
D
a
y
s
 
=
 
$
t
h
i
s
-
>
s
t
a
y
D
a
y
s
;


	
	
$
d
a
t
e
s
T
i
l
B
o
o
k
i
n
g
 
=
 
$
t
h
i
s
-
>
f
i
n
d
D
a
t
e
R
a
n
g
e
F
o
r
D
a
t
e
s
(
$
t
h
i
s
-
>
t
o
d
a
y
,
 
$
t
h
i
s
-
>
a
r
r
i
v
a
l
D
a
t
e
)
;


	
	
$
t
a
r
i
f
f
_
t
y
p
e
_
i
d
 
=
 
(
i
n
t
)
 
$
t
h
i
s
-
>
a
l
l
_
t
a
r
i
f
f
_
i
d
_
t
o
_
t
a
r
i
f
f
_
t
y
p
e
_
x
r
e
f
[
$
t
a
r
i
f
f
U
i
d
]
[
0
]
;


	
	
i
f
 
(
$
t
a
r
i
f
f
_
t
y
p
e
_
i
d
 
>
 
0
)
 
{
 
/
/
 
M
i
c
r
o
m
a
n
a
g
e
 
m
o
d
e
 
t
a
r
i
f
f
s

	
	
	
i
f
 
(
!
i
s
s
e
t
(
$
t
h
i
s
-
>
m
i
c
r
o
m
a
n
a
g
e
_
t
a
r
i
f
f
t
y
p
e
_
t
o
_
d
a
t
e
_
m
a
p
)
)
 
{

	
	
	
	
$
t
h
i
s
-
>
b
u
i
l
d
_
t
a
r
i
f
f
_
t
o
_
d
a
t
e
_
m
a
p
(
)
;

	
	
	
}


	
	
	
$
d
a
t
e
s
 
=
 
$
t
h
i
s
-
>
m
i
c
r
o
m
a
n
a
g
e
_
t
a
r
i
f
f
t
y
p
e
_
t
o
_
d
a
t
e
_
m
a
p
[
 
$
t
a
r
i
f
f
_
t
y
p
e
_
i
d
 
]
;


	
	
	
$
c
u
m
u
l
a
t
i
v
e
_
p
r
i
c
e
 
=
 
0
.
0
0
;

	
	
	
$
n
u
m
_
d
a
t
e
s
 
=
 
c
o
u
n
t
(
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
)
;

	
	
	
f
o
r
 
(
$
i
 
=
 
0
;
 
$
i
 
<
 
$
n
u
m
_
d
a
t
e
s
;
 
+
+
$
i
)
 
{

	
	
	
	
$
d
a
t
e
 
=
 
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
[
$
i
]
;

	
	
	
	
$
c
u
m
u
l
a
t
i
v
e
_
p
r
i
c
e
 
+
=
 
$
d
a
t
e
s
[
$
d
a
t
e
]
[
 
'
p
r
i
c
e
'
 
]
;

	
	
	
}


	
	
	
$
t
o
t
a
l
 
=
 
$
c
u
m
u
l
a
t
i
v
e
_
p
r
i
c
e
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
t
h
i
s
-
>
d
a
t
e
R
a
n
g
e
S
t
r
i
n
g
)
;

	
	
	
$
r
c
l
a
s
s
 
=
 
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
R
o
o
m
s
[
 
$
r
o
o
m
U
i
d
 
]
[
 
'
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
'
 
]
;

	
	
	
$
r
a
t
e
L
i
s
t
 
=
 
$
t
h
i
s
-
>
g
e
t
T
a
r
i
f
f
s
F
o
r
R
o
o
m
C
l
a
s
s
(
$
r
c
l
a
s
s
)
;


	
	
	
f
o
r
e
a
c
h
 
(
$
r
a
t
e
L
i
s
t
 
a
s
 
$
r
a
t
e
)
 
{

	
	
	
	
$
u
n
i
x
V
a
l
i
d
F
r
o
m
D
a
t
e
 
=
 
$
t
h
i
s
-
>
g
e
t
M
k
T
i
m
e
(
$
r
a
t
e
-
>
v
a
l
i
d
f
r
o
m
)
;

	
	
	
	
$
u
n
i
x
V
a
l
i
d
T
o
D
a
t
e
 
=
 
$
t
h
i
s
-
>
g
e
t
M
k
T
i
m
e
(
$
r
a
t
e
-
>
v
a
l
i
d
t
o
)
;


	
	
	
	
f
o
r
e
a
c
h
 
(
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
 
a
s
 
$
d
a
t
e
)
 
{

	
	
	
	
	
$
p
a
s
s
 
=
 
f
a
l
s
e
;

	
	
	
	
	
$
u
n
i
x
D
a
y
 
=
 
$
t
h
i
s
-
>
g
e
t
M
k
T
i
m
e
(
$
d
a
t
e
)
;

	
	
	
	
	
i
f
 
(
!
e
m
p
t
y
(
$
n
u
m
b
e
r
O
f
G
u
e
s
t
T
y
p
e
s
)
)
 
{

	
	
	
	
	
	
i
f
 
(
$
u
n
i
x
D
a
y
 
<
=
 
$
u
n
i
x
V
a
l
i
d
T
o
D
a
t
e
 
&
&
 
$
u
n
i
x
D
a
y
 
>
=
 
$
u
n
i
x
V
a
l
i
d
F
r
o
m
D
a
t
e
 
&
&
 
(
$
s
t
a
y
D
a
y
s
 
>
=
 
$
r
a
t
e
-
>
m
i
n
d
a
y
s
 
&
&
 
$
s
t
a
y
D
a
y
s
 
<
=
 
$
r
a
t
e
-
>
m
a
x
d
a
y
s
)
 
&
&
 
(
$
t
h
i
s
-
>
t
o
t
a
l
_
i
n
_
p
a
r
t
y
 
>
=
 
$
r
a
t
e
-
>
m
i
n
p
e
o
p
l
e
 
&
&
 
$
t
h
i
s
-
>
t
o
t
a
l
_
i
n
_
p
a
r
t
y
 
<
=
 
$
r
a
t
e
-
>
m
a
x
p
e
o
p
l
e
)
)
 
{

	
	
	
	
	
	
	
$
p
a
s
s
 
=
 
t
r
u
e
;

	
	
	
	
	
	
}

	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
i
f
 
(
$
u
n
i
x
D
a
y
 
<
=
 
$
u
n
i
x
V
a
l
i
d
T
o
D
a
t
e
 
&
&
 
$
u
n
i
x
D
a
y
 
>
=
 
$
u
n
i
x
V
a
l
i
d
F
r
o
m
D
a
t
e
 
&
&
 
(
$
s
t
a
y
D
a
y
s
 
>
=
 
$
r
a
t
e
-
>
m
i
n
d
a
y
s
 
&
&
 
$
s
t
a
y
D
a
y
s
 
<
=
 
$
r
a
t
e
-
>
m
a
x
d
a
y
s
)
)
 
{

	
	
	
	
	
	
	
$
p
a
s
s
 
=
 
t
r
u
e
;

	
	
	
	
	
	
}

	
	
	
	
	
}

	
	
	
	
	
i
f
 
(
$
p
a
s
s
)
 
{

	
	
	
	
	
	
$
t
o
t
a
l
 
+
=
 
$
r
a
t
e
-
>
r
o
o
m
r
a
t
e
p
e
r
d
a
y
;

	
	
	
	
	
}

	
	
	
	
}

	
	
	
}

	
	
}


	
	
$
r
p
n
 
=
 
(
$
t
o
t
a
l
)
 
/
 
$
s
t
a
y
D
a
y
s
;

	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
t
a
r
i
f
f
C
h
a
r
g
e
s
S
t
o
r
e
d
W
e
e
k
l
y
Y
e
s
N
o
 
=
=
 
'
1
'
 
&
&
 
e
m
p
t
y
(
$
t
a
r
i
f
f
t
y
p
e
i
d
s
)
)
 
{

	
	
	
$
r
p
n
 
=
 
$
r
p
n
 
/
 
7
;

	
	
}


	
	
/
/
 
R
e
m
o
v
e
d
 
i
n
 
9
.
1
.
2
 
(
 
J
u
l
y
 
2
0
1
5
 
)

	
	
/
/
$
r
p
n
 
=
 
$
t
h
i
s
-
>
g
e
t
_
r
a
t
e
_
p
e
r
_
n
i
g
h
t
_
c
o
n
v
e
r
t
e
d
_
t
o
_
o
u
t
p
u
t
_
p
e
r
i
o
d
(
 
$
r
p
n
 
)
;


	
	
r
e
t
u
r
n
 
$
r
p
n
;

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
m
a
k
e
T
a
r
i
f
f
H
e
a
d
e
r
s
(
)

	
{

	
	
$
m
r
C
o
n
f
i
g
 
=
 
$
t
h
i
s
-
>
m
r
C
o
n
f
i
g
;

	
	
$
r
e
t
u
r
n
_
o
u
t
p
u
t
 
=
 
'
'
;

	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
 
=
=
 
'
1
'
)
 
{

	
	
	
r
e
t
u
r
n
 
$
r
e
t
u
r
n
_
o
u
t
p
u
t
;

	
	
}


	
	
$
t
a
r
i
f
f
S
t
u
f
f
[
 
'
H
T
I
T
L
E
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
T
I
T
L
E
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
T
I
T
L
E
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
$
t
a
r
i
f
f
S
t
u
f
f
[
 
'
H
D
E
S
C
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
D
E
S
C
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
D
E
S
C
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
$
t
a
r
i
f
f
S
t
u
f
f
[
 
'
H
S
T
A
R
T
S
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
S
T
A
R
T
S
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
S
T
A
R
T
S
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
$
t
a
r
i
f
f
S
t
u
f
f
[
 
'
H
E
N
D
S
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
E
N
D
S
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
E
N
D
S
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
$
t
a
r
i
f
f
S
t
u
f
f
[
 
'
H
M
I
N
D
A
Y
S
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
I
N
D
A
Y
S
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
I
N
D
A
Y
S
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
$
t
a
r
i
f
f
S
t
u
f
f
[
 
'
H
M
A
X
D
A
Y
S
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
A
X
D
A
Y
S
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
A
X
D
A
Y
S
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
$
t
a
r
i
f
f
S
t
u
f
f
[
 
'
H
M
I
N
P
E
E
P
S
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
I
N
P
E
E
P
S
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
I
N
P
E
E
P
S
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
$
t
a
r
i
f
f
S
t
u
f
f
[
 
'
H
M
A
X
P
E
E
P
S
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
A
X
P
E
E
P
S
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
A
X
P
E
E
P
S
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
t
a
r
i
f
f
C
h
a
r
g
e
s
S
t
o
r
e
d
W
e
e
k
l
y
Y
e
s
N
o
 
!
=
 
'
1
'
)
 
{

	
	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
w
h
o
l
e
d
a
y
_
b
o
o
k
i
n
g
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
	
$
t
a
r
i
f
f
S
t
u
f
f
[
 
'
H
R
A
T
E
P
E
R
N
I
G
H
T
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
N
_
D
A
Y
_
W
H
O
L
E
D
A
Y
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
N
_
D
A
Y
_
W
H
O
L
E
D
A
Y
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
t
a
r
i
f
f
S
t
u
f
f
[
 
'
H
R
A
T
E
P
E
R
N
I
G
H
T
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
R
O
O
M
R
A
T
E
P
E
R
D
A
Y
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
R
O
O
M
R
A
T
E
P
E
R
D
A
Y
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
	
}

	
	
}
 
e
l
s
e
 
{

	
	
	
$
t
a
r
i
f
f
S
t
u
f
f
[
 
'
H
R
A
T
E
P
E
R
N
I
G
H
T
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
R
O
O
M
R
A
T
E
P
E
R
W
E
E
K
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
R
O
O
M
R
A
T
E
P
E
R
W
E
E
K
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
}


	
	
$
t
a
r
i
f
f
S
t
u
f
f
[
 
'
H
R
E
S
O
U
R
C
E
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
L
I
N
K
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
L
I
N
K
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
$
t
a
r
i
f
f
S
t
u
f
f
[
 
'
H
B
O
O
K
N
O
W
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
M
E
N
U
_
B
O
O
K
T
H
I
S
P
R
O
P
E
R
T
Y
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
M
E
N
U
_
B
O
O
K
T
H
I
S
P
R
O
P
E
R
T
Y
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;


	
	
s
w
i
t
c
h
 
(
$
t
h
i
s
-
>
c
f
g
_
b
o
o
k
i
n
g
_
f
o
r
m
_
d
a
i
l
y
_
w
e
e
k
l
y
_
m
o
n
t
h
l
y
)
 
{

	
	
	
c
a
s
e
 
'
D
'
:

	
	
	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
w
h
o
l
e
d
a
y
_
b
o
o
k
i
n
g
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
	
	
$
t
a
r
i
f
f
S
t
u
f
f
[
 
'
H
R
A
T
E
P
E
R
N
I
G
H
T
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
N
_
D
A
Y
_
W
H
O
L
E
D
A
Y
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
N
_
D
A
Y
_
W
H
O
L
E
D
A
Y
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
$
t
a
r
i
f
f
S
t
u
f
f
[
 
'
H
R
A
T
E
P
E
R
N
I
G
H
T
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
D
A
I
L
Y
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
D
A
I
L
Y
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
	
	
}

	
	
	
	
b
r
e
a
k
;

	
	
	
c
a
s
e
 
'
W
'
:

	
	
	
	
$
t
a
r
i
f
f
S
t
u
f
f
[
 
'
H
R
A
T
E
P
E
R
N
I
G
H
T
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
W
E
E
K
L
Y
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
W
E
E
K
L
Y
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
	
	
b
r
e
a
k
;

	
	
	
c
a
s
e
 
'
M
'
:

	
	
	
	
$
t
a
r
i
f
f
S
t
u
f
f
[
 
'
H
R
A
T
E
P
E
R
N
I
G
H
T
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
M
O
N
T
H
L
Y
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
M
O
N
T
H
L
Y
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
	
	
b
r
e
a
k
;

	
	
}


	
	
$
r
o
o
m
R
o
w
[
 
'
H
E
A
D
E
R
_
R
O
O
M
N
U
M
B
E
R
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
N
U
M
B
E
R
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
N
U
M
B
E
R
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
$
r
o
o
m
R
o
w
[
 
'
H
E
A
D
E
R
_
R
O
O
M
T
Y
P
E
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
T
Y
P
E
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
T
Y
P
E
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
$
r
o
o
m
R
o
w
[
 
'
H
E
A
D
E
R
_
R
O
O
M
N
A
M
E
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
N
A
M
E
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
N
A
M
E
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
$
r
o
o
m
R
o
w
[
 
'
H
E
A
D
E
R
_
R
O
O
M
F
L
O
O
R
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
F
L
O
O
R
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
F
L
O
O
R
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
$
r
o
o
m
R
o
w
[
 
'
H
E
A
D
E
R
_
M
A
X
P
E
O
P
L
E
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
M
A
X
P
E
O
P
L
E
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
M
A
X
P
E
O
P
L
E
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
$
r
o
o
m
R
o
w
[
 
'
H
E
A
D
E
R
_
F
E
A
T
U
R
E
S
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
F
E
A
T
U
R
E
S
_
L
I
S
T
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
F
E
A
T
U
R
E
S
_
L
I
S
T
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;


	
	
/
/
 
N
e
w
 
f
o
r
 
6
.
6
.
6

	
	
$
r
o
o
m
R
o
w
[
 
'
H
E
A
D
E
R
_
I
M
A
G
E
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
B
O
O
K
I
N
G
F
O
R
M
_
S
H
O
W
R
O
O
M
I
M
A
G
E
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
B
O
O
K
I
N
G
F
O
R
M
_
S
H
O
W
R
O
O
M
I
M
A
G
E
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
$
r
o
o
m
R
o
w
[
 
'
H
E
A
D
E
R
_
R
O
O
M
T
Y
P
E
'
 
]
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
T
Y
P
E
S
_
H
E
A
D
E
R
_
L
I
N
K
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
T
Y
P
E
S
_
H
E
A
D
E
R
_
L
I
N
K
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;


	
	
r
e
t
u
r
n
 
a
r
r
a
y
_
m
e
r
g
e
(
$
r
o
o
m
R
o
w
,
 
$
t
a
r
i
f
f
S
t
u
f
f
)
;

	
}


	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/

	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/


	
/
/
	
B
o
o
k
i
n
g
 
s
t
a
t
u
s
 
m
o
n
i
t
o
r
i
n
g


	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/

	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/


	
/
*
*

	
 
*
 
C
a
l
l
e
d
 
i
n
 
p
h
a
s
e
 
3
 
o
f
 
t
h
e
 
a
j
a
x
 
q
u
e
r
i
e
s
.

	
 
*
 
C
h
e
c
k
s
 
t
h
e
 
s
t
a
t
e
 
o
f
 
t
h
e
 
b
o
o
k
i
n
g
.
 
I
f
 
a
n
y
 
o
f
 
t
h
e
 
c
h
e
c
k
s
 
f
a
i
l
 
t
h
e
 
m
e
t
h
o
d
 
s
e
t
M
o
n
i
t
o
r
i
n
g
 
i
s
 
p
a
s
s
e
d
 
a
 
m
e
s
s
a
g
e
.

	
 
*
 
I
f
,
 
a
t
 
t
h
e
 
e
n
d
,
 
t
h
e
 
m
o
n
i
t
o
r
i
n
g
M
e
s
s
a
g
e
s
 
a
r
r
a
y
 
i
s
 
e
m
p
t
y
 
t
h
e
n
 
w
e
 
k
n
o
w
 
t
h
a
t
 
i
t
 
h
a
s
 
p
a
s
s
e
d
 
a
l
l
 
t
h
e
 
t
e
s
t
s
 
a
n
d
 
t
h
e
 
b
o
o
k
i
n
g
 
i
s
 
r
e
a
d
y
 
f
o
r
 
c
o
n
f
i
r
m
a
t
i
o
n
.
 
A
t
 
t
h
a
t
 
s
t
a
g
e
 
t
h
e
 
o
k
_
t
o
_
b
o
o
k
 
f
l
a
g
 
i
s
 
s
e
t
 
t
o
 
t
r
u
e
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
m
o
n
i
t
o
r
B
o
o
k
i
n
g
S
t
a
t
u
s
(
)

	
{

	
	
$
m
r
C
o
n
f
i
g
 
=
 
$
t
h
i
s
-
>
m
r
C
o
n
f
i
g
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
 
=
 
j
o
m
r
e
s
_
g
e
t
S
i
n
g
l
e
t
o
n
(
'
j
o
m
r
e
s
_
t
e
m
p
_
b
o
o
k
i
n
g
_
h
a
n
d
l
e
r
'
)
;

	
	
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
 
=
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
g
e
t
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
a
m
e
n
d
_
c
o
n
t
r
a
c
t
'
)
;


	
	
/
/
 
L
e
t
'
s
 
s
e
e
 
i
f
 
t
h
e
 
f
o
r
m
 
i
s
 
r
e
a
d
y
 
t
o
 
b
e
 
b
o
o
k
e
d
.


	
	
i
f
 
(
!
e
m
p
t
y
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
)
 
&
&
 
$
t
h
i
s
-
>
e
m
a
i
l
 
!
=
 
'
'
)
 
{

	
	
	
$
t
h
i
s
-
>
e
m
a
i
l
_
u
s
a
g
e
_
c
h
e
c
k
(
$
t
h
i
s
-
>
e
m
a
i
l
)
;

	
	
	
i
f
 
(
!
$
t
h
i
s
-
>
e
m
a
i
l
_
a
d
d
r
e
s
s
_
c
a
n
_
b
e
_
u
s
e
d
)
 
{

	
	
	
	
$
t
h
i
s
-
>
s
e
t
M
o
n
i
t
o
r
i
n
g
(
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
E
M
A
I
L
_
A
L
R
E
A
D
Y
_
I
N
_
U
S
E
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
E
M
A
I
L
_
A
L
R
E
A
D
Y
_
I
N
_
U
S
E
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
)
;

	
	
	
}

	
	
}


	
	
i
f
 
(
g
e
t
_
s
h
o
w
t
i
m
e
(
'
i
n
c
l
u
d
e
_
r
o
o
m
_
b
o
o
k
i
n
g
_
f
u
n
c
t
i
o
n
a
l
i
t
y
'
)
)
 
{

	
	
	
i
f
 
(
$
t
h
i
s
-
>
m
i
n
i
n
t
e
r
v
a
l
 
=
=
 
1
0
0
0
)
 
{
 
/
/
 
P
r
o
b
a
b
l
y
 
a
 
t
a
r
i
f
f
 
w
a
s
n
'
t
 
f
o
u
n
d

	
	
	
	
$
t
h
i
s
-
>
s
e
t
M
o
n
i
t
o
r
i
n
g
(
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
S
R
P
_
W
E
H
A
V
E
N
O
V
A
C
A
N
C
I
E
S
'
,
 
'
_
J
O
M
R
E
S
_
S
R
P
_
W
E
H
A
V
E
N
O
V
A
C
A
N
C
I
E
S
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
)
;

	
	
	
	
$
t
h
i
s
-
>
r
e
s
e
t
P
r
i
c
i
n
g
O
u
t
p
u
t
 
=
 
t
r
u
e
;

	
	
	
}


	
	
	
i
f
 
(
$
t
h
i
s
-
>
s
t
a
y
D
a
y
s
 
<
 
$
t
h
i
s
-
>
m
i
n
i
n
t
e
r
v
a
l
 
&
&
 
!
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
 
&
&
 
$
t
h
i
s
-
>
m
i
n
i
n
t
e
r
v
a
l
 
<
 
1
0
0
0
 
&
&
 
e
m
p
t
y
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
)
)
 
{

	
	
	
	
$
t
h
i
s
-
>
r
e
s
e
t
P
r
i
c
i
n
g
O
u
t
p
u
t
 
=
 
t
r
u
e
;

	
	
	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
w
h
o
l
e
d
a
y
_
b
o
o
k
i
n
g
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
M
o
n
i
t
o
r
i
n
g
(
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
B
O
O
K
I
N
G
_
T
O
O
_
S
H
O
R
T
1
_
W
H
O
L
E
D
A
Y
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
B
O
O
K
I
N
G
_
T
O
O
_
S
H
O
R
T
1
_
W
H
O
L
E
D
A
Y
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
.
'
 
'
.
$
t
h
i
s
-
>
m
i
n
i
n
t
e
r
v
a
l
.
'
 
'
.
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
B
O
O
K
I
N
G
_
T
O
O
_
S
H
O
R
T
2
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
B
O
O
K
I
N
G
_
T
O
O
_
S
H
O
R
T
2
'
,
 
f
a
l
s
e
)
.
'
 
'
.
(
$
t
h
i
s
-
>
s
t
a
y
D
a
y
s
 
-
 
1
)
)
)
;

	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
M
o
n
i
t
o
r
i
n
g
(
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
B
O
O
K
I
N
G
_
T
O
O
_
S
H
O
R
T
1
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
B
O
O
K
I
N
G
_
T
O
O
_
S
H
O
R
T
1
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
.
'
 
'
.
$
t
h
i
s
-
>
m
i
n
i
n
t
e
r
v
a
l
.
'
 
'
.
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
B
O
O
K
I
N
G
_
T
O
O
_
S
H
O
R
T
2
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
B
O
O
K
I
N
G
_
T
O
O
_
S
H
O
R
T
2
'
,
 
f
a
l
s
e
)
.
'
 
'
.
$
t
h
i
s
-
>
s
t
a
y
D
a
y
s
)
)
;

	
	
	
	
}


	
	
	
	
i
f
 
(
$
t
h
i
s
-
>
j
r
C
o
n
f
i
g
[
 
'
u
s
e
J
o
m
r
e
s
M
e
s
s
a
g
i
n
g
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
	
	
$
t
h
i
s
-
>
b
u
i
l
d
_
t
a
r
i
f
f
_
t
o
_
d
a
t
e
_
m
a
p
(
)
;

	
	
	
	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
t
a
r
i
f
f
m
o
d
e
'
 
]
 
=
=
 
'
2
'
)
 
{

	
	
	
	
	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
m
i
c
r
o
m
a
n
a
g
e
_
t
a
r
i
f
f
t
y
p
e
_
t
o
_
d
a
t
e
_
m
a
p
 
a
s
 
$
d
a
t
e
s
)
 
{

	
	
	
	
	
	
	
$
p
r
i
c
e
s
 
=
 
a
r
r
a
y
(
)
;

	
	
	
	
	
	
	
f
o
r
e
a
c
h
 
(
$
d
a
t
e
s
 
a
s
 
$
d
a
t
e
)
 
{

	
	
	
	
	
	
	
	
$
p
r
i
c
e
s
[
 
$
d
a
t
e
[
 
'
m
i
n
d
a
y
s
'
 
]
 
]
 
=
 
$
d
a
t
e
[
 
'
p
r
i
c
e
'
 
]
;

	
	
	
	
	
	
	
}

	
	
	
	
	
	
	
f
o
r
e
a
c
h
 
(
$
p
r
i
c
e
s
 
a
s
 
$
k
e
y
 
=
>
 
$
v
a
l
)
 
{

	
	
	
	
	
	
	
	
i
f
 
(
$
v
a
l
 
>
 
0
)
 
{

	
	
	
	
	
	
	
	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
p
e
r
P
e
r
s
o
n
P
e
r
N
i
g
h
t
 
=
=
 
'
1
'
)
 
{

	
	
	
	
	
	
	
	
	
	
$
p
e
r
n
i
g
h
t
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
P
P
N
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
P
P
N
'
,
 
f
a
l
s
e
)
;

	
	
	
	
	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
	
	
	
	
$
p
e
r
n
i
g
h
t
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
N
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
N
'
,
 
f
a
l
s
e
)
;

	
	
	
	
	
	
	
	
	
}

	
	
	
	
	
	
	
	
	
/
/
e
c
h
o
 
'
;
j
o
m
r
e
s
J
q
u
e
r
y
.
j
G
r
o
w
l
(
\
'
'
 
.
 
j
r
_
g
e
t
t
e
x
t
(
 
'
_
J
O
M
R
E
S
_
S
T
A
Y
F
O
R
A
M
I
N
I
M
U
M
O
F
'
,
 
_
J
O
M
R
E
S
_
S
T
A
Y
F
O
R
A
M
I
N
I
M
U
M
O
F
,
 
f
a
l
s
e
 
)
 
.
 
"
 
"
 
.
 
$
k
e
y
 
.
 
"
 
"
 
.
 
j
r
_
g
e
t
t
e
x
t
(
 
'
_
J
O
M
R
E
S
_
N
I
G
H
T
S
F
O
R
'
,
 
_
J
O
M
R
E
S
_
N
I
G
H
T
S
F
O
R
,
 
f
a
l
s
e
 
)
 
.
 
"
 
"
 
.
 
o
u
t
p
u
t
_
p
r
i
c
e
(
 
$
v
a
l
 
)
 
.
 
$
p
e
r
n
i
g
h
t
 
.
 
'
\
'
,
 
{
 
l
i
f
e
:
 
2
0
0
0
0
 
}
)
;
'
;

	
	
	
	
	
	
	
	
}

	
	
	
	
	
	
	
}

	
	
	
	
	
	
}

	
	
	
	
	
}


	
	
	
	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
t
a
r
i
f
f
m
o
d
e
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
	
	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
s
i
m
p
l
e
_
t
a
r
i
f
f
_
t
o
_
d
a
t
e
_
m
a
p
 
a
s
 
$
t
a
r
i
f
f
)
 
{

	
	
	
	
	
	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
p
e
r
P
e
r
s
o
n
P
e
r
N
i
g
h
t
 
=
=
 
'
1
'
)
 
{

	
	
	
	
	
	
	
	
$
p
e
r
n
i
g
h
t
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
P
P
N
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
P
P
N
'
,
 
f
a
l
s
e
)
;

	
	
	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
	
	
$
p
e
r
n
i
g
h
t
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
N
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
N
'
,
 
f
a
l
s
e
)
;

	
	
	
	
	
	
	
}

	
	
	
	
	
	
	
/
/
e
c
h
o
 
'
;
j
o
m
r
e
s
J
q
u
e
r
y
.
j
G
r
o
w
l
(
\
'
'
 
.
 
j
r
_
g
e
t
t
e
x
t
(
 
'
_
J
O
M
R
E
S
_
S
T
A
Y
F
O
R
A
M
I
N
I
M
U
M
O
F
'
,
 
_
J
O
M
R
E
S
_
S
T
A
Y
F
O
R
A
M
I
N
I
M
U
M
O
F
,
 
f
a
l
s
e
 
)
 
.
 
"
 
"
 
.
 
$
t
a
r
i
f
f
[
 
'
m
i
n
d
a
y
s
'
 
]
 
.
 
"
 
"
 
.
 
j
r
_
g
e
t
t
e
x
t
(
 
'
_
J
O
M
R
E
S
_
N
I
G
H
T
S
F
O
R
'
,
 
_
J
O
M
R
E
S
_
N
I
G
H
T
S
F
O
R
,
 
f
a
l
s
e
 
)
 
.
 
"
 
"
 
.
 
o
u
t
p
u
t
_
p
r
i
c
e
(
 
$
t
a
r
i
f
f
[
 
'
p
r
i
c
e
'
 
]
 
)
 
.
 
"
 
"
 
.
 
$
p
e
r
n
i
g
h
t
 
.
 
'
\
'
,
 
{
 
l
i
f
e
:
 
2
0
0
0
0
 
}
)
;
'
;

	
	
	
	
	
	
}

	
	
	
	
	
}

	
	
	
	
}

	
	
	
}


	
	
	
i
f
 
(
e
m
p
t
y
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
)
 
&
&
 
$
t
h
i
s
-
>
g
e
t
S
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
S
t
a
t
u
s
(
)
)
 
{

	
	
	
	
$
t
h
i
s
-
>
r
e
s
e
t
P
r
i
c
i
n
g
O
u
t
p
u
t
 
=
 
t
r
u
e
;

	
	
	
	
$
t
h
i
s
-
>
s
e
t
M
o
n
i
t
o
r
i
n
g
(
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
S
R
P
_
W
E
H
A
V
E
N
O
V
A
C
A
N
C
I
E
S
'
,
 
'
_
J
O
M
R
E
S
_
S
R
P
_
W
E
H
A
V
E
N
O
V
A
C
A
N
C
I
E
S
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
)
;

	
	
	
}


	
	
	
i
f
 
(
i
s
s
e
t
(
$
t
h
i
s
-
>
n
u
m
b
e
r
_
o
f
_
f
r
e
e
_
r
o
o
m
s
)
)
 
{
 
/
/
 
$
t
h
i
s
-
>
n
u
m
b
e
r
_
o
f
_
f
r
e
e
_
r
o
o
m
s
 
m
i
g
h
t
 
n
o
t
 
b
e
 
s
e
t
,
 
i
t
 
d
e
p
e
n
d
s
 
o
n
 
t
h
e
 
"
f
i
e
l
d
"
 
s
e
n
t

	
	
	
	
i
f
 
(
$
t
h
i
s
-
>
n
u
m
b
e
r
_
o
f
_
f
r
e
e
_
r
o
o
m
s
 
=
=
 
0
 
&
&
 
(
$
t
h
i
s
-
>
c
u
r
r
e
n
t
F
i
e
l
d
 
=
=
 
'
a
r
r
i
v
a
l
D
a
t
e
'
 
|
|
 
$
t
h
i
s
-
>
c
u
r
r
e
n
t
F
i
e
l
d
 
=
=
 
'
d
e
p
a
r
t
u
r
e
D
a
t
e
'
 
|
|
 
$
t
h
i
s
-
>
c
u
r
r
e
n
t
F
i
e
l
d
 
=
=
 
'
g
u
e
s
t
t
y
p
e
'
)
)
 
{

	
	
	
	
	
$
t
h
i
s
-
>
r
e
s
e
t
P
r
i
c
i
n
g
O
u
t
p
u
t
 
=
 
t
r
u
e
;

	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
M
o
n
i
t
o
r
i
n
g
(
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
S
R
P
_
W
E
H
A
V
E
N
O
V
A
C
A
N
C
I
E
S
'
,
 
'
_
J
O
M
R
E
S
_
S
R
P
_
W
E
H
A
V
E
N
O
V
A
C
A
N
C
I
E
S
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
)
;

	
	
	
	
}

	
	
	
}


	
	
	
i
f
 
(
!
$
t
h
i
s
-
>
c
h
e
c
k
A
r
r
i
v
a
l
D
a
t
e
(
$
t
h
i
s
-
>
a
r
r
i
v
a
l
D
a
t
e
)
)
 
{

	
	
	
	
$
t
h
i
s
-
>
r
e
s
e
t
P
r
i
c
i
n
g
O
u
t
p
u
t
 
=
 
t
r
u
e
;

	
	
	
	
$
t
h
i
s
-
>
s
e
t
M
o
n
i
t
o
r
i
n
g
(
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
A
R
R
I
V
A
L
D
A
T
E
_
I
N
V
A
L
I
D
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
A
R
R
I
V
A
L
D
A
T
E
_
I
N
V
A
L
I
D
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
)
;

	
	
	
}


	
	
	
/
/
 
i
f
 
(
!
$
t
h
i
s
-
>
c
h
e
c
k
D
e
p
a
r
t
u
r
e
D
a
t
e
(
$
t
h
i
s
-
>
d
e
p
a
r
t
u
r
e
D
a
t
e
)
 
)

	
	
	
/
/
 
{

	
	
	
/
/
 
$
t
h
i
s
-
>
r
e
s
e
t
P
r
i
c
i
n
g
O
u
t
p
u
t
=
t
r
u
e
;

	
	
	
/
/
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
'
w
h
o
l
e
d
a
y
_
b
o
o
k
i
n
g
'
]
 
=
=
 
"
1
"
)

	
	
	
/
/
 
$
t
h
i
s
-
>
s
e
t
M
o
n
i
t
o
r
i
n
g
(
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
D
E
P
A
R
T
U
R
E
D
A
T
E
_
I
N
V
A
L
I
D
_
W
H
O
L
E
D
A
Y
'
,
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
D
E
P
A
R
T
U
R
E
D
A
T
E
_
I
N
V
A
L
I
D
_
W
H
O
L
E
D
A
Y
,
f
a
l
s
e
,
f
a
l
s
e
)
)
)
;

	
	
	
/
/
 
e
l
s
e

	
	
	
/
/
 
$
t
h
i
s
-
>
s
e
t
M
o
n
i
t
o
r
i
n
g
(
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
D
E
P
A
R
T
U
R
E
D
A
T
E
_
I
N
V
A
L
I
D
'
,
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
D
E
P
A
R
T
U
R
E
D
A
T
E
_
I
N
V
A
L
I
D
,
f
a
l
s
e
,
f
a
l
s
e
)
)
)
;

	
	
	
/
/
 
}


	
	
	
$
n
u
m
b
e
r
O
f
G
u
e
s
t
T
y
p
e
s
 
=
 
$
t
h
i
s
-
>
g
e
t
V
a
r
i
a
n
t
s
O
f
T
y
p
e
(
'
g
u
e
s
t
t
y
p
e
'
)
;

	
	
	

	
	
	
$
r
e
q
u
e
s
t
e
d
R
o
o
m
_
c
o
u
n
t
 
=
 
c
o
u
n
t
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
)
;


	
	
	
f
o
r
e
a
c
h
 
(
$
n
u
m
b
e
r
O
f
G
u
e
s
t
T
y
p
e
s
 
a
s
 
$
r
)
 
{

	
	
	
	
i
f
 
(
!
$
t
h
i
s
-
>
c
h
e
c
k
G
u
e
s
t
V
a
r
i
a
n
t
I
d
A
n
d
Q
t
y
(
$
r
[
 
'
i
d
'
 
]
,
 
$
r
[
 
'
q
t
y
'
 
]
)
)
 
{

	
	
	
	
	
$
t
h
i
s
-
>
r
e
s
e
t
P
r
i
c
i
n
g
O
u
t
p
u
t
 
=
 
t
r
u
e
;

	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
M
o
n
i
t
o
r
i
n
g
(
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
G
U
E
S
T
_
T
Y
P
E
_
I
N
C
O
R
R
E
C
T
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
G
U
E
S
T
_
T
Y
P
E
_
I
N
C
O
R
R
E
C
T
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
)
;

	
	
	
	
}

	
	
	
}

	
	
	
i
f
 
(
$
t
h
i
s
-
>
t
o
t
a
l
_
i
n
_
p
a
r
t
y
 
<
 
1
 
&
&
 
!
e
m
p
t
y
(
$
n
u
m
b
e
r
O
f
G
u
e
s
t
T
y
p
e
s
)
)
 
{

	
	
	
	
$
t
h
i
s
-
>
r
e
s
e
t
P
r
i
c
i
n
g
O
u
t
p
u
t
 
=
 
t
r
u
e
;

	
	
	
	
$
t
h
i
s
-
>
s
e
t
M
o
n
i
t
o
r
i
n
g
(
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
S
E
L
E
C
T
_
G
U
E
S
T
_
N
U
M
B
E
R
S
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
S
E
L
E
C
T
_
G
U
E
S
T
_
N
U
M
B
E
R
S
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
)
;

	
	
	
}

	
	
	
i
f
 
(
!
e
m
p
t
y
(
$
n
u
m
b
e
r
O
f
G
u
e
s
t
T
y
p
e
s
)
 
&
&
 
!
$
t
h
i
s
-
>
t
a
r
i
f
f
s
C
a
n
H
o
s
t
T
o
t
a
l
I
n
P
a
r
t
y
(
)
)
 
{

	
	
	
	
$
t
h
i
s
-
>
r
e
s
e
t
P
r
i
c
i
n
g
O
u
t
p
u
t
 
=
 
t
r
u
e
;

	
	
	
	
$
t
h
i
s
-
>
s
e
t
M
o
n
i
t
o
r
i
n
g
(
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
T
O
O
_
M
A
N
Y
_
I
N
_
P
A
R
T
Y
_
F
O
R
_
T
A
R
I
F
F
S
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
T
O
O
_
M
A
N
Y
_
I
N
_
P
A
R
T
Y
_
F
O
R
_
T
A
R
I
F
F
S
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
)
;

	
	
	
}

	
	
	
i
f
 
(
$
t
h
i
s
-
>
t
o
t
a
l
_
i
n
_
p
a
r
t
y
 
<
 
$
r
e
q
u
e
s
t
e
d
R
o
o
m
_
c
o
u
n
t
 
&
&
 
!
e
m
p
t
y
(
$
n
u
m
b
e
r
O
f
G
u
e
s
t
T
y
p
e
s
)
)
 
{

	
	
	
	
$
t
h
i
s
-
>
r
e
s
e
t
P
r
i
c
i
n
g
O
u
t
p
u
t
 
=
 
t
r
u
e
;

	
	
	
	
$
t
h
i
s
-
>
s
e
t
M
o
n
i
t
o
r
i
n
g
(
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
M
O
R
E
_
R
O
O
M
S
_
T
H
A
N
_
G
U
E
S
T
S
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
M
O
R
E
_
R
O
O
M
S
_
T
H
A
N
_
G
U
E
S
T
S
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
)
;

	
	
	
}

	
	
	
/
/
i
f
 
(
$
t
h
i
s
-
>
t
o
t
a
l
_
i
n
_
p
a
r
t
y
 
>
 
$
t
h
i
s
-
>
b
e
d
s
_
a
v
a
i
l
a
b
l
e
 
&
&
 
c
o
u
n
t
(
$
r
e
s
u
l
t
)
>
0
 
&
&
 
c
o
u
n
t
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
 
)
 
>
 
0
)

	
	
	
i
f
 
(
$
t
h
i
s
-
>
t
o
t
a
l
_
i
n
_
p
a
r
t
y
 
>
 
$
t
h
i
s
-
>
b
e
d
s
_
a
v
a
i
l
a
b
l
e
 
&
&
 
!
e
m
p
t
y
(
$
n
u
m
b
e
r
O
f
G
u
e
s
t
T
y
p
e
s
)
)
 
{

	
	
	
	
$
t
h
i
s
-
>
r
e
s
e
t
P
r
i
c
i
n
g
O
u
t
p
u
t
 
=
 
t
r
u
e
;

	
	
	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
 
!
=
 
'
1
'
)
 
{

	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
M
o
n
i
t
o
r
i
n
g
(
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
T
O
O
_
M
A
N
Y
_
G
U
E
S
T
S
_
F
O
R
_
B
E
D
S
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
T
O
O
_
M
A
N
Y
_
G
U
E
S
T
S
_
F
O
R
_
B
E
D
S
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
)
;

	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
M
o
n
i
t
o
r
i
n
g
(
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
S
R
P
_
W
E
H
A
V
E
N
O
V
A
C
A
N
C
I
E
S
'
,
 
'
_
J
O
M
R
E
S
_
S
R
P
_
W
E
H
A
V
E
N
O
V
A
C
A
N
C
I
E
S
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
)
;

	
	
	
	
}

	
	
	
}

	
	
	
i
f
 
(
!
e
m
p
t
y
(
$
n
u
m
b
e
r
O
f
G
u
e
s
t
T
y
p
e
s
)
 
&
&
 
$
r
e
q
u
e
s
t
e
d
R
o
o
m
_
c
o
u
n
t
 
>
 
0
 
&
&
 
!
$
t
h
i
s
-
>
s
e
l
e
c
t
e
d
R
o
o
m
s
C
a
n
H
o
s
t
T
o
t
a
l
I
n
P
a
r
t
y
(
)
)
 
{

	
	
	
	
$
t
h
i
s
-
>
r
e
s
e
t
P
r
i
c
i
n
g
O
u
t
p
u
t
 
=
 
t
r
u
e
;

	
	
	
	
$
t
h
i
s
-
>
s
e
t
M
o
n
i
t
o
r
i
n
g
(
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
C
H
O
O
S
E
_
M
O
R
E
_
R
O
O
M
S
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
C
H
O
O
S
E
_
M
O
R
E
_
R
O
O
M
S
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
)
;

	
	
	
}

	
	
	
i
f
 
(
e
m
p
t
y
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
)
)
 
{

	
	
	
	
$
t
h
i
s
-
>
r
e
s
e
t
P
r
i
c
i
n
g
O
u
t
p
u
t
 
=
 
t
r
u
e
;

	
	
	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
 
!
=
 
'
1
'
)
 
{

	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
M
o
n
i
t
o
r
i
n
g
(
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
S
E
L
E
C
T
_
A
_
R
O
O
M
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
S
E
L
E
C
T
_
A
_
R
O
O
M
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
)
;

	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
M
o
n
i
t
o
r
i
n
g
(
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
Q
U
I
C
K
R
E
S
_
S
T
E
P
4
_
T
I
T
L
E
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
Q
U
I
C
K
R
E
S
_
S
T
E
P
4
_
T
I
T
L
E
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
)
;

	
	
	
	
}

	
	
	
}

	
	
}


	
	
i
f
 
(
!
g
e
t
_
s
h
o
w
t
i
m
e
(
'
i
n
c
l
u
d
e
_
r
o
o
m
_
b
o
o
k
i
n
g
_
f
u
n
c
t
i
o
n
a
l
i
t
y
'
)
)
 
{

	
	
	
$
q
u
a
n
t
i
t
y
 
=
 
0
;

	
	
	
i
f
 
(
!
e
m
p
t
y
(
$
t
h
i
s
-
>
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
)
)
 
{

	
	
	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
 
a
s
 
$
t
p
e
)
 
{

	
	
	
	
	
i
f
 
(
!
e
m
p
t
y
(
$
t
p
e
)
)
 
{

	
	
	
	
	
	
$
q
u
a
n
t
i
t
y
 
=
 
1
;

	
	
	
	
	
}
 
/
/
 
W
e
 
d
o
n
'
t
 
c
a
r
e
 
h
o
w
 
m
a
n
y
 
e
x
t
r
a
s
 
t
h
e
r
e
 
a
r
e
,
 
s
o
 
l
o
n
g
 
a
s
 
a
t
 
l
e
a
s
t
 
o
n
e
 
h
a
s
 
b
e
e
n
 
s
e
l
e
c
t
e
d
.

	
	
	
	
	
/
/
$
t
h
i
s
-
>
s
e
t
P
o
p
u
p
M
e
s
s
a
g
e
(
"
j
i
n
t
o
u
r
 
"
.
s
e
r
i
a
l
i
z
e
(
$
t
h
i
s
-
>
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
)
)
;

	
	
	
	
}

	
	
	
}

	
	
	
$
e
x
t
r
a
s
A
r
r
a
y
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
t
h
i
s
-
>
e
x
t
r
a
s
)
;

	
	
	
f
o
r
e
a
c
h
 
(
$
e
x
t
r
a
s
A
r
r
a
y
 
a
s
 
$
e
x
t
r
a
)
 
{

	
	
	
	
i
f
 
(
$
e
x
t
r
a
 
!
=
 
'
'
)
 
{

	
	
	
	
	
$
q
u
a
n
t
i
t
y
 
=
 
$
q
u
a
n
t
i
t
y
 
+
 
$
t
h
i
s
-
>
e
x
t
r
a
s
q
u
a
n
t
i
t
i
e
s
[
 
$
e
x
t
r
a
 
]
;

	
	
	
	
}

	
	
	
	
/
/
$
t
h
i
s
-
>
s
e
t
P
o
p
u
p
M
e
s
s
a
g
e
(
$
q
u
a
n
t
i
t
y
)
;

	
	
	
}

	
	
	
i
f
 
(
$
q
u
a
n
t
i
t
y
 
=
=
 
0
)
 
{

	
	
	
	
$
t
h
i
s
-
>
s
e
t
M
o
n
i
t
o
r
i
n
g
(
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
E
X
T
R
A
S
_
S
E
L
E
C
T
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
E
X
T
R
A
S
_
S
E
L
E
C
T
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
)
;

	
	
	
}

	
	
}


	
	
/
/
$
t
h
i
s
-
>
s
e
t
P
o
p
u
p
M
e
s
s
a
g
e
(
'
'
)
;


	
	
i
f
 
(
$
t
h
i
s
-
>
g
e
t
M
o
n
i
t
o
r
i
n
g
N
u
m
b
e
r
O
f
M
e
s
s
a
g
e
s
(
)
 
=
=
 
0
)
 
{

	
	
	
$
t
h
i
s
-
>
o
k
_
t
o
_
b
o
o
k
 
=
 
t
r
u
e
;

	
	
}

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
o
u
t
p
u
t
Z
e
r
o
P
r
i
c
e
s
(
)

	
{

	
	
i
f
 
(
$
t
h
i
s
-
>
g
e
t
G
u
e
s
t
V
a
r
i
a
n
t
C
o
u
n
t
(
)
 
>
 
0
)
 
{

	
	
	
$
t
h
i
s
-
>
e
c
h
o
_
p
o
p
u
l
a
t
e
_
d
i
v
(
'
;
 
p
o
p
u
l
a
t
e
D
i
v
(
"
t
o
t
a
l
i
n
p
a
r
t
y
"
,
"
'
.
$
t
h
i
s
-
>
g
e
t
T
o
t
a
l
I
n
P
a
r
t
y
(
)
.
'
"
)
'
)
;

	
	
}


	
	
$
s
t
a
y
d
a
y
s
 
=
 
$
t
h
i
s
-
>
g
e
t
S
t
a
y
D
a
y
s
(
)
;

	
	
$
n
u
m
_
p
e
r
i
o
d
 
=
 
$
t
h
i
s
-
>
g
e
t
_
p
a
r
t
_
o
f
_
s
t
a
y
_
p
e
r
i
o
d
(
$
s
t
a
y
d
a
y
s
)
;

	
	
$
t
h
i
s
-
>
e
c
h
o
_
p
o
p
u
l
a
t
e
_
d
i
v
(
'
;
 
p
o
p
u
l
a
t
e
D
i
v
(
"
s
t
a
y
d
a
y
s
"
,
"
'
.
$
n
u
m
_
p
e
r
i
o
d
.
'
"
)
'
)
;

	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
t
a
r
i
f
f
C
h
a
r
g
e
s
S
t
o
r
e
d
W
e
e
k
l
y
Y
e
s
N
o
 
=
=
 
'
0
'
)
 
{

	
	
	
$
t
h
i
s
-
>
e
c
h
o
_
p
o
p
u
l
a
t
e
_
d
i
v
(
'
;
 
p
o
p
u
l
a
t
e
D
i
v
(
"
r
o
o
m
p
e
r
n
i
g
h
t
"
,
"
'
.
o
u
t
p
u
t
_
p
r
i
c
e
(
'
0
.
0
0
'
)
.
'
"
)
'
)
;

	
	
}

	
	
$
t
h
i
s
-
>
e
c
h
o
_
p
o
p
u
l
a
t
e
_
d
i
v
(
'
;
 
p
o
p
u
l
a
t
e
D
i
v
(
"
r
o
o
m
t
o
t
a
l
"
,
"
'
.
o
u
t
p
u
t
_
p
r
i
c
e
(
'
0
.
0
0
'
)
.
'
"
)
'
)
;

	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
s
h
o
w
E
x
t
r
a
s
)
 
{

	
	
	
$
t
h
i
s
-
>
e
c
h
o
_
p
o
p
u
l
a
t
e
_
d
i
v
(
'
;
 
p
o
p
u
l
a
t
e
D
i
v
(
"
e
x
t
r
a
s
t
o
t
a
l
"
,
"
'
.
o
u
t
p
u
t
_
p
r
i
c
e
(
'
0
.
0
0
'
)
.
'
"
)
'
)
;

	
	
}

	
	
i
f
 
(
$
t
h
i
s
-
>
j
r
C
o
n
f
i
g
[
 
'
s
h
o
w
_
t
a
x
_
i
n
_
t
o
t
a
l
s
_
s
u
m
m
a
r
y
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
$
t
h
i
s
-
>
e
c
h
o
_
p
o
p
u
l
a
t
e
_
d
i
v
(
'
;
 
p
o
p
u
l
a
t
e
D
i
v
(
"
t
a
x
t
o
t
a
l
"
,
"
'
.
o
u
t
p
u
t
_
p
r
i
c
e
(
'
0
.
0
0
'
)
.
'
"
)
'
)
;

	
	
}

	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
s
i
n
g
l
e
P
e
r
s
o
n
S
u
p
p
l
i
m
e
n
t
 
=
=
 
'
1
'
)
 
{

	
	
	
$
t
h
i
s
-
>
e
c
h
o
_
p
o
p
u
l
a
t
e
_
d
i
v
(
'
;
 
p
o
p
u
l
a
t
e
D
i
v
(
"
s
i
n
g
l
e
_
s
u
p
p
l
i
m
e
n
t
"
,
"
'
.
o
u
t
p
u
t
_
p
r
i
c
e
(
'
0
.
0
0
'
)
.
'
"
)
'
)
;

	
	
}

	
	
$
t
h
i
s
-
>
e
c
h
o
_
p
o
p
u
l
a
t
e
_
d
i
v
(
'
;
 
p
o
p
u
l
a
t
e
D
i
v
(
"
g
r
a
n
d
t
o
t
a
l
"
,
"
'
.
o
u
t
p
u
t
_
p
r
i
c
e
(
'
0
.
0
0
'
)
.
'
"
)
'
)
;

	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
s
h
o
w
D
e
p
o
s
i
t
 
=
=
 
'
1
'
)
 
{

	
	
	
$
t
h
i
s
-
>
e
c
h
o
_
p
o
p
u
l
a
t
e
_
d
i
v
(
'
;
 
p
o
p
u
l
a
t
e
D
i
v
(
"
d
e
p
o
s
i
t
"
,
"
'
.
o
u
t
p
u
t
_
p
r
i
c
e
(
'
0
.
0
0
'
)
.
'
"
)
'
)
;

	
	
}

	
	
$
t
h
i
s
-
>
e
c
h
o
_
p
o
p
u
l
a
t
e
_
d
i
v
(
'
;
 
p
o
p
u
l
a
t
e
D
i
v
(
"
d
i
s
c
o
u
n
t
"
,
"
"
)
'
)
;

	
	
$
t
h
i
s
-
>
e
c
h
o
_
p
o
p
u
l
a
t
e
_
d
i
v
(
'
;
 
p
o
p
u
l
a
t
e
D
i
v
(
"
c
o
u
p
o
n
_
d
i
s
c
o
u
n
t
_
v
a
l
u
e
"
,
"
"
)
'
)
;

	
}


	
/
*
*

	
 
*
 
S
e
t
s
 
t
h
e
 
o
k
_
t
o
_
b
o
o
k
 
f
l
a
g
.
 
D
e
f
a
u
l
t
 
i
s
 
f
a
l
s
e
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
O
k
T
o
B
o
o
k
(
$
v
a
l
 
=
 
f
a
l
s
e
)

	
{

	
	
$
t
h
i
s
-
>
o
k
_
t
o
_
b
o
o
k
 
=
 
$
v
a
l
;

	
}


	
/
*
*

	
 
*
 
R
e
t
u
r
n
s
 
t
h
e
 
v
a
l
u
e
 
o
f
 
t
h
e
 
o
k
_
t
o
_
b
o
o
k
 
f
l
a
g
.
 
U
s
e
d
 
b
y
 
t
h
e
 
h
a
n
d
l
e
r
e
q
 
s
c
r
i
p
t
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
O
k
T
o
B
o
o
k
(
)

	
{

	
	
r
e
t
u
r
n
 
$
t
h
i
s
-
>
o
k
_
t
o
_
b
o
o
k
;

	
}


	
/
*
*

	
 
*
 
I
n
s
e
r
t
s
 
t
h
e
 
m
e
s
s
a
g
e
 
i
n
t
o
 
t
h
e
 
m
o
n
i
t
o
r
i
n
g
M
e
s
s
a
g
e
s
 
a
r
r
a
y
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
M
o
n
i
t
o
r
i
n
g
(
$
m
e
s
s
a
g
e
)

	
{

	
	
i
f
 
(
!
i
s
s
e
t
(
$
m
e
s
s
a
g
e
)
 
|
|
 
e
m
p
t
y
(
$
m
e
s
s
a
g
e
)
)
 
{

	
	
	
$
m
e
s
s
a
g
e
 
=
 
'
E
m
p
t
y
 
m
e
s
s
a
g
e
!
'
;

	
	
}

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
s
e
t
M
o
n
i
t
o
r
i
n
g
:
:
M
o
n
i
t
o
r
i
n
g
 
m
e
s
s
a
g
e
 
'
.
$
m
e
s
s
a
g
e
)
;

	
	
$
t
h
i
s
-
>
m
o
n
i
t
o
r
i
n
g
M
e
s
s
a
g
e
s
[
 
]
 
=
 
$
m
e
s
s
a
g
e
;

	
}


	
/
*
*

	
 
*
 
R
e
t
u
r
n
s
 
t
h
e
 
n
u
m
b
e
r
 
o
f
 
m
e
s
s
a
g
e
s
 
i
n
 
t
h
e
 
m
o
n
i
t
o
r
i
n
g
M
e
s
s
a
g
e
s
 
a
r
r
a
y
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
M
o
n
i
t
o
r
i
n
g
N
u
m
b
e
r
O
f
M
e
s
s
a
g
e
s
(
)

	
{

	
	
r
e
t
u
r
n
 
c
o
u
n
t
(
$
t
h
i
s
-
>
m
o
n
i
t
o
r
i
n
g
M
e
s
s
a
g
e
s
)
;

	
}


	
/
*
*

	
 
*
 
G
e
t
 
t
h
e
 
f
i
r
s
t
 
m
e
s
s
a
g
e
 
i
n
 
t
h
e
 
m
o
n
i
t
o
r
i
n
g
M
e
s
s
a
g
e
s
 
a
r
r
a
y
.
 
T
h
i
s
 
i
s
 
t
h
e
 
f
i
r
s
t
 
t
e
s
t
 
t
h
a
t
 
t
h
e
 
m
o
n
i
t
o
r
i
n
g
 
m
e
t
h
o
d
 
f
a
i
l
e
d
 
t
h
e
 
b
o
o
k
i
n
g
 
o
n
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
m
o
n
i
t
o
r
G
e
t
F
i
r
s
t
M
e
s
s
a
g
e
(
)

	
{

	
	
r
e
t
u
r
n
 
$
t
h
i
s
-
>
m
o
n
i
t
o
r
i
n
g
M
e
s
s
a
g
e
s
[
 
0
 
]
;

	
}


	
/
*
*

	
 
*
 
R
e
t
u
r
n
 
a
l
l
 
t
h
e
 
m
e
s
s
a
g
e
s
 
a
s
 
a
 
s
t
r
i
n
g
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
m
o
n
i
t
o
r
G
e
t
A
l
l
M
e
s
s
a
g
e
s
(
)

	
{

	
	
i
f
 
(
!
e
m
p
t
y
(
$
t
h
i
s
-
>
m
o
n
i
t
o
r
i
n
g
M
e
s
s
a
g
e
s
)
)
 
{

	
	
	
$
m
e
s
s
a
g
e
S
t
r
i
n
g
 
=
 
'
'
;

	
	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
m
o
n
i
t
o
r
i
n
g
M
e
s
s
a
g
e
s
 
a
s
 
$
m
e
s
s
a
g
e
)
 
{

	
	
	
	
$
m
e
s
s
a
g
e
S
t
r
i
n
g
 
.
=
 
h
t
m
l
e
n
t
i
t
i
e
s
(
$
m
e
s
s
a
g
e
)
.
'
<
b
r
/
>
'
;

	
	
	
}


	
	
	
r
e
t
u
r
n
 
$
t
h
i
s
-
>
e
r
r
o
r
;

	
	
}

	
}


	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/

	
/
/
 
O
t
h
e
r
 
m
o
n
i
t
o
r
i
n
g
 
f
u
n
c
t
i
o
n
s

	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/


	
/
*
*

	
 
*
 
C
h
e
c
k
 
t
h
a
t
 
t
h
e
 
s
e
l
e
c
t
e
d
 
r
o
o
m
s
 
c
a
n
 
a
c
c
o
m
o
d
a
t
e
 
t
h
e
 
t
o
t
a
l
 
i
n
 
t
h
e
 
p
a
r
t
y
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
l
e
c
t
e
d
R
o
o
m
s
C
a
n
H
o
s
t
T
o
t
a
l
I
n
P
a
r
t
y
(
)

	
{

	
	
$
r
o
o
m
T
o
t
a
l
B
e
d
s
 
=
 
0
;

	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
 
a
s
 
$
r
m
)
 
{

	
	
	
$
r
o
o
m
 
=
 
e
x
p
l
o
d
e
(
'
^
'
,
 
$
r
m
)
;

	
	
	
$
r
m
u
i
d
 
=
 
$
r
o
o
m
[
 
0
 
]
;

	
	
	
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
 
m
a
x
_
p
e
o
p
l
e
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
r
o
o
m
s
 
W
H
E
R
E
 
r
o
o
m
_
u
i
d
 
=
 
'
$
r
m
u
i
d
'
"
;

	
	
	
$
m
a
x
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
,
 
1
)
;

	
	
	
$
r
o
o
m
T
o
t
a
l
B
e
d
s
 
+
=
 
$
m
a
x
;

	
	
}

	
	
i
f
 
(
$
r
o
o
m
T
o
t
a
l
B
e
d
s
 
<
 
$
t
h
i
s
-
>
t
o
t
a
l
_
i
n
_
p
a
r
t
y
)
 
{

	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}
 
e
l
s
e
 
{

	
	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
	
}

	
}


	
/
*
*

	
 
*
 
C
h
e
c
k
 
t
h
a
t
 
t
h
e
 
s
e
l
e
c
t
e
d
 
t
a
r
i
f
f
 
c
a
n
 
a
c
c
o
m
o
d
a
t
e
 
t
h
e
 
t
o
t
a
l
 
i
n
 
t
h
e
 
p
a
r
t
y
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
t
a
r
i
f
f
s
C
a
n
H
o
s
t
T
o
t
a
l
I
n
P
a
r
t
y
(
)

	
{

	
	
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
m
a
x
p
e
o
p
l
e
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
r
a
t
e
s
 
W
H
E
R
E
 
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
'
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
'
 
O
R
D
E
R
 
b
y
 
m
a
x
p
e
o
p
l
e
 
d
e
s
c
 
L
I
M
I
T
 
1
"
;

	
	
$
m
a
x
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
,
 
1
)
;

	
	
i
f
 
(
$
m
a
x
 
<
 
$
t
h
i
s
-
>
t
o
t
a
l
_
i
n
_
p
a
r
t
y
)
 
{

	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}
 
e
l
s
e
 
{

	
	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
	
}

	
}


	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/

	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/


	
/
/
	
B
i
l
l
i
n
g


	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/

	
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/


	
/
*
*

	
 
*
 
S
e
t
 
t
h
e
 
v
a
r
i
a
n
t
 
v
a
l
u
e
s
,
 
R
e
t
u
r
n
s
 
t
r
u
e
 
o
r
 
f
a
l
s
e
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
V
a
r
i
a
n
t
V
a
l
u
e
s
(
)

	
{

	
	
i
f
 
(
!
g
e
t
_
s
h
o
w
t
i
m
e
(
'
i
n
c
l
u
d
e
_
r
o
o
m
_
b
o
o
k
i
n
g
_
f
u
n
c
t
i
o
n
a
l
i
t
y
'
)
)
 
{

	
	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
	
}


	
	
i
f
 
(
$
t
h
i
s
-
>
s
e
t
G
u
e
s
t
T
y
p
e
V
a
r
i
a
n
t
V
a
l
u
e
s
(
)
)
 
{

	
	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
	
}
 
e
l
s
e
 
{

	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}

	
}


	
/
*
*

	
 
*
 
C
a
l
c
u
l
a
t
e
 
h
o
w
 
m
u
c
h
 
t
o
 
c
h
a
r
g
e
 
p
e
r
 
p
e
r
s
o
n

	
 
*
 
F
i
n
d
 
t
h
e
 
v
a
l
u
e
 
o
f
 
t
h
e
 
s
e
l
e
c
t
e
d
 
g
u
e
s
t
 
t
y
p
e
s
,
 
a
s
 
a
 
v
a
r
i
a
t
i
o
n
 
o
f
 
t
h
e
 
b
a
s
i
c
 
r
o
o
m
 
p
e
r
 
n
i
g
h
t
 
o
f
 
a
l
l
 
t
h
e
 
s
e
l
e
c
t
e
d
 
r
o
o
m
s

	
 
*
 
E
g
.
 
y
o
u
 
h
a
v
e
 
t
w
o
 
r
o
o
m
s
,
 
o
n
e
 
a
n
d
 
$
2
0
 
a
n
d
 
o
n
e
 
a
t
 
$
4
0
,
 
t
h
e
 
b
a
s
i
c
 
v
a
l
u
e
 
o
f
 
t
h
e
 
r
o
o
m
s
 
i
s
 
$
3
0
 
p
e
r
 
n
i
g
h
t
.

	
 
*
 
T
h
e
 
g
u
e
s
t
 
v
a
l
u
e
s
 
a
r
e
 
c
a
l
c
u
l
a
t
e
d
 
a
s
 
a
 
'
v
a
r
i
a
t
i
o
n
'
 
f
r
o
m
 
t
h
e
 
b
a
s
i
c
 
r
o
o
m
 
v
a
l
u
e
.

	
 
*
 
W
h
i
l
s
t
 
t
h
i
s
 
c
a
l
c
u
l
a
t
i
o
n
 
i
s
 
d
o
n
e
 
e
v
e
r
y
 
t
i
m
e
,
 
t
h
e
 
d
e
c
i
s
i
o
n
 
a
s
 
t
o
 
w
h
e
t
h
e
r
 
o
r
 
n
o
t
 
t
o
 
a
p
p
l
y
 
t
h
i
s
 
v
a
r
i
a
t
i
o
n
 
i
s
 
m
a
d
e
 
e
l
s
e
w
h
e
r
e
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
G
u
e
s
t
T
y
p
e
V
a
r
i
a
n
t
V
a
l
u
e
s
(
)

	
{

	
	
$
r
e
s
u
l
t
 
=
 
$
t
h
i
s
-
>
g
e
t
V
a
r
i
a
n
t
s
O
f
T
y
p
e
(
'
g
u
e
s
t
t
y
p
e
'
)
;

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
s
e
t
G
u
e
s
t
T
y
p
e
V
a
r
i
a
n
t
V
a
l
u
e
s
:
:
F
o
u
n
d
 
v
a
r
i
a
n
t
s
 
o
f
 
g
u
e
s
t
t
y
p
e
:
 
'
.
c
o
u
n
t
(
$
r
e
s
u
l
t
)
)
;

	
	
$
m
r
C
o
n
f
i
g
 
=
 
$
t
h
i
s
-
>
m
r
C
o
n
f
i
g
;

	
	
i
f
 
(
!
e
m
p
t
y
(
$
r
e
s
u
l
t
)
)
 
{

	
	
	
$
r
a
t
e
P
e
r
N
i
g
h
t
 
=
 
$
t
h
i
s
-
>
r
a
t
e
_
p
e
r
n
i
g
h
t
;

	
	
	
$
r
a
t
e
P
e
r
N
i
g
h
t
_
n
o
d
i
s
c
o
u
n
t
 
=
 
$
t
h
i
s
-
>
r
a
t
e
_
p
e
r
n
i
g
h
t
_
n
o
d
i
s
c
o
u
n
t
;


	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
s
e
t
G
u
e
s
t
T
y
p
e
V
a
r
i
a
n
t
V
a
l
u
e
s
:
:
S
e
t
t
i
n
g
 
v
a
r
i
a
n
t
 
v
a
l
u
e
s
'
)
;

	
	
	
f
o
r
e
a
c
h
 
(
$
r
e
s
u
l
t
 
a
s
 
$
r
)
 
{

	
	
	
	
$
i
d
 
=
 
$
r
[
 
'
i
d
'
 
]
;

	
	
	
	
$
q
t
y
 
=
 
$
r
[
 
'
q
t
y
'
 
]
;

	
	
	
	
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
`
i
s
_
p
e
r
c
e
n
t
a
g
e
`
,
`
p
o
s
n
e
g
`
,
`
v
a
r
i
a
n
c
e
`
 
F
R
O
M
 
`
#
_
_
j
o
m
r
e
s
_
c
u
s
t
o
m
e
r
t
y
p
e
s
`
 
w
h
e
r
e
 
i
d
 
=
 
'
$
i
d
'
 
"
;

	
	
	
	
$
g
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
,
 
2
)
;

	
	
	
	
i
f
 
(
$
g
t
)
 
{

	
	
	
	
	
$
v
a
r
i
a
n
c
e
 
=
 
$
g
t
[
 
'
v
a
r
i
a
n
c
e
'
 
]
;

	
	
	
	
	
s
e
t
t
y
p
e
(
$
v
a
r
i
a
n
c
e
,
 
'
f
l
o
a
t
'
)
;

	
	
	
	
	
i
f
 
(
$
g
t
[
 
'
i
s
_
p
e
r
c
e
n
t
a
g
e
'
 
]
 
=
=
 
'
0
'
)
 
{

	
	
	
	
	
	
$
r
a
t
e
 
=
 
$
t
h
i
s
-
>
a
c
c
o
m
m
o
d
a
t
i
o
n
_
t
a
x
_
r
a
t
e
;

	
	
	
	
	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
p
r
i
c
e
s
_
i
n
c
l
u
s
i
v
e
'
 
]
 
=
=
 
1
)
 
{

	
	
	
	
	
	
	
$
d
i
v
i
s
o
r
 
=
 
(
$
r
a
t
e
 
/
 
1
0
0
)
 
+
 
1
;

	
	
	
	
	
	
	
$
v
a
r
i
a
n
c
e
 
=
 
$
v
a
r
i
a
n
c
e
 
/
 
$
d
i
v
i
s
o
r
;

	
	
	
	
	
	
}


	
	
	
	
	
	
i
f
 
(
$
g
t
[
 
'
p
o
s
n
e
g
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
	
	
	
	
$
v
a
l
 
=
 
$
r
a
t
e
P
e
r
N
i
g
h
t
 
+
 
$
v
a
r
i
a
n
c
e
;

	
	
	
	
	
	
	
$
v
a
l
_
n
o
d
i
s
c
o
u
n
t
 
=
 
$
r
a
t
e
P
e
r
N
i
g
h
t
_
n
o
d
i
s
c
o
u
n
t
 
+
 
$
v
a
r
i
a
n
c
e
;

	
	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
	
$
v
a
l
 
=
 
$
r
a
t
e
P
e
r
N
i
g
h
t
 
-
 
$
v
a
r
i
a
n
c
e
;

	
	
	
	
	
	
	
$
v
a
l
_
n
o
d
i
s
c
o
u
n
t
 
=
 
$
r
a
t
e
P
e
r
N
i
g
h
t
_
n
o
d
i
s
c
o
u
n
t
 
-
 
$
v
a
r
i
a
n
c
e
;

	
	
	
	
	
	
}

	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
i
f
 
(
$
g
t
[
 
'
p
o
s
n
e
g
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
	
	
	
	
$
v
a
l
 
=
 
(
(
$
r
a
t
e
P
e
r
N
i
g
h
t
 
/
 
1
0
0
)
 
*
 
$
v
a
r
i
a
n
c
e
)
 
+
 
$
r
a
t
e
P
e
r
N
i
g
h
t
;

	
	
	
	
	
	
	
$
v
a
l
_
n
o
d
i
s
c
o
u
n
t
 
=
 
(
(
$
r
a
t
e
P
e
r
N
i
g
h
t
_
n
o
d
i
s
c
o
u
n
t
 
/
 
1
0
0
)
 
*
 
$
v
a
r
i
a
n
c
e
)
 
+
 
$
r
a
t
e
P
e
r
N
i
g
h
t
_
n
o
d
i
s
c
o
u
n
t
;

	
	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
	
$
v
a
l
 
=
 
$
r
a
t
e
P
e
r
N
i
g
h
t
 
-
 
(
(
$
r
a
t
e
P
e
r
N
i
g
h
t
 
/
 
1
0
0
)
 
*
 
$
v
a
r
i
a
n
c
e
)
;

	
	
	
	
	
	
	
$
v
a
l
_
n
o
d
i
s
c
o
u
n
t
 
=
 
$
r
a
t
e
P
e
r
N
i
g
h
t
_
n
o
d
i
s
c
o
u
n
t
 
-
 
(
(
$
r
a
t
e
P
e
r
N
i
g
h
t
_
n
o
d
i
s
c
o
u
n
t
 
/
 
1
0
0
)
 
*
 
$
v
a
r
i
a
n
c
e
)
;

	
	
	
	
	
	
}

	
	
	
	
	
}

	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
s
e
t
G
u
e
s
t
T
y
p
e
V
a
r
i
a
n
t
V
a
l
u
e
s
:
:
S
e
t
t
i
n
g
 
v
a
r
i
a
n
t
 
v
a
l
u
e
 
'
.
$
i
d
.
'
 
t
o
 
'
.
$
v
a
l
)
;

	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
V
a
r
i
a
n
t
(
'
g
u
e
s
t
t
y
p
e
'
,
 
$
i
d
,
 
$
q
t
y
,
 
$
v
a
l
,
 
$
v
a
l
_
n
o
d
i
s
c
o
u
n
t
)
;

	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
	
	
}

	
	
	
}

	
	
}
 
e
l
s
e
 
{

	
	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
	
}


	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
}


	
/
*
*

	
 
*
 
C
a
l
c
u
l
a
t
e
s
 
t
h
e
 
v
a
l
u
e
 
o
f
 
t
h
e
 
r
o
o
m
 
c
h
a
r
g
e
s
 
p
e
r
 
n
i
g
h
t

	
 
*
 
I
f
 
p
r
o
p
e
r
t
y
 
i
s
 
N
O
T
 
s
e
t
 
t
o
 
c
h
a
r
g
e
 
P
e
r
 
P
e
r
s
o
n
 
P
e
r
 
N
i
g
h
t
 
t
h
e
n
 
v
a
r
i
a
n
c
e
s
 
c
a
l
c
u
l
a
t
e
d
 
i
n
 
s
e
t
G
u
e
s
t
T
y
p
e
V
a
r
i
a
n
t
V
a
l
u
e
s
 
a
r
e
 
i
g
n
o
r
e
d

	
 
*
 
I
f
 
p
r
o
p
e
r
t
y
 
i
s
 
s
e
t
 
t
o
 
c
h
a
r
g
e
 
P
e
r
 
P
e
r
s
o
n
 
P
e
r
 
N
i
g
h
t
 
a
n
d
 
a
l
l
 
t
a
r
i
f
f
s
 
i
n
 
s
e
l
e
c
t
i
o
n
 
a
r
e
 
s
e
t
 
t
o
 
I
g
n
o
r
e
 
P
P
P
N
 
t
h
e
n
 
P
P
P
N
 
i
s
 
i
g
n
o
r
e
d

	
 
*
 
I
f
 
p
r
o
p
e
r
t
y
 
i
s
 
s
e
t
 
t
o
 
c
h
a
r
g
e
 
P
e
r
 
P
e
r
s
o
n
 
P
e
r
 
N
i
g
h
t
 
a
n
d
 
s
o
m
e
 
t
a
r
i
f
f
s
 
i
n
 
s
e
l
e
c
t
i
o
n
 
a
r
e
 
s
e
t
 
t
o
 
I
g
n
o
r
e
 
P
P
P
N
 
t
h
e
n
 
P
P
P
N
 
i
s
 
c
a
l
c
u
l
a
t
e
d
 
a
c
r
o
s
s
 
t
h
e
 
b
o
a
r
d
 
b
e
c
a
u
s
e
 
i
t
'
s
 
n
o
t
 
p
o
s
s
i
b
l
e
 
t
o
 
f
i
g
u
r
e
 
o
u
t
 
h
o
w
 
m
a
n
y
 
p
e
o
p
l
e
 
a
r
e
 
i
n
 
e
a
c
h
 
r
o
o
m

	
 
*
 
S
e
t
s
 
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
 
t
o
 
t
h
e
 
t
o
t
a
l
 
v
a
l
u
e
 
o
f
 
t
h
e
 
r
o
o
m
s
 
p
e
r
 
n
i
g
h
t
.

	
 
*

	
 
*
 
@
s
e
e
 
s
e
t
G
u
e
s
t
T
y
p
e
V
a
r
i
a
n
t
V
a
l
u
e
s

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
m
a
k
e
N
i
g
h
t
l
y
R
o
o
m
C
h
a
r
g
e
s
(
)

	
{

	
	
i
f
 
(
!
g
e
t
_
s
h
o
w
t
i
m
e
(
'
i
n
c
l
u
d
e
_
r
o
o
m
_
b
o
o
k
i
n
g
_
f
u
n
c
t
i
o
n
a
l
i
t
y
'
)
)
 
{

	
	
	
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
 
=
 
0
.
0
0
;

	
	
	
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
_
n
o
d
i
s
c
o
u
n
t
 
=
 
0
.
0
0
;


	
	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
	
}


	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
m
a
k
e
N
i
g
h
t
l
y
R
o
o
m
C
h
a
r
g
e
s
:
:
 
S
t
a
r
t
e
d
'
)
;

	
	
$
t
o
t
a
l
 
=
 
0
.
0
0
;

	
	
$
r
e
s
u
l
t
 
=
 
$
t
h
i
s
-
>
g
e
t
V
a
r
i
a
n
t
s
O
f
T
y
p
e
(
'
g
u
e
s
t
t
y
p
e
'
)
;

	
	
$
t
h
i
s
-
>
a
l
l
R
o
o
m
s
A
r
e
I
g
n
o
r
e
P
P
P
N
 
=
 
t
r
u
e
;

	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
 
a
s
 
$
r
)
 
{

	
	
	
$
r
m
_
i
d
A
r
r
 
=
 
e
x
p
l
o
d
e
(
'
^
'
,
 
$
r
)
;

	
	
	
$
t
a
r
i
f
f
_
i
d
 
=
 
$
r
m
_
i
d
A
r
r
[
 
1
 
]
;

	
	
	
$
i
g
n
o
r
e
_
p
p
p
n
 
=
 
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
T
a
r
i
f
f
s
[
 
$
t
a
r
i
f
f
_
i
d
 
]
[
 
'
i
g
n
o
r
e
_
p
p
p
n
'
 
]
;

	
	
	
i
f
 
(
$
i
g
n
o
r
e
_
p
p
p
n
 
=
=
 
'
0
'
)
 
{

	
	
	
	
$
t
h
i
s
-
>
a
l
l
R
o
o
m
s
A
r
e
I
g
n
o
r
e
P
P
P
N
 
=
 
f
a
l
s
e
;

	
	
	
}

	
	
}

	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
p
e
r
P
e
r
s
o
n
P
e
r
N
i
g
h
t
 
=
=
 
'
1
'
 
&
&
 
$
t
h
i
s
-
>
a
l
l
R
o
o
m
s
A
r
e
I
g
n
o
r
e
P
P
P
N
)
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
m
a
k
e
N
i
g
h
t
l
y
R
o
o
m
C
h
a
r
g
e
s
:
:
P
r
o
p
e
r
t
y
 
i
s
 
c
o
n
f
i
g
u
r
e
d
 
t
o
 
c
h
a
r
g
e
 
P
e
r
 
P
e
r
s
o
n
 
P
e
r
 
N
i
g
h
t
,
 
h
o
w
e
v
e
r
 
a
l
l
 
r
o
o
m
s
 
h
a
v
e
 
I
G
N
O
R
E
 
P
P
P
N
 
s
e
t
 
t
o
 
y
e
s
,
 
s
o
 
r
o
o
m
s
 
w
i
l
l
 
b
e
 
c
a
l
c
u
l
a
t
e
d
 
p
e
r
 
r
o
o
m
,
 
n
o
t
 
p
e
r
 
p
e
r
s
o
n
.
 
'
)
;

	
	
}
 
e
l
s
e
 
{

	
	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
p
e
r
P
e
r
s
o
n
P
e
r
N
i
g
h
t
 
=
=
 
'
1
'
)
 
{

	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
m
a
k
e
N
i
g
h
t
l
y
R
o
o
m
C
h
a
r
g
e
s
:
:
P
r
o
p
e
r
t
y
 
i
s
 
c
o
n
f
i
g
u
r
e
d
 
t
o
 
c
h
a
r
g
e
 
P
e
r
 
P
e
r
s
o
n
 
P
e
r
 
N
i
g
h
t
.
 
O
n
e
 
o
r
 
m
o
r
e
 
r
o
o
m
s
 
a
r
e
 
n
o
t
 
s
e
t
 
t
o
 
I
g
n
o
r
e
 
P
P
N
.
 
A
l
l
 
r
o
o
m
s
 
w
i
l
l
 
b
e
 
c
a
l
c
u
l
a
t
e
d
 
a
s
 
p
e
r
 
p
e
r
s
o
n
 
p
e
r
 
n
i
g
h
t
 
a
s
 
i
t
 
i
s
 
i
m
p
o
s
s
i
b
l
e
 
f
o
r
 
J
o
m
r
e
s
 
t
o
 
a
s
c
e
r
t
a
i
n
 
h
o
w
 
m
a
n
y
 
p
e
o
p
l
e
 
w
i
l
l
 
b
e
 
i
n
 
e
a
c
h
 
r
o
o
m
.
'
)
;

	
	
	
}

	
	
}

	
	
$
t
o
t
a
l
_
n
o
d
i
s
c
o
u
n
t
 
=
 
0
;

	
	
i
f
 
(
!
e
m
p
t
y
(
$
r
e
s
u
l
t
)
)
 
{

	
	
	
f
o
r
e
a
c
h
 
(
$
r
e
s
u
l
t
 
a
s
 
$
r
)
 
{

	
	
	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
p
e
r
P
e
r
s
o
n
P
e
r
N
i
g
h
t
 
=
=
 
'
1
'
)
 
{

	
	
	
	
	
i
f
 
(
$
t
h
i
s
-
>
a
l
l
R
o
o
m
s
A
r
e
I
g
n
o
r
e
P
P
P
N
)
 
{

	
	
	
	
	
	
$
v
a
l
 
=
 
$
t
h
i
s
-
>
r
a
t
e
_
p
e
r
n
i
g
h
t
;

	
	
	
	
	
	
$
v
a
l
_
n
o
d
i
s
c
o
u
n
t
 
=
 
$
t
h
i
s
-
>
r
a
t
e
_
p
e
r
n
i
g
h
t
_
n
o
d
i
s
c
o
u
n
t
;

	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
$
v
a
l
 
=
 
$
r
[
 
'
q
t
y
'
 
]
 
*
 
$
r
[
 
'
v
a
l
'
 
]
;

	
	
	
	
	
	
$
v
a
l
_
n
o
d
i
s
c
o
u
n
t
 
=
 
$
r
[
 
'
q
t
y
'
 
]
 
*
 
$
r
[
 
'
v
a
l
_
n
o
d
i
s
c
o
u
n
t
'
 
]
;

	
	
	
	
	
}

	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
i
f
 
(
$
r
[
 
'
q
t
y
'
 
]
 
!
=
 
0
)
 
{

	
	
	
	
	
	
$
v
a
l
 
=
 
$
r
[
 
'
v
a
l
'
 
]
;

	
	
	
	
	
	
$
v
a
l
_
n
o
d
i
s
c
o
u
n
t
 
=
 
$
r
[
 
'
v
a
l
'
 
]
;

	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
$
v
a
l
 
=
 
0
;

	
	
	
	
	
	
$
v
a
l
_
n
o
d
i
s
c
o
u
n
t
 
=
 
0
;

	
	
	
	
	
}

	
	
	
	
}

	
	
	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
p
e
r
P
e
r
s
o
n
P
e
r
N
i
g
h
t
 
=
=
 
'
1
'
 
&
&
 
$
t
h
i
s
-
>
a
l
l
R
o
o
m
s
A
r
e
I
g
n
o
r
e
P
P
P
N
)
 
{

	
	
	
	
	
$
t
o
t
a
l
 
=
 
$
v
a
l
 
*
 
c
o
u
n
t
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
)
;

	
	
	
	
	
$
t
o
t
a
l
_
n
o
d
i
s
c
o
u
n
t
 
=
 
$
v
a
l
_
n
o
d
i
s
c
o
u
n
t
 
*
 
c
o
u
n
t
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
)
;

	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
p
e
r
P
e
r
s
o
n
P
e
r
N
i
g
h
t
 
=
=
 
'
1
'
)
 
{

	
	
	
	
	
	
$
t
o
t
a
l
 
+
=
 
$
v
a
l
;

	
	
	
	
	
	
$
t
o
t
a
l
_
n
o
d
i
s
c
o
u
n
t
 
+
=
 
$
v
a
l
_
n
o
d
i
s
c
o
u
n
t
;

	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
$
t
o
t
a
l
 
=
 
$
t
h
i
s
-
>
r
a
t
e
_
p
e
r
n
i
g
h
t
;

	
	
	
	
	
	
$
t
o
t
a
l
_
n
o
d
i
s
c
o
u
n
t
 
=
 
$
t
h
i
s
-
>
r
a
t
e
_
p
e
r
n
i
g
h
t
_
n
o
d
i
s
c
o
u
n
t
;

	
	
	
	
	
}

	
	
	
	
}

	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
m
a
k
e
N
i
g
h
t
l
y
R
o
o
m
C
h
a
r
g
e
s
:
:
T
o
t
a
l
:
 
'
.
$
t
o
t
a
l
)
;

	
	
	
}

	
	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
p
e
r
P
e
r
s
o
n
P
e
r
N
i
g
h
t
 
=
=
 
'
1
'
)
 
{

	
	
	
	
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
 
=
 
(
$
t
o
t
a
l
 
*
 
$
t
h
i
s
-
>
s
t
a
y
D
a
y
s
)
;

	
	
	
	
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
_
n
o
d
i
s
c
o
u
n
t
 
=
 
(
$
t
o
t
a
l
_
n
o
d
i
s
c
o
u
n
t
 
*
 
$
t
h
i
s
-
>
s
t
a
y
D
a
y
s
)
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
 
=
 
(
$
t
o
t
a
l
 
*
 
$
t
h
i
s
-
>
s
t
a
y
D
a
y
s
)
 
*
 
c
o
u
n
t
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
)
;

	
	
	
	
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
_
n
o
d
i
s
c
o
u
n
t
 
=
 
(
$
t
o
t
a
l
_
n
o
d
i
s
c
o
u
n
t
 
*
 
$
t
h
i
s
-
>
s
t
a
y
D
a
y
s
)
 
*
 
c
o
u
n
t
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
)
;

	
	
	
}

	
	
}
 
e
l
s
e
 
{

	
	
	
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
 
=
 
(
$
t
h
i
s
-
>
r
a
t
e
_
p
e
r
n
i
g
h
t
 
*
 
$
t
h
i
s
-
>
s
t
a
y
D
a
y
s
)
 
*
 
c
o
u
n
t
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
)
;

	
	
	
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
_
n
o
d
i
s
c
o
u
n
t
 
=
 
(
$
t
h
i
s
-
>
r
a
t
e
_
p
e
r
n
i
g
h
t
_
n
o
d
i
s
c
o
u
n
t
 
*
 
$
t
h
i
s
-
>
s
t
a
y
D
a
y
s
)
 
*
 
c
o
u
n
t
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
)
;

	
	
}


	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
 
=
 
j
o
m
r
e
s
_
g
e
t
S
i
n
g
l
e
t
o
n
(
'
j
o
m
r
e
s
_
t
e
m
p
_
b
o
o
k
i
n
g
_
h
a
n
d
l
e
r
'
)
;


	
	
/
/
C
o
u
p
o
n
 
d
i
s
c
o
u
n
t

	
	
i
f
 
(
$
t
h
i
s
-
>
c
o
u
p
o
n
_
c
o
d
e
 
!
=
 
'
'
)
 
{

	
	
	
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
t
h
i
s
-
>
d
a
t
e
R
a
n
g
e
S
t
r
i
n
g
)
;

	
	
	
$
c
a
n
o
n
i
c
a
l
_
d
a
t
e
_
r
a
n
g
e
_
a
r
r
a
y
 
=
 
a
r
r
a
y
(
)
;

	
	
	
f
o
r
e
a
c
h
 
(
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
 
a
s
 
$
d
)
 
{

	
	
	
	
$
c
a
n
o
n
i
c
a
l
_
d
a
t
e
_
r
a
n
g
e
_
a
r
r
a
y
[
 
]
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
/
'
,
 
'
-
'
,
 
$
d
)
;

	
	
	
}

	
	
	
$
c
o
u
p
o
n
_
r
a
n
g
e
 
=
 
$
t
h
i
s
-
>
c
o
u
p
o
n
_
b
o
o
k
i
n
g
_
d
a
t
e
_
r
a
n
g
e
s
(
$
t
h
i
s
-
>
c
o
u
p
o
n
_
d
e
t
a
i
l
s
[
 
'
b
o
o
k
i
n
g
_
v
a
l
i
d
_
f
r
o
m
'
 
]
,
 
$
t
h
i
s
-
>
c
o
u
p
o
n
_
d
e
t
a
i
l
s
[
 
'
b
o
o
k
i
n
g
_
v
a
l
i
d
_
t
o
'
 
]
)
;

	
	
	
$
n
u
m
b
e
r
_
o
f
_
t
i
m
e
s
_
c
o
u
p
o
n
_
i
s
_
v
a
l
i
d
_
f
o
r
_
b
o
o
k
i
n
g
_
d
a
t
e
_
r
a
n
g
e
 
=
 
0
;

	
	
	
f
o
r
e
a
c
h
 
(
$
c
a
n
o
n
i
c
a
l
_
d
a
t
e
_
r
a
n
g
e
_
a
r
r
a
y
 
a
s
 
$
d
a
t
e
)
 
{

	
	
	
	
i
f
 
(
i
n
_
a
r
r
a
y
(
$
d
a
t
e
,
 
$
c
o
u
p
o
n
_
r
a
n
g
e
)
)
 
{

	
	
	
	
	
+
+
$
n
u
m
b
e
r
_
o
f
_
t
i
m
e
s
_
c
o
u
p
o
n
_
i
s
_
v
a
l
i
d
_
f
o
r
_
b
o
o
k
i
n
g
_
d
a
t
e
_
r
a
n
g
e
;

	
	
	
	
}

	
	
	
}


	
	
	
$
o
l
d
_
r
o
o
m
_
t
o
t
a
l
 
=
 
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
;

	
	
	
i
f
 
(
$
t
h
i
s
-
>
c
o
u
p
o
n
_
d
e
t
a
i
l
s
[
 
'
b
o
o
k
i
n
g
_
v
a
l
i
d
_
f
r
o
m
'
 
]
 
!
=
 
'
'
)
 
{

	
	
	
	
$
r
o
o
m
_
t
o
t
a
l
_
p
e
r
_
d
a
y
 
=
 
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
 
/
 
c
o
u
n
t
(
$
c
a
n
o
n
i
c
a
l
_
d
a
t
e
_
r
a
n
g
e
_
a
r
r
a
y
)
;

	
	
	
	
$
n
u
m
b
e
r
_
o
f
_
d
a
y
s
_
n
o
t
_
d
i
s
c
o
u
n
t
e
d
 
=
 
c
o
u
n
t
(
$
c
a
n
o
n
i
c
a
l
_
d
a
t
e
_
r
a
n
g
e
_
a
r
r
a
y
)
 
-
 
$
n
u
m
b
e
r
_
o
f
_
t
i
m
e
s
_
c
o
u
p
o
n
_
i
s
_
v
a
l
i
d
_
f
o
r
_
b
o
o
k
i
n
g
_
d
a
t
e
_
r
a
n
g
e
;

	
	
	
	
$
d
i
s
c
o
u
n
t
a
b
l
e
_
r
o
o
m
_
t
o
t
a
l
 
=
 
$
r
o
o
m
_
t
o
t
a
l
_
p
e
r
_
d
a
y
 
*
 
$
n
u
m
b
e
r
_
o
f
_
t
i
m
e
s
_
c
o
u
p
o
n
_
i
s
_
v
a
l
i
d
_
f
o
r
_
b
o
o
k
i
n
g
_
d
a
t
e
_
r
a
n
g
e
;

	
	
	
	
$
n
o
n
_
d
i
s
c
o
u
n
t
a
b
l
e
_
r
o
o
m
_
t
o
t
a
l
 
=
 
$
r
o
o
m
_
t
o
t
a
l
_
p
e
r
_
d
a
y
 
*
 
$
n
u
m
b
e
r
_
o
f
_
d
a
y
s
_
n
o
t
_
d
i
s
c
o
u
n
t
e
d
;

	
	
	
}
 
e
l
s
e
 
{
 
/
/
 
F
o
r
 
B
C
 
w
i
t
h
 
o
l
d
e
r
,
 
p
r
e
-
4
.
7
.
8
 
c
o
u
p
o
n
s

	
	
	
	
$
d
i
s
c
o
u
n
t
a
b
l
e
_
r
o
o
m
_
t
o
t
a
l
 
=
 
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
;

	
	
	
	
$
n
o
n
_
d
i
s
c
o
u
n
t
a
b
l
e
_
r
o
o
m
_
t
o
t
a
l
 
=
 
0
;

	
	
	
}


	
	
	
$
t
h
i
s
-
>
c
o
u
p
o
n
_
d
i
s
c
o
u
n
t
_
v
a
l
u
e
 
=
 
0
.
0
0
;

	
	
	
i
f
 
(
$
n
u
m
b
e
r
_
o
f
_
t
i
m
e
s
_
c
o
u
p
o
n
_
i
s
_
v
a
l
i
d
_
f
o
r
_
b
o
o
k
i
n
g
_
d
a
t
e
_
r
a
n
g
e
 
>
 
0
)
 
{

	
	
	
	
i
f
 
(
$
t
h
i
s
-
>
c
o
u
p
o
n
_
d
e
t
a
i
l
s
[
 
'
i
s
_
p
e
r
c
e
n
t
a
g
e
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
	
	
$
t
h
i
s
-
>
c
o
u
p
o
n
_
d
i
s
c
o
u
n
t
_
v
a
l
u
e
 
=
 
(
$
d
i
s
c
o
u
n
t
a
b
l
e
_
r
o
o
m
_
t
o
t
a
l
 
/
 
1
0
0
)
 
*
 
(
f
l
o
a
t
)
 
$
t
h
i
s
-
>
c
o
u
p
o
n
_
d
e
t
a
i
l
s
[
 
'
a
m
o
u
n
t
'
 
]
;

	
	
	
	
	
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
 
=
 
(
$
d
i
s
c
o
u
n
t
a
b
l
e
_
r
o
o
m
_
t
o
t
a
l
 
-
 
$
t
h
i
s
-
>
c
o
u
p
o
n
_
d
i
s
c
o
u
n
t
_
v
a
l
u
e
)
 
+
 
$
n
o
n
_
d
i
s
c
o
u
n
t
a
b
l
e
_
r
o
o
m
_
t
o
t
a
l
;

	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
$
t
h
i
s
-
>
c
o
u
p
o
n
_
d
i
s
c
o
u
n
t
_
v
a
l
u
e
 
=
 
(
f
l
o
a
t
)
 
$
t
h
i
s
-
>
c
o
u
p
o
n
_
d
e
t
a
i
l
s
[
 
'
a
m
o
u
n
t
'
 
]
;

	
	
	
	
	
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
 
=
 
(
$
d
i
s
c
o
u
n
t
a
b
l
e
_
r
o
o
m
_
t
o
t
a
l
 
-
 
$
t
h
i
s
-
>
c
o
u
p
o
n
_
d
i
s
c
o
u
n
t
_
v
a
l
u
e
)
 
+
 
$
n
o
n
_
d
i
s
c
o
u
n
t
a
b
l
e
_
r
o
o
m
_
t
o
t
a
l
;

	
	
	
	
}

	
	
	
}


	
	
	
$
t
h
i
s
-
>
d
i
s
c
o
u
n
t
s
[
]
 
=
 
a
r
r
a
y
(
'
t
y
p
e
'
 
=
>
 
'
C
o
u
p
o
n
'
,
 
'
r
o
o
m
t
y
p
e
a
b
b
r
'
 
=
>
 
'
N
/
A
'
,
 
'
d
i
s
c
o
u
n
t
f
r
o
m
'
 
=
>
 
$
o
l
d
_
r
o
o
m
_
t
o
t
a
l
,
 
'
d
i
s
c
o
u
n
t
t
o
'
 
=
>
 
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
)
;


	
	
	
$
f
b
1
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
C
O
U
P
O
N
S
_
B
O
O
K
I
N
G
_
D
I
S
C
O
U
N
T
_
F
E
E
D
B
A
C
K
'
,
 
'
_
J
R
P
O
R
T
A
L
_
C
O
U
P
O
N
S
_
B
O
O
K
I
N
G
_
D
I
S
C
O
U
N
T
_
F
E
E
D
B
A
C
K
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

	
	
	
$
f
b
2
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
C
O
U
P
O
N
S
_
B
O
O
K
I
N
G
_
D
I
S
C
O
U
N
T
_
F
E
E
D
B
A
C
K
_
T
O
'
,
 
'
_
J
R
P
O
R
T
A
L
_
C
O
U
P
O
N
S
_
B
O
O
K
I
N
G
_
D
I
S
C
O
U
N
T
_
F
E
E
D
B
A
C
K
_
T
O
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

	
	
	
$
f
e
e
d
b
a
c
k
 
=
 
$
f
b
1
.
o
u
t
p
u
t
_
p
r
i
c
e
(
$
o
l
d
_
r
o
o
m
_
t
o
t
a
l
)
.
$
f
b
2
.
o
u
t
p
u
t
_
p
r
i
c
e
(
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
)
;

	
	
	
$
t
h
i
s
-
>
s
e
t
G
u
e
s
t
P
o
p
u
p
M
e
s
s
a
g
e
(
$
f
e
e
d
b
a
c
k
)
;

	
	
	
$
t
h
i
s
-
>
a
d
d
B
o
o
k
i
n
g
N
o
t
e
(
'
C
o
u
p
o
n
 
f
e
e
d
b
a
c
k
'
,
 
$
f
e
e
d
b
a
c
k
)
;


	
	
	
$
n
o
t
e
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
C
O
U
P
O
N
_
B
O
O
K
I
N
G
N
O
T
E
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
C
O
U
P
O
N
_
B
O
O
K
I
N
G
N
O
T
E
'
,
 
f
a
l
s
e
)
.
'
 
'
.
$
t
h
i
s
-
>
c
o
u
p
o
n
_
i
d
.
'
 
/
 
'
.
$
t
h
i
s
-
>
c
o
u
p
o
n
_
c
o
d
e
.
'
 
/
 
'
.
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
C
O
U
P
O
N
S
_
A
M
O
U
N
T
'
,
 
'
_
J
R
P
O
R
T
A
L
_
C
O
U
P
O
N
S
_
A
M
O
U
N
T
'
,
 
f
a
l
s
e
)
.
'
 
'
.
$
t
h
i
s
-
>
c
o
u
p
o
n
_
d
i
s
c
o
u
n
t
_
v
a
l
u
e
.
'
 
/
 
'
;

	
	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
c
o
u
p
o
n
_
d
e
t
a
i
l
s
 
a
s
 
$
k
 
=
>
 
$
v
)
 
{

	
	
	
	
$
n
o
t
e
 
.
=
 
$
k
.
'
 
-
 
'
.
$
v
.
'
 
:
:
 
'
;

	
	
	
}

	
	
	
$
t
h
i
s
-
>
a
d
d
B
o
o
k
i
n
g
N
o
t
e
(
'
C
o
u
p
o
n
'
,
 
$
n
o
t
e
)
;

	
	
}


	
	
/
/
P
e
r
s
o
n
a
l
 
(
g
u
e
s
t
 
s
p
e
c
i
f
i
c
)
 
d
i
s
c
o
u
n
t

	
	
i
f
 
(
$
t
h
i
s
-
>
g
u
e
s
t
_
s
p
e
c
i
f
i
c
_
d
i
s
c
o
u
n
t
 
>
 
0
)
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
m
a
k
e
N
i
g
h
t
l
y
R
o
o
m
C
h
a
r
g
e
s
:
:
 
C
a
l
c
u
l
a
t
i
n
g
 
g
u
e
s
t
'
s
 
d
i
s
c
o
u
n
t
 
(
V
A
L
U
E
)
 
"
.
$
t
h
i
s
-
>
g
u
e
s
t
_
s
p
e
c
i
f
i
c
_
d
i
s
c
o
u
n
t
)
;

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
m
a
k
e
N
i
g
h
t
l
y
R
o
o
m
C
h
a
r
g
e
s
:
:
 
O
r
i
g
i
n
a
l
 
r
o
o
m
 
p
r
i
c
e
 
v
a
l
u
e
 
'
.
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
)
;

	
	
	
$
o
l
d
_
r
o
o
m
_
t
o
t
a
l
 
=
 
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
;

	
	
	
$
p
e
r
c
e
n
t
a
g
e
_
t
o
_
r
e
m
o
v
e
 
=
 
(
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
 
/
 
1
0
0
)
 
*
 
(
i
n
t
)
 
$
t
h
i
s
-
>
g
u
e
s
t
_
s
p
e
c
i
f
i
c
_
d
i
s
c
o
u
n
t
;

	
	
	
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
 
=
 
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
 
-
 
$
p
e
r
c
e
n
t
a
g
e
_
t
o
_
r
e
m
o
v
e
;

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
m
a
k
e
N
i
g
h
t
l
y
R
o
o
m
C
h
a
r
g
e
s
:
:
 
P
e
r
c
e
n
t
a
g
e
 
t
o
 
r
e
m
o
v
e
 
'
.
$
p
e
r
c
e
n
t
a
g
e
_
t
o
_
r
e
m
o
v
e
)
;

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
m
a
k
e
N
i
g
h
t
l
y
R
o
o
m
C
h
a
r
g
e
s
:
:
 
N
e
w
 
r
o
o
m
 
v
a
l
u
e
 
'
.
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
)
;

	
	
	
$
t
h
i
s
-
>
e
c
h
o
_
p
o
p
u
l
a
t
e
_
d
i
v
(
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
'
;
 
p
o
p
u
l
a
t
e
D
i
v
(
"
p
e
r
s
o
n
a
l
_
d
i
s
c
o
u
n
t
"
,
"
'
.
o
u
t
p
u
t
_
p
r
i
c
e
(
$
p
e
r
c
e
n
t
a
g
e
_
t
o
_
r
e
m
o
v
e
)
.
'
"
)
'
)
)
;

	
	
	
$
n
o
t
e
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
P
E
R
S
O
N
A
L
_
D
I
S
C
O
U
N
T
'
,
 
'
_
J
O
M
R
E
S
_
P
E
R
S
O
N
A
L
_
D
I
S
C
O
U
N
T
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
.
'
 
'
.
o
u
t
p
u
t
_
p
r
i
c
e
(
$
p
e
r
c
e
n
t
a
g
e
_
t
o
_
r
e
m
o
v
e
)
;

	
	
	
$
t
h
i
s
-
>
a
d
d
B
o
o
k
i
n
g
N
o
t
e
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
P
E
R
S
O
N
A
L
_
D
I
S
C
O
U
N
T
'
,
 
'
_
J
O
M
R
E
S
_
P
E
R
S
O
N
A
L
_
D
I
S
C
O
U
N
T
'
,
 
f
a
l
s
e
)
,
 
$
n
o
t
e
)
;


	
	
	
$
t
h
i
s
-
>
d
i
s
c
o
u
n
t
s
[
]
 
=
 
a
r
r
a
y
(
'
t
y
p
e
'
 
=
>
 
'
P
e
r
s
o
n
a
l
'
,
 
'
r
o
o
m
t
y
p
e
a
b
b
r
'
 
=
>
 
'
N
/
A
'
,
 
'
d
i
s
c
o
u
n
t
f
r
o
m
'
 
=
>
 
$
o
l
d
_
r
o
o
m
_
t
o
t
a
l
,
 
'
d
i
s
c
o
u
n
t
t
o
'
 
=
>
 
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
)
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
m
a
k
e
N
i
g
h
t
l
y
R
o
o
m
C
h
a
r
g
e
s
:
:
 
G
u
e
s
t
 
d
o
e
s
 
n
o
t
 
b
e
n
e
f
i
t
 
f
r
o
m
 
a
n
y
 
d
i
s
c
o
u
n
t
'
)
;

	
	
}


	
	
/
/
P
a
r
t
n
e
r
 
d
i
s
c
o
u
n
t

	
	
$
t
m
p
_
s
t
r
i
n
g
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
/
'
,
 
'
-
'
,
 
$
t
h
i
s
-
>
d
a
t
e
R
a
n
g
e
S
t
r
i
n
g
)
;

	
	
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
t
m
p
_
s
t
r
i
n
g
)
;

	
	
$
f
i
r
s
t
_
d
a
t
e
 
=
 
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
[
 
0
 
]
;

	
	
$
l
a
s
t
_
e
l
e
m
e
n
t
 
=
 
c
o
u
n
t
(
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
)
 
-
 
1
;

	
	
$
l
a
s
t
_
d
a
t
e
 
=
 
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
[
 
$
l
a
s
t
_
e
l
e
m
e
n
t
 
]
;

	
	
$
t
h
i
s
J
R
U
s
e
r
 
=
 
j
o
m
r
e
s
_
g
e
t
S
i
n
g
l
e
t
o
n
(
'
j
r
_
u
s
e
r
'
)
;


	
	
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
d
i
s
c
o
u
n
t
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
p
a
r
t
n
e
r
s
_
d
i
s
c
o
u
n
t
s
 
W
H
E
R
E
 
p
a
r
t
n
e
r
_
i
d
 
=
 
'
.
(
i
n
t
)
 
$
t
h
i
s
J
R
U
s
e
r
-
>
i
d
.
'
 
A
N
D
 
p
r
o
p
e
r
t
y
_
i
d
 
=
 
'
.
(
i
n
t
)
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
.
"
 
a
n
d
 
v
a
l
i
d
_
f
r
o
m
 
<
=
 
'
"
.
$
f
i
r
s
t
_
d
a
t
e
.
"
'
 
A
N
D
 
v
a
l
i
d
_
t
o
 
>
=
 
'
"
.
$
l
a
s
t
_
d
a
t
e
.
"
'
"
;

	
	
$
r
e
s
u
l
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;


	
	
i
f
 
(
!
e
m
p
t
y
(
$
r
e
s
u
l
t
)
)
 
{

	
	
	
f
o
r
e
a
c
h
 
(
$
r
e
s
u
l
t
 
a
s
 
$
r
e
s
)
 
{

	
	
	
	
$
o
l
d
_
r
o
o
m
_
t
o
t
a
l
 
=
 
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
;

	
	
	
	
$
p
e
r
c
e
n
t
a
g
e
_
t
o
_
r
e
m
o
v
e
 
=
 
(
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
 
/
 
1
0
0
)
 
*
 
(
i
n
t
)
 
$
r
e
s
-
>
d
i
s
c
o
u
n
t
;

	
	
	
	
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
 
=
 
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
 
-
 
$
p
e
r
c
e
n
t
a
g
e
_
t
o
_
r
e
m
o
v
e
;

	
	
	
	
$
n
o
t
e
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
P
A
R
T
N
E
R
_
D
I
S
C
O
U
N
T
'
,
 
'
_
J
O
M
R
E
S
_
P
A
R
T
N
E
R
_
D
I
S
C
O
U
N
T
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
.
'
 
'
.
o
u
t
p
u
t
_
p
r
i
c
e
(
$
p
e
r
c
e
n
t
a
g
e
_
t
o
_
r
e
m
o
v
e
)
;

	
	
	
	
$
t
h
i
s
-
>
a
d
d
B
o
o
k
i
n
g
N
o
t
e
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
P
A
R
T
N
E
R
_
D
I
S
C
O
U
N
T
'
,
 
'
_
J
O
M
R
E
S
_
P
A
R
T
N
E
R
_
D
I
S
C
O
U
N
T
'
,
 
f
a
l
s
e
)
,
 
$
n
o
t
e
)
;

	
	
	
	
$
t
h
i
s
-
>
s
e
t
G
u
e
s
t
P
o
p
u
p
M
e
s
s
a
g
e
(
$
n
o
t
e
)
;


	
	
	
	
$
t
h
i
s
-
>
d
i
s
c
o
u
n
t
s
[
]
 
=
 
a
r
r
a
y
(
'
t
y
p
e
'
 
=
>
 
'
P
a
r
t
n
e
r
'
,
 
'
r
o
o
m
t
y
p
e
a
b
b
r
'
 
=
>
 
'
N
/
A
'
,
 
'
d
i
s
c
o
u
n
t
f
r
o
m
'
 
=
>
 
$
o
l
d
_
r
o
o
m
_
t
o
t
a
l
,
 
'
d
i
s
c
o
u
n
t
t
o
'
 
=
>
 
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
)
;

	
	
	
}

	
	
}


	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
u
p
d
a
t
e
B
o
o
k
i
n
g
F
i
e
l
d
(
'
d
i
s
c
o
u
n
t
s
'
,
 
$
t
h
i
s
-
>
d
i
s
c
o
u
n
t
s
)
;


	
	
/
/
 
B
y
p
a
s
s
i
n
g
 
a
l
l
 
t
h
e
 
o
t
h
e
r
 
c
a
l
c
u
l
a
t
i
o
n
s
,
 
i
f
 
t
h
e
 
p
r
i
c
e
 
h
a
s
 
b
e
e
n
 
o
v
e
r
-
r
i
d
d
e
n
,
 
w
e
'
l
l
 
j
u
s
t
 
s
e
t
 
t
h
e
 
r
o
o
m
 
t
o
t
a
l
 
h
e
r
e
 
i
n
s
t
e
a
d
.

	
	
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
I
s
M
a
n
a
g
e
r
 
&
&
 
(
f
l
o
a
t
)
 
$
t
h
i
s
-
>
o
v
e
r
r
i
d
e
_
r
o
o
m
_
t
o
t
a
l
 
>
 
0
)
 
{

	
	
	
$
m
r
C
o
n
f
i
g
 
=
 
$
t
h
i
s
-
>
m
r
C
o
n
f
i
g
;

	
	
	
$
t
m
p
R
a
t
e
 
=
 
$
t
h
i
s
-
>
o
v
e
r
r
i
d
e
_
r
o
o
m
_
t
o
t
a
l
;

	
	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
p
r
i
c
e
s
_
i
n
c
l
u
s
i
v
e
'
 
]
 
=
=
 
1
)
 
{

	
	
	
	
$
d
i
v
i
s
o
r
 
=
 
(
$
t
h
i
s
-
>
a
c
c
o
m
m
o
d
a
t
i
o
n
_
t
a
x
_
r
a
t
e
 
/
 
1
0
0
)
 
+
 
1
;

	
	
	
	
$
t
m
p
R
a
t
e
 
=
 
$
t
m
p
R
a
t
e
 
/
 
$
d
i
v
i
s
o
r
;

	
	
	
}

	
	
	
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
 
=
 
$
t
m
p
R
a
t
e
;

	
	
	
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
_
n
o
d
i
s
c
o
u
n
t
 
=
 
$
t
m
p
R
a
t
e
;

	
	
	
$
t
h
i
s
-
>
d
i
s
c
o
u
n
t
s
 
=
 
a
r
r
a
y
(
)
;

	
	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
u
p
d
a
t
e
B
o
o
k
i
n
g
F
i
e
l
d
(
'
d
i
s
c
o
u
n
t
s
'
,
 
$
t
h
i
s
-
>
d
i
s
c
o
u
n
t
s
)
;

	
	
}


	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
m
a
k
e
N
i
g
h
t
l
y
R
o
o
m
C
h
a
r
g
e
s
:
:
R
o
o
m
 
t
o
t
a
l
 
c
a
l
c
u
l
a
t
e
d
 
a
s
 
'
.
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
)
;

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
m
a
k
e
N
i
g
h
t
l
y
R
o
o
m
C
h
a
r
g
e
s
:
:
 
E
n
d
e
d
'
)
;


	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
c
o
u
p
o
n
_
b
o
o
k
i
n
g
_
d
a
t
e
_
r
a
n
g
e
s
(
$
f
i
r
s
t
,
 
$
l
a
s
t
,
 
$
s
t
e
p
 
=
 
'
+
1
 
d
a
y
'
,
 
$
f
o
r
m
a
t
 
=
 
'
Y
-
m
-
d
'
)

	
{

	
	
$
d
a
t
e
s
 
=
 
a
r
r
a
y
(
)
;

	
	
$
c
u
r
r
e
n
t
 
=
 
s
t
r
t
o
t
i
m
e
(
$
f
i
r
s
t
)
;

	
	
$
l
a
s
t
 
=
 
s
t
r
t
o
t
i
m
e
(
$
l
a
s
t
)
;

	
	
w
h
i
l
e
 
(
$
c
u
r
r
e
n
t
 
<
=
 
$
l
a
s
t
)
 
{

	
	
	
$
d
a
t
e
s
[
 
]
 
=
 
d
a
t
e
(
$
f
o
r
m
a
t
,
 
$
c
u
r
r
e
n
t
)
;

	
	
	
$
c
u
r
r
e
n
t
 
=
 
s
t
r
t
o
t
i
m
e
(
$
s
t
e
p
,
 
$
c
u
r
r
e
n
t
)
;

	
	
}


	
	
r
e
t
u
r
n
 
$
d
a
t
e
s
;

	
}


	
/
*
*

	
 
*
 
C
a
l
c
u
l
a
t
e
s
 
t
h
e
 
t
o
t
a
l
 
v
a
l
u
e
 
o
f
 
t
h
e
 
b
o
o
k
i
n
g
.

	
 
*
 
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
+
$
t
h
i
s
-
>
e
x
t
r
a
s
v
a
l
u
e
+
$
t
h
i
s
-
>
t
a
x
+
$
t
h
i
s
-
>
s
i
n
g
l
e
_
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
.

	
 
*
/

	
/
/
 
$
t
h
i
s
-
>
c
o
u
p
o
n
_
d
e
t
a
i
l
s
 
=
 
a
r
r
a
y
(
'
a
m
o
u
n
t
'
=
>
$
r
e
s
p
o
n
s
e
[
'
a
m
o
u
n
t
'
]
,
'
i
s
_
p
e
r
c
e
n
t
a
g
e
'
=
>
$
r
e
s
p
o
n
s
e
[
'
i
s
_
p
e
r
c
e
n
t
a
g
e
'
]
,
'
r
o
o
m
s
_
o
n
l
y
'
=
>
$
r
e
s
p
o
n
s
e
[
'
r
o
o
m
s
_
o
n
l
y
'
]
)
;


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
c
a
l
c
T
o
t
a
l
s
(
)

	
{

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
a
l
c
T
o
t
a
l
s
:
:
 
S
t
a
r
t
e
d
'
)
;

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
a
l
c
T
o
t
a
l
s
:
:
 
r
o
o
m
 
t
o
t
a
l
 
'
.
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
)
;

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
a
l
c
T
o
t
a
l
s
:
:
 
t
a
x
 
'
.
$
t
h
i
s
-
>
t
a
x
)
;

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
a
l
c
T
o
t
a
l
s
:
:
 
s
p
s
 
'
.
$
t
h
i
s
-
>
s
i
n
g
l
e
_
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
)
;

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
a
l
c
T
o
t
a
l
s
:
:
 
e
x
t
r
a
s
 
'
.
$
t
h
i
s
-
>
e
x
t
r
a
s
v
a
l
u
e
)
;


	
	
$
t
h
i
s
-
>
b
i
l
l
i
n
g
_
g
r
a
n
d
t
o
t
a
l
 
=
 
(
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
 
+
 
$
t
h
i
s
-
>
e
x
t
r
a
s
v
a
l
u
e
 
+
 
$
t
h
i
s
-
>
t
a
x
 
+
 
$
t
h
i
s
-
>
s
i
n
g
l
e
_
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
)
;

	
	
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
_
e
x
_
t
a
x
 
=
 
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
 
+
 
$
t
h
i
s
-
>
s
i
n
g
l
e
_
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
;

	
	
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
_
i
n
c
_
t
a
x
 
=
 
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
 
+
 
$
t
h
i
s
-
>
s
i
n
g
l
e
_
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
 
+
 
$
t
h
i
s
-
>
t
a
x
;

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
a
l
c
T
o
t
a
l
s
:
:
T
o
t
a
l
:
 
'
.
$
t
h
i
s
-
>
b
i
l
l
i
n
g
_
g
r
a
n
d
t
o
t
a
l
)
;

	
	
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
_
t
o
t
a
l
 
=
 
$
t
h
i
s
-
>
b
i
l
l
i
n
g
_
g
r
a
n
d
t
o
t
a
l
;

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
a
l
c
T
o
t
a
l
s
:
:
 
E
n
d
e
d
'
)
;

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
c
a
l
c
E
x
t
r
a
s
(
)

	
{

	
	
$
t
h
i
s
-
>
e
x
t
r
a
_
t
a
x
s
 
=
 
a
r
r
a
y
(
)
;

	
	
$
m
r
C
o
n
f
i
g
 
=
 
$
t
h
i
s
-
>
m
r
C
o
n
f
i
g
;

	
	
$
e
x
t
r
a
s
T
o
t
a
l
 
=
 
0
.
0
0
;

	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
c
a
l
c
E
x
t
r
a
s
:
 
C
u
r
r
e
n
t
 
e
x
t
r
a
s
:
 
"
.
$
t
h
i
s
-
>
e
x
t
r
a
s
)
;

	
	
i
f
 
(
!
e
m
p
t
y
(
$
t
h
i
s
-
>
e
x
t
r
a
s
)
)
 
{

	
	
	
$
e
x
t
r
a
s
A
r
r
a
y
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
t
h
i
s
-
>
e
x
t
r
a
s
)
;

	
	
	
f
o
r
e
a
c
h
 
(
$
e
x
t
r
a
s
A
r
r
a
y
 
a
s
 
$
e
x
t
r
a
)
 
{

	
	
	
	
i
f
 
(
!
e
m
p
t
y
(
$
e
x
t
r
a
)
)
 
{

	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
a
l
c
E
x
t
r
a
s
:
 
G
e
t
t
i
n
g
 
d
a
t
a
 
f
o
r
 
e
x
t
r
a
:
 
'
.
$
e
x
t
r
a
)
;

	
	
	
	
	
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
p
r
i
c
e
,
t
a
x
_
r
a
t
e
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
e
x
t
r
a
s
 
W
H
E
R
E
 
u
i
d
 
=
 
'
$
e
x
t
r
a
'
"
;

	
	
	
	
	
$
e
x
t
r
a
D
e
e
t
s
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
,
 
2
)
;

	
	
	
	
	
$
t
h
i
s
P
r
i
c
e
 
=
 
$
e
x
t
r
a
D
e
e
t
s
[
 
'
p
r
i
c
e
'
 
]
;

	
	
	
	
	
$
t
a
x
_
r
a
t
e
_
i
d
 
=
 
$
e
x
t
r
a
D
e
e
t
s
[
 
'
t
a
x
_
r
a
t
e
'
 
]
;

	
	
	
	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
<
b
>
c
a
l
c
E
x
t
r
a
s
:
<
/
b
>
 
E
x
t
r
a
 
d
e
e
t
s
 
:
 
"
.
s
e
r
i
a
l
i
z
e
(
$
e
x
t
r
a
D
e
e
t
s
)
)
;

	
	
	
	
	
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
`
m
o
d
e
l
`
,
`
p
a
r
a
m
s
`
 
F
R
O
M
 
#
_
_
j
o
m
c
o
m
p
_
e
x
t
r
a
s
m
o
d
e
l
s
_
m
o
d
e
l
s
 
W
H
E
R
E
 
e
x
t
r
a
_
i
d
 
=
 
'
$
e
x
t
r
a
'
"
;

	
	
	
	
	
$
m
o
d
e
l
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
,
 
2
)
;

	
	
	
	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
c
a
l
c
E
x
t
r
a
s
:
 
U
s
i
n
g
 
m
o
d
e
l
:
 
"
.
$
m
o
d
e
l
[
'
m
o
d
e
l
'
]
)
;

	
	
	
	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
c
a
l
c
E
x
t
r
a
s
:
 
P
a
r
a
m
e
t
e
r
s
:
 
"
.
$
m
o
d
e
l
[
'
p
a
r
a
m
s
'
]
)
;

	
	
	
	
	
s
w
i
t
c
h
 
(
$
m
o
d
e
l
[
 
'
m
o
d
e
l
'
 
]
)
 
{

	
	
	
	
	
	
c
a
s
e
 
'
1
'
:
 
/
/
 
P
e
r
 
w
e
e
k

	
	
	
	
	
	
	
$
n
u
m
b
e
r
O
f
W
e
e
k
s
 
=
 
c
e
i
l
(
$
t
h
i
s
-
>
s
t
a
y
D
a
y
s
 
/
 
7
)
;

	
	
	
	
	
	
	
$
c
a
l
c
 
=
 
$
n
u
m
b
e
r
O
f
W
e
e
k
s
 
*
 
$
t
h
i
s
P
r
i
c
e
;

	
	
	
	
	
	
	
$
t
h
i
s
-
>
e
x
t
r
a
s
v
a
l
u
e
s
_
i
t
e
m
s
[
 
$
e
x
t
r
a
 
]
[
 
'
q
u
a
n
t
i
t
y
_
m
u
l
t
i
p
l
i
e
r
'
 
]
 
=
 
$
n
u
m
b
e
r
O
f
W
e
e
k
s
;

	
	
	
	
	
	
	
b
r
e
a
k
;

	
	
	
	
	
	
c
a
s
e
 
'
2
'
:
 
/
/
 
p
e
r
 
d
a
y
s

	
	
	
	
	
	
	
$
c
a
l
c
 
=
 
$
t
h
i
s
-
>
s
t
a
y
D
a
y
s
 
*
 
$
t
h
i
s
P
r
i
c
e
;

	
	
	
	
	
	
	
$
t
h
i
s
-
>
e
x
t
r
a
s
v
a
l
u
e
s
_
i
t
e
m
s
[
 
$
e
x
t
r
a
 
]
[
 
'
q
u
a
n
t
i
t
y
_
m
u
l
t
i
p
l
i
e
r
'
 
]
 
=
 
$
t
h
i
s
-
>
s
t
a
y
D
a
y
s
;

	
	
	
	
	
	
	
b
r
e
a
k
;

	
	
	
	
	
	
c
a
s
e
 
'
3
'
:
 
/
/
 
p
e
r
 
b
o
o
k
i
n
g

	
	
	
	
	
	
	
$
c
a
l
c
 
=
 
$
t
h
i
s
P
r
i
c
e
;

	
	
	
	
	
	
	
$
t
h
i
s
-
>
e
x
t
r
a
s
v
a
l
u
e
s
_
i
t
e
m
s
[
 
$
e
x
t
r
a
 
]
[
 
'
q
u
a
n
t
i
t
y
_
m
u
l
t
i
p
l
i
e
r
'
 
]
 
=
 
1
;

	
	
	
	
	
	
	
b
r
e
a
k
;

	
	
	
	
	
	
c
a
s
e
 
'
4
'
:
 
/
/
 
p
e
r
 
p
e
r
s
o
n
 
p
e
r
 
b
o
o
k
i
n
g

	
	
	
	
	
	
	
$
c
a
l
c
 
=
 
$
t
h
i
s
-
>
t
o
t
a
l
_
i
n
_
p
a
r
t
y
 
*
 
$
t
h
i
s
P
r
i
c
e
;

	
	
	
	
	
	
	
$
t
h
i
s
-
>
e
x
t
r
a
s
v
a
l
u
e
s
_
i
t
e
m
s
[
 
$
e
x
t
r
a
 
]
[
 
'
q
u
a
n
t
i
t
y
_
m
u
l
t
i
p
l
i
e
r
'
 
]
 
=
 
$
t
h
i
s
-
>
t
o
t
a
l
_
i
n
_
p
a
r
t
y
;

	
	
	
	
	
	
	
b
r
e
a
k
;

	
	
	
	
	
	
c
a
s
e
 
'
5
'
:
 
/
/
 
p
e
r
 
p
e
r
s
o
n
 
p
e
r
 
d
a
y

	
	
	
	
	
	
	
$
c
a
l
c
 
=
 
$
t
h
i
s
-
>
t
o
t
a
l
_
i
n
_
p
a
r
t
y
 
*
 
$
t
h
i
s
-
>
s
t
a
y
D
a
y
s
 
*
 
$
t
h
i
s
P
r
i
c
e
;

	
	
	
	
	
	
	
$
t
h
i
s
-
>
e
x
t
r
a
s
v
a
l
u
e
s
_
i
t
e
m
s
[
 
$
e
x
t
r
a
 
]
[
 
'
q
u
a
n
t
i
t
y
_
m
u
l
t
i
p
l
i
e
r
'
 
]
 
=
 
$
t
h
i
s
-
>
t
o
t
a
l
_
i
n
_
p
a
r
t
y
 
*
 
$
t
h
i
s
-
>
s
t
a
y
D
a
y
s
;

	
	
	
	
	
	
	
b
r
e
a
k
;

	
	
	
	
	
	
c
a
s
e
 
'
6
'
:
 
/
/
 
p
e
r
 
p
e
r
s
o
n
 
p
e
r
 
w
e
e
k

	
	
	
	
	
	
	
$
n
u
m
b
e
r
O
f
W
e
e
k
s
 
=
 
c
e
i
l
(
$
t
h
i
s
-
>
s
t
a
y
D
a
y
s
 
/
 
7
)
;

	
	
	
	
	
	
	
$
c
a
l
c
 
=
 
$
t
h
i
s
-
>
t
o
t
a
l
_
i
n
_
p
a
r
t
y
 
*
 
$
n
u
m
b
e
r
O
f
W
e
e
k
s
 
*
 
$
t
h
i
s
P
r
i
c
e
;

	
	
	
	
	
	
	
$
t
h
i
s
-
>
e
x
t
r
a
s
v
a
l
u
e
s
_
i
t
e
m
s
[
 
$
e
x
t
r
a
 
]
[
 
'
q
u
a
n
t
i
t
y
_
m
u
l
t
i
p
l
i
e
r
'
 
]
 
=
 
$
t
h
i
s
-
>
t
o
t
a
l
_
i
n
_
p
a
r
t
y
 
*
 
$
n
u
m
b
e
r
O
f
W
e
e
k
s
;

	
	
	
	
	
	
	
b
r
e
a
k
;

	
	
	
	
	
	
c
a
s
e
 
'
7
'
:
 
/
/
 
p
e
r
 
p
e
r
s
o
n
 
p
e
r
 
d
a
y
s
 
m
i
n
 
d
a
y
s

	
	
	
	
	
	
	
$
m
i
n
d
a
y
s
 
=
 
$
m
o
d
e
l
[
 
'
p
a
r
a
m
s
'
 
]
;

	
	
	
	
	
	
	
i
f
 
(
$
t
h
i
s
-
>
s
t
a
y
D
a
y
s
 
<
 
$
m
i
n
d
a
y
s
)
 
{

	
	
	
	
	
	
	
	
$
d
a
y
s
 
=
 
$
m
i
n
d
a
y
s
;

	
	
	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
	
	
$
d
a
y
s
 
=
 
$
t
h
i
s
-
>
s
t
a
y
D
a
y
s
;

	
	
	
	
	
	
	
}

	
	
	
	
	
	
	
$
c
a
l
c
 
=
 
$
d
a
y
s
 
*
 
$
t
h
i
s
P
r
i
c
e
;

	
	
	
	
	
	
	
$
t
h
i
s
-
>
e
x
t
r
a
s
v
a
l
u
e
s
_
i
t
e
m
s
[
 
$
e
x
t
r
a
 
]
[
 
'
q
u
a
n
t
i
t
y
_
m
u
l
t
i
p
l
i
e
r
'
 
]
 
=
 
$
d
a
y
s
;

	
	
	
	
	
	
	
b
r
e
a
k
;

	
	
	
	
	
	
c
a
s
e
 
'
8
'
:
 
/
/
 
p
e
r
 
d
a
y
s
 
p
e
r
 
r
o
o
m

	
	
	
	
	
	
	
$
n
u
m
_
r
o
o
m
s
 
=
 
$
t
h
i
s
-
>
n
u
m
b
e
r
O
f
C
u
r
r
e
n
t
l
y
S
e
l
e
c
t
e
d
R
o
o
m
s
(
)
;

	
	
	
	
	
	
	
$
c
a
l
c
 
=
 
(
$
t
h
i
s
-
>
s
t
a
y
D
a
y
s
 
*
 
$
t
h
i
s
P
r
i
c
e
)
 
*
 
$
n
u
m
_
r
o
o
m
s
;

	
	
	
	
	
	
	
$
t
h
i
s
-
>
e
x
t
r
a
s
v
a
l
u
e
s
_
i
t
e
m
s
[
 
$
e
x
t
r
a
 
]
[
 
'
q
u
a
n
t
i
t
y
_
m
u
l
t
i
p
l
i
e
r
'
 
]
 
=
 
$
t
h
i
s
-
>
s
t
a
y
D
a
y
s
 
*
 
$
n
u
m
_
r
o
o
m
s
;

	
	
	
	
	
	
	
b
r
e
a
k
;

	
	
	
	
	
	
c
a
s
e
 
'
9
'
:
 
/
/
 
p
e
r
 
r
o
o
m

	
	
	
	
	
	
	
$
n
u
m
_
r
o
o
m
s
 
=
 
$
t
h
i
s
-
>
n
u
m
b
e
r
O
f
C
u
r
r
e
n
t
l
y
S
e
l
e
c
t
e
d
R
o
o
m
s
(
)
;

	
	
	
	
	
	
	
$
c
a
l
c
 
=
 
$
t
h
i
s
P
r
i
c
e
 
*
 
$
n
u
m
_
r
o
o
m
s
;

	
	
	
	
	
	
	
$
t
h
i
s
-
>
e
x
t
r
a
s
v
a
l
u
e
s
_
i
t
e
m
s
[
 
$
e
x
t
r
a
 
]
[
 
'
q
u
a
n
t
i
t
y
_
m
u
l
t
i
p
l
i
e
r
'
 
]
 
=
 
$
n
u
m
_
r
o
o
m
s
;

	
	
	
	
	
	
	
b
r
e
a
k
;

	
	
	
	
	
	
c
a
s
e
 
'
1
0
0
'
:
 
/
/
 
c
o
m
m
i
s
s
i
o
n

	
	
	
	
	
	
	
$
c
a
l
c
 
=
 
(
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
 
/
 
1
0
0
)
 
*
 
$
t
h
i
s
P
r
i
c
e
;

	
	
	
	
	
	
	
$
t
h
i
s
-
>
e
x
t
r
a
s
v
a
l
u
e
s
_
i
t
e
m
s
[
 
$
e
x
t
r
a
 
]
[
 
'
q
u
a
n
t
i
t
y
_
m
u
l
t
i
p
l
i
e
r
'
 
]
 
=
 
1
;

	
	
	
	
	
	
	
b
r
e
a
k
;


	
	
	
	
	
}

	
	
	
	
	
$
q
u
a
n
t
i
t
y
 
=
 
$
t
h
i
s
-
>
e
x
t
r
a
s
q
u
a
n
t
i
t
i
e
s
[
 
$
e
x
t
r
a
 
]
;


	
	
	
	
	
$
t
m
p
T
o
t
a
l
 
=
 
$
q
u
a
n
t
i
t
y
 
*
 
$
c
a
l
c
;


	
	
	
	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
c
a
l
c
E
x
t
r
a
s
:
 
t
a
x
_
r
a
t
e
_
i
d
:
 
"
.
$
t
a
x
_
r
a
t
e
_
i
d
)
;

	
	
	
	
	
i
f
 
(
(
i
n
t
)
 
$
t
a
x
_
r
a
t
e
_
i
d
 
>
 
0
)
 
{

	
	
	
	
	
	
$
r
a
t
e
 
=
 
$
t
h
i
s
-
>
t
a
x
r
a
t
e
s
[
 
$
t
a
x
_
r
a
t
e
_
i
d
 
]
[
 
'
r
a
t
e
'
 
]
;

	
	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
a
l
c
E
x
t
r
a
s
:
 
r
a
t
e
 
i
s
:
 
'
.
$
r
a
t
e
)
;

	
	
	
	
	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
p
r
i
c
e
s
_
i
n
c
l
u
s
i
v
e
'
 
]
 
=
=
 
1
)
 
{

	
	
	
	
	
	
	
$
d
i
v
i
s
o
r
 
=
 
(
$
r
a
t
e
 
/
 
1
0
0
)
 
+
 
1
;

	
	
	
	
	
	
	
$
n
e
t
t
_
p
r
i
c
e
 
=
 
$
t
m
p
T
o
t
a
l
 
/
 
$
d
i
v
i
s
o
r
;

	
	
	
	
	
	
	
$
t
h
i
s
T
a
x
 
=
 
$
t
m
p
T
o
t
a
l
 
-
 
$
n
e
t
t
_
p
r
i
c
e
;

	
	
	
	
	
	
	
$
t
m
p
T
o
t
a
l
 
=
 
$
n
e
t
t
_
p
r
i
c
e
;

	
	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
	
$
t
h
i
s
T
a
x
 
=
 
(
$
t
m
p
T
o
t
a
l
 
/
 
1
0
0
)
 
*
 
$
r
a
t
e
;

	
	
	
	
	
	
}


	
	
	
	
	
	
$
t
h
i
s
-
>
e
x
t
r
a
_
t
a
x
s
[
 
]
 
=
 
$
t
h
i
s
T
a
x
;

	
	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
a
l
c
E
x
t
r
a
s
:
 
A
d
d
i
n
g
 
:
 
'
.
$
t
h
i
s
T
a
x
.
'
 
t
o
 
o
r
i
g
i
n
a
l
 
v
a
l
u
e
 
'
.
$
t
m
p
T
o
t
a
l
)
;

	
	
	
	
	
	
$
t
m
p
T
o
t
a
l
 
=
 
$
t
m
p
T
o
t
a
l
 
+
 
$
t
h
i
s
T
a
x
;

	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
a
l
c
E
x
t
r
a
s
:
 
T
a
x
 
r
a
t
e
 
n
o
t
 
s
e
t
 
'
)
;

	
	
	
	
	
}


	
	
	
	
	
/
/
$
t
h
i
s
-
>
e
x
t
r
a
s
v
a
l
u
e
s
_
i
t
e
m
s
[
$
e
x
t
r
a
]
=
$
t
m
p
T
o
t
a
l
;

	
	
	
	
	
$
e
x
t
r
a
s
T
o
t
a
l
 
=
 
$
e
x
t
r
a
s
T
o
t
a
l
 
+
 
$
t
m
p
T
o
t
a
l
;

	
	
	
	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
<
b
>
c
a
l
c
E
x
t
r
a
s
:
 
E
x
t
r
a
s
 
t
o
t
a
l
s
 
p
l
u
s
 
T
a
x
<
/
a
>
:
 
"
.
$
e
x
t
r
a
s
T
o
t
a
l
 
)
;

	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
a
l
c
E
x
t
r
a
s
:
 
E
x
t
r
a
s
 
t
o
t
a
l
s
:
 
'
.
$
e
x
t
r
a
s
T
o
t
a
l
)
;

	
	
	
	
}

	
	
	
}

	
	
}

	
	
/
/
=
a
r
r
a
y
(
'
i
d
'
=
>
$
i
d
,
'
d
e
s
c
r
i
p
t
i
o
n
'
=
>
$
d
e
s
c
r
i
p
t
i
o
n
,
'
u
n
t
a
x
e
d
_
g
r
a
n
d
_
t
o
t
a
l
'
=
>
$
t
o
t
a
l
_
v
a
l
u
e
,
'
t
a
x
_
c
o
d
e
_
i
d
'
=
>
$
t
a
x
_
c
o
d
e
_
i
d
)
;

	
	
i
f
 
(
!
e
m
p
t
y
(
$
t
h
i
s
-
>
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
)
 
&
&
 
$
t
h
i
s
-
>
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
 
!
=
=
 
f
a
l
s
e
)
 
{

	
	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
 
a
s
 
$
p
l
u
g
i
n
)
 
{

	
	
	
	
f
o
r
e
a
c
h
 
(
$
p
l
u
g
i
n
 
a
s
 
$
t
p
e
x
t
r
a
)
 
{

	
	
	
	
	
$
t
m
p
T
o
t
a
l
 
=
 
(
f
l
o
a
t
)
 
$
t
p
e
x
t
r
a
[
 
'
u
n
t
a
x
e
d
_
g
r
a
n
d
_
t
o
t
a
l
'
 
]
;

	
	
	
	
	

	
	
	
	
	
/
/
C
o
u
p
o
n
 
d
i
s
c
o
u
n
t

	
	
	
	
	
i
f
 
(
$
t
h
i
s
-
>
c
o
u
p
o
n
_
c
o
d
e
 
!
=
 
'
'
 
&
&
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
i
s
_
j
i
n
t
o
u
r
_
p
r
o
p
e
r
t
y
'
)
)
 
{

	
	
	
	
	
	
$
o
l
d
_
t
o
t
a
l
 
=
 
$
t
m
p
T
o
t
a
l
;

	
	
	
	
	
	
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
t
h
i
s
-
>
d
a
t
e
R
a
n
g
e
S
t
r
i
n
g
)
;

	
	
	
	
	
	
$
c
a
n
o
n
i
c
a
l
_
d
a
t
e
_
r
a
n
g
e
_
a
r
r
a
y
 
=
 
a
r
r
a
y
(
)
;

	
	
	
	
	
	
f
o
r
e
a
c
h
 
(
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
 
a
s
 
$
d
)
 
{

	
	
	
	
	
	
	
$
c
a
n
o
n
i
c
a
l
_
d
a
t
e
_
r
a
n
g
e
_
a
r
r
a
y
[
 
]
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
/
'
,
 
'
-
'
,
 
$
d
)
;

	
	
	
	
	
	
}

	
	
	
	
	
	
$
c
o
u
p
o
n
_
r
a
n
g
e
 
=
 
$
t
h
i
s
-
>
c
o
u
p
o
n
_
b
o
o
k
i
n
g
_
d
a
t
e
_
r
a
n
g
e
s
(
$
t
h
i
s
-
>
c
o
u
p
o
n
_
d
e
t
a
i
l
s
[
 
'
b
o
o
k
i
n
g
_
v
a
l
i
d
_
f
r
o
m
'
 
]
,
 
$
t
h
i
s
-
>
c
o
u
p
o
n
_
d
e
t
a
i
l
s
[
 
'
b
o
o
k
i
n
g
_
v
a
l
i
d
_
t
o
'
 
]
)
;

	
	
	
	
	
	
$
n
u
m
b
e
r
_
o
f
_
t
i
m
e
s
_
c
o
u
p
o
n
_
i
s
_
v
a
l
i
d
_
f
o
r
_
b
o
o
k
i
n
g
_
d
a
t
e
_
r
a
n
g
e
 
=
 
0
;

	
	
	
	
	
	
f
o
r
e
a
c
h
 
(
$
c
a
n
o
n
i
c
a
l
_
d
a
t
e
_
r
a
n
g
e
_
a
r
r
a
y
 
a
s
 
$
d
a
t
e
)
 
{

	
	
	
	
	
	
	
i
f
 
(
i
n
_
a
r
r
a
y
(
$
d
a
t
e
,
 
$
c
o
u
p
o
n
_
r
a
n
g
e
)
)
 
{

	
	
	
	
	
	
	
	
+
+
$
n
u
m
b
e
r
_
o
f
_
t
i
m
e
s
_
c
o
u
p
o
n
_
i
s
_
v
a
l
i
d
_
f
o
r
_
b
o
o
k
i
n
g
_
d
a
t
e
_
r
a
n
g
e
;

	
	
	
	
	
	
	
}

	
	
	
	
	
	
}


	
	
	
	
	
	
$
t
h
i
s
-
>
c
o
u
p
o
n
_
d
i
s
c
o
u
n
t
_
v
a
l
u
e
 
=
 
0
.
0
0
;

	
	
	
	
	
	
i
f
 
(
$
n
u
m
b
e
r
_
o
f
_
t
i
m
e
s
_
c
o
u
p
o
n
_
i
s
_
v
a
l
i
d
_
f
o
r
_
b
o
o
k
i
n
g
_
d
a
t
e
_
r
a
n
g
e
 
>
 
0
)
 
{

	
	
	
	
	
	
	
i
f
 
(
$
t
h
i
s
-
>
c
o
u
p
o
n
_
d
e
t
a
i
l
s
[
 
'
i
s
_
p
e
r
c
e
n
t
a
g
e
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
	
	
	
	
	
$
t
h
i
s
-
>
c
o
u
p
o
n
_
d
i
s
c
o
u
n
t
_
v
a
l
u
e
 
=
 
(
$
t
m
p
T
o
t
a
l
 
/
 
1
0
0
)
 
*
 
(
f
l
o
a
t
)
 
$
t
h
i
s
-
>
c
o
u
p
o
n
_
d
e
t
a
i
l
s
[
 
'
a
m
o
u
n
t
'
 
]
;

	
	
	
	
	
	
	
	
$
t
m
p
T
o
t
a
l
 
=
 
$
t
m
p
T
o
t
a
l
 
-
 
$
t
h
i
s
-
>
c
o
u
p
o
n
_
d
i
s
c
o
u
n
t
_
v
a
l
u
e
;

	
	
	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
	
	
$
t
h
i
s
-
>
c
o
u
p
o
n
_
d
i
s
c
o
u
n
t
_
v
a
l
u
e
 
=
 
(
f
l
o
a
t
)
 
$
t
h
i
s
-
>
c
o
u
p
o
n
_
d
e
t
a
i
l
s
[
 
'
a
m
o
u
n
t
'
 
]
;

	
	
	
	
	
	
	
	
$
t
m
p
T
o
t
a
l
 
=
 
$
t
m
p
T
o
t
a
l
 
-
 
$
t
h
i
s
-
>
c
o
u
p
o
n
_
d
i
s
c
o
u
n
t
_
v
a
l
u
e
;

	
	
	
	
	
	
	
}

	
	
	
	
	
	
}


	
	
	
	
	
	
$
t
h
i
s
-
>
d
i
s
c
o
u
n
t
s
[
]
 
=
 
a
r
r
a
y
(
'
t
y
p
e
'
 
=
>
 
'
T
o
u
r
C
o
u
p
o
n
'
,
 
'
r
o
o
m
t
y
p
e
a
b
b
r
'
 
=
>
 
'
N
/
A
'
,
 
'
d
i
s
c
o
u
n
t
f
r
o
m
'
 
=
>
 
$
o
l
d
_
t
o
t
a
l
,
 
'
d
i
s
c
o
u
n
t
t
o
'
 
=
>
 
$
t
m
p
T
o
t
a
l
)
;


	
	
	
	
	
	
$
f
b
1
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
C
O
U
P
O
N
S
_
B
O
O
K
I
N
G
_
D
I
S
C
O
U
N
T
_
F
E
E
D
B
A
C
K
'
,
 
'
_
J
R
P
O
R
T
A
L
_
C
O
U
P
O
N
S
_
B
O
O
K
I
N
G
_
D
I
S
C
O
U
N
T
_
F
E
E
D
B
A
C
K
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

	
	
	
	
	
	
$
f
b
2
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
C
O
U
P
O
N
S
_
B
O
O
K
I
N
G
_
D
I
S
C
O
U
N
T
_
F
E
E
D
B
A
C
K
_
T
O
'
,
 
'
_
J
R
P
O
R
T
A
L
_
C
O
U
P
O
N
S
_
B
O
O
K
I
N
G
_
D
I
S
C
O
U
N
T
_
F
E
E
D
B
A
C
K
_
T
O
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

	
	
	
	
	
	
$
f
e
e
d
b
a
c
k
 
=
 
$
f
b
1
.
o
u
t
p
u
t
_
p
r
i
c
e
(
$
o
l
d
_
t
o
t
a
l
)
.
$
f
b
2
.
o
u
t
p
u
t
_
p
r
i
c
e
(
$
t
m
p
T
o
t
a
l
)
;

	
	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
G
u
e
s
t
P
o
p
u
p
M
e
s
s
a
g
e
(
$
f
e
e
d
b
a
c
k
)
;

	
	
	
	
	
	
$
t
h
i
s
-
>
a
d
d
B
o
o
k
i
n
g
N
o
t
e
(
'
C
o
u
p
o
n
 
f
e
e
d
b
a
c
k
'
,
 
$
f
e
e
d
b
a
c
k
)
;


	
	
	
	
	
	
$
n
o
t
e
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
C
O
U
P
O
N
_
B
O
O
K
I
N
G
N
O
T
E
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
C
O
U
P
O
N
_
B
O
O
K
I
N
G
N
O
T
E
'
,
 
f
a
l
s
e
)
.
'
 
'
.
$
t
h
i
s
-
>
c
o
u
p
o
n
_
i
d
.
'
 
/
 
'
.
$
t
h
i
s
-
>
c
o
u
p
o
n
_
c
o
d
e
.
'
 
/
 
'
.
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
C
O
U
P
O
N
S
_
A
M
O
U
N
T
'
,
 
'
_
J
R
P
O
R
T
A
L
_
C
O
U
P
O
N
S
_
A
M
O
U
N
T
'
,
 
f
a
l
s
e
)
.
'
 
'
.
$
t
h
i
s
-
>
c
o
u
p
o
n
_
d
i
s
c
o
u
n
t
_
v
a
l
u
e
.
'
 
/
 
'
;

	
	
	
	
	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
c
o
u
p
o
n
_
d
e
t
a
i
l
s
 
a
s
 
$
k
 
=
>
 
$
v
)
 
{

	
	
	
	
	
	
	
$
n
o
t
e
 
.
=
 
$
k
.
'
 
-
 
'
.
$
v
.
'
 
:
:
 
'
;

	
	
	
	
	
	
}

	
	
	
	
	
	
$
t
h
i
s
-
>
a
d
d
B
o
o
k
i
n
g
N
o
t
e
(
'
C
o
u
p
o
n
'
,
 
$
n
o
t
e
)
;

	
	
	
	
	
}

	
	
	
	
	

	
	
	
	
	
i
f
 
(
i
s
s
e
t
(
$
t
p
e
x
t
r
a
[
 
'
t
a
x
_
c
o
d
e
_
i
d
'
 
]
)
 
&
&
 
(
i
n
t
)
 
$
t
p
e
x
t
r
a
[
 
'
t
a
x
_
c
o
d
e
_
i
d
'
 
]
 
>
 
0
)
 
{

	
	
	
	
	
	
$
t
a
x
_
r
a
t
e
_
i
d
 
=
 
$
t
p
e
x
t
r
a
[
 
'
t
a
x
_
c
o
d
e
_
i
d
'
 
]
;


	
	
	
	
	
	
i
f
 
(
i
s
s
e
t
(
$
t
h
i
s
-
>
t
a
x
r
a
t
e
s
[
 
$
t
a
x
_
r
a
t
e
_
i
d
 
]
[
 
'
r
a
t
e
'
 
]
)
)
 
{

	
	
	
	
	
	
	
$
r
a
t
e
 
=
 
$
t
h
i
s
-
>
t
a
x
r
a
t
e
s
[
 
$
t
a
x
_
r
a
t
e
_
i
d
 
]
[
 
'
r
a
t
e
'
 
]
;

	
	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
	
$
r
a
t
e
 
=
 
0
;

	
	
	
	
	
	
}

	
	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
a
l
c
E
x
t
r
a
s
 
T
h
i
r
d
 
p
a
r
t
y
:
 
r
a
t
e
 
i
s
:
 
'
.
$
r
a
t
e
)
;


	
	
	
	
	
	
$
t
h
i
s
T
a
x
 
=
 
(
$
t
m
p
T
o
t
a
l
 
/
 
1
0
0
)
 
*
 
$
r
a
t
e
;

	
	
	
	
	
	
$
t
h
i
s
-
>
e
x
t
r
a
_
t
a
x
s
[
 
]
 
=
 
$
t
h
i
s
T
a
x
;

	
	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
a
l
c
E
x
t
r
a
s
 
T
h
i
r
d
 
p
a
r
t
y
:
 
A
d
d
i
n
g
 
:
 
'
.
$
t
h
i
s
T
a
x
.
'
 
t
o
 
o
r
i
g
i
n
a
l
 
v
a
l
u
e
 
'
.
$
t
m
p
T
o
t
a
l
)
;

	
	
	
	
	
	
$
t
m
p
T
o
t
a
l
 
=
 
$
t
m
p
T
o
t
a
l
 
+
 
$
t
h
i
s
T
a
x
;

	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
a
l
c
E
x
t
r
a
s
:
 
T
a
x
 
r
a
t
e
 
n
o
t
 
s
e
t
 
'
)
;

	
	
	
	
	
}

	
	
	
	
	
$
e
x
t
r
a
s
T
o
t
a
l
 
=
 
$
e
x
t
r
a
s
T
o
t
a
l
 
+
 
$
t
m
p
T
o
t
a
l
;

	
	
	
	
}

	
	
	
}

	
	
}

	
	
/
/
$
t
h
i
s
-
>
e
x
t
r
a
s
v
a
l
u
e
p
l
u
s
t
a
x
=
$
e
x
t
r
a
s
T
o
t
a
l
P
l
u
s
T
a
x
;

	
	
/
/
$
t
h
i
s
-
>
e
x
t
r
a
s
v
a
l
u
e
 
=
 
$
e
x
t
r
a
s
T
o
t
a
l
;


	
	
$
t
h
i
s
-
>
e
x
t
r
a
s
v
a
l
u
e
 
=
 
n
u
m
b
e
r
_
f
o
r
m
a
t
(
$
e
x
t
r
a
s
T
o
t
a
l
,
 
2
,
 
'
.
'
,
 
'
'
)
;

	
}


	
/
*
*

	
 
*
 
C
a
l
c
u
l
a
t
e
s
 
r
o
o
m
 
&
/
o
r
 
V
A
T
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
c
a
l
c
T
a
x
(
)

	
{

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
a
l
c
T
a
x
:
:
 
S
t
a
r
t
e
d
'
)
;

	
	
$
t
o
t
a
l
T
a
x
 
=
 
0
.
0
0
;

	
	
$
t
o
t
a
l
B
o
o
k
i
n
g
 
=
 
$
t
h
i
s
-
>
g
e
t
R
o
o
m
t
o
t
a
l
(
)
;


	
	
$
t
o
t
a
l
B
o
o
k
i
n
g
 
=
 
$
t
o
t
a
l
B
o
o
k
i
n
g
 
+
 
$
t
h
i
s
-
>
s
i
n
g
l
e
_
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
;


	
	
$
r
a
t
e
 
=
 
$
t
h
i
s
-
>
a
c
c
o
m
m
o
d
a
t
i
o
n
_
t
a
x
_
r
a
t
e
;

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
a
l
c
T
a
x
:
:
T
a
x
 
r
a
t
e
 
d
e
t
e
c
t
e
d
 
a
s
 
'
.
$
r
a
t
e
)
;

	
	
$
p
e
r
c
e
n
t
a
g
e
T
o
A
d
d
 
=
 
$
t
o
t
a
l
B
o
o
k
i
n
g
 
*
 
(
$
r
a
t
e
 
/
 
1
0
0
)
;

	
	
$
t
o
t
a
l
T
a
x
 
=
 
$
p
e
r
c
e
n
t
a
g
e
T
o
A
d
d
;

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
a
l
c
T
a
x
:
:
 
T
o
t
a
l
 
t
a
x
 
c
a
l
c
u
l
a
t
e
d
 
a
s
 
'
.
$
t
o
t
a
l
T
a
x
)
;


	
	
$
t
h
i
s
-
>
t
a
x
 
=
 
$
t
o
t
a
l
T
a
x
;

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
a
l
c
T
a
x
:
:
 
E
n
d
e
d
'
)
;

	
}


	
/
*
*

	
 
*
 
D
i
s
c
e
r
n
s
 
i
f
 
s
i
n
g
l
e
 
p
e
r
s
o
n
 
s
u
p
p
l
i
e
m
e
n
t
 
a
p
p
l
i
e
s
,
 
a
n
d
 
i
f
 
i
t
 
d
o
e
s
,
 
h
o
w
 
m
u
c
h
 
s
h
o
u
l
d
 
b
e
 
c
h
a
r
g
e
d
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
c
a
l
c
S
i
n
g
l
e
P
e
r
s
o
n
S
u
p
p
l
i
m
e
n
t
(
)

	
{

	
	
$
t
o
t
a
l
B
o
o
k
i
n
g
 
=
 
$
t
h
i
s
-
>
g
e
t
R
o
o
m
t
o
t
a
l
(
)
;

	
	
$
g
u
e
s
t
s
 
=
 
$
t
h
i
s
-
>
g
e
t
V
a
r
i
a
n
t
s
O
f
T
y
p
e
(
'
g
u
e
s
t
t
y
p
e
'
)
;

	
	
$
t
o
t
a
l
N
u
m
b
e
r
O
f
G
u
e
s
t
s
 
=
 
0
;


	
	
i
f
 
(
e
m
p
t
y
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
)
)
 
{
 
/
/
 
N
o
 
r
o
o
m
s
 
s
e
l
e
c
t
e
d
 
y
e
t

	
	
r
e
t
u
r
n
;

	
	
}

	
	
i
f
 
(
e
m
p
t
y
(
$
g
u
e
s
t
s
)
)
 
{
 
/
/
 
G
u
e
s
t
 
n
u
m
b
e
r
s
 
n
o
t
 
c
h
o
s
e
n
/
u
s
e
d

	
	
r
e
t
u
r
n
;

	
	
}

	
	
$
u
s
e
_
p
r
o
p
e
r
t
y
w
i
d
e
_
s
p
s
_
s
e
t
t
i
n
g
 
=
 
f
a
l
s
e
;


	
	
$
t
h
i
s
-
>
s
i
n
g
l
e
_
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
 
=
 
0
.
0
0
;


	
	
$
a
l
l
R
o
o
m
s
M
a
x
P
e
o
p
l
e
 
=
 
a
r
r
a
y
(
)
;

	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
 
a
s
 
$
r
)
 
{

	
	
	
$
r
m
_
i
d
A
r
r
 
=
 
e
x
p
l
o
d
e
(
'
^
'
,
 
$
r
)
;

	
	
	
$
r
m
_
i
d
 
=
 
$
r
m
_
i
d
A
r
r
[
 
0
 
]
;

	
	
	
$
a
l
l
R
o
o
m
s
M
a
x
P
e
o
p
l
e
[
 
$
r
m
_
i
d
 
]
 
=
 
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
R
o
o
m
s
[
 
$
r
m
_
i
d
 
]
[
 
'
m
a
x
_
p
e
o
p
l
e
'
 
]
;

	
	
}

	
	
f
o
r
e
a
c
h
 
(
$
g
u
e
s
t
s
 
a
s
 
$
g
)
 
{

	
	
	
$
t
o
t
a
l
N
u
m
b
e
r
O
f
G
u
e
s
t
s
 
=
 
$
t
o
t
a
l
N
u
m
b
e
r
O
f
G
u
e
s
t
s
 
+
 
$
g
[
 
'
q
t
y
'
 
]
;

	
	
}


	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
s
i
n
g
l
e
P
e
r
s
o
n
S
u
p
p
l
i
m
e
n
t
 
=
=
 
'
1
'
)
 
{
 
/
/
 
P
r
o
p
e
r
t
y
-
w
i
d
e
 
S
P
S

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
a
l
c
S
i
n
g
l
e
P
e
r
s
o
n
S
u
p
p
l
i
m
e
n
t
:
:
c
a
l
c
u
l
a
t
i
n
g
 
p
r
o
p
e
r
t
y
-
w
i
d
e
 
s
i
n
g
l
e
 
p
e
r
s
o
n
 
s
u
p
p
l
e
m
e
n
t
s
 
'
)
;

	
	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
s
u
p
p
l
i
m
e
n
t
C
h
a
r
g
e
I
s
P
e
r
c
e
n
t
a
g
e
 
=
=
 
'
1
'
)
 
{

	
	
	
	
$
p
e
r
p
e
r
s
o
n
 
=
 
$
t
o
t
a
l
B
o
o
k
i
n
g
 
/
 
$
t
o
t
a
l
N
u
m
b
e
r
O
f
G
u
e
s
t
s
 
/
 
$
t
h
i
s
-
>
s
t
a
y
D
a
y
s
;

	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
a
l
c
S
i
n
g
l
e
P
e
r
s
o
n
S
u
p
p
l
i
m
e
n
t
:
:
p
e
r
p
e
r
s
o
n
:
 
'
.
$
p
e
r
p
e
r
s
o
n
)
;

	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
a
l
c
S
i
n
g
l
e
P
e
r
s
o
n
S
u
p
p
l
i
m
e
n
t
:
:
p
e
r
p
e
r
s
o
n
/
1
0
0
:
 
'
.
$
p
e
r
p
e
r
s
o
n
 
/
 
1
0
0
)
;

	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
a
l
c
S
i
n
g
l
e
P
e
r
s
o
n
S
u
p
p
l
i
m
e
n
t
:
:
c
f
g
_
s
i
n
g
l
e
P
e
r
s
o
n
S
u
p
p
l
i
m
e
n
t
C
o
s
t
:
 
'
.
$
t
h
i
s
-
>
c
f
g
_
s
i
n
g
l
e
P
e
r
s
o
n
S
u
p
p
l
i
m
e
n
t
C
o
s
t
)
;

	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
a
l
c
S
i
n
g
l
e
P
e
r
s
o
n
S
u
p
p
l
i
m
e
n
t
:
:
s
t
a
y
D
a
y
s
:
 
'
.
$
t
h
i
s
-
>
s
t
a
y
D
a
y
s
)
;

	
	
	
	
$
S
P
S
C
h
a
r
g
e
P
e
r
P
e
r
s
o
n
 
=
 
(
(
$
p
e
r
p
e
r
s
o
n
 
/
 
1
0
0
)
 
*
 
$
t
h
i
s
-
>
c
f
g
_
s
i
n
g
l
e
P
e
r
s
o
n
S
u
p
p
l
i
m
e
n
t
C
o
s
t
)
 
*
 
$
t
h
i
s
-
>
s
t
a
y
D
a
y
s
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
S
P
S
C
h
a
r
g
e
P
e
r
P
e
r
s
o
n
 
=
 
$
t
h
i
s
-
>
c
f
g
_
s
i
n
g
l
e
P
e
r
s
o
n
S
u
p
p
l
i
m
e
n
t
C
o
s
t
 
*
 
$
t
h
i
s
-
>
s
t
a
y
D
a
y
s
;

	
	
	
}

	
	
	
$
u
s
e
_
p
r
o
p
e
r
t
y
w
i
d
e
_
s
p
s
_
s
e
t
t
i
n
g
 
=
 
t
r
u
e
;

	
	
}


	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
 
a
s
 
$
r
m
_
i
d
 
=
>
 
$
a
l
l
o
c
a
t
i
o
n
)
 
{

	
	
	
i
f
 
(
!
$
u
s
e
_
p
r
o
p
e
r
t
y
w
i
d
e
_
s
p
s
_
s
e
t
t
i
n
g
)
 
{

	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
a
l
c
S
i
n
g
l
e
P
e
r
s
o
n
S
u
p
p
l
i
m
e
n
t
:
:
c
a
l
c
u
l
a
t
i
n
g
 
r
o
o
m
 
s
p
e
c
i
f
i
c
 
s
i
n
g
l
e
 
p
e
r
s
o
n
 
s
u
p
p
l
e
m
e
n
t
s
 
'
)
;

	
	
	
	
i
f
 
(
(
f
l
o
a
t
)
 
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
R
o
o
m
s
[
 
$
r
m
_
i
d
 
]
[
 
'
s
i
n
g
l
e
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
'
 
]
 
>
 
0
.
0
0
)
 
{

	
	
	
	
	
$
s
u
p
p
l
i
m
e
n
t
 
=
 
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
R
o
o
m
s
[
 
$
r
m
_
i
d
 
]
[
 
'
s
i
n
g
l
e
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
'
 
]
 
*
 
$
t
h
i
s
-
>
s
t
a
y
D
a
y
s
;

	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
a
l
c
S
i
n
g
l
e
P
e
r
s
o
n
S
u
p
p
l
i
m
e
n
t
:
:
p
e
r
 
r
o
o
m
 
s
u
p
p
l
i
m
e
n
t
:
 
'
.
$
s
u
p
p
l
i
m
e
n
t
)
;

	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
$
s
u
p
p
l
i
m
e
n
t
 
=
 
0
.
0
0
;

	
	
	
	
}

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
s
u
p
p
l
i
m
e
n
t
 
=
 
$
S
P
S
C
h
a
r
g
e
P
e
r
P
e
r
s
o
n
;

	
	
	
}


	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
a
l
c
S
i
n
g
l
e
P
e
r
s
o
n
S
u
p
p
l
i
m
e
n
t
:
:
s
u
p
p
l
i
m
e
n
t
:
 
'
.
$
s
u
p
p
l
i
m
e
n
t
)
;


	
	
	
i
f
 
(
$
a
l
l
R
o
o
m
s
M
a
x
P
e
o
p
l
e
[
 
$
r
m
_
i
d
 
]
 
>
 
1
 
&
&
 
$
a
l
l
o
c
a
t
i
o
n
[
 
'
n
u
m
b
e
r
_
a
l
l
o
c
a
t
e
d
'
 
]
 
=
=
 
1
)
 
{

	
	
	
	
$
t
h
i
s
-
>
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
[
 
$
r
m
_
i
d
 
]
[
 
'
s
u
p
p
l
i
m
e
n
t
'
 
]
 
=
 
$
s
u
p
p
l
i
m
e
n
t
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
t
h
i
s
-
>
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
[
 
$
r
m
_
i
d
 
]
[
 
'
s
u
p
p
l
i
m
e
n
t
'
 
]
 
=
 
0
.
0
0
;

	
	
	
}

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
a
l
c
S
i
n
g
l
e
P
e
r
s
o
n
S
u
p
p
l
i
m
e
n
t
:
:
$
a
l
l
R
o
o
m
s
M
a
x
P
e
o
p
l
e
[
$
r
m
_
i
d
]
>
1
 
&
&
 
$
a
l
l
o
c
a
t
i
o
n
[
\
'
n
u
m
b
e
r
_
a
l
l
o
c
a
t
e
d
\
'
]
=
=
1
:
 
'
.
$
t
h
i
s
-
>
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
[
 
$
r
m
_
i
d
 
]
[
 
'
s
u
p
p
l
i
m
e
n
t
'
 
]
)
;

	
	
}


	
	
/
/
 
B
r
o
k
e
n
 
t
h
i
s
 
d
o
w
n
 
i
n
t
o
 
t
w
o
 
s
e
p
e
r
a
t
e
 
s
t
e
p
s
,
 
w
e
 
c
o
u
l
d
 
m
o
v
e
 
i
t
 
i
n
t
o
 
t
h
e
 
l
o
o
p
 
a
b
o
v
e
,
 
b
u
t
 
t
h
i
s
 
m
a
k
e
s
 
i
t
 
e
a
s
i
e
r
 
t
o
 
r
e
a
d

	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
 
a
s
 
$
r
m
_
i
d
 
=
>
 
$
a
l
l
o
c
a
t
i
o
n
)
 
{

	
	
	
$
s
u
p
p
l
i
m
e
n
t
 
=
 
$
a
l
l
o
c
a
t
i
o
n
[
 
'
s
u
p
p
l
i
m
e
n
t
'
 
]
;

	
	
	
$
t
h
i
s
-
>
s
i
n
g
l
e
_
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
 
=
 
$
t
h
i
s
-
>
s
i
n
g
l
e
_
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
 
+
 
$
s
u
p
p
l
i
m
e
n
t
;

	
	
}


	
	
/
*
 
	
	
$
m
r
C
o
n
f
i
g
 
=
 
$
t
h
i
s
-
>
m
r
C
o
n
f
i
g
;

	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
'
p
r
i
c
e
s
_
i
n
c
l
u
s
i
v
e
'
]
 
=
=
 
1
)

	
	
	
{

	
	
	
$
d
i
v
i
s
o
r
	
=
 
(
$
t
h
i
s
-
>
a
c
c
o
m
m
o
d
a
t
i
o
n
_
t
a
x
_
r
a
t
e
/
1
0
0
)
+
1
;

	
	
	
$
t
h
i
s
-
>
s
i
n
g
l
e
_
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
=
$
t
h
i
s
-
>
s
i
n
g
l
e
_
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
/
$
d
i
v
i
s
o
r
;

	
	
	
}
 
*
/


	
	
$
t
h
i
s
-
>
s
i
n
g
l
e
P
e
r
s
o
n
S
u
p
p
l
i
m
e
n
t
C
a
l
c
u
l
a
t
e
d
 
=
 
t
r
u
e
;

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
a
l
c
S
i
n
g
l
e
P
e
r
s
o
n
S
u
p
p
l
i
m
e
n
t
:
:
S
i
n
g
l
e
 
p
e
r
s
o
n
 
s
u
p
p
l
i
m
e
n
t
 
c
h
a
r
g
e
:
 
'
.
$
t
h
i
s
-
>
s
i
n
g
l
e
_
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
)
;


	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
}


	
/
*
*

	
 
*
 
C
a
l
c
u
l
a
t
e
s
 
h
o
w
 
m
u
c
h
 
d
e
p
o
s
i
t
 
s
h
o
u
l
d
 
b
e
 
c
h
a
r
g
e
d
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
c
a
l
c
D
e
p
o
s
i
t
(
)

	
{

	
	
$
m
r
C
o
n
f
i
g
 
=
 
$
t
h
i
s
-
>
m
r
C
o
n
f
i
g
;

	
	
$
d
a
t
e
s
T
i
l
B
o
o
k
i
n
g
 
=
 
$
t
h
i
s
-
>
f
i
n
d
D
a
t
e
R
a
n
g
e
F
o
r
D
a
t
e
s
(
$
t
h
i
s
-
>
t
o
d
a
y
,
 
$
t
h
i
s
-
>
a
r
r
i
v
a
l
D
a
t
e
)
;

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
a
l
c
D
e
p
o
s
i
t
:
:
U
s
e
 
v
a
r
i
a
b
l
e
 
d
e
p
o
s
i
t
s
 
:
 
'
.
$
m
r
C
o
n
f
i
g
[
 
'
u
s
e
_
v
a
r
i
a
b
l
e
_
d
e
p
o
s
i
t
s
'
 
]
)
;

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
a
l
c
D
e
p
o
s
i
t
:
:
V
a
r
i
a
b
l
e
 
d
e
p
o
s
i
t
 
t
h
r
e
a
s
h
o
l
d
 
:
 
'
.
(
i
n
t
)
 
$
m
r
C
o
n
f
i
g
[
 
'
v
a
r
i
a
b
l
e
_
d
e
p
o
s
i
t
_
t
h
r
e
a
s
h
o
l
d
'
 
]
)
;

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
c
a
l
c
D
e
p
o
s
i
t
:
:
D
a
y
s
 
t
i
l
 
b
o
o
k
i
n
g
 
:
 
'
.
c
o
u
n
t
(
$
d
a
t
e
s
T
i
l
B
o
o
k
i
n
g
)
)
;

	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
d
e
p
o
s
i
t
I
s
O
n
e
N
i
g
h
t
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
i
f
 
(
$
t
h
i
s
-
>
s
t
a
y
D
a
y
s
 
=
=
 
1
)
 
{

	
	
	
	
$
d
e
p
o
s
i
t
V
a
l
u
e
 
=
 
$
t
h
i
s
-
>
b
i
l
l
i
n
g
_
g
r
a
n
d
t
o
t
a
l
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
d
e
p
o
s
i
t
V
a
l
u
e
 
=
 
$
t
h
i
s
-
>
r
a
t
e
_
p
e
r
n
i
g
h
t
;

	
	
	
	
/
/
 
T
h
i
s
 
l
i
n
e
 
c
a
n
 
b
e
 
m
o
d
i
f
i
e
d
,
 
i
f
 
w
e
 
w
a
n
t
 
t
h
e
 
d
e
p
o
s
i
t
 
t
o
 
b
e
 
f
i
r
s
t
 
n
i
g
h
t
 
X
 
n
u
m
b
e
r
 
o
f
 
r
o
o
m
s
 
y
o
u
'
d
 
c
h
a
n
g
e
 
t
h
e
 
a
b
o
v
e
 
l
i
n
e
 
t
o

	
	
	
	
/
/
 
$
d
e
p
o
s
i
t
V
a
l
u
e
 
=
 
$
t
h
i
s
-
>
r
a
t
e
_
p
e
r
n
i
g
h
t
*
c
o
u
n
t
 
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
)
;


	
	
	
	
$
b
a
s
i
c
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
b
a
s
i
c
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
'
)
;


	
	
	
	
$
d
e
p
o
s
i
t
V
a
l
u
e
 
=
 
$
b
a
s
i
c
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
-
>
g
e
t
_
g
r
o
s
s
_
a
c
c
o
m
m
o
d
a
t
i
o
n
_
p
r
i
c
e
(
$
d
e
p
o
s
i
t
V
a
l
u
e
,
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
)
;

	
	
	
}

	
	
}
 
e
l
s
e
 
{

	
	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
u
s
e
_
v
a
r
i
a
b
l
e
_
d
e
p
o
s
i
t
s
'
 
]
 
=
=
 
'
1
'
 
&
&
 
c
o
u
n
t
(
$
d
a
t
e
s
T
i
l
B
o
o
k
i
n
g
)
 
<
=
 
(
i
n
t
)
 
$
m
r
C
o
n
f
i
g
[
 
'
v
a
r
i
a
b
l
e
_
d
e
p
o
s
i
t
_
t
h
r
e
a
s
h
o
l
d
'
 
]
)
 
{

	
	
	
	
$
d
e
p
o
s
i
t
V
a
l
u
e
 
=
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
_
t
o
t
a
l
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
/
/
 
C
a
l
c
u
l
a
t
e
 
d
e
p
o
s
i
t

	
	
	
	
$
d
e
p
o
s
i
t
V
a
l
u
e
 
=
 
0
;

	
	
	
	
/
/
 
D
e
p
r
e
c
i
a
t
i
n
g
 
t
h
i
s
 
n
e
x
t
 
i
f
,
 
b
u
t
 
l
e
a
v
i
n
g
 
t
h
e
 
s
t
u
f
f
 
i
n
s
i
d
e
 
o
n
.
 
T
h
i
s
 
i
s
 
b
e
c
a
u
s
e
 
a
 
f
e
w
 
f
o
l
k
s
 
a
r
e
 
s
e
t
t
i
n
g
 
t
h
e
 
s
h
o
w
 
d
e
p
o
s
i
t
 
t
o
 
N
o
,
 
b
u
t
 
s
t
i
l
l
 
s
e
n
d
i
n
g
 
t
h
e
 
d
e
p
o
s
i
t
 
v
a
l
u
e
 
t
o

	
	
	
	
/
/
 
p
a
y
p
a
l
/
g
a
t
e
w
a
y
.
 
C
o
m
m
e
n
t
i
n
g
 
o
u
t
 
t
h
i
s
 
i
f
 
w
i
l
l
 
m
e
a
n
 
t
h
a
t
 
t
h
e
 
d
e
p
o
s
i
t
 
i
s
 
s
t
i
l
l
 
c
a
l
c
u
l
a
t
e
d
.

	
	
	
	
/
/
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
c
h
a
r
g
e
D
e
p
o
s
i
t
Y
e
s
N
o
=
=
"
1
"
)

	
	
	
	
/
/
	
{

	
	
	
	
$
d
e
p
o
s
i
t
V
a
l
u
e
 
=
 
$
t
h
i
s
-
>
c
f
g
_
d
e
p
o
s
i
t
V
a
l
u
e
;

	
	
	
	
$
t
o
t
a
l
B
o
o
k
i
n
g
 
=
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
_
t
o
t
a
l
;

	
	
	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
d
e
p
A
m
o
u
n
t
 
=
=
 
'
1
'
)
 
{

	
	
	
	
	
$
d
e
p
o
s
i
t
V
a
l
u
e
 
=
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
_
t
o
t
a
l
;

	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
d
e
p
o
s
i
t
I
s
P
e
r
c
e
n
t
a
g
e
 
=
=
 
'
1
'
)
 
{

	
	
	
	
	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
r
o
u
n
d
u
p
D
e
p
o
s
i
t
Y
e
s
N
o
 
=
=
 
'
1
'
)
 
{

	
	
	
	
	
	
	
$
d
e
p
o
s
i
t
V
a
l
u
e
 
=
 
c
e
i
l
(
(
$
t
o
t
a
l
B
o
o
k
i
n
g
 
/
 
1
0
0
)
 
*
 
$
d
e
p
o
s
i
t
V
a
l
u
e
)
;

	
	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
	
$
d
e
p
o
s
i
t
V
a
l
u
e
 
=
 
(
$
t
o
t
a
l
B
o
o
k
i
n
g
 
/
 
1
0
0
)
 
*
 
$
d
e
p
o
s
i
t
V
a
l
u
e
;

	
	
	
	
	
	
}

	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
r
o
u
n
d
u
p
D
e
p
o
s
i
t
Y
e
s
N
o
 
=
=
 
'
1
'
)
 
{

	
	
	
	
	
	
	
$
d
e
p
o
s
i
t
V
a
l
u
e
 
=
 
c
e
i
l
(
$
d
e
p
o
s
i
t
V
a
l
u
e
)
;

	
	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
	
$
d
e
p
o
s
i
t
V
a
l
u
e
 
=
 
$
d
e
p
o
s
i
t
V
a
l
u
e
;

	
	
	
	
	
	
}

	
	
	
	
	
}

	
	
	
	
}

	
	
	
	
/
/
}

	
	
	
}

	
	
}

	
	
$
t
h
i
s
-
>
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
 
=
 
$
d
e
p
o
s
i
t
V
a
l
u
e
;

	
	

	
	
i
f
 
(
!
i
s
s
e
t
(
$
m
r
C
o
n
f
i
g
[
 
'
m
i
n
i
m
u
m
_
d
e
p
o
s
i
t
_
v
a
l
u
e
'
 
]
)
)
 
{

	
	
	
$
m
r
C
o
n
f
i
g
[
 
'
m
i
n
i
m
u
m
_
d
e
p
o
s
i
t
_
v
a
l
u
e
'
 
]
 
=
 
0
;

	
	
}

	
	

	
	
i
f
 
(
 
$
t
h
i
s
-
>
b
i
l
l
i
n
g
_
g
r
a
n
d
t
o
t
a
l
 
>
 
$
t
h
i
s
-
>
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
 
&
&
 
(
f
l
o
a
t
)
$
m
r
C
o
n
f
i
g
[
 
'
m
i
n
i
m
u
m
_
d
e
p
o
s
i
t
_
v
a
l
u
e
'
 
]
 
>
 
 
$
t
h
i
s
-
>
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
)
 
{
 
/
/
 
M
i
n
i
m
u
m
 
d
e
p
o
s
i
t
.
 
I
f
 
l
e
s
s
 
t
h
a
n
 
g
r
a
n
d
 
t
o
t
a
l
,
 
a
n
d
 
m
i
n
i
m
u
m
 
d
e
p
o
s
i
t
 
i
s
 
g
r
e
a
t
e
r
 
t
h
a
n
 
t
h
e
 
c
a
l
c
u
l
a
t
e
d
 
d
e
p
o
s
i
t
,
 
r
e
p
l
a
c
e
 
t
h
e
 
d
e
p
o
s
i
t
 
v
a
l
u
e
 
w
i
t
h
 
t
h
i
s
 
f
i
g
u
r
e

	
	
	
$
t
h
i
s
-
>
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
 
=
 
(
f
l
o
a
t
)
$
m
r
C
o
n
f
i
g
[
 
'
m
i
n
i
m
u
m
_
d
e
p
o
s
i
t
_
v
a
l
u
e
'
 
]
;

	
	
}

	
	

	
	
$
t
h
i
s
J
R
U
s
e
r
 
=
 
j
o
m
r
e
s
_
g
e
t
S
i
n
g
l
e
t
o
n
(
'
j
r
_
u
s
e
r
'
)
;

	
	
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
I
s
M
a
n
a
g
e
r
)
 
{

	
	
	
i
f
 
(
i
s
s
e
t
(
$
t
h
i
s
-
>
o
v
e
r
r
i
d
e
_
d
e
p
o
s
i
t
)
 
&
&
 
$
t
h
i
s
-
>
o
v
e
r
r
i
d
e
_
d
e
p
o
s
i
t
 
<
=
 
$
t
h
i
s
-
>
b
i
l
l
i
n
g
_
g
r
a
n
d
t
o
t
a
l
)
 
{

	
	
	
	
$
t
h
i
s
-
>
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
 
=
 
$
t
h
i
s
-
>
o
v
e
r
r
i
d
e
_
d
e
p
o
s
i
t
;

	
	
	
}

	
	
}

	
}


	
/
*
*

	
 
*
 
R
e
t
u
r
n
s
 
t
h
e
 
v
a
l
u
e
 
o
f
 
t
h
e
 
d
e
p
o
s
i
t
 
r
e
q
u
i
r
e
d
 
t
o
 
m
a
k
e
 
t
h
e
 
b
o
o
k
i
n
g
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
D
e
p
o
s
i
t
(
)

	
{

	
	
r
e
t
u
r
n
 
$
t
h
i
s
-
>
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
;

	
}


	
/
*
*

	
 
*
 
R
e
t
u
r
n
s
 
t
h
e
 
t
o
t
a
l
 
v
a
l
u
e
 
o
f
 
t
h
e
 
e
x
t
r
a
s
 
s
e
l
e
c
t
e
d
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
E
x
t
r
a
s
T
o
t
a
l
(
)

	
{

	
	
r
e
t
u
r
n
 
$
t
h
i
s
-
>
e
x
t
r
a
s
v
a
l
u
e
;

	
}


	
/
*
*

	
 
*
 
R
e
t
u
r
n
s
 
t
h
e
 
t
o
t
a
l
 
v
a
l
u
e
 
o
f
 
t
h
e
 
T
a
x
 
c
a
l
c
u
l
a
t
e
d
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
T
a
x
(
)

	
{

	
	
r
e
t
u
r
n
 
$
t
h
i
s
-
>
t
a
x
;

	
}


	
/
*
*

	
 
*
 
R
e
t
u
r
n
s
 
t
h
e
 
t
o
t
a
l
 
v
a
l
u
e
 
o
f
 
t
h
e
 
s
i
n
g
l
e
 
p
e
r
s
o
n
 
s
u
p
p
l
i
m
e
n
t
 
c
a
l
u
c
l
a
t
e
d
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
S
i
n
g
l
e
P
e
r
s
o
n
S
u
p
p
l
i
m
e
n
t
(
)

	
{

	
	
r
e
t
u
r
n
 
$
t
h
i
s
-
>
s
i
n
g
l
e
_
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
;

	
}


	
/
*
*

	
 
*
 
O
u
t
p
u
t
s
 
t
h
e
 
r
e
s
u
l
t
s
 
o
f
 
t
h
e
 
a
u
t
o
m
a
t
i
c
 
r
o
o
m
 
a
l
l
o
c
a
t
i
o
n
s
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
R
o
o
m
A
l
l
o
c
a
t
i
o
n
O
u
t
p
u
t
(
)

	
{

	
	
$
n
u
m
b
e
r
O
f
G
u
e
s
t
T
y
p
e
s
 
=
 
$
t
h
i
s
-
>
g
e
t
V
a
r
i
a
n
t
s
O
f
T
y
p
e
(
'
g
u
e
s
t
t
y
p
e
'
)
;

	
	
i
f
 
(
e
m
p
t
y
(
$
n
u
m
b
e
r
O
f
G
u
e
s
t
T
y
p
e
s
)
)
 
{

	
	
	
r
e
t
u
r
n
 
'
'
;

	
	
}

	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
p
e
r
P
e
r
s
o
n
P
e
r
N
i
g
h
t
 
=
=
 
'
0
'
)
 
{

	
	
	
r
e
t
u
r
n
 
'
'
;

	
	
}


	
	
$
t
e
x
t
_
r
o
o
m
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
R
O
O
M
A
L
L
O
C
A
T
I
O
N
S
_
R
O
O
M
'
,
 
'
_
J
O
M
R
E
S
_
R
O
O
M
A
L
L
O
C
A
T
I
O
N
S
_
R
O
O
M
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

	
	
$
t
e
x
t
_
g
u
e
s
t
s
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
R
O
O
M
A
L
L
O
C
A
T
I
O
N
S
_
G
U
E
S
T
S
'
,
 
'
_
J
O
M
R
E
S
_
R
O
O
M
A
L
L
O
C
A
T
I
O
N
S
_
G
U
E
S
T
S
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

	
	
$
t
e
x
t
_
i
n
f
o
r
m
a
t
i
o
n
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
R
O
O
M
A
L
L
O
C
A
T
I
O
N
S
_
I
N
F
O
R
M
A
T
I
O
N
'
,
 
'
_
J
O
M
R
E
S
_
R
O
O
M
A
L
L
O
C
A
T
I
O
N
S
_
I
N
F
O
R
M
A
T
I
O
N
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;


	
	
i
f
 
(
e
m
p
t
y
(
$
t
h
i
s
-
>
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
)
)
 
{

	
	
	
r
e
t
u
r
n
 
'
 
'
;

	
	
}

	
	
$
o
u
t
p
u
t
 
=
 
'
<
t
a
b
l
e
>
'
;

	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
 
a
s
 
$
k
e
y
 
=
>
 
$
v
a
l
)
 
{

	
	
	
$
r
m
_
i
d
 
=
 
$
k
e
y
;

	
	
	
$
n
u
m
b
e
r
_
o
f
_
g
u
e
s
t
s
 
=
 
$
v
a
l
[
 
'
n
u
m
b
e
r
_
a
l
l
o
c
a
t
e
d
'
 
]
;

	
	
	
i
f
 
(
i
s
s
e
t
(
$
v
a
l
[
 
'
p
r
i
c
e
_
p
e
r
_
n
i
g
h
t
'
 
]
)
)
 
{

	
	
	
	
$
p
r
i
c
e
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
t
h
i
s
-
>
g
e
t
_
g
r
o
s
s
_
p
r
i
c
e
(
$
v
a
l
[
 
'
p
r
i
c
e
_
p
e
r
_
n
i
g
h
t
'
 
]
 
*
 
$
v
a
l
[
 
'
n
u
m
b
e
r
_
a
l
l
o
c
a
t
e
d
'
 
]
,
 
$
t
h
i
s
-
>
a
c
c
o
m
m
o
d
a
t
i
o
n
_
t
a
x
_
r
a
t
e
)
)
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
p
r
i
c
e
 
=
 
'
'
;

	
	
	
}

	
	
	
$
r
o
o
m
_
n
u
m
b
e
r
 
=
 
'
'
;

	
	
	
$
r
o
o
m
_
n
a
m
e
 
=
 
'
'
;


	
	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
b
o
o
k
i
n
g
_
f
o
r
m
_
r
o
o
m
s
_
l
i
s
t
_
s
t
y
l
e
 
=
=
 
'
2
'
)
 
{

	
	
	
	
$
r
o
o
m
_
t
y
p
e
_
i
d
 
=
 
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
R
o
o
m
s
[
 
$
r
m
_
i
d
 
]
[
 
'
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
'
 
]
;

	
	
	
	
$
r
o
o
m
_
t
y
p
e
 
=
 
$
t
h
i
s
-
>
a
l
l
R
o
o
m
C
l
a
s
s
e
s
[
 
$
r
o
o
m
_
t
y
p
e
_
i
d
 
]
[
 
'
r
o
o
m
_
c
l
a
s
s
_
a
b
b
v
'
 
]
;

	
	
	
	
$
o
u
t
p
u
t
 
.
=
 
'
<
t
r
>
<
t
d
>
'
.
$
t
e
x
t
_
r
o
o
m
.
'
 
:
 
'
.
$
r
o
o
m
_
t
y
p
e
.
'
<
/
t
d
>
<
t
d
>
X
<
/
t
d
>
<
t
d
>
'
.
$
n
u
m
b
e
r
_
o
f
_
g
u
e
s
t
s
.
'
 
'
.
$
t
e
x
t
_
g
u
e
s
t
s
.
'
 
'
.
$
p
r
i
c
e
.
'
<
/
t
d
>
<
/
t
r
>
'
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
r
o
o
m
l
i
s
t
_
s
h
o
w
r
o
o
m
n
o
 
=
=
 
'
1
'
)
 
{

	
	
	
	
	
$
r
o
o
m
_
n
u
m
b
e
r
 
=
 
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
R
o
o
m
s
[
 
$
r
m
_
i
d
 
]
[
 
'
r
o
o
m
_
n
u
m
b
e
r
'
 
]
;

	
	
	
	
}

	
	
	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
b
o
o
k
i
n
g
f
o
r
m
_
r
o
o
m
l
i
s
t
_
s
h
o
w
r
o
o
m
n
a
m
e
 
=
=
 
'
1
'
)
 
{

	
	
	
	
	
$
r
o
o
m
_
n
a
m
e
 
=
 
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
R
o
o
m
s
[
 
$
r
m
_
i
d
 
]
[
 
'
r
o
o
m
_
n
a
m
e
'
 
]
;

	
	
	
	
}

	
	
	
	
/
/
$
t
h
i
s
-
>
s
e
t
P
o
p
u
p
M
e
s
s
a
g
e
(
)
;

	
	
	
	
$
o
u
t
p
u
t
 
.
=
 
'
<
t
r
>
<
t
d
>
'
.
$
t
e
x
t
_
r
o
o
m
.
'
 
:
 
'
.
$
r
o
o
m
_
n
u
m
b
e
r
.
'
 
'
.
$
r
o
o
m
_
n
a
m
e
.
'
<
/
t
d
>
<
t
d
>
X
<
/
t
d
>
<
t
d
>
'
.
$
n
u
m
b
e
r
_
o
f
_
g
u
e
s
t
s
.
'
 
'
.
$
t
e
x
t
_
g
u
e
s
t
s
.
'
 
'
.
$
p
r
i
c
e
.
'
<
/
t
d
>
<
/
t
r
>
'
;

	
	
	
}

	
	
}

	
	
/
/
 
D
o
n
'
t
 
l
e
t
 
t
h
e
r
e
 
b
e
 
a
 
c
a
r
r
i
a
g
e
 
r
e
t
u
r
n
 
i
n
 
t
h
i
s
 
o
u
t
p
u
t
 
s
t
r
i
n
g
,
 
o
t
h
e
r
w
i
s
e
 
t
h
e
 
j
a
v
a
s
c
r
i
p
t
 
w
i
l
l
 
b
o
r
k
.

	
	
$
o
u
t
p
u
t
 
.
=
 
'
<
/
t
a
b
l
e
>
<
b
r
/
>
'
.
$
t
e
x
t
_
i
n
f
o
r
m
a
t
i
o
n
;

	
	
$
t
h
i
s
-
>
a
d
d
B
o
o
k
i
n
g
N
o
t
e
(
'
s
u
p
p
l
i
m
e
n
t
_
n
o
t
e
'
,
 
$
o
u
t
p
u
t
)
;


	
	
r
e
t
u
r
n
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
$
o
u
t
p
u
t
)
;

	
}


	
/
*
*

	
 
*
 
R
e
t
u
r
n
s
 
t
h
e
 
g
r
a
n
d
 
t
o
t
a
l
 
c
a
l
c
u
l
a
t
e
d
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
G
r
a
n
d
T
o
t
a
l
(
)

	
{

	
	
r
e
t
u
r
n
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
_
t
o
t
a
l
;

	
}


	
/
*
*

	
 
*
 
R
e
t
u
r
n
s
 
t
h
e
 
r
o
o
m
 
p
e
r
 
n
i
g
h
t
 
c
a
l
c
u
l
a
t
e
d
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
R
o
o
m
p
e
r
n
i
g
h
t
(
)

	
{

	
	
r
e
t
u
r
n
 
$
t
h
i
s
-
>
r
a
t
e
_
p
e
r
n
i
g
h
t
;

	
}


	
/
*
*

	
 
*
 
R
e
t
u
r
n
s
 
t
h
e
 
r
o
o
m
 
t
o
t
a
l
 
f
o
r
 
t
h
e
 
b
o
o
k
i
n
g
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
R
o
o
m
t
o
t
a
l
(
)

	
{

	
	
r
e
t
u
r
n
 
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
;

	
}


	
/
*
*

	
 
*
 
R
e
s
e
t
s
 
a
l
l
 
t
o
t
a
l
s
 
t
o
 
0
.
0
0
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
r
e
s
e
t
T
o
t
a
l
s
(
)

	
{

	
	
$
t
h
i
s
-
>
r
a
t
e
_
p
e
r
n
i
g
h
t
 
=
 
0
.
0
0
;

	
	
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
_
t
o
t
a
l
 
=
 
0
.
0
0
;

	
	
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
 
=
 
0
.
0
0
;

	
	
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
_
n
o
d
i
s
c
o
u
n
t
 
=
 
0
.
0
0
;

	
	
$
t
h
i
s
-
>
e
x
t
r
a
s
v
a
l
u
e
 
=
 
0
.
0
0
;

	
	
$
t
h
i
s
-
>
t
a
x
 
=
 
0
.
0
0
;

	
	
$
t
h
i
s
-
>
s
i
n
g
l
e
_
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
 
=
 
0
.
0
0
;

	
	
$
t
h
i
s
-
>
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
 
=
 
0
.
0
0
;

	
	
$
t
h
i
s
-
>
r
a
t
e
_
p
e
r
n
i
g
h
t
_
n
o
d
i
s
c
o
u
n
t
 
=
 
0
.
0
0
;

	
}


	
/
*
*

	
 
#

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
m
a
k
e
R
a
t
e
P
e
r
N
i
g
h
t
(
)

	
{

	
	
i
f
 
(
!
g
e
t
_
s
h
o
w
t
i
m
e
(
'
i
n
c
l
u
d
e
_
r
o
o
m
_
b
o
o
k
i
n
g
_
f
u
n
c
t
i
o
n
a
l
i
t
y
'
)
)
 
{

	
	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
	
}


	
	
$
r
e
s
u
l
t
 
=
 
f
a
l
s
e
;

	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
m
a
k
e
R
a
t
e
P
e
r
N
i
g
h
t
:
:
C
u
r
r
e
n
t
l
y
 
s
e
l
e
c
t
e
d
 
r
o
o
m
s
:
 
"
.
c
o
u
n
t
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
)
 
)
;

	
	
i
f
 
(
!
e
m
p
t
y
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
)
)
 
{

	
	
	
i
f
 
(
$
t
h
i
s
-
>
t
a
r
i
f
f
M
o
d
e
l
 
=
=
 
'
1
'
)
 
{

	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
G
e
t
t
i
n
g
 
f
l
a
t
 
r
a
t
e
.
 
'
)
;

	
	
	
	
$
r
e
s
u
l
t
 
=
 
$
t
h
i
s
-
>
s
e
t
F
l
a
t
R
a
t
e
(
)
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
G
e
t
t
i
n
g
 
a
v
e
r
a
g
e
 
r
a
t
e
.
 
'
)
;

	
	
	
	
$
r
e
s
u
l
t
 
=
 
$
t
h
i
s
-
>
s
e
t
A
v
e
r
a
g
e
R
a
t
e
(
)
;

	
	
	
}

	
	
}


	
	
r
e
t
u
r
n
 
$
r
e
s
u
l
t
;

	
}


	
/
*
*

	
 
*
 
T
h
e
 
d
e
f
a
u
l
t
 
m
e
t
h
o
d
 
o
f
 
h
a
n
d
l
i
n
g
 
p
r
i
c
e
 
c
a
l
c
u
l
a
t
i
o
n
s
.
 
W
h
e
n
 
a
 
b
o
o
k
i
n
g
 
i
s
 
m
a
d
e
 
t
h
e
 
p
r
i
c
e
 
f
o
r
 
t
h
e
 
e
n
t
i
r
e
 
p
e
r
i
o
d
 
r
e
f
l
e
c
t
s
 
t
h
e
 
p
r
i
c
e
 
o
f
 
t
h
e
 
b
o
o
k
i
n
g
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
F
l
a
t
R
a
t
e
(
)

	
{

	
	
$
m
r
C
o
n
f
i
g
 
=
 
$
t
h
i
s
-
>
m
r
C
o
n
f
i
g
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
 
=
 
j
o
m
r
e
s
_
g
e
t
S
i
n
g
l
e
t
o
n
(
'
j
o
m
r
e
s
_
t
e
m
p
_
b
o
o
k
i
n
g
_
h
a
n
d
l
e
r
'
)
;

	
	
$
d
i
s
c
 
=
 
a
r
r
a
y
(
)
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
u
p
d
a
t
e
B
o
o
k
i
n
g
F
i
e
l
d
(
'
w
i
s
e
p
r
i
c
e
_
d
i
s
c
o
u
n
t
'
,
 
$
d
i
s
c
)
;

	
	
$
r
p
n
 
=
 
0
.
0
0
;

	
	
$
t
o
t
a
l
 
=
 
0
.
0
0
;

	
	
$
t
o
t
a
l
_
n
o
d
i
s
c
o
u
n
t
 
=
 
0
.
0
0
;

	
	
$
t
a
r
i
f
f
s
 
=
 
a
r
r
a
y
(
)
;

	
	
$
r
a
t
e
s
 
=
 
a
r
r
a
y
(
)
;

	
	
$
r
a
t
e
s
_
n
o
d
i
s
c
o
u
n
t
 
=
 
a
r
r
a
y
(
)
;

	
	
i
f
 
(
!
i
s
s
e
t
(
$
m
r
C
o
n
f
i
g
[
 
'
w
i
s
e
p
r
i
c
e
a
c
t
i
v
e
'
 
]
)
 
|
|
 
e
m
p
t
y
(
$
m
r
C
o
n
f
i
g
[
 
'
w
i
s
e
p
r
i
c
e
a
c
t
i
v
e
'
 
]
)
)
 
{

	
	
	
$
m
r
C
o
n
f
i
g
[
 
'
w
i
s
e
p
r
i
c
e
a
c
t
i
v
e
'
 
]
 
=
 
'
0
'
;

	
	
}

	
	
i
f
 
(
!
i
s
s
e
t
(
$
m
r
C
o
n
f
i
g
[
 
'
w
i
s
e
p
r
i
c
e
t
h
r
e
s
h
o
l
d
'
 
]
)
 
|
|
 
e
m
p
t
y
(
$
m
r
C
o
n
f
i
g
[
 
'
w
i
s
e
p
r
i
c
e
t
h
r
e
s
h
o
l
d
'
 
]
)
)
 
{

	
	
	
$
m
r
C
o
n
f
i
g
[
 
'
w
i
s
e
p
r
i
c
e
t
h
r
e
s
h
o
l
d
'
 
]
 
=
 
'
6
0
'
;

	
	
}

	
	
$
w
i
s
e
p
r
i
c
e
t
h
r
e
s
h
o
l
d
 
=
 
(
i
n
t
)
 
$
m
r
C
o
n
f
i
g
[
 
'
w
i
s
e
p
r
i
c
e
t
h
r
e
s
h
o
l
d
'
 
]
;


	
	
/
/
 
I
f
 
f
l
a
t
 
r
a
t
e
 
i
s
 
s
e
t
,
 
b
u
t
 
t
h
e
y
'
r
e
 
u
s
i
n
g
 
m
i
c
r
o
m
a
n
a
g
e
 
t
h
e
n
 
t
h
e
 
t
a
r
i
f
f
 
p
r
e
v
i
o
u
s
l
y
 
s
e
l
e
c
t
e
d
 
w
i
l
l
 
b
e
 
w
r
o
n
g
.
 
I
n
s
t
e
a
d
 
o
f
 
c
o
r
r
e
c
t
i
n
g
 
t
h
a
t
 
e
l
s
e
w
h
e
r
e
 
(
b
e
c
a
u
s
e
 
o
f
 
h
o
w
 
c
o
m
p
l
e
x
 
t
h
e
 
s
y
s
t
e
m
 
i
s
)
,
 
w
e
'
l
l
 
i
n
s
t
e
a
d
 
q
u
i
c
k
l
y
 
g
o
 
t
h
r
o
u
g
h
 
t
h
e
 
t
a
r
i
f
f
 
m
a
p

	
	
/
/
 
a
n
d
 
r
e
b
u
i
l
d
 
t
h
e
 
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
 
w
i
t
h
 
t
h
e
 
c
o
r
r
e
c
t
 
t
a
r
i
f
f
 
u
i
d
,
 
a
s
 
t
h
i
s
 
i
s
 
a
n
 
e
d
g
e
-
c
a
s
e
.
 
M
O
S
T
 
u
s
e
r
s
 
w
i
l
l
 
w
a
n
t
 
t
o
 
b
e
 
u
s
i
n
g
 
A
v
e
r
a
g
e
 
m
o
d
e
,
 
i
f
 
t
h
e
y
'
r
e
 
u
s
i
n
g
 
M
i
c
r
o
m
a
n
a
g
e
.

	
	
/
/
 
T
h
i
s
 
p
r
o
b
l
e
m
 
a
p
p
e
a
r
e
d
 
b
e
a
u
s
e
 
a
n
 
S
R
P
 
w
a
s
 
u
s
i
n
g
 
f
l
a
t
 
r
a
t
e
.
 
B
e
c
a
u
s
e
 
t
h
e
 
r
o
o
m
/
t
a
r
i
f
f
 
c
o
m
b
o
 
i
s
 
a
u
t
o
m
a
t
i
c
a
l
l
y
 
s
e
l
e
c
t
e
d
 
t
h
e
 
s
y
s
t
e
m
 
d
i
d
n
'
t
 
h
a
v
e
 
a
 
c
h
a
n
c
e
 
t
o
 
f
i
n
d
 
t
h
e
 
c
o
r
r
e
c
t
 
t
a
r
i
f
f
 
u
i
d
 
f
o
r
 
t
h
e
 
s
e
l
e
c
t
e
d
 
r
o
o
m
.

	
	
$
t
h
i
s
-
>
b
u
i
l
d
_
t
a
r
i
f
f
_
t
o
_
d
a
t
e
_
m
a
p
(
)
;


	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
t
a
r
i
f
f
m
o
d
e
'
 
]
 
=
=
 
'
2
'
)
 
{
 
/
/
 
m
i
c
r
o
m
a
n
a
g
e

	
	
	
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
t
h
i
s
-
>
d
a
t
e
R
a
n
g
e
S
t
r
i
n
g
)
;

	
	
	
$
f
i
r
s
t
_
d
a
t
e
 
=
 
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
[
 
0
 
]
;

	
	
	
$
t
m
p
 
=
 
a
r
r
a
y
(
)
;

	
	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
 
a
s
 
$
k
e
y
 
=
>
 
$
r
o
o
m
_
t
a
r
i
f
f
)
 
{

	
	
	
	
$
c
u
r
r
e
n
t
T
a
r
i
f
f
s
A
r
r
a
y
 
=
 
e
x
p
l
o
d
e
(
'
^
'
,
 
$
r
o
o
m
_
t
a
r
i
f
f
)
;

	
	
	
	
$
r
o
o
m
_
u
i
d
 
=
 
$
c
u
r
r
e
n
t
T
a
r
i
f
f
s
A
r
r
a
y
[
 
0
 
]
;

	
	
	
	
$
t
a
r
i
f
f
_
u
i
d
 
=
 
$
c
u
r
r
e
n
t
T
a
r
i
f
f
s
A
r
r
a
y
[
 
1
 
]
;

	
	
	
	
/
/
 
N
o
w
 
w
e
 
n
e
e
d
 
t
o
 
f
i
n
d
 
t
h
e
 
t
a
r
i
f
f
 
t
y
p
e

	
	
	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
T
a
r
i
f
f
s
 
a
s
 
$
t
a
r
i
f
f
)
 
{

	
	
	
	
	
i
f
 
(
$
t
a
r
i
f
f
[
 
'
r
a
t
e
s
_
u
i
d
'
 
]
 
=
=
 
$
t
a
r
i
f
f
_
u
i
d
)
 
{

	
	
	
	
	
	
$
t
a
r
i
f
f
_
t
y
p
e
_
i
d
 
=
 
$
t
h
i
s
-
>
a
l
l
_
t
a
r
i
f
f
_
i
d
_
t
o
_
t
a
r
i
f
f
_
t
y
p
e
_
x
r
e
f
[
 
$
t
a
r
i
f
f
_
u
i
d
 
]
[
 
0
 
]
;

	
	
	
	
	
	
b
r
e
a
k
;

	
	
	
	
	
}

	
	
	
	
}

	
	
	
	
/
/
 
N
o
w
 
t
h
a
t
 
w
e
'
v
e
 
f
o
u
n
d
 
t
h
e
 
t
a
r
i
f
f
 
t
y
p
e
,
 
w
e
 
c
a
n
 
f
i
n
d
 
t
h
e
 
c
o
r
r
e
c
t
 
t
a
r
i
f
f
 
u
i
d
 
f
o
r
 
t
h
e
 
f
i
r
s
t
 
d
a
t
e
 
i
n
 
t
h
e
 
r
a
n
g
e

	
	
	
	
$
r
a
t
e
s
_
u
i
d
 
=
 
$
t
h
i
s
-
>
m
i
c
r
o
m
a
n
a
g
e
_
t
a
r
i
f
f
t
y
p
e
_
t
o
_
d
a
t
e
_
m
a
p
[
 
$
t
a
r
i
f
f
_
t
y
p
e
_
i
d
 
]
[
 
$
f
i
r
s
t
_
d
a
t
e
 
]
[
 
'
r
a
t
e
s
_
u
i
d
'
 
]
;

	
	
	
	
$
t
m
p
[
 
$
k
e
y
 
]
 
=
 
$
r
o
o
m
_
u
i
d
.
'
^
'
.
$
r
a
t
e
s
_
u
i
d
;

	
	
	
}

	
	
	
/
/
 
H
a
v
i
n
g
 
f
o
u
n
d
 
t
h
e
 
c
o
r
r
e
c
t
 
t
a
r
i
f
f
s
,
 
w
e
 
c
a
n
 
r
e
b
u
i
l
d
 
r
e
q
u
e
s
t
e
d
R
o
o
m
 
w
i
t
h
 
t
h
e
 
c
o
r
r
e
c
t
 
t
a
r
i
f
f
 
u
i
d
(
s
)

	
	
	
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
 
=
 
$
t
m
p
;

	
	
}


	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
 
a
s
 
$
r
t
)
 
{

	
	
	
$
c
u
r
r
e
n
t
T
a
r
i
f
f
s
A
r
r
a
y
 
=
 
e
x
p
l
o
d
e
(
'
^
'
,
 
$
r
t
)
;

	
	
	
$
t
a
r
i
f
f
s
[
 
]
 
=
 
$
c
u
r
r
e
n
t
T
a
r
i
f
f
s
A
r
r
a
y
[
 
1
 
]
;

	
	
}

	
	
i
f
 
(
e
m
p
t
y
(
$
t
a
r
i
f
f
s
)
)
 
{

	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}

	
	
$
d
a
t
e
s
T
i
l
B
o
o
k
i
n
g
 
=
 
$
t
h
i
s
-
>
f
i
n
d
D
a
t
e
R
a
n
g
e
F
o
r
D
a
t
e
s
(
$
t
h
i
s
-
>
t
o
d
a
y
,
 
$
t
h
i
s
-
>
a
r
r
i
v
a
l
D
a
t
e
)
;


	
	
f
o
r
e
a
c
h
 
(
$
t
a
r
i
f
f
s
 
a
s
 
$
t
)
 
{

	
	
	
i
f
 
(
c
o
u
n
t
(
$
d
a
t
e
s
T
i
l
B
o
o
k
i
n
g
)
 
<
=
 
$
w
i
s
e
p
r
i
c
e
t
h
r
e
s
h
o
l
d
 
&
&
 
$
m
r
C
o
n
f
i
g
[
 
'
w
i
s
e
p
r
i
c
e
a
c
t
i
v
e
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
	
$
t
m
p
R
a
t
e
 
=
 
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
T
a
r
i
f
f
s
[
 
$
t
 
]
[
 
'
r
o
o
m
r
a
t
e
p
e
r
d
a
y
'
 
]
;

	
	
	
	
$
r
o
o
m
T
y
p
e
 
=
 
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
T
a
r
i
f
f
s
[
 
$
t
 
]
[
 
'
r
o
o
m
c
l
a
s
s
_
u
i
d
'
 
]
;

	
	
	
	
$
p
e
r
c
e
n
t
a
g
e
B
o
o
k
e
d
 
=
 
$
t
h
i
s
-
>
g
e
t
P
e
r
c
e
n
t
a
g
e
O
f
R
o
o
m
s
B
o
o
k
e
d
F
o
r
R
o
o
m
t
y
p
e
(
$
r
o
o
m
T
y
p
e
)
;

	
	
	
	
$
r
a
t
e
 
=
 
$
t
h
i
s
-
>
g
e
t
D
i
s
c
o
u
n
t
e
d
R
o
o
m
r
a
t
e
(
$
t
m
p
R
a
t
e
,
 
$
p
e
r
c
e
n
t
a
g
e
B
o
o
k
e
d
)
;

	
	
	
	
$
i
s
D
i
s
c
o
u
n
t
e
d
 
=
 
f
a
l
s
e
;

	
	
	
	
i
f
 
(
$
r
a
t
e
 
<
 
$
t
m
p
R
a
t
e
)
 
{

	
	
	
	
	
$
i
s
D
i
s
c
o
u
n
t
e
d
 
=
 
t
r
u
e
;

	
	
	
	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
u
p
d
a
t
e
B
o
o
k
i
n
g
F
i
e
l
d
(
'
b
o
o
k
i
n
g
_
d
i
s
c
o
u
n
t
e
d
'
,
 
t
r
u
e
)
;

	
	
	
	
}

	
	
	
	
$
d
i
s
c
[
 
]
 
=
 
a
r
r
a
y
(
'
r
o
o
m
r
a
t
e
'
 
=
>
 
$
t
m
p
R
a
t
e
,
 
'
d
i
s
c
o
u
n
t
e
d
R
a
t
e
'
 
=
>
 
$
r
a
t
e
,
 
'
r
o
o
m
T
y
p
e
'
 
=
>
 
$
r
o
o
m
T
y
p
e
,
 
'
i
s
D
i
s
c
o
u
n
t
e
d
'
 
=
>
 
$
i
s
D
i
s
c
o
u
n
t
e
d
)
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
r
a
t
e
 
=
 
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
T
a
r
i
f
f
s
[
 
$
t
 
]
[
 
'
r
o
o
m
r
a
t
e
p
e
r
d
a
y
'
 
]
;

	
	
	
	
$
t
m
p
R
a
t
e
 
=
 
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
T
a
r
i
f
f
s
[
 
$
t
 
]
[
 
'
r
o
o
m
r
a
t
e
p
e
r
d
a
y
'
 
]
;

	
	
	
}

	
	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
u
p
d
a
t
e
B
o
o
k
i
n
g
F
i
e
l
d
(
'
w
i
s
e
p
r
i
c
e
_
d
i
s
c
o
u
n
t
'
,
 
$
d
i
s
c
)
;


	
	
	
$
r
a
t
e
s
[
 
]
 
=
 
$
r
a
t
e
;

	
	
	
$
r
a
t
e
s
_
n
o
d
i
s
c
o
u
n
t
[
]
 
=
 
$
t
m
p
R
a
t
e
;

	
	
}

	
	
f
o
r
e
a
c
h
 
(
$
r
a
t
e
s
 
a
s
 
$
r
)
 
{

	
	
	
$
t
o
t
a
l
 
+
=
 
$
r
;

	
	
}

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
T
o
t
a
l
 
c
a
l
c
u
l
a
t
e
d
 
'
.
$
t
o
t
a
l
)
;

	
	
$
r
p
n
 
=
 
$
t
o
t
a
l
 
/
 
(
c
o
u
n
t
(
$
r
a
t
e
s
)
)
;

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
S
e
t
t
i
n
g
 
f
l
a
t
 
r
a
t
e
 
'
.
$
r
p
n
)
;

	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
t
a
r
i
f
f
C
h
a
r
g
e
s
S
t
o
r
e
d
W
e
e
k
l
y
Y
e
s
N
o
 
=
=
 
'
1
'
)
 
{

	
	
	
$
r
p
n
 
=
 
$
r
p
n
 
/
 
7
;

	
	
}

	
	
$
t
h
i
s
-
>
r
a
t
e
_
p
e
r
n
i
g
h
t
 
=
 
$
r
p
n
;


	
	
f
o
r
e
a
c
h
 
(
$
r
a
t
e
s
_
n
o
d
i
s
c
o
u
n
t
 
a
s
 
$
r
)
 
{

	
	
	
$
t
o
t
a
l
_
n
o
d
i
s
c
o
u
n
t
 
+
=
 
$
r
;

	
	
}

	
	
$
r
p
n
_
n
o
d
i
s
c
o
u
n
t
 
=
 
$
t
o
t
a
l
_
n
o
d
i
s
c
o
u
n
t
 
/
 
(
c
o
u
n
t
(
$
r
a
t
e
s
_
n
o
d
i
s
c
o
u
n
t
)
)
;

	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
t
a
r
i
f
f
C
h
a
r
g
e
s
S
t
o
r
e
d
W
e
e
k
l
y
Y
e
s
N
o
 
=
=
 
'
1
'
)
 
{

	
	
	
$
r
p
n
_
n
o
d
i
s
c
o
u
n
t
 
=
 
$
r
p
n
_
n
o
d
i
s
c
o
u
n
t
 
/
 
7
;

	
	
}

	
	
$
t
h
i
s
-
>
r
a
t
e
_
p
e
r
n
i
g
h
t
_
n
o
d
i
s
c
o
u
n
t
 
=
 
$
r
p
n
_
n
o
d
i
s
c
o
u
n
t
;


	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
o
u
t
p
u
t
D
i
s
c
o
u
n
t
s
(
)

	
{

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
 
=
 
j
o
m
r
e
s
_
g
e
t
S
i
n
g
l
e
t
o
n
(
'
j
o
m
r
e
s
_
t
e
m
p
_
b
o
o
k
i
n
g
_
h
a
n
d
l
e
r
'
)
;

	
	
$
d
i
s
c
o
u
n
t
D
a
t
a
 
=
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
g
e
t
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
w
i
s
e
p
r
i
c
e
_
d
i
s
c
o
u
n
t
'
)
;

	
	
$
d
i
s
c
o
u
n
t
O
u
t
p
u
t
 
=
 
'
'
;

	
	
i
f
 
(
!
e
m
p
t
y
(
$
d
i
s
c
o
u
n
t
D
a
t
a
)
)
 
{

	
	
	
$
d
i
s
c
o
u
n
t
s
F
o
r
T
m
p
d
a
t
a
 
=
 
a
r
r
a
y
(
)
;

	
	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
u
p
d
a
t
e
B
o
o
k
i
n
g
F
i
e
l
d
(
'
d
i
s
c
o
u
n
t
s
'
,
 
a
r
r
a
y
(
)
)
;

	
	
	
f
o
r
e
a
c
h
 
(
$
d
i
s
c
o
u
n
t
D
a
t
a
 
a
s
 
$
d
)
 
{

	
	
	
	
i
f
 
(
$
d
[
 
'
i
s
D
i
s
c
o
u
n
t
e
d
'
 
]
)
 
{

	
	
	
	
	
i
f
 
(
!
i
s
s
e
t
(
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
w
i
s
e
p
r
i
c
e
d
i
s
c
o
u
n
t
'
 
]
)
)
 
{

	
	
	
	
	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
a
d
d
N
e
w
B
o
o
k
i
n
g
F
i
e
l
d
(
'
w
i
s
e
p
r
i
c
e
d
i
s
c
o
u
n
t
'
)
;

	
	
	
	
	
}

	
	
	
	
	
$
r
o
o
m
t
y
p
e
 
=
 
$
d
[
 
'
r
o
o
m
T
y
p
e
'
 
]
;

	
	
	
	
	
$
r
o
o
m
t
y
p
e
_
a
b
b
r
 
=
 
$
t
h
i
s
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
R
O
O
M
C
L
A
S
S
_
D
E
S
C
R
I
P
T
I
O
N
'
.
$
r
o
o
m
t
y
p
e
,
 
$
t
h
i
s
-
>
a
l
l
R
o
o
m
C
l
a
s
s
e
s
[
 
$
r
o
o
m
t
y
p
e
 
]
[
 
'
r
o
o
m
_
c
l
a
s
s
_
a
b
b
v
'
 
]
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

	
	
	
	
	
$
r
o
o
m
r
a
t
e
 
=
 
$
d
[
 
'
r
o
o
m
r
a
t
e
'
 
]
;

	
	
	
	
	
$
r
o
o
m
r
a
t
e
_
f
o
r
o
u
t
p
u
t
 
=
 
$
r
o
o
m
r
a
t
e
 
+
 
(
(
$
r
o
o
m
r
a
t
e
 
/
 
1
0
0
)
 
*
 
$
t
h
i
s
-
>
a
c
c
o
m
m
o
d
a
t
i
o
n
_
t
a
x
_
r
a
t
e
)
;

	
	
	
	
	
$
d
i
s
c
o
u
n
t
e
d
a
t
e
_
f
o
r
o
u
t
p
u
t
 
=
 
$
d
[
 
'
d
i
s
c
o
u
n
t
e
d
R
a
t
e
'
 
]
 
+
 
(
(
$
d
[
 
'
d
i
s
c
o
u
n
t
e
d
R
a
t
e
'
 
]
 
/
 
1
0
0
)
 
*
 
$
t
h
i
s
-
>
a
c
c
o
m
m
o
d
a
t
i
o
n
_
t
a
x
_
r
a
t
e
)
;

	
	
	
	
	
/
/
$
d
i
s
c
o
u
n
t
e
d
R
a
t
e
=
$
d
[
'
d
i
s
c
o
u
n
t
e
d
R
a
t
e
'
]
;

	
	
	
	
	
$
d
i
s
c
o
u
n
t
O
u
t
p
u
t
 
.
=
 
'
 
'
.
$
r
o
o
m
t
y
p
e
_
a
b
b
r
.
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
C
O
M
P
_
W
I
S
E
P
R
I
C
E
_
H
A
S
B
E
E
N
D
I
S
C
O
U
N
T
E
D
'
,
 
'
_
J
O
M
C
O
M
P
_
W
I
S
E
P
R
I
C
E
_
H
A
S
B
E
E
N
D
I
S
C
O
U
N
T
E
D
'
,
 
f
a
l
s
e
)
.
o
u
t
p
u
t
_
p
r
i
c
e
(
$
r
o
o
m
r
a
t
e
_
f
o
r
o
u
t
p
u
t
)
.
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
C
O
M
P
_
W
I
S
E
P
R
I
C
E
_
T
O
'
,
 
'
_
J
O
M
C
O
M
P
_
W
I
S
E
P
R
I
C
E
_
T
O
'
,
 
f
a
l
s
e
)
.
o
u
t
p
u
t
_
p
r
i
c
e
(
$
d
i
s
c
o
u
n
t
e
d
a
t
e
_
f
o
r
o
u
t
p
u
t
)
.
'
 
<
b
r
/
>
'
;

	
	
	
	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
u
p
d
a
t
e
B
o
o
k
i
n
g
F
i
e
l
d
(
'
w
i
s
e
p
r
i
c
e
d
i
s
c
o
u
n
t
'
,
 
$
d
i
s
c
o
u
n
t
O
u
t
p
u
t
)
;

	
	
	
	
	
$
t
h
i
s
-
>
d
i
s
c
o
u
n
t
s
[
 
]
 
=
 
a
r
r
a
y
(
'
t
y
p
e
'
 
=
>
 
'
M
R
P
'
,
 
'
r
o
o
m
t
y
p
e
a
b
b
r
'
 
=
>
 
$
r
o
o
m
t
y
p
e
_
a
b
b
r
,
 
'
d
i
s
c
o
u
n
t
f
r
o
m
'
 
=
>
 
$
r
o
o
m
r
a
t
e
,
 
'
d
i
s
c
o
u
n
t
t
o
'
 
=
>
 
$
d
[
 
'
d
i
s
c
o
u
n
t
e
d
R
a
t
e
'
 
]
)
;

	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
u
p
d
a
t
e
B
o
o
k
i
n
g
F
i
e
l
d
(
'
w
i
s
e
p
r
i
c
e
d
i
s
c
o
u
n
t
'
,
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
C
O
M
P
_
W
I
S
E
P
R
I
C
E
_
N
O
T
D
I
S
C
O
U
N
T
E
D
'
,
 
'
_
J
O
M
C
O
M
P
_
W
I
S
E
P
R
I
C
E
_
N
O
T
D
I
S
C
O
U
N
T
E
D
'
,
 
f
a
l
s
e
)
)
;

	
	
	
	
}

	
	
	
}

	
	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
u
p
d
a
t
e
B
o
o
k
i
n
g
F
i
e
l
d
(
'
d
i
s
c
o
u
n
t
s
'
,
 
$
t
h
i
s
-
>
d
i
s
c
o
u
n
t
s
)
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
u
p
d
a
t
e
B
o
o
k
i
n
g
F
i
e
l
d
(
'
w
i
s
e
p
r
i
c
e
d
i
s
c
o
u
n
t
'
,
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
C
O
M
P
_
W
I
S
E
P
R
I
C
E
_
N
O
T
D
I
S
C
O
U
N
T
E
D
'
,
 
'
_
J
O
M
C
O
M
P
_
W
I
S
E
P
R
I
C
E
_
N
O
T
D
I
S
C
O
U
N
T
E
D
'
,
 
f
a
l
s
e
)
)
;

	
	
	
$
t
h
i
s
-
>
e
c
h
o
_
p
o
p
u
l
a
t
e
_
d
i
v
(
'
;
 
p
o
p
u
l
a
t
e
D
i
v
(
"
d
i
s
c
o
u
n
t
"
,
"
"
)
'
)
;

	
	
}

	
	
$
t
h
i
s
-
>
e
c
h
o
_
p
o
p
u
l
a
t
e
_
d
i
v
(
'
;
 
p
o
p
u
l
a
t
e
D
i
v
(
"
d
i
s
c
o
u
n
t
"
,
"
'
.
$
d
i
s
c
o
u
n
t
O
u
t
p
u
t
.
'
"
)
'
)
;

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
P
e
r
c
e
n
t
a
g
e
O
f
R
o
o
m
s
B
o
o
k
e
d
F
o
r
R
o
o
m
t
y
p
e
(
$
r
o
o
m
t
y
p
e
i
d
)

	
{

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
g
e
t
P
e
r
c
e
n
t
a
g
e
O
f
R
o
o
m
s
B
o
o
k
e
d
F
o
r
R
o
o
m
t
y
p
e
:
:
 
S
t
a
r
t
e
d
'
)
;

	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
g
e
t
P
e
r
c
e
n
t
a
g
e
O
f
R
o
o
m
s
B
o
o
k
e
d
F
o
r
R
o
o
m
t
y
p
e
:
:
 
R
o
o
m
 
t
y
p
e
 
i
d
 
"
.
$
r
o
o
m
t
y
p
e
i
d
 
)
;

	
	
$
r
o
o
m
s
O
f
T
h
i
s
T
y
p
e
 
=
 
a
r
r
a
y
(
)
;

	
	
$
r
o
o
m
s
O
f
T
h
i
s
T
y
p
e
B
o
o
k
e
d
 
=
 
a
r
r
a
y
(
)
;

	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
R
o
o
m
s
 
a
s
 
$
k
e
y
 
=
>
 
$
v
a
l
)
 
{

	
	
	
i
f
 
(
$
v
a
l
[
 
'
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
'
 
]
 
=
=
 
$
r
o
o
m
t
y
p
e
i
d
)
 
{

	
	
	
	
$
r
o
o
m
s
O
f
T
h
i
s
T
y
p
e
[
 
]
 
=
 
$
k
e
y
;

	
	
	
}

	
	
}

	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
g
e
t
P
e
r
c
e
n
t
a
g
e
O
f
R
o
o
m
s
B
o
o
k
e
d
F
o
r
R
o
o
m
t
y
p
e
:
:
 
t
h
i
s
-
>
a
l
l
B
o
o
k
i
n
g
s
 
:
 
"
.
 
s
e
r
i
a
l
i
z
e
(
$
t
h
i
s
-
>
a
l
l
B
o
o
k
i
n
g
s
)
)
;

	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
a
l
l
B
o
o
k
i
n
g
s
 
a
s
 
$
k
e
y
 
=
>
 
$
v
a
l
)
 
{

	
	
	
f
o
r
e
a
c
h
 
(
$
v
a
l
 
a
s
 
$
k
 
=
>
 
$
v
)
 
{

	
	
	
	
$
r
o
o
m
i
d
 
=
 
$
k
;

	
	
	
	
i
f
 
(
$
k
e
y
 
=
=
 
$
t
h
i
s
-
>
a
r
r
i
v
a
l
D
a
t
e
 
&
&
 
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
R
o
o
m
s
[
 
$
r
o
o
m
i
d
 
]
[
 
'
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
'
 
]
 
=
=
 
$
r
o
o
m
t
y
p
e
i
d
)
 
{

	
	
	
	
	
$
r
o
o
m
s
O
f
T
h
i
s
T
y
p
e
B
o
o
k
e
d
[
 
]
 
=
 
$
r
o
o
m
i
d
;

	
	
	
	
}

	
	
	
}

	
	
}

	
	
$
t
o
t
a
l
R
o
o
m
s
O
f
T
y
p
e
 
=
 
c
o
u
n
t
(
$
r
o
o
m
s
O
f
T
h
i
s
T
y
p
e
)
;

	
	
$
t
o
t
a
l
R
o
o
m
s
O
f
T
y
p
e
B
o
o
k
e
d
 
=
 
c
o
u
n
t
(
$
r
o
o
m
s
O
f
T
h
i
s
T
y
p
e
B
o
o
k
e
d
)
;

	
	
$
p
e
r
c
e
n
t
a
g
e
B
o
o
k
e
d
 
=
 
(
$
t
o
t
a
l
R
o
o
m
s
O
f
T
y
p
e
B
o
o
k
e
d
 
/
 
$
t
o
t
a
l
R
o
o
m
s
O
f
T
y
p
e
)
 
*
 
1
0
0
;


	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
<
b
>
g
e
t
P
e
r
c
e
n
t
a
g
e
O
f
R
o
o
m
s
B
o
o
k
e
d
F
o
r
R
o
o
m
t
y
p
e
:
:
 
t
o
t
a
l
R
o
o
m
s
O
f
T
y
p
e
:
 
$
t
o
t
a
l
R
o
o
m
s
O
f
T
y
p
e
 
t
o
t
a
l
R
o
o
m
s
O
f
T
y
p
e
B
o
o
k
e
d
:
 
$
t
o
t
a
l
R
o
o
m
s
O
f
T
y
p
e
B
o
o
k
e
d
 
p
e
r
c
e
n
t
a
g
e
B
o
o
k
e
d
:
 
$
p
e
r
c
e
n
t
a
g
e
B
o
o
k
e
d
<
/
b
>
"
)
;

	
	
r
e
t
u
r
n
 
$
p
e
r
c
e
n
t
a
g
e
B
o
o
k
e
d
;

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
D
i
s
c
o
u
n
t
e
d
R
o
o
m
r
a
t
e
(
$
r
o
o
m
r
a
t
e
,
 
$
p
e
r
c
e
n
t
a
g
e
b
o
o
k
e
d
)

	
{

	
	
$
m
r
C
o
n
f
i
g
 
=
 
$
t
h
i
s
-
>
m
r
C
o
n
f
i
g
;

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
g
e
t
D
i
s
c
o
u
n
t
e
d
R
o
o
m
r
a
t
e
:
:
 
S
t
a
r
t
e
d
'
)
;

	
	
i
f
 
(
!
i
s
s
e
t
(
$
m
r
C
o
n
f
i
g
[
 
'
w
i
s
e
p
r
i
c
e
1
0
d
i
s
c
o
u
n
t
'
 
]
)
 
|
|
 
e
m
p
t
y
(
$
m
r
C
o
n
f
i
g
[
 
'
w
i
s
e
p
r
i
c
e
1
0
d
i
s
c
o
u
n
t
'
 
]
)
)
 
{

	
	
	
$
m
r
C
o
n
f
i
g
[
 
'
w
i
s
e
p
r
i
c
e
1
0
d
i
s
c
o
u
n
t
'
 
]
 
=
 
'
3
0
'
;

	
	
}

	
	
i
f
 
(
!
i
s
s
e
t
(
$
m
r
C
o
n
f
i
g
[
 
'
w
i
s
e
p
r
i
c
e
2
5
d
i
s
c
o
u
n
t
'
 
]
)
 
|
|
 
e
m
p
t
y
(
$
m
r
C
o
n
f
i
g
[
 
'
w
i
s
e
p
r
i
c
e
2
5
d
i
s
c
o
u
n
t
'
 
]
)
)
 
{

	
	
	
$
m
r
C
o
n
f
i
g
[
 
'
w
i
s
e
p
r
i
c
e
2
5
d
i
s
c
o
u
n
t
'
 
]
 
=
 
'
2
0
'
;

	
	
}

	
	
i
f
 
(
!
i
s
s
e
t
(
$
m
r
C
o
n
f
i
g
[
 
'
w
i
s
e
p
r
i
c
e
5
0
d
i
s
c
o
u
n
t
'
 
]
)
 
|
|
 
e
m
p
t
y
(
$
m
r
C
o
n
f
i
g
[
 
'
w
i
s
e
p
r
i
c
e
5
0
d
i
s
c
o
u
n
t
'
 
]
)
)
 
{

	
	
	
$
m
r
C
o
n
f
i
g
[
 
'
w
i
s
e
p
r
i
c
e
5
0
d
i
s
c
o
u
n
t
'
 
]
 
=
 
'
1
0
'
;

	
	
}

	
	
i
f
 
(
!
i
s
s
e
t
(
$
m
r
C
o
n
f
i
g
[
 
'
w
i
s
e
p
r
i
c
e
7
5
d
i
s
c
o
u
n
t
'
 
]
)
 
|
|
 
e
m
p
t
y
(
$
m
r
C
o
n
f
i
g
[
 
'
w
i
s
e
p
r
i
c
e
7
5
d
i
s
c
o
u
n
t
'
 
]
)
)
 
{

	
	
	
$
m
r
C
o
n
f
i
g
[
 
'
w
i
s
e
p
r
i
c
e
7
5
d
i
s
c
o
u
n
t
'
 
]
 
=
 
'
5
'
;

	
	
}

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
g
e
t
D
i
s
c
o
u
n
t
e
d
R
o
o
m
r
a
t
e
:
:
 
r
o
o
m
 
r
a
t
e
:
 
$
r
o
o
m
r
a
t
e
 
p
e
r
c
e
n
t
a
g
e
b
o
o
k
e
d
:
 
$
p
e
r
c
e
n
t
a
g
e
b
o
o
k
e
d
"
)
;

	
	
i
f
 
(
$
p
e
r
c
e
n
t
a
g
e
b
o
o
k
e
d
 
<
=
 
7
5
)
 
{

	
	
	
i
f
 
(
$
p
e
r
c
e
n
t
a
g
e
b
o
o
k
e
d
 
<
=
 
7
5
 
&
&
 
$
p
e
r
c
e
n
t
a
g
e
b
o
o
k
e
d
 
>
 
5
0
)
 
{

	
	
	
	
$
d
i
s
c
o
u
n
t
P
e
r
c
e
n
t
a
g
e
 
=
 
(
f
l
o
a
t
)
 
$
m
r
C
o
n
f
i
g
[
 
'
w
i
s
e
p
r
i
c
e
7
5
d
i
s
c
o
u
n
t
'
 
]
;

	
	
	
}

	
	
	
i
f
 
(
$
p
e
r
c
e
n
t
a
g
e
b
o
o
k
e
d
 
<
=
 
5
0
 
&
&
 
$
p
e
r
c
e
n
t
a
g
e
b
o
o
k
e
d
 
>
 
2
5
)
 
{

	
	
	
	
$
d
i
s
c
o
u
n
t
P
e
r
c
e
n
t
a
g
e
 
=
 
(
f
l
o
a
t
)
 
$
m
r
C
o
n
f
i
g
[
 
'
w
i
s
e
p
r
i
c
e
5
0
d
i
s
c
o
u
n
t
'
 
]
;

	
	
	
}

	
	
	
i
f
 
(
$
p
e
r
c
e
n
t
a
g
e
b
o
o
k
e
d
 
<
=
 
2
5
 
&
&
 
$
p
e
r
c
e
n
t
a
g
e
b
o
o
k
e
d
 
>
 
1
0
)
 
{

	
	
	
	
$
d
i
s
c
o
u
n
t
P
e
r
c
e
n
t
a
g
e
 
=
 
(
f
l
o
a
t
)
 
$
m
r
C
o
n
f
i
g
[
 
'
w
i
s
e
p
r
i
c
e
2
5
d
i
s
c
o
u
n
t
'
 
]
;

	
	
	
}

	
	
	
i
f
 
(
$
p
e
r
c
e
n
t
a
g
e
b
o
o
k
e
d
 
<
=
 
1
0
)
 
{

	
	
	
	
$
d
i
s
c
o
u
n
t
P
e
r
c
e
n
t
a
g
e
 
=
 
(
f
l
o
a
t
)
 
$
m
r
C
o
n
f
i
g
[
 
'
w
i
s
e
p
r
i
c
e
1
0
d
i
s
c
o
u
n
t
'
 
]
;

	
	
	
}

	
	
	
$
d
i
s
c
o
u
n
t
 
=
 
(
$
r
o
o
m
r
a
t
e
 
/
 
1
0
0
)
 
*
 
$
d
i
s
c
o
u
n
t
P
e
r
c
e
n
t
a
g
e
;

	
	
	
$
d
i
s
c
o
u
n
t
e
d
R
a
t
e
 
=
 
$
r
o
o
m
r
a
t
e
 
-
 
$
d
i
s
c
o
u
n
t
;

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
<
b
>
g
e
t
D
i
s
c
o
u
n
t
e
d
R
o
o
m
r
a
t
e
:
:
 
d
i
s
c
o
u
n
t
e
d
 
r
a
t
e
 
'
.
$
d
i
s
c
o
u
n
t
e
d
R
a
t
e
.
'
<
/
b
>
'
)
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
d
i
s
c
o
u
n
t
e
d
R
a
t
e
 
=
 
$
r
o
o
m
r
a
t
e
;

	
	
}


	
	
r
e
t
u
r
n
 
$
d
i
s
c
o
u
n
t
e
d
R
a
t
e
;

	
}


	
/
*
*

	
 
*
 
T
h
e
 
a
l
t
e
r
n
t
i
v
e
 
m
e
t
h
o
d
 
o
f
 
h
a
n
d
l
i
n
g
 
p
r
i
c
e
 
c
a
l
c
u
l
a
t
i
o
n
s
.
 
W
h
e
n
 
a
 
b
o
o
k
i
n
g
 
i
s
 
m
a
d
e
 
t
h
e
 
p
r
i
c
e
 
f
o
r
 
r
o
o
m
s
 
i
s
 
c
a
l
c
u
l
a
t
e
d
 
a
s
 
t
h
e
 
s
u
m
 
o
f
 
t
h
e
 
v
a
l
u
e
 
o
f
 
t
h
e
 
r
o
o
m
s
 
f
o
r
 
e
a
c
h
 
n
i
g
h
t
/
n
u
m
b
e
r
 
o
f
 
r
o
o
m
s
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
A
v
e
r
a
g
e
R
a
t
e
(
)

	
{

	
	
$
m
r
C
o
n
f
i
g
 
=
 
$
t
h
i
s
-
>
m
r
C
o
n
f
i
g
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
 
=
 
j
o
m
r
e
s
_
g
e
t
S
i
n
g
l
e
t
o
n
(
'
j
o
m
r
e
s
_
t
e
m
p
_
b
o
o
k
i
n
g
_
h
a
n
d
l
e
r
'
)
;


	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
t
a
r
i
f
f
m
o
d
e
'
 
]
 
=
=
 
'
2
'
)
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
s
e
t
A
v
e
r
a
g
e
R
a
t
e
 
:
 
g
o
i
n
g
 
t
o
 
t
e
_
s
e
t
A
v
e
r
a
g
e
R
a
t
e
'
)
;

	
	
	
$
t
h
i
s
-
>
t
e
_
s
e
t
A
v
e
r
a
g
e
R
a
t
e
(
)
;
 
/
/
 
T
a
r
i
f
f
s
 
e
n
h
a
n
c
e
d
 
a
v
e
r
a
g
e
s
 
i
n
s
t
e
a
d
 
o
f
 
t
h
e
 
b
o
g
 
s
t
a
n
d
a
r
d
 
m
e
t
h
o
d
.

	
	
}
 
e
l
s
e
 
{

	
	
	
$
d
i
s
c
 
=
 
a
r
r
a
y
(
)
;

	
	
	
i
f
 
(
!
i
s
s
e
t
(
$
m
r
C
o
n
f
i
g
[
 
'
w
i
s
e
p
r
i
c
e
a
c
t
i
v
e
'
 
]
)
 
|
|
 
e
m
p
t
y
(
$
m
r
C
o
n
f
i
g
[
 
'
w
i
s
e
p
r
i
c
e
a
c
t
i
v
e
'
 
]
)
)
 
{

	
	
	
	
$
m
r
C
o
n
f
i
g
[
 
'
w
i
s
e
p
r
i
c
e
a
c
t
i
v
e
'
 
]
 
=
 
'
0
'
;

	
	
	
}

	
	
	
i
f
 
(
!
i
s
s
e
t
(
$
m
r
C
o
n
f
i
g
[
 
'
w
i
s
e
p
r
i
c
e
t
h
r
e
s
h
o
l
d
'
 
]
)
 
|
|
 
e
m
p
t
y
(
$
m
r
C
o
n
f
i
g
[
 
'
w
i
s
e
p
r
i
c
e
t
h
r
e
s
h
o
l
d
'
 
]
)
)
 
{

	
	
	
	
$
m
r
C
o
n
f
i
g
[
 
'
w
i
s
e
p
r
i
c
e
t
h
r
e
s
h
o
l
d
'
 
]
 
=
 
'
6
0
'
;

	
	
	
}

	
	
	
$
w
i
s
e
p
r
i
c
e
t
h
r
e
s
h
o
l
d
 
=
 
(
i
n
t
)
 
$
m
r
C
o
n
f
i
g
[
 
'
w
i
s
e
p
r
i
c
e
t
h
r
e
s
h
o
l
d
'
 
]
;

	
	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
u
p
d
a
t
e
B
o
o
k
i
n
g
F
i
e
l
d
(
'
w
i
s
e
p
r
i
c
e
_
d
i
s
c
o
u
n
t
'
,
 
$
d
i
s
c
)
;


	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
s
e
t
A
v
e
r
a
g
e
R
a
t
e
:
:
 
S
t
a
r
t
e
d
'
)
;

	
	
	
/
/
$
d
a
t
e
s
T
o
R
a
t
e
A
r
r
a
y
=
a
r
r
a
y
(
)
;

	
	
	
/
/
$
r
a
t
e
s
=
a
r
r
a
y
(
)
;

	
	
	
/
/
$
r
m
C
l
a
s
s
A
r
r
a
y
=
a
r
r
a
y
(
)
;

	
	
	
$
d
a
t
e
s
T
i
l
B
o
o
k
i
n
g
 
=
 
$
t
h
i
s
-
>
f
i
n
d
D
a
t
e
R
a
n
g
e
F
o
r
D
a
t
e
s
(
$
t
h
i
s
-
>
t
o
d
a
y
,
 
$
t
h
i
s
-
>
a
r
r
i
v
a
l
D
a
t
e
)
;

	
	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
 
a
s
 
$
r
t
)
 
{

	
	
	
	
$
r
m
 
=
 
e
x
p
l
o
d
e
(
'
^
'
,
 
$
r
t
)
;

	
	
	
	
$
r
m
i
d
s
A
r
r
a
y
[
 
]
 
=
 
$
r
m
[
 
0
 
]
;

	
	
	
}


	
	
	
$
r
o
o
m
A
n
d
C
l
a
s
s
A
r
r
a
y
 
=
 
a
r
r
a
y
(
)
;

	
	
	
f
o
r
e
a
c
h
 
(
$
r
m
i
d
s
A
r
r
a
y
 
a
s
 
$
r
m
i
d
)
 
{

	
	
	
	
$
r
o
o
m
C
l
a
s
s
U
i
d
 
=
 
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
R
o
o
m
s
[
 
$
r
m
i
d
 
]
[
 
'
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
'
 
]
;

	
	
	
	
$
r
o
o
m
A
n
d
C
l
a
s
s
A
r
r
a
y
[
 
$
r
m
i
d
 
]
 
=
 
a
r
r
a
y
(
'
r
o
o
m
_
u
i
d
'
 
=
>
 
$
r
m
i
d
,
 
'
r
o
o
m
_
c
l
a
s
s
_
u
i
d
'
 
=
>
 
$
r
o
o
m
C
l
a
s
s
U
i
d
)
;

	
	
	
}


	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
s
e
t
A
v
e
r
a
g
e
R
a
t
e
:
:
 
R
o
o
m
 
&
 
C
l
a
s
s
 
a
r
r
a
y
 
c
o
n
t
a
i
n
s
:
 
'
.
s
e
r
i
a
l
i
z
e
(
$
r
o
o
m
A
n
d
C
l
a
s
s
A
r
r
a
y
)
)
;

	
	
	
$
n
u
m
b
e
r
O
f
G
u
e
s
t
T
y
p
e
s
 
=
 
$
t
h
i
s
-
>
g
e
t
V
a
r
i
a
n
t
s
O
f
T
y
p
e
(
'
g
u
e
s
t
t
y
p
e
'
)
;

	
	
	
$
t
o
t
a
l
 
=
 
0
.
0
0
;

	
	
	
$
t
o
t
a
l
_
n
o
d
i
s
c
o
u
n
t
 
=
 
0
.
0
0
;

	
	
	
$
s
t
a
y
D
a
y
s
 
=
 
$
t
h
i
s
-
>
s
t
a
y
D
a
y
s
;

	
	
	
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
t
h
i
s
-
>
d
a
t
e
R
a
n
g
e
S
t
r
i
n
g
)
;

	
	
	
f
o
r
e
a
c
h
 
(
$
r
o
o
m
A
n
d
C
l
a
s
s
A
r
r
a
y
 
a
s
 
$
r
c
)
 
{

	
	
	
	
$
r
c
l
a
s
s
 
=
 
$
r
c
[
 
'
r
o
o
m
_
c
l
a
s
s
_
u
i
d
'
 
]
;

	
	
	
	
/
/
$
r
i
d
=
$
r
c
[
'
r
o
o
m
_
u
i
d
'
]
;

	
	
	
	
$
r
a
t
e
L
i
s
t
 
=
 
$
t
h
i
s
-
>
g
e
t
T
a
r
i
f
f
s
F
o
r
R
o
o
m
C
l
a
s
s
(
$
r
c
l
a
s
s
)
;


	
	
	
	
f
o
r
e
a
c
h
 
(
$
r
a
t
e
L
i
s
t
 
a
s
 
$
r
a
t
e
)
 
{

	
	
	
	
	
/
/
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
 
=
 
e
x
p
l
o
d
e
(
"
/
"
,
$
r
a
t
e
-
>
v
a
l
i
d
f
r
o
m
)
;

	
	
	
	
	
/
/
 
$
u
n
i
x
V
a
l
i
d
F
r
o
m
D
a
t
e
=
 
m
k
t
i
m
e
(
0
,
0
,
0
,
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
1
]
,
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
2
]
,
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
0
]
)
;

	
	
	
	
	
/
/
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
 
=
 
e
x
p
l
o
d
e
(
"
/
"
,
$
r
a
t
e
-
>
v
a
l
i
d
t
o
)
;

	
	
	
	
	
/
/
 
$
u
n
i
x
V
a
l
i
d
T
o
D
a
t
e
=
 
m
k
t
i
m
e
(
0
,
0
,
0
,
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
1
]
,
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
2
]
,
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
0
]
)
;


	
	
	
	
	
$
u
n
i
x
V
a
l
i
d
F
r
o
m
D
a
t
e
 
=
 
$
t
h
i
s
-
>
g
e
t
M
k
T
i
m
e
(
$
r
a
t
e
-
>
v
a
l
i
d
f
r
o
m
)
;

	
	
	
	
	
$
u
n
i
x
V
a
l
i
d
T
o
D
a
t
e
 
=
 
$
t
h
i
s
-
>
g
e
t
M
k
T
i
m
e
(
$
r
a
t
e
-
>
v
a
l
i
d
t
o
)
;


	
	
	
	
	
f
o
r
e
a
c
h
 
(
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
 
a
s
 
$
d
a
t
e
)
 
{

	
	
	
	
	
	
$
p
a
s
s
 
=
 
f
a
l
s
e
;

	
	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
s
e
t
A
v
e
r
a
g
e
R
a
t
e
:
:
S
e
a
r
c
h
i
n
g
 
d
a
t
e
 
'
.
$
d
a
t
e
.
'
 
o
n
 
c
u
r
r
e
n
t
 
t
a
r
i
f
f
 
u
i
d
:
 
'
.
$
r
a
t
e
-
>
r
a
t
e
s
_
u
i
d
)
;

	
	
	
	
	
	
/
/
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
 
=
 
e
x
p
l
o
d
e
(
"
/
"
,
$
d
a
t
e
)
;

	
	
	
	
	
	
/
/
 
$
u
n
i
x
D
a
y
 
=
 
m
k
t
i
m
e
(
0
,
0
,
0
,
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
1
]
,
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
2
]
,
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
0
]
)
;

	
	
	
	
	
	
$
u
n
i
x
D
a
y
 
=
 
$
t
h
i
s
-
>
g
e
t
M
k
T
i
m
e
(
$
d
a
t
e
)
;

	
	
	
	
	
	
i
f
 
(
!
e
m
p
t
y
(
$
n
u
m
b
e
r
O
f
G
u
e
s
t
T
y
p
e
s
)
)
 
{

	
	
	
	
	
	
	
i
f
 
(
$
u
n
i
x
D
a
y
 
<
=
 
$
u
n
i
x
V
a
l
i
d
T
o
D
a
t
e
 
&
&
 
$
u
n
i
x
D
a
y
 
>
=
 
$
u
n
i
x
V
a
l
i
d
F
r
o
m
D
a
t
e
 
&
&
 
(
$
s
t
a
y
D
a
y
s
 
>
=
 
$
r
a
t
e
-
>
m
i
n
d
a
y
s
 
&
&
 
$
s
t
a
y
D
a
y
s
 
<
=
 
$
r
a
t
e
-
>
m
a
x
d
a
y
s
)
 
&
&
 
(
$
t
h
i
s
-
>
t
o
t
a
l
_
i
n
_
p
a
r
t
y
 
>
=
 
$
r
a
t
e
-
>
m
i
n
p
e
o
p
l
e
 
&
&
 
$
t
h
i
s
-
>
t
o
t
a
l
_
i
n
_
p
a
r
t
y
 
<
=
 
$
r
a
t
e
-
>
m
a
x
p
e
o
p
l
e
)
)
 
{

	
	
	
	
	
	
	
	
$
p
a
s
s
 
=
 
t
r
u
e
;

	
	
	
	
	
	
	
}

	
	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
	
i
f
 
(
$
u
n
i
x
D
a
y
 
<
=
 
$
u
n
i
x
V
a
l
i
d
T
o
D
a
t
e
 
&
&
 
$
u
n
i
x
D
a
y
 
>
=
 
$
u
n
i
x
V
a
l
i
d
F
r
o
m
D
a
t
e
 
&
&
 
(
$
s
t
a
y
D
a
y
s
 
>
=
 
$
r
a
t
e
-
>
m
i
n
d
a
y
s
 
&
&
 
$
s
t
a
y
D
a
y
s
 
<
=
 
$
r
a
t
e
-
>
m
a
x
d
a
y
s
)
)
 
{

	
	
	
	
	
	
	
	
$
p
a
s
s
 
=
 
t
r
u
e
;

	
	
	
	
	
	
	
}

	
	
	
	
	
	
}

	
	
	
	
	
	
i
f
 
(
$
p
a
s
s
)
 
{

	
	
	
	
	
	
	
i
f
 
(
c
o
u
n
t
(
$
d
a
t
e
s
T
i
l
B
o
o
k
i
n
g
)
 
<
=
 
$
w
i
s
e
p
r
i
c
e
t
h
r
e
s
h
o
l
d
 
&
&
 
$
m
r
C
o
n
f
i
g
[
 
'
w
i
s
e
p
r
i
c
e
a
c
t
i
v
e
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
	
	
	
	
	
$
t
m
p
R
a
t
e
 
=
 
$
r
a
t
e
-
>
r
o
o
m
r
a
t
e
p
e
r
d
a
y
;

	
	
	
	
	
	
	
	
$
r
o
o
m
T
y
p
e
 
=
 
$
r
c
l
a
s
s
;

	
	
	
	
	
	
	
	
$
p
e
r
c
e
n
t
a
g
e
B
o
o
k
e
d
 
=
 
$
t
h
i
s
-
>
g
e
t
P
e
r
c
e
n
t
a
g
e
O
f
R
o
o
m
s
B
o
o
k
e
d
F
o
r
R
o
o
m
t
y
p
e
(
$
r
c
l
a
s
s
)
;

	
	
	
	
	
	
	
	
/
/
 
D
o
u
b
l
e
 
c
h
e
c
k
 
t
h
i
s
 
:

	
	
	
	
	
	
	
	
$
r
 
=
 
$
t
h
i
s
-
>
g
e
t
D
i
s
c
o
u
n
t
e
d
R
o
o
m
r
a
t
e
(
$
t
m
p
R
a
t
e
,
 
$
p
e
r
c
e
n
t
a
g
e
B
o
o
k
e
d
)
;

	
	
	
	
	
	
	
	
$
t
o
t
a
l
 
=
 
$
t
o
t
a
l
 
+
 
$
r
;

	
	
	
	
	
	
	
	
$
t
o
t
a
l
_
n
o
d
i
s
c
o
u
n
t
 
=
 
$
t
o
t
a
l
_
n
o
d
i
s
c
o
u
n
t
 
+
 
$
t
m
p
R
a
t
e
;

	
	
	
	
	
	
	
	
$
i
s
D
i
s
c
o
u
n
t
e
d
 
=
 
f
a
l
s
e
;

	
	
	
	
	
	
	
	
i
f
 
(
$
r
 
<
 
$
t
m
p
R
a
t
e
)
 
{

	
	
	
	
	
	
	
	
	
$
i
s
D
i
s
c
o
u
n
t
e
d
 
=
 
t
r
u
e
;

	
	
	
	
	
	
	
	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
u
p
d
a
t
e
B
o
o
k
i
n
g
F
i
e
l
d
(
'
b
o
o
k
i
n
g
_
d
i
s
c
o
u
n
t
e
d
'
,
 
t
r
u
e
)
;

	
	
	
	
	
	
	
	
}

	
	
	
	
	
	
	
	
$
d
i
s
c
[
 
]
 
=
 
a
r
r
a
y
(
'
r
o
o
m
r
a
t
e
'
 
=
>
 
$
t
m
p
R
a
t
e
,
 
'
d
i
s
c
o
u
n
t
e
d
R
a
t
e
'
 
=
>
 
$
r
,
 
'
r
o
o
m
T
y
p
e
'
 
=
>
 
$
r
o
o
m
T
y
p
e
,
 
'
i
s
D
i
s
c
o
u
n
t
e
d
'
 
=
>
 
$
i
s
D
i
s
c
o
u
n
t
e
d
)
;

	
	
	
	
	
	
	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
u
p
d
a
t
e
B
o
o
k
i
n
g
F
i
e
l
d
(
'
w
i
s
e
p
r
i
c
e
_
d
i
s
c
o
u
n
t
'
,
 
$
d
i
s
c
)
;

	
	
	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
	
	
$
t
o
t
a
l
 
+
=
 
$
r
a
t
e
-
>
r
o
o
m
r
a
t
e
p
e
r
d
a
y
;

	
	
	
	
	
	
	
	
$
t
o
t
a
l
_
n
o
d
i
s
c
o
u
n
t
 
+
=
 
$
r
a
t
e
-
>
r
o
o
m
r
a
t
e
p
e
r
d
a
y
;

	
	
	
	
	
	
	
}

	
	
	
	
	
	
}

	
	
	
	
	
}

	
	
	
	
}

	
	
	
}

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
s
e
t
A
v
e
r
a
g
e
R
a
t
e
:
:
T
o
t
a
l
 
=
 
'
.
$
t
o
t
a
l
.
'
 
N
u
m
b
e
r
 
o
f
 
d
a
y
s
 
=
 
'
.
$
t
h
i
s
-
>
s
t
a
y
D
a
y
s
.
'
 
N
u
m
b
e
r
 
o
f
 
r
o
o
m
s
 
'
.
c
o
u
n
t
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
)
)
;

	
	
	
$
r
p
n
 
=
 
(
$
t
o
t
a
l
 
/
 
c
o
u
n
t
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
)
)
 
/
 
$
s
t
a
y
D
a
y
s
;


	
	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
t
a
r
i
f
f
C
h
a
r
g
e
s
S
t
o
r
e
d
W
e
e
k
l
y
Y
e
s
N
o
 
=
=
 
'
1
'
)
 
{

	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
s
e
t
A
v
e
r
a
g
e
R
a
t
e
:
:
T
a
r
i
f
f
s
 
a
r
e
 
s
t
o
r
e
d
 
w
e
e
k
l
y
 
'
)
;

	
	
	
	
$
r
p
n
 
=
 
$
r
p
n
 
/
 
7
;

	
	
	
}

	
	
	
$
t
h
i
s
-
>
r
a
t
e
_
p
e
r
n
i
g
h
t
 
=
 
$
r
p
n
;

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
s
e
t
A
v
e
r
a
g
e
R
a
t
e
:
:
S
e
t
t
i
n
g
 
a
v
e
r
a
g
e
 
r
a
t
e
 
'
.
$
r
p
n
)
;


	
	
	
$
r
p
n
_
n
o
d
i
s
c
o
u
n
t
 
=
 
(
$
t
o
t
a
l
_
n
o
d
i
s
c
o
u
n
t
 
/
 
c
o
u
n
t
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
)
)
 
/
 
$
s
t
a
y
D
a
y
s
;


	
	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
t
a
r
i
f
f
C
h
a
r
g
e
s
S
t
o
r
e
d
W
e
e
k
l
y
Y
e
s
N
o
 
=
=
 
'
1
'
)
 
{

	
	
	
	
$
r
p
n
_
n
o
d
i
s
c
o
u
n
t
 
=
 
$
r
p
n
_
n
o
d
i
s
c
o
u
n
t
 
/
 
7
;

	
	
	
}

	
	
	
$
t
h
i
s
-
>
r
a
t
e
_
p
e
r
n
i
g
h
t
_
n
o
d
i
s
c
o
u
n
t
 
=
 
$
r
p
n
_
n
o
d
i
s
c
o
u
n
t
;


	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
s
e
t
A
v
e
r
a
g
e
R
a
t
e
:
:
 
E
n
d
e
d
'
)
;

	
	
}


	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
}


	
/
*
*

	
 
*
 
T
h
e
 
a
l
t
e
r
n
t
i
v
e
 
m
e
t
h
o
d
 
o
f
 
h
a
n
d
l
i
n
g
 
p
r
i
c
e
 
c
a
l
c
u
l
a
t
i
o
n
s
.
 
W
h
e
n
 
a
 
b
o
o
k
i
n
g
 
i
s
 
m
a
d
e
 
t
h
e
 
p
r
i
c
e
 
f
o
r
 
r
o
o
m
s
 
i
s
 
c
a
l
c
u
l
a
t
e
d
 
a
s
 
t
h
e
 
s
u
m
 
o
f
 
t
h
e
 
v
a
l
u
e
 
o
f
 
t
h
e
 
r
o
o
m
s
 
f
o
r
 
e
a
c
h
 
n
i
g
h
t
/
n
u
m
b
e
r
 
o
f
 
r
o
o
m
s
.

	
 
*
/

	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
t
e
_
s
e
t
A
v
e
r
a
g
e
R
a
t
e
(
)

	
{

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
t
e
_
s
e
t
A
v
e
r
a
g
e
R
a
t
e
:
:
 
S
t
a
r
t
e
d
'
)
;

	
	
$
m
r
C
o
n
f
i
g
 
=
 
$
t
h
i
s
-
>
m
r
C
o
n
f
i
g
;


	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
 
=
 
j
o
m
r
e
s
_
g
e
t
S
i
n
g
l
e
t
o
n
(
'
j
o
m
r
e
s
_
t
e
m
p
_
b
o
o
k
i
n
g
_
h
a
n
d
l
e
r
'
)
;

	
	
$
d
i
s
c
 
=
 
a
r
r
a
y
(
)
;

	
	
i
f
 
(
!
i
s
s
e
t
(
$
m
r
C
o
n
f
i
g
[
 
'
w
i
s
e
p
r
i
c
e
a
c
t
i
v
e
'
 
]
)
 
|
|
 
e
m
p
t
y
(
$
m
r
C
o
n
f
i
g
[
 
'
w
i
s
e
p
r
i
c
e
a
c
t
i
v
e
'
 
]
)
)
 
{

	
	
	
$
m
r
C
o
n
f
i
g
[
 
'
w
i
s
e
p
r
i
c
e
a
c
t
i
v
e
'
 
]
 
=
 
'
0
'
;

	
	
}

	
	
i
f
 
(
!
i
s
s
e
t
(
$
m
r
C
o
n
f
i
g
[
 
'
w
i
s
e
p
r
i
c
e
t
h
r
e
s
h
o
l
d
'
 
]
)
 
|
|
 
e
m
p
t
y
(
$
m
r
C
o
n
f
i
g
[
 
'
w
i
s
e
p
r
i
c
e
t
h
r
e
s
h
o
l
d
'
 
]
)
)
 
{

	
	
	
$
m
r
C
o
n
f
i
g
[
 
'
w
i
s
e
p
r
i
c
e
t
h
r
e
s
h
o
l
d
'
 
]
 
=
 
'
6
0
'
;

	
	
}

	
	
$
w
i
s
e
p
r
i
c
e
t
h
r
e
s
h
o
l
d
 
=
 
(
i
n
t
)
 
$
m
r
C
o
n
f
i
g
[
 
'
w
i
s
e
p
r
i
c
e
t
h
r
e
s
h
o
l
d
'
 
]
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
u
p
d
a
t
e
B
o
o
k
i
n
g
F
i
e
l
d
(
'
w
i
s
e
p
r
i
c
e
_
d
i
s
c
o
u
n
t
'
,
 
$
d
i
s
c
)
;


	
	
$
d
a
t
e
s
T
i
l
B
o
o
k
i
n
g
 
=
 
$
t
h
i
s
-
>
f
i
n
d
D
a
t
e
R
a
n
g
e
F
o
r
D
a
t
e
s
(
$
t
h
i
s
-
>
t
o
d
a
y
,
 
$
t
h
i
s
-
>
a
r
r
i
v
a
l
D
a
t
e
)
;

	
	
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
t
h
i
s
-
>
d
a
t
e
R
a
n
g
e
S
t
r
i
n
g
)
;

	
	
$
s
t
a
y
D
a
y
s
 
=
 
$
t
h
i
s
-
>
s
t
a
y
D
a
y
s
;

	
	
$
t
h
i
s
-
>
b
u
i
l
d
_
t
a
r
i
f
f
_
t
o
_
d
a
t
e
_
m
a
p
(
)
;


	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
 
a
s
 
$
r
t
)
 
{

	
	
	
$
c
a
l
c
u
l
a
t
e
d
_
p
r
i
c
e
_
p
e
r
_
r
o
o
m
_
p
e
r
_
d
a
y
 
=
 
0
.
0
0
;

	
	
	
$
r
m
 
=
 
e
x
p
l
o
d
e
(
'
^
'
,
 
$
r
t
)
;

	
	
	
$
t
a
r
i
f
f
_
i
d
 
=
 
$
r
m
[
 
1
 
]
;

	
	
	
$
r
o
o
m
_
i
d
 
=
 
$
r
m
[
 
0
 
]
;


	
	
	
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
t
a
r
i
f
f
t
y
p
e
_
i
d
 
F
R
O
M
 
#
_
_
j
o
m
c
o
m
p
_
t
a
r
i
f
f
t
y
p
e
_
r
a
t
e
_
x
r
e
f
 
W
H
E
R
E
 
t
a
r
i
f
f
_
i
d
 
=
 
'
.
(
i
n
t
)
 
$
t
a
r
i
f
f
_
i
d
;

	
	
	
/
/
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
t
e
_
s
e
t
A
v
e
r
a
g
e
R
a
t
e
:
:
Q
u
e
r
y
i
n
g
 
_
_
j
o
m
c
o
m
p
_
t
a
r
i
f
f
t
y
p
e
_
r
a
t
e
_
x
r
e
f
 
t
a
b
l
e
 
"
.
$
q
u
e
r
y
)
;

	
	
	
$
t
a
r
i
f
f
t
y
p
e
i
d
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
,
 
1
)
;


	
	
	
i
f
 
(
$
t
a
r
i
f
f
t
y
p
e
i
d
 
!
=
 
f
a
l
s
e
)
 
{

	
	
	
	
$
d
a
t
e
s
 
=
 
$
t
h
i
s
-
>
m
i
c
r
o
m
a
n
a
g
e
_
t
a
r
i
f
f
t
y
p
e
_
t
o
_
d
a
t
e
_
m
a
p
[
 
$
t
a
r
i
f
f
t
y
p
e
i
d
 
]
;

	
	
	
	
$
c
u
m
u
l
a
t
i
v
e
_
p
r
i
c
e
 
=
 
0
.
0
0
;

	
	
	
	
f
o
r
e
a
c
h
 
(
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
 
a
s
 
$
d
a
t
e
)
 
{

	
	
	
	
	
$
c
u
m
u
l
a
t
i
v
e
_
p
r
i
c
e
 
+
=
 
$
d
a
t
e
s
[
 
$
d
a
t
e
 
]
[
 
'
p
r
i
c
e
'
 
]
;

	
	
	
	
}


	
	
	
	
$
b
a
s
i
c
_
r
o
o
m
_
r
a
t
e
 
=
 
$
c
u
m
u
l
a
t
i
v
e
_
p
r
i
c
e
 
/
 
$
s
t
a
y
D
a
y
s
;


	
	
	
	
i
f
 
(
c
o
u
n
t
(
$
d
a
t
e
s
T
i
l
B
o
o
k
i
n
g
)
 
<
=
 
$
w
i
s
e
p
r
i
c
e
t
h
r
e
s
h
o
l
d
 
&
&
 
$
m
r
C
o
n
f
i
g
[
 
'
w
i
s
e
p
r
i
c
e
a
c
t
i
v
e
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
	
	
$
r
o
o
m
T
y
p
e
 
=
 
$
t
h
i
s
-
>
a
l
l
P
r
o
p
e
r
t
y
T
a
r
i
f
f
s
[
 
$
t
a
r
i
f
f
_
i
d
 
]
[
 
'
r
o
o
m
c
l
a
s
s
_
u
i
d
'
 
]
;

	
	
	
	
	
$
p
e
r
c
e
n
t
a
g
e
B
o
o
k
e
d
 
=
 
$
t
h
i
s
-
>
g
e
t
P
e
r
c
e
n
t
a
g
e
O
f
R
o
o
m
s
B
o
o
k
e
d
F
o
r
R
o
o
m
t
y
p
e
(
$
r
o
o
m
T
y
p
e
)
;


	
	
	
	
	
$
r
 
=
 
$
t
h
i
s
-
>
g
e
t
D
i
s
c
o
u
n
t
e
d
R
o
o
m
r
a
t
e
(
$
b
a
s
i
c
_
r
o
o
m
_
r
a
t
e
,
 
$
p
e
r
c
e
n
t
a
g
e
B
o
o
k
e
d
)
;

	
	
	
	
	
/
/
$
t
h
i
s
-
>
s
e
t
P
o
p
u
p
M
e
s
s
a
g
e
(
"
D
i
s
c
o
u
n
t
 
r
a
t
e
 
"
.
$
r
)
;

	
	
	
	
	
$
o
l
d
_
r
o
o
m
_
r
a
t
e
 
=
 
$
b
a
s
i
c
_
r
o
o
m
_
r
a
t
e
;


	
	
	
	
	
$
i
s
D
i
s
c
o
u
n
t
e
d
 
=
 
f
a
l
s
e
;

	
	
	
	
	
i
f
 
(
$
r
 
<
 
$
b
a
s
i
c
_
r
o
o
m
_
r
a
t
e
)
 
{

	
	
	
	
	
	
$
i
s
D
i
s
c
o
u
n
t
e
d
 
=
 
t
r
u
e
;

	
	
	
	
	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
u
p
d
a
t
e
B
o
o
k
i
n
g
F
i
e
l
d
(
'
b
o
o
k
i
n
g
_
d
i
s
c
o
u
n
t
e
d
'
,
 
t
r
u
e
)
;

	
	
	
	
	
}

	
	
	
	
	
$
d
i
s
c
[
 
]
 
=
 
a
r
r
a
y
(
'
r
o
o
m
r
a
t
e
'
 
=
>
 
$
o
l
d
_
r
o
o
m
_
r
a
t
e
,
 
'
d
i
s
c
o
u
n
t
e
d
R
a
t
e
'
 
=
>
 
$
r
,
 
'
r
o
o
m
T
y
p
e
'
 
=
>
 
$
r
o
o
m
T
y
p
e
,
 
'
i
s
D
i
s
c
o
u
n
t
e
d
'
 
=
>
 
$
i
s
D
i
s
c
o
u
n
t
e
d
)
;

	
	
	
	
	
$
b
a
s
i
c
_
r
o
o
m
_
r
a
t
e
 
=
 
$
r
;

	
	
	
	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
u
p
d
a
t
e
B
o
o
k
i
n
g
F
i
e
l
d
(
'
w
i
s
e
p
r
i
c
e
_
d
i
s
c
o
u
n
t
'
,
 
$
d
i
s
c
)
;

	
	
	
	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
s
a
v
e
B
o
o
k
i
n
g
D
a
t
a
(
)
;

	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
$
o
l
d
_
r
o
o
m
_
r
a
t
e
 
=
 
$
b
a
s
i
c
_
r
o
o
m
_
r
a
t
e
;

	
	
	
	
}

	
	
	
	
$
t
h
i
s
-
>
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
[
 
$
r
o
o
m
_
i
d
 
]
[
 
'
p
r
i
c
e
_
p
e
r
_
n
i
g
h
t
'
 
]
 
=
 
$
b
a
s
i
c
_
r
o
o
m
_
r
a
t
e
;

	
	
	
	
$
t
h
i
s
-
>
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
[
 
$
r
o
o
m
_
i
d
 
]
[
 
'
p
r
i
c
e
_
p
e
r
_
n
i
g
h
t
_
n
o
d
i
s
c
o
u
n
t
'
 
]
 
=
 
$
o
l
d
_
r
o
o
m
_
r
a
t
e
;

	
	
	
}

	
	
}


	
	
$
t
o
t
a
l
 
=
 
0
.
0
0
;

	
	
$
t
o
t
a
l
_
n
o
d
i
s
c
o
u
n
t
 
=
 
0
.
0
0
;

	
	
$
t
o
t
a
l
_
n
u
m
b
e
r
_
o
f
_
g
u
e
s
t
s
 
=
 
0
;


	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
 
a
s
 
$
r
o
o
m
)
 
{

	
	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
p
e
r
P
e
r
s
o
n
P
e
r
N
i
g
h
t
 
=
=
 
'
0
'
)
 
{

	
	
	
	
$
t
o
t
a
l
 
+
=
 
$
r
o
o
m
[
 
'
p
r
i
c
e
_
p
e
r
_
n
i
g
h
t
'
 
]
;

	
	
	
	
$
t
o
t
a
l
_
n
o
d
i
s
c
o
u
n
t
 
+
=
 
$
r
o
o
m
[
 
'
p
r
i
c
e
_
p
e
r
_
n
i
g
h
t
_
n
o
d
i
s
c
o
u
n
t
'
 
]
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
t
o
t
a
l
_
n
u
m
b
e
r
_
o
f
_
g
u
e
s
t
s
 
+
=
 
$
r
o
o
m
[
 
'
n
u
m
b
e
r
_
a
l
l
o
c
a
t
e
d
'
 
]
;

	
	
	
	
$
t
o
t
a
l
 
+
=
 
(
$
r
o
o
m
[
 
'
p
r
i
c
e
_
p
e
r
_
n
i
g
h
t
'
 
]
 
*
 
$
r
o
o
m
[
 
'
n
u
m
b
e
r
_
a
l
l
o
c
a
t
e
d
'
 
]
)
;

	
	
	
	
$
t
o
t
a
l
_
n
o
d
i
s
c
o
u
n
t
 
+
=
 
(
$
r
o
o
m
[
 
'
p
r
i
c
e
_
p
e
r
_
n
i
g
h
t
_
n
o
d
i
s
c
o
u
n
t
'
 
]
 
*
 
$
r
o
o
m
[
 
'
n
u
m
b
e
r
_
a
l
l
o
c
a
t
e
d
'
 
]
)
;

	
	
	
}

	
	
}


	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
p
e
r
P
e
r
s
o
n
P
e
r
N
i
g
h
t
 
=
=
 
'
1
'
)
 
{

	
	
	
$
t
h
i
s
-
>
r
a
t
e
_
p
e
r
n
i
g
h
t
 
=
 
$
t
o
t
a
l
 
/
 
$
t
o
t
a
l
_
n
u
m
b
e
r
_
o
f
_
g
u
e
s
t
s
;

	
	
	
$
t
h
i
s
-
>
r
a
t
e
_
p
e
r
n
i
g
h
t
_
n
o
d
i
s
c
o
u
n
t
 
=
 
$
t
o
t
a
l
_
n
o
d
i
s
c
o
u
n
t
 
/
 
$
t
o
t
a
l
_
n
u
m
b
e
r
_
o
f
_
g
u
e
s
t
s
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
t
h
i
s
-
>
r
a
t
e
_
p
e
r
n
i
g
h
t
 
=
 
$
t
o
t
a
l
 
/
 
c
o
u
n
t
(
$
t
h
i
s
-
>
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
)
;

	
	
	
$
t
h
i
s
-
>
r
a
t
e
_
p
e
r
n
i
g
h
t
_
n
o
d
i
s
c
o
u
n
t
 
=
 
$
t
o
t
a
l
_
n
o
d
i
s
c
o
u
n
t
 
/
 
c
o
u
n
t
(
$
t
h
i
s
-
>
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
)
;

	
	
}


	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
t
e
_
s
e
t
A
v
e
r
a
g
e
R
a
t
e
:
:
S
e
t
t
i
n
g
 
a
v
e
r
a
g
e
 
r
a
t
e
 
'
.
$
t
h
i
s
-
>
r
a
t
e
_
p
e
r
n
i
g
h
t
)
;

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
t
e
_
s
e
t
A
v
e
r
a
g
e
R
a
t
e
:
:
 
E
n
d
e
d
'
)
;


	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
_
n
e
t
t
_
p
r
i
c
e
(
$
p
r
i
c
e
,
 
$
t
a
x
_
r
a
t
e
)

	
{

	
	
$
m
r
C
o
n
f
i
g
 
=
 
$
t
h
i
s
-
>
m
r
C
o
n
f
i
g
;

	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
p
r
i
c
e
s
_
i
n
c
l
u
s
i
v
e
'
 
]
 
=
=
 
1
)
 
{

	
	
	
$
d
i
v
i
s
o
r
 
=
 
(
$
t
a
x
_
r
a
t
e
 
/
 
1
0
0
)
 
+
 
1
;

	
	
	
$
p
r
i
c
e
 
=
 
$
p
r
i
c
e
 
/
 
$
d
i
v
i
s
o
r
;

	
	
}


	
	
r
e
t
u
r
n
 
$
p
r
i
c
e
;

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
_
g
r
o
s
s
_
p
r
i
c
e
(
$
p
r
i
c
e
,
 
$
t
a
x
_
r
a
t
e
)

	
{

	
	
$
t
a
x
 
=
 
(
$
p
r
i
c
e
 
/
 
1
0
0
)
 
*
 
$
t
a
x
_
r
a
t
e
;


	
	
r
e
t
u
r
n
 
$
p
r
i
c
e
 
+
 
$
t
a
x
;

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
c
a
l
c
L
a
s
t
M
i
n
u
t
e
D
i
s
c
o
u
n
t
(
)

	
{

	
	
$
m
r
C
o
n
f
i
g
 
=
 
$
t
h
i
s
-
>
m
r
C
o
n
f
i
g
;

	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
 
=
 
j
o
m
r
e
s
_
g
e
t
S
i
n
g
l
e
t
o
n
(
'
j
o
m
r
e
s
_
t
e
m
p
_
b
o
o
k
i
n
g
_
h
a
n
d
l
e
r
'
)
;

	
	
i
f
 
(
i
s
s
e
t
(
$
m
r
C
o
n
f
i
g
[
 
'
l
a
s
t
m
i
n
u
t
e
a
c
t
i
v
e
'
 
]
)
 
&
&
 
$
m
r
C
o
n
f
i
g
[
 
'
l
a
s
t
m
i
n
u
t
e
a
c
t
i
v
e
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
$
d
a
t
e
s
T
i
l
B
o
o
k
i
n
g
 
=
 
$
t
h
i
s
-
>
f
i
n
d
D
a
t
e
R
a
n
g
e
F
o
r
D
a
t
e
s
(
$
t
h
i
s
-
>
t
o
d
a
y
,
 
$
t
h
i
s
-
>
a
r
r
i
v
a
l
D
a
t
e
)
;

	
	
	
$
l
a
s
t
m
i
n
u
t
e
d
i
s
c
o
u
n
t
 
=
 
(
i
n
t
)
 
$
m
r
C
o
n
f
i
g
[
 
'
l
a
s
t
m
i
n
u
t
e
d
i
s
c
o
u
n
t
'
 
]
;

	
	
	
i
f
 
(
c
o
u
n
t
(
$
d
a
t
e
s
T
i
l
B
o
o
k
i
n
g
)
 
<
=
 
(
i
n
t
)
 
$
m
r
C
o
n
f
i
g
[
 
'
l
a
s
t
m
i
n
u
t
e
t
h
r
e
s
h
o
l
d
'
 
]
)
 
{

	
	
	
	
$
o
r
i
g
i
n
a
l
_
t
o
t
a
l
 
=
 
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
;

	
	
	
	
$
d
i
s
c
o
u
n
t
 
=
 
(
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
 
/
 
1
0
0
)
 
*
 
$
l
a
s
t
m
i
n
u
t
e
d
i
s
c
o
u
n
t
;

	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
<
b
>
c
a
l
c
L
a
s
t
M
i
n
u
t
e
D
i
s
c
o
u
n
t
:
:
 
D
i
s
c
o
u
n
t
 
c
a
l
c
u
l
a
t
e
d
:
 
'
.
$
d
i
s
c
o
u
n
t
.
'
<
/
b
>
'
)
;

	
	
	
	
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
 
=
 
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
 
-
 
$
d
i
s
c
o
u
n
t
;

	
	
	
	
$
t
h
i
s
-
>
t
o
t
a
l
_
d
i
s
c
o
u
n
t
 
=
 
$
d
i
s
c
o
u
n
t
;

	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
<
b
>
c
a
l
c
L
a
s
t
M
i
n
u
t
e
D
i
s
c
o
u
n
t
:
:
 
R
o
o
m
 
t
o
t
a
l
 
m
o
d
i
f
i
e
d
 
t
o
:
 
'
.
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
.
'
<
/
b
>
'
)
;

	
	
	
	
$
d
i
s
c
_
t
x
t
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
B
O
O
K
I
N
G
C
O
N
F
I
R
M
A
T
I
O
N
1
'
,
 
'
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
B
O
O
K
I
N
G
C
O
N
F
I
R
M
A
T
I
O
N
1
'
,
 
f
a
l
s
e
)
.
'
 
'
.
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
B
O
O
K
I
N
G
C
O
N
F
I
R
M
A
T
I
O
N
2
'
,
 
'
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
B
O
O
K
I
N
G
C
O
N
F
I
R
M
A
T
I
O
N
2
'
,
 
f
a
l
s
e
)
.
'
:
 
'
.
o
u
t
p
u
t
_
p
r
i
c
e
(
$
d
i
s
c
o
u
n
t
)
;

	
	
	
	
$
t
h
i
s
-
>
e
c
h
o
_
p
o
p
u
l
a
t
e
_
d
i
v
(
'
;
 
p
o
p
u
l
a
t
e
D
i
v
(
"
d
i
s
c
o
u
n
t
"
,
"
'
.
$
d
i
s
c
_
t
x
t
.
'
"
)
'
)
;

	
	
	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
u
p
d
a
t
e
B
o
o
k
i
n
g
F
i
e
l
d
(
'
l
a
s
t
m
i
n
u
t
e
d
i
s
c
o
u
n
t
'
,
 
$
d
i
s
c
_
t
x
t
)
;

	
	
	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
u
p
d
a
t
e
B
o
o
k
i
n
g
F
i
e
l
d
(
'
b
o
o
k
i
n
g
_
d
i
s
c
o
u
n
t
e
d
'
,
 
t
r
u
e
)
;

	
	
	
	
$
t
h
i
s
-
>
d
i
s
c
o
u
n
t
s
[
]
 
=
 
a
r
r
a
y
(
'
t
y
p
e
'
 
=
>
 
'
S
R
P
'
,
 
'
r
o
o
m
t
y
p
e
a
b
b
r
'
 
=
>
 
'
N
/
A
'
,
 
'
d
i
s
c
o
u
n
t
f
r
o
m
'
 
=
>
 
$
o
r
i
g
i
n
a
l
_
t
o
t
a
l
,
 
'
d
i
s
c
o
u
n
t
t
o
'
 
=
>
 
$
t
h
i
s
-
>
r
o
o
m
_
t
o
t
a
l
)
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
t
h
i
s
-
>
e
c
h
o
_
p
o
p
u
l
a
t
e
_
d
i
v
(
'
;
 
p
o
p
u
l
a
t
e
D
i
v
(
"
d
i
s
c
o
u
n
t
"
,
"
&
n
b
s
p
;
"
)
'
)
;

	
	
	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
u
p
d
a
t
e
B
o
o
k
i
n
g
F
i
e
l
d
(
'
l
a
s
t
m
i
n
u
t
e
d
i
s
c
o
u
n
t
'
,
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
C
O
M
P
_
W
I
S
E
P
R
I
C
E
_
N
O
T
D
I
S
C
O
U
N
T
E
D
'
,
 
'
_
J
O
M
C
O
M
P
_
W
I
S
E
P
R
I
C
E
_
N
O
T
D
I
S
C
O
U
N
T
E
D
'
,
 
f
a
l
s
e
)
)
;

	
	
	
}

	
	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
u
p
d
a
t
e
B
o
o
k
i
n
g
F
i
e
l
d
(
'
d
i
s
c
o
u
n
t
s
'
,
 
$
t
h
i
s
-
>
d
i
s
c
o
u
n
t
s
)
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
t
h
i
s
-
>
e
c
h
o
_
p
o
p
u
l
a
t
e
_
d
i
v
(
'
;
 
p
o
p
u
l
a
t
e
D
i
v
(
"
d
i
s
c
o
u
n
t
"
,
"
&
n
b
s
p
;
"
)
'
)
;

	
	
	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
u
p
d
a
t
e
B
o
o
k
i
n
g
F
i
e
l
d
(
'
l
a
s
t
m
i
n
u
t
e
d
i
s
c
o
u
n
t
'
,
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
C
O
M
P
_
W
I
S
E
P
R
I
C
E
_
N
O
T
D
I
S
C
O
U
N
T
E
D
'
,
 
'
_
J
O
M
C
O
M
P
_
W
I
S
E
P
R
I
C
E
_
N
O
T
D
I
S
C
O
U
N
T
E
D
'
,
 
f
a
l
s
e
)
)
;

	
	
}

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
n
e
r
a
t
e
B
i
l
l
i
n
g
(
)

	
{

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
g
e
n
e
r
a
t
e
B
i
l
l
i
n
g
:
:
 
S
t
a
r
t
i
n
g
'
)
;

	
	
$
t
h
i
s
-
>
f
o
r
c
e
d
E
x
t
r
a
s
 
=
 
a
r
r
a
y
(
)
;


	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
g
e
n
e
r
a
t
e
B
i
l
l
i
n
g
:
:
 
C
h
e
c
k
i
n
g
 
r
e
q
u
e
s
t
e
d
 
r
o
o
m
 
c
o
u
n
t
 
'
)
;

	
	
i
f
 
(
!
e
m
p
t
y
(
$
t
h
i
s
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
)
 
|
|
 
!
g
e
t
_
s
h
o
w
t
i
m
e
(
'
i
n
c
l
u
d
e
_
r
o
o
m
_
b
o
o
k
i
n
g
_
f
u
n
c
t
i
o
n
a
l
i
t
y
'
)
)
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
g
e
n
e
r
a
t
e
B
i
l
l
i
n
g
:
:
 
S
t
a
r
t
i
n
g
 
m
a
k
e
R
a
t
e
P
e
r
N
i
g
h
t
'
)
;

	
	
	
i
f
 
(
$
t
h
i
s
-
>
m
a
k
e
R
a
t
e
P
e
r
N
i
g
h
t
(
)
)
 
{

	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
g
e
n
e
r
a
t
e
B
i
l
l
i
n
g
:
:
 
S
t
a
r
t
i
n
g
 
s
e
t
V
a
r
i
a
n
t
V
a
l
u
e
s
'
)
;

	
	
	
	
i
f
 
(
$
t
h
i
s
-
>
s
e
t
V
a
r
i
a
n
t
V
a
l
u
e
s
(
)
)
 
{

	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
:
:
 
S
t
a
r
t
i
n
g
 
m
a
k
e
N
i
g
h
t
l
y
R
o
o
m
C
h
a
r
g
e
s
'
)
;

	
	
	
	
	
i
f
 
(
$
t
h
i
s
-
>
m
a
k
e
N
i
g
h
t
l
y
R
o
o
m
C
h
a
r
g
e
s
(
)
)
 
{

	
	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
g
e
n
e
r
a
t
e
B
i
l
l
i
n
g
:
:
 
S
t
a
r
t
i
n
g
 
c
a
l
c
S
i
n
g
l
e
P
e
r
s
o
n
S
u
p
p
l
i
m
e
n
t
'
)
;

	
	
	
	
	
	
$
t
h
i
s
-
>
c
a
l
c
S
i
n
g
l
e
P
e
r
s
o
n
S
u
p
p
l
i
m
e
n
t
(
)
;

	
	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
g
e
n
e
r
a
t
e
B
i
l
l
i
n
g
:
:
 
S
t
a
r
t
i
n
g
 
c
a
l
c
T
a
x
'
)
;

	
	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
g
e
n
e
r
a
t
e
B
i
l
l
i
n
g
:
:
 
S
t
a
r
t
i
n
g
 
c
a
l
c
L
a
s
t
M
i
n
u
t
e
D
i
s
c
o
u
n
t
'
)
;

	
	
	
	
	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
 
=
=
 
1
)
 
{

	
	
	
	
	
	
	
$
t
h
i
s
-
>
c
a
l
c
L
a
s
t
M
i
n
u
t
e
D
i
s
c
o
u
n
t
(
)
;

	
	
	
	
	
	
}

	
	
	
	
	
	
$
t
h
i
s
-
>
c
a
l
c
T
a
x
(
)
;


	
	
	
	
	
	
$
t
h
i
s
-
>
c
a
l
c
E
x
t
r
a
s
(
)
;


	
	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
g
e
n
e
r
a
t
e
B
i
l
l
i
n
g
:
:
 
S
t
a
r
t
i
n
g
 
c
a
l
c
T
o
t
a
l
s
'
)
;

	
	
	
	
	
	
$
t
h
i
s
-
>
c
a
l
c
T
o
t
a
l
s
(
)
;


	
	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
g
e
n
e
r
a
t
e
B
i
l
l
i
n
g
:
:
 
S
t
a
r
t
i
n
g
 
c
a
l
c
D
e
p
o
s
i
t
'
)
;

	
	
	
	
	
	
$
t
h
i
s
-
>
c
a
l
c
D
e
p
o
s
i
t
(
)
;

	
	
	
	
	
	
i
f
 
(
$
t
h
i
s
-
>
c
f
g
_
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
 
=
=
 
0
)
 
{

	
	
	
	
	
	
	
$
t
h
i
s
-
>
o
u
t
p
u
t
D
i
s
c
o
u
n
t
s
(
)
;

	
	
	
	
	
	
}

	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
<
b
>
g
e
n
e
r
a
t
e
B
i
l
l
i
n
g
:
:
 
U
n
a
b
l
e
 
t
o
 
m
a
k
e
 
n
i
g
h
t
l
y
 
r
o
o
m
 
c
h
a
r
g
e
s
<
/
b
>
'
)
;

	
	
	
	
	
}

	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
<
b
>
g
e
n
e
r
a
t
e
B
i
l
l
i
n
g
:
:
 
U
n
a
b
l
e
 
t
o
 
s
e
t
 
V
a
r
i
a
n
t
 
V
a
l
u
e
s
<
/
b
>
'
)
;

	
	
	
	
}

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
<
b
>
g
e
n
e
r
a
t
e
B
i
l
l
i
n
g
:
:
 
U
n
a
b
l
e
 
t
o
 
m
a
k
e
 
r
a
t
e
p
e
r
 
n
i
g
h
t
<
/
b
>
'
)
;

	
	
	
}

	
	
}
 
e
l
s
e
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
<
b
>
g
e
n
e
r
a
t
e
B
i
l
l
i
n
g
:
:
 
R
e
q
u
e
s
t
e
d
 
r
o
o
m
 
c
o
u
n
t
 
=
 
0
<
/
b
>
'
)
;

	
	
}

	
	
$
t
h
i
s
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
g
e
n
e
r
a
t
e
B
i
l
l
i
n
g
:
:
 
E
n
d
i
n
g
'
)
;

	
}


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
a
d
d
B
o
o
k
i
n
g
N
o
t
e
(
$
c
o
n
t
e
x
t
,
 
$
n
o
t
e
)

	
{

	
	
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
n
o
t
e
s
[
 
$
c
o
n
t
e
x
t
 
]
 
=
 
$
n
o
t
e
;

	
}


	
p
r
i
v
a
t
e
 
s
t
a
t
i
c
 
$
m
k
t
i
m
e
s
 
=
 
a
r
r
a
y
(
)
;


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
M
k
T
i
m
e
(
$
d
a
t
e
)

	
{

	
	
i
f
 
(
!
i
s
s
e
t
(
s
e
l
f
:
:
$
m
k
t
i
m
e
s
[
 
$
d
a
t
e
 
]
)
)
 
{

	
	
	
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
d
a
t
e
)
;

	
	
	
s
e
l
f
:
:
$
m
k
t
i
m
e
s
[
 
$
d
a
t
e
 
]
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;

	
	
}


	
	
r
e
t
u
r
n
 
s
e
l
f
:
:
$
m
k
t
i
m
e
s
[
 
$
d
a
t
e
 
]
;

	
}


	
/
/
 
T
h
i
s
 
f
u
n
c
t
i
o
n
 
i
s
 
d
e
s
i
g
n
e
d
 
t
o
 
c
h
e
c
k
 
w
i
t
h
 
t
h
e
 
J
o
m
r
e
s
 
s
y
s
t
e
m
 
t
o
 
s
e
e
 
i
f
 
t
h
e
 
e
m
a
i
l
 
a
d
d
r
e
s
s
 
t
h
i
s
 
u
s
e
r
 
i
s
 
t
r
y
i
n
g
 
t
o
 
u
s
e
 
c
a
n
 
b
e
 
u
s
e
d
.

	
/
/
 
S
c
e
n
a
r
i
o
 
:

	
/
/
 
I
f
 
t
h
e
 
s
y
s
t
e
m
 
i
s
 
c
o
n
f
i
g
u
r
e
d
 
t
o
 
c
r
e
a
t
e
 
a
 
n
e
w
 
u
s
e
r
 
w
h
e
n
 
a
 
b
o
o
k
i
n
g
 
i
s
 
m
a
d
e
,
 
t
h
e
n
 
n
a
t
u
r
a
l
l
y
 
t
h
e
 
f
i
r
s
t
 
t
i
m
e
 
a
n
 
e
m
a
i
l
 
a
d
d
r
e
s
s
 
i
s
 
u
s
e
d
,
 
a
 
n
e
w
 
u
s
e
r
 
i
s
 
c
r
e
a
t
e
d
.

	
/
/
 
I
f
,
 
t
h
e
n
,
 
s
o
m
e
b
o
d
y
 
e
l
s
e
 
c
o
m
e
s
 
a
l
o
n
g
 
a
n
d
 
t
r
i
e
s
 
t
o
 
u
s
e
 
t
h
e
 
s
a
m
e
 
e
m
a
i
l
 
a
d
d
r
e
s
s
 
a
 
b
o
o
k
i
n
g
 
i
s
n
'
t
 
c
o
r
r
e
c
t
l
y
 
m
a
d
e
.

	
/
/
 
T
h
i
s
 
f
u
n
c
t
i
o
n
 
w
i
l
l
 
p
i
n
g
 
t
h
e
 
h
a
n
d
l
e
r
e
q
 
t
a
s
k
,
 
s
e
n
d
i
n
g
 
t
h
e
 
e
m
a
i
l
 
a
d
d
r
e
s
s
.
 
h
a
n
d
l
e
r
e
q
 
w
i
l
l
 
l
o
o
k
 
t
o
 
s
e
e
 
i
f
 
t
h
e
 
s
y
s
t
e
m
 
i
s
 
c
o
n
f
i
g
u
r
e
d
 
t
o
 
c
r
e
a
t
e
 
n
e
w
 
u
s
e
r
s
.
 
I
f
 
i
t
 
i
s
,
 
a
n
d
 
t
h
e
 
c
u
r
r
e
n
t
 
u
s
e
r
 
i
s
n
'
t
 
l
o
g
g
e
d
 
i
n

	
/
/
 
b
u
t
 
t
h
e
 
e
m
a
i
l
 
a
d
d
r
e
s
s
 
i
s
 
a
l
r
e
a
d
y
 
i
n
 
u
s
e
 
b
y
 
a
n
o
t
h
e
r
 
u
s
e
r
,
 
t
h
e
n
 
t
h
e
 
b
o
o
k
i
n
g
 
f
o
r
m
 
w
i
l
l
 
n
o
t
 
e
n
a
b
l
e
 
t
h
e
 
s
u
b
m
i
t
 
b
u
t
t
o
n
 
a
n
d
 
t
h
e
 
c
u
r
r
e
n
t
 
u
s
e
r
 
w
i
l
l
 
b
e
 
p
r
o
m
p
t
e
d
 
t
o
 
e
i
t
h
e
r
 
l
o
g
 
i
n
,
 
o
r
 
u
s
e
 
a
n
o
t
h
e
r
 
e
m
a
i
l
 
a
d
d
r
e
s
s
.


	
/
/
 
I
f
 
t
h
e
 
s
y
s
t
e
m
 
i
s
 
n
o
t
 
c
o
n
f
i
g
u
r
e
d
 
t
o
 
c
r
e
a
t
e
 
n
e
w
 
u
s
e
r
s
 
t
h
e
n
 
a
 
n
e
w
 
J
o
o
m
l
a
 
u
s
e
r
 
i
s
n
'
t
 
c
r
e
a
t
e
d
 
a
n
y
w
a
y
,
 
i
n
 
w
h
i
c
h
 
c
a
s
e
 
J
o
m
r
e
s
 
w
i
l
l
 
s
i
m
p
l
y
 
r
e
t
u
r
n
 
t
h
a
t
 
i
t
'
s
 
o
k
 
t
o
 
u
s
e
 
t
h
e
 
e
m
a
i
l
 
a
d
d
r
e
s
s

	
/
/
 
M
a
n
a
g
e
r
s
 
c
a
n
 
r
e
-
u
s
e
 
e
m
a
i
l
 
a
d
d
r
e
s
s
e
s


	
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
e
m
a
i
l
_
u
s
a
g
e
_
c
h
e
c
k
(
$
e
m
a
i
l
)

	
{

	
	
$
s
i
t
e
C
o
n
f
i
g
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
o
m
r
e
s
_
c
o
n
f
i
g
_
s
i
t
e
_
s
i
n
g
l
e
t
o
n
'
)
;

	
	
$
j
r
C
o
n
f
i
g
 
=
 
$
s
i
t
e
C
o
n
f
i
g
-
>
g
e
t
(
)
;

	
	
$
t
h
i
s
J
R
U
s
e
r
 
=
 
j
o
m
r
e
s
_
g
e
t
S
i
n
g
l
e
t
o
n
(
'
j
r
_
u
s
e
r
'
)
;


	
	
i
f
 
(
t
r
i
m
(
$
e
m
a
i
l
)
 
=
=
 
'
'
)
 
{
 
/
/
 
P
r
e
s
u
m
a
b
l
y
,
 
w
e
'
r
e
 
a
t
 
t
h
e
 
s
t
a
r
t
 
o
f
 
t
h
e
 
b
o
o
k
i
n
g
 
a
n
d
 
t
h
e
 
e
m
a
i
l
 
a
d
d
r
e
s
s
 
h
a
s
n
'
t
 
b
e
e
n
 
f
i
l
l
e
d
 
y
e
t

	
	
$
t
h
i
s
-
>
e
m
a
i
l
_
a
d
d
r
e
s
s
_
c
a
n
_
b
e
_
u
s
e
d
 
=
 
t
r
u
e
;

	
	
}


	
	
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
I
s
M
a
n
a
g
e
r
)
 
{
 
/
/
 
M
a
n
a
g
e
r
s
 
c
a
n
 
r
e
-
u
s
e
 
e
m
a
i
l
 
a
d
d
r
e
s
s
e
s
 
o
f
 
g
u
e
s
t
s
.

	
	
	
$
t
h
i
s
-
>
e
m
a
i
l
_
a
d
d
r
e
s
s
_
c
a
n
_
b
e
_
u
s
e
d
 
=
 
t
r
u
e
;

	
	
}
 
e
l
s
e
 
{

	
	
	
i
f
 
(
$
j
r
C
o
n
f
i
g
[
 
'
u
s
e
N
e
w
u
s
e
r
s
'
 
]
 
=
=
 
'
0
'
)
 
{
 
/
/
 
W
e
 
d
o
n
'
t
 
c
r
e
a
t
e
 
n
e
w
 
u
s
e
r
s
 
o
n
 
b
o
o
k
i
n
g
s
 
f
r
o
m
 
n
o
n
-
r
e
g
i
s
t
e
r
e
d
 
b
o
o
k
e
r
s
,
 
s
o
 
i
t
'
s
 
o
k
 
t
o
 
r
e
-
u
s
e
 
a
n
 
e
m
a
i
l
 
a
d
d
r
e
s
s
.

	
	
	
	
$
t
h
i
s
-
>
e
m
a
i
l
_
a
d
d
r
e
s
s
_
c
a
n
_
b
e
_
u
s
e
d
 
=
 
t
r
u
e
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
/
/
 
W
e
'
r
e
 
g
o
i
n
g
 
t
o
 
e
n
s
u
r
e
 
t
h
a
t
 
r
e
g
i
s
t
e
r
e
d
 
u
s
e
r
s
 
c
a
n
'
t
 
u
s
e
 
a
n
o
t
h
e
r
 
r
e
g
i
s
t
e
r
e
d
 
u
s
e
r
'
s
 
e
m
a
i
l
.

	
	
	
	
$
a
l
l
_
u
s
e
r
s
 
=
 
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
g
e
t
C
M
S
U
s
e
r
s
(
)
;

	
	
	
	
$
e
m
a
i
l
_
f
o
u
n
d
 
=
 
f
a
l
s
e
;

	
	
	
	
f
o
r
e
a
c
h
 
(
$
a
l
l
_
u
s
e
r
s
 
a
s
 
$
u
s
e
r
_
i
d
 
=
>
 
$
u
s
e
r
)
 
{

	
	
	
	
	
i
f
 
(
$
u
s
e
r
[
 
'
e
m
a
i
l
'
 
]
 
=
=
 
$
e
m
a
i
l
)
 
{

	
	
	
	
	
	
$
e
m
a
i
l
_
f
o
u
n
d
 
=
 
t
r
u
e
;

	
	
	
	
	
}

	
	
	
	
}


	
	
	
	
i
f
 
(
$
e
m
a
i
l
_
f
o
u
n
d
)
 
{

	
	
	
	
	
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
I
s
R
e
g
i
s
t
e
r
e
d
)
 
{

	
	
	
	
	
	
$
u
s
e
r
s
_
i
d
 
=
 
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
g
e
t
c
u
r
r
e
n
t
u
s
e
r
s
_
i
d
(
)
;

	
	
	
	
	
	
$
s
t
o
r
e
d
_
e
m
a
i
l
 
=
 
$
a
l
l
_
u
s
e
r
s
[
 
$
u
s
e
r
s
_
i
d
 
]
[
 
'
e
m
a
i
l
'
 
]
;

	
	
	
	
	
	
i
f
 
(
$
s
t
o
r
e
d
_
e
m
a
i
l
 
=
=
 
$
e
m
a
i
l
)
 
{

	
	
	
	
	
	
	
$
t
h
i
s
-
>
e
m
a
i
l
_
a
d
d
r
e
s
s
_
c
a
n
_
b
e
_
u
s
e
d
 
=
 
t
r
u
e
;

	
	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
	
$
t
h
i
s
-
>
e
m
a
i
l
_
a
d
d
r
e
s
s
_
c
a
n
_
b
e
_
u
s
e
d
 
=
 
f
a
l
s
e
;

	
	
	
	
	
	
}

	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
$
t
h
i
s
-
>
e
m
a
i
l
_
a
d
d
r
e
s
s
_
c
a
n
_
b
e
_
u
s
e
d
 
=
 
f
a
l
s
e
;

	
	
	
	
	
}

	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
$
t
h
i
s
-
>
e
m
a
i
l
_
a
d
d
r
e
s
s
_
c
a
n
_
b
e
_
u
s
e
d
 
=
 
t
r
u
e
;

	
	
	
	
}

	
	
	
}

	
	
}


	
	
u
n
s
e
t
(
$
a
l
l
_
u
s
e
r
s
)
;


	
	
r
e
t
u
r
n
 
$
t
h
i
s
-
>
e
m
a
i
l
_
a
d
d
r
e
s
s
_
c
a
n
_
b
e
_
u
s
e
d
;

	
}

}

