
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


c
l
a
s
s
 
j
1
6
0
0
0
u
p
d
a
t
e
s

{

 
 
 
 
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

 
 
 
 
 
 
 
 
/
/
 
M
u
s
t
 
b
e
 
i
n
 
a
l
l
 
m
i
n
i
c
o
m
p
o
n
e
n
t
s
.
 
M
i
n
i
c
o
m
p
o
n
e
n
t
s
 
w
i
t
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
 
t
h
a
t
 
c
a
n
 
c
o
n
t
a
i
n
 
e
d
i
t
a
b
l
e
 
t
e
x
t
 
s
h
o
u
l
d
 
r
u
n
 
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
(
)
 
e
l
s
e
 
j
u
s
t
 
r
e
t
u
r
n

 
 
 
 
 
 
 
 
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
t
e
m
p
l
a
t
e
_
t
o
u
c
h
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
m
p
l
a
t
e
_
t
o
u
c
h
a
b
l
e
 
=
 
f
a
l
s
e
;


 
 
 
 
 
 
 
 
 
 
 
 
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
!
t
h
i
s
_
c
m
s
_
i
s
_
w
o
r
d
p
r
e
s
s
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
j
o
m
r
e
s
R
e
d
i
r
e
c
t
(
j
o
m
r
e
s
U
R
L
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
l
i
v
e
_
s
i
t
e
'
)
.
'
/
a
d
m
i
n
i
s
t
r
a
t
o
r
/
i
n
d
e
x
.
p
h
p
?
o
p
t
i
o
n
=
c
o
m
_
i
n
s
t
a
l
l
e
r
&
v
i
e
w
=
u
p
d
a
t
e
'
)
,
 
'
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
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
R
e
d
i
r
e
c
t
(
j
o
m
r
e
s
U
R
L
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
l
i
v
e
_
s
i
t
e
'
)
.
'
/
w
p
-
a
d
m
i
n
/
u
p
d
a
t
e
-
c
o
r
e
.
p
h
p
'
)
,
 
'
'
)
;

	
	
	

	
	
	
r
e
t
u
r
n
;

	
	
}

	
	

	
	
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
j
o
m
r
e
s
C
o
n
f
i
g
_
o
f
f
l
i
n
e
 
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
u
p
d
a
t
e
S
e
r
v
e
r
 
=
 
'
h
t
t
p
:
/
/
u
p
d
a
t
e
s
.
j
o
m
r
e
s
4
.
n
e
t
'
;


 
 
 
 
 
 
 
 
i
f
 
(
f
i
l
e
_
e
x
i
s
t
s
(
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
J
R
D
S
.
'
i
n
c
l
u
d
e
s
'
.
J
R
D
S
.
'
d
e
f
i
n
e
s
.
p
h
p
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
C
O
N
F
I
G
 
=
 
n
e
w
 
J
C
o
n
f
i
g
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
C
o
n
f
i
g
_
o
f
f
l
i
n
e
 
=
 
$
C
O
N
F
I
G
-
>
o
f
f
l
i
n
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
!
c
l
a
s
s
_
e
x
i
s
t
s
(
'
Z
i
p
A
r
c
h
i
v
e
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
e
r
r
o
r
_
m
e
s
s
s
a
g
e
[
 
'
E
R
R
O
R
'
 
]
 
=
 
'
E
r
r
o
r
,
 
Z
i
p
A
r
c
h
i
v
e
 
n
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
 
o
n
 
t
h
i
s
 
s
e
r
v
e
r
.
 
P
l
e
a
s
e
 
a
s
k
 
y
o
u
r
 
h
o
s
t
s
 
t
o
 
r
e
b
u
i
l
d
 
P
H
P
 
w
i
t
h
 
-
-
e
n
a
b
l
e
-
z
i
p
'
;

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
e
r
r
o
r
_
m
e
s
s
s
a
g
e
[
 
'
E
R
R
O
R
'
 
]
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
/
/
 
T
h
i
s
 
i
s
 
j
u
s
t
 
t
o
 
i
m
p
r
o
v
e
 
t
h
e
 
u
s
e
r
'
s
 
e
x
p
e
r
i
e
n
c
e
.
 
U
s
e
r
s
 
c
a
n
 
r
e
m
o
v
e
 
t
h
i
s
 
a
n
d
 
a
t
t
e
m
p
t
 
t
o
 
u
p
g
r
a
d
e
,
 
b
u
t
 
t
h
e
n
 
t
h
e
i
r
 
Q
u
i
c
k
s
t
a
r
t
 
O
n
l
y
 
i
n
s
t
a
l
l
a
t
i
o
n
'
s
 
p
l
u
g
i
n
s
 
m
a
y
 
n
o
t
 
w
o
r
k
 
w
i
t
h
 
t
h
e
 
n
e
w
e
r
 
v
e
r
s
i
o
n
 
o
f
 
J
o
m
r
e
s
.

 
 
 
 
 
 
 
 
$
k
e
y
_
v
a
l
i
d
a
t
i
o
n
 
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
h
e
c
k
_
s
u
p
p
o
r
t
_
k
e
y
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
k
e
y
_
v
a
l
i
d
 
=
 
$
k
e
y
_
v
a
l
i
d
a
t
i
o
n
-
>
k
e
y
_
v
a
l
i
d
;


 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
v
e
r
s
i
o
n
_
i
s
_
u
p
t
o
d
a
t
e
 
=
 
c
h
e
c
k
_
j
o
m
r
e
s
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
;


 
 
 
 
 
 
 
 
/
/
 
C
u
r
r
e
n
t
l
y
 
d
i
s
a
b
l
i
n
g
 
t
h
e
 
r
e
v
i
e
w
 
r
e
q
u
e
s
t
 
p
o
p
u
p
.

 
 
 
 
 
 
 
 
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
r
e
v
i
e
w
s
e
e
n
'
]
 
=
 
1
;


 
 
 
 
 
 
 
 
i
f
 
(
!
$
c
u
r
r
e
n
t
_
v
e
r
s
i
o
n
_
i
s
_
u
p
t
o
d
a
t
e
 
&
&
 
!
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
r
e
v
i
e
w
s
e
e
n
'
]
)
 
&
&
 
!
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
v
e
r
s
i
o
n
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
a
d
d
h
e
a
d
d
a
t
a
(
'
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
'
,
 
J
O
M
R
E
S
_
N
O
D
E
_
M
O
D
U
L
E
S
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
b
l
o
c
k
u
i
-
n
p
m
/
'
,
 
'
j
q
u
e
r
y
.
b
l
o
c
k
U
I
.
j
s
'
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


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
k
e
y
_
v
a
l
i
d
a
t
i
o
n
-
>
a
l
l
o
w
s
_
p
l
u
g
i
n
s
 
=
=
 
'
0
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
k
e
y
_
v
a
l
i
d
)
 
{


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
_
A
D
M
I
N
.
'
&
t
a
s
k
=
u
p
d
a
t
e
s
&
r
e
v
i
e
w
s
e
e
n
=
1
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
 
"
Y
o
u
r
 
l
i
c
e
n
s
e
 
d
o
e
s
n
\
'
t
 
a
l
l
o
w
 
y
o
u
 
t
o
 
d
o
w
n
l
o
a
d
 
p
l
u
g
i
n
s
!
"
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
U
P
G
R
A
D
I
N
G
'
]
 
=
 
'
I
f
 
y
o
u
 
u
p
g
r
a
d
e
 
J
o
m
r
e
s
 
y
o
u
r
 
c
u
r
r
e
n
t
l
y
 
i
n
s
t
a
l
l
e
d
 
p
l
u
g
i
n
s
 
m
a
y
 
n
o
t
 
w
o
r
k
 
w
i
t
h
 
t
h
e
 
n
e
w
 
v
e
r
s
i
o
n
 
o
f
 
J
o
m
r
e
s
.
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
P
U
R
C
H
A
S
E
'
]
 
=
 
'
I
f
 
y
o
u
 
w
a
n
t
 
t
o
 
u
p
g
r
a
d
e
,
 
w
e
 
r
e
c
o
m
m
e
n
d
 
y
o
u
 
p
u
r
c
h
a
s
e
 
a
 
S
t
a
r
t
e
r
,
 
B
u
s
i
n
e
s
s
 
o
r
 
E
n
t
e
r
p
r
i
s
e
 
l
i
c
e
n
s
e
,
 
w
h
i
c
h
 
a
l
l
o
w
s
 
y
o
u
 
t
o
 
i
n
s
t
a
l
l
 
a
n
d
 
u
p
g
r
a
d
e
 
a
n
y
 
p
l
u
g
i
n
.
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
U
Y
N
O
W
'
]
 
=
 
'
B
u
y
 
n
o
w
!
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
R
E
D
I
R
E
C
T
1
'
]
 
=
 
'
Y
o
u
 
w
i
l
l
 
b
e
 
a
b
l
e
 
t
o
 
c
o
n
t
i
n
u
e
 
t
h
e
 
u
p
g
r
a
d
e
 
p
r
o
c
e
s
s
 
i
n
 
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
R
E
D
I
R
E
C
T
2
'
]
 
=
 
'
 
s
e
c
o
n
d
s
.
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
C
O
N
T
I
N
U
E
_
U
R
L
'
]
 
=
 
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
_
A
D
M
I
N
.
'
&
t
a
s
k
=
u
p
d
a
t
e
s
&
r
e
v
i
e
w
s
e
e
n
=
1
'
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
A
D
M
I
N
I
S
T
R
A
T
O
R
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
u
p
g
r
a
d
e
_
w
a
r
n
i
n
g
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
m
p
l
-
>
d
i
s
p
l
a
y
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
k
e
y
_
v
a
l
i
d
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
T
H
A
N
K
S
'
]
 
=
 
'
T
h
a
n
k
 
y
o
u
 
f
o
r
 
b
e
i
n
g
 
a
 
l
o
y
a
l
 
c
l
i
e
n
t
.
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
U
P
G
R
A
D
I
N
G
'
]
 
=
 
'
I
t
 
h
a
s
 
b
e
e
n
 
a
 
p
l
e
a
s
u
r
e
 
t
o
 
s
e
r
v
e
 
y
o
u
 
w
i
t
h
 
y
o
u
r
 
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
.
'
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
H
A
N
K
S
'
]
 
=
 
'
T
h
a
n
k
 
y
o
u
 
f
o
r
 
u
p
g
r
a
d
i
n
g
 
J
o
m
r
e
s
.
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
U
P
G
R
A
D
I
N
G
'
]
 
=
 
"
Y
o
u
 
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
 
h
a
p
p
y
 
u
s
i
n
g
 
t
h
e
 
s
o
f
t
w
a
r
e
 
t
h
a
t
 
w
e
\
'
v
e
 
w
o
r
k
e
d
 
l
o
n
g
 
a
n
d
 
h
a
r
d
 
o
n
,
 
t
h
a
t
\
'
s
 
g
r
e
a
t
 
t
o
 
s
e
e
.
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
t
h
i
s
_
c
m
s
_
i
s
_
w
o
r
d
p
r
e
s
s
(
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
R
E
V
I
E
W
_
U
R
L
'
]
 
=
 
"
Y
o
u
 
c
a
n
 
l
e
a
v
e
 
a
 
r
e
v
i
e
w
 
o
n
 
t
h
e
 
<
b
r
/
>
<
a
 
h
r
e
f
=
\
'
h
t
t
p
s
:
/
/
w
o
r
d
p
r
e
s
s
.
o
r
g
/
s
u
p
p
o
r
t
/
v
i
e
w
/
p
l
u
g
i
n
-
r
e
v
i
e
w
s
/
j
o
m
r
e
s
\
'
 
t
a
r
g
e
t
=
\
'
_
b
l
a
n
k
\
'
>
W
o
r
d
p
r
e
s
s
 
P
l
u
g
i
n
s
 
s
i
t
e
<
/
a
>
<
b
r
>
"
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
E
V
I
E
W
_
U
R
L
'
]
 
=
 
"
Y
o
u
 
c
a
n
 
l
e
a
v
e
 
a
 
r
e
v
i
e
w
 
o
n
 
t
h
e
 
<
b
r
/
>
<
a
 
h
r
e
f
=
\
'
h
t
t
p
:
/
/
e
x
t
e
n
s
i
o
n
s
.
j
o
o
m
l
a
.
o
r
g
/
e
x
t
e
n
s
i
o
n
s
/
e
x
t
e
n
s
i
o
n
/
v
e
r
t
i
c
a
l
-
m
a
r
k
e
t
s
/
b
o
o
k
i
n
g
-
a
-
r
e
s
e
r
v
a
t
i
o
n
s
/
j
o
m
r
e
s
\
'
 
t
a
r
g
e
t
=
\
'
_
b
l
a
n
k
\
'
>
J
o
o
m
l
a
 
e
x
t
e
n
s
i
o
n
 
d
i
r
e
c
t
o
r
y
<
/
a
>
<
b
r
>
"
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
R
E
V
I
E
W
_
U
R
L
'
]
 
.
=
 
"
A
l
t
e
r
n
a
t
i
v
e
l
y
,
 
y
o
u
 
c
a
n
 
l
e
a
v
e
 
a
 
r
e
v
i
e
w
 
w
i
t
h
 
<
b
r
/
>
<
a
 
h
r
e
f
=
\
'
h
t
t
p
:
/
/
w
w
w
.
c
a
p
t
e
r
r
a
.
c
o
m
/
r
e
s
e
r
v
a
t
i
o
n
s
-
s
o
f
t
w
a
r
e
/
r
e
v
i
e
w
s
/
1
3
4
4
6
9
/
J
o
m
r
e
s
/
W
o
o
l
l
y
i
n
w
a
l
e
s
%
2
0
I
T
/
n
e
w
\
'
 
t
a
r
g
e
t
=
\
'
_
b
l
a
n
k
\
'
>
C
a
p
t
e
r
r
a
.
<
/
a
>
<
b
r
>
"
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
I
O
N
A
L
'
]
 
=
 
"
G
o
o
d
 
r
e
v
i
e
w
s
 
a
r
e
 
c
r
u
c
i
a
l
 
i
n
 
h
e
l
p
i
n
g
 
u
s
e
r
s
 
t
o
 
d
e
c
i
d
e
 
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
 
i
n
v
e
s
t
 
t
i
m
e
 
i
n
 
r
e
s
e
a
r
c
h
i
n
g
 
a
 
p
r
o
d
u
c
t
 
s
u
c
h
 
a
s
 
J
o
m
r
e
s
.
 
W
e
\
'
d
 
a
p
p
r
e
c
i
a
t
e
 
i
t
 
i
f
 
y
o
u
 
c
o
u
l
d
 
t
a
k
e
 
a
 
f
e
w
 
m
i
n
u
t
e
s
 
o
u
t
 
o
f
 
y
o
u
r
 
d
a
y
 
t
o
 
s
h
a
r
e
 
y
o
u
r
 
t
h
o
u
g
h
t
s
 
o
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
 
f
o
r
 
t
h
e
 
b
e
n
e
f
i
t
 
o
f
 
o
t
h
e
r
s
.
 
W
i
t
h
o
u
t
 
r
e
v
i
e
w
s
 
h
e
l
p
i
n
g
 
t
o
 
d
r
i
v
e
 
b
u
s
i
n
e
s
s
 
t
o
 
o
u
r
 
s
i
t
e
 
w
e
 
c
a
n
\
'
t
 
p
a
y
 
t
h
e
 
b
i
l
l
s
.
 
I
f
 
y
o
u
\
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
 
l
e
f
t
 
a
 
r
e
v
i
e
w
 
t
h
e
n
 
w
e
 
t
h
a
n
k
 
y
o
u
 
a
n
d
 
h
o
p
e
 
y
o
u
\
'
l
l
 
w
a
i
t
 
a
 
f
e
w
 
m
o
m
e
n
t
s
 
f
o
r
 
t
h
e
 
p
a
g
e
 
t
o
 
r
e
l
o
a
d
.
"
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
D
I
R
E
C
T
1
'
]
 
=
 
'
Y
o
u
 
w
i
l
l
 
b
e
 
a
b
l
e
 
t
o
 
c
o
n
t
i
n
u
e
 
t
h
e
 
u
p
g
r
a
d
e
 
p
r
o
c
e
s
s
 
i
n
 
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
R
E
D
I
R
E
C
T
2
'
]
 
=
 
'
 
s
e
c
o
n
d
s
.
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
C
O
N
T
I
N
U
E
_
U
R
L
'
]
 
=
 
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
_
A
D
M
I
N
.
'
&
t
a
s
k
=
u
p
d
a
t
e
s
&
r
e
v
i
e
w
s
e
e
n
=
1
'
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
A
D
M
I
N
I
S
T
R
A
T
O
R
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
r
e
v
i
e
w
_
r
e
q
u
e
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
m
p
l
-
>
d
i
s
p
l
a
y
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
u
p
d
a
t
e
S
e
r
v
e
r
 
=
 
'
h
t
t
p
:
/
/
u
p
d
a
t
e
s
.
j
o
m
r
e
s
4
.
n
e
t
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
u
p
d
a
t
e
F
o
l
d
e
r
 
=
 
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
J
R
D
S
.
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
T
_
D
I
R
E
C
T
O
R
Y
.
J
R
D
S
.
'
u
p
d
a
t
e
s
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
v
e
r
w
r
i
t
e
A
l
l
o
w
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
m
o
v
e
d
F
i
l
e
L
o
g
 
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
d
e
b
u
g
g
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
t
e
s
t
_
d
o
w
n
l
o
a
d
 
=
 
f
a
l
s
e
;


 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
b
r
 
/
>
<
b
r
 
/
>
<
b
r
 
/
>
<
c
e
n
t
e
r
>
<
h
2
>
T
h
i
s
 
J
o
m
r
e
s
 
v
e
r
s
i
o
n
:
 
'
.
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
v
e
r
s
i
o
n
'
]
.
'
<
/
h
2
>
<
/
c
e
n
t
e
r
>
<
b
r
 
/
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
f
t
p
_
u
s
e
r
_
n
a
m
e
 
=
 
'
u
s
e
r
i
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
f
t
p
_
u
s
e
r
_
p
a
s
s
 
=
 
'
p
a
s
s
w
o
r
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
f
t
p
_
s
e
r
v
e
r
 
=
 
'
l
o
c
a
l
h
o
s
t
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
f
t
p
_
r
o
o
t
 
=
 
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
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
c
h
e
c
k
U
p
d
a
t
e
D
i
r
e
c
t
o
r
y
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
"
C
a
n
'
t
 
c
r
e
a
t
e
 
u
p
d
a
t
e
 
f
o
l
d
e
r
 
$
t
h
i
s
-
>
u
p
d
a
t
e
F
o
l
d
e
r
"
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
!
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
t
p
_
u
s
e
r
_
n
a
m
e
'
 
]
)
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
J
o
m
r
e
s
D
i
r
e
c
t
o
r
i
e
s
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
e
t
e
c
t
_
o
s
 
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
_
S
E
R
V
E
R
[
 
'
S
E
R
V
E
R
_
S
O
F
T
W
A
R
E
'
 
]
)
;
 
/
/
 
c
o
n
v
e
r
t
e
d
 
t
o
 
u
p
p
e
r
c
a
s
e

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
o
s
 
=
 
s
t
r
p
o
s
(
$
d
e
t
e
c
t
_
o
s
,
 
'
W
I
N
3
2
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
I
I
S
 
=
 
s
t
r
p
o
s
(
$
d
e
t
e
c
t
_
o
s
,
 
'
I
I
S
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
p
o
s
 
=
=
=
 
f
a
l
s
e
 
&
&
 
$
I
I
S
 
=
=
=
 
f
a
l
s
e
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
,
 
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
 
u
p
g
r
a
d
e
 
J
o
m
r
e
s
 
o
n
 
t
h
i
s
 
s
e
r
v
e
r
 
a
s
 
o
n
e
 
o
r
 
m
o
r
e
 
f
i
l
e
s
 
i
s
 
n
o
t
 
w
r
i
t
a
b
l
e
 
b
y
 
p
h
p
.
 
I
t
'
s
 
l
i
k
e
l
y
 
t
h
a
t
 
f
i
l
e
s
 
w
e
r
e
 
u
p
l
o
a
d
e
d
 
v
i
a
 
f
t
p
 
a
n
d
 
a
r
e
 
o
w
n
e
d
 
b
y
 
t
h
e
 
f
t
p
 
u
s
e
r
,
 
n
o
t
 
t
h
e
 
w
e
b
 
s
e
r
v
e
r
'
s
 
u
s
e
r
.
 
Y
o
u
 
a
r
e
 
a
d
v
i
s
e
d
 
t
o
 
c
h
a
n
g
e
 
o
w
n
e
r
s
h
i
p
 
o
f
 
t
h
e
 
f
i
l
e
s
 
t
o
 
t
h
e
 
w
e
b
 
s
e
r
v
e
r
'
s
 
u
s
e
r
 
t
h
e
n
 
t
r
y
 
a
g
a
i
n
.
<
b
r
/
>
"
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
 
o
n
 
a
 
w
i
n
 
b
o
x

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
,
 
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
 
u
p
g
r
a
d
e
 
J
o
m
r
e
s
 
o
n
 
t
h
i
s
 
s
e
r
v
e
r
 
a
s
 
o
n
e
 
o
r
 
m
o
r
e
 
f
i
l
e
s
 
i
s
 
n
o
t
 
w
r
i
t
a
b
l
e
 
b
y
 
p
h
p
.
 
<
b
r
/
>
"
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
d
i
r
e
c
t
o
r
y
S
c
a
n
R
e
s
u
l
t
s
 
a
s
 
$
f
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
f
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
f
t
p
_
u
s
e
r
_
n
a
m
e
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
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
,
 
'
f
t
p
_
u
s
e
r
_
n
a
m
e
'
,
 
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
f
t
p
_
u
s
e
r
_
p
a
s
s
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
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
,
 
'
f
t
p
_
u
s
e
r
_
p
a
s
s
'
,
 
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
f
t
p
_
s
e
r
v
e
r
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
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
,
 
'
f
t
p
_
s
e
r
v
e
r
'
,
 
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
c
h
e
c
k
J
o
m
r
e
s
D
i
r
e
c
t
o
r
i
e
s
(
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
c
h
e
c
k
J
o
m
r
e
s
D
i
r
e
c
t
o
r
i
e
s
(
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
,
 
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
 
u
p
g
r
a
d
e
 
J
o
m
r
e
s
 
o
n
 
t
h
i
s
 
s
e
r
v
e
r
 
a
s
 
o
n
e
 
o
r
 
m
o
r
e
 
f
i
l
e
s
 
i
s
 
n
o
t
 
w
r
i
t
a
b
l
e
 
b
y
 
p
h
p
.
 
I
t
'
s
 
l
i
k
e
l
y
 
t
h
a
t
 
f
i
l
e
s
 
w
e
r
e
 
u
p
l
o
a
d
e
d
 
v
i
a
 
f
t
p
 
a
n
d
 
a
r
e
 
o
w
n
e
d
 
b
y
 
t
h
e
 
f
t
p
 
u
s
e
r
,
 
n
o
t
 
t
h
e
 
w
e
b
 
s
e
r
v
e
r
'
s
 
u
s
e
r
.
 
Y
o
u
 
a
r
e
 
a
d
v
i
s
e
d
 
t
o
 
c
h
a
n
g
e
 
o
w
n
e
r
s
h
i
p
 
o
f
 
t
h
e
 
f
i
l
e
s
 
t
o
 
t
h
e
 
w
e
b
 
s
e
r
v
e
r
'
s
 
u
s
e
r
 
t
h
e
n
 
t
r
y
 
a
g
a
i
n
.
<
b
r
/
>
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
e
n
c
o
d
i
n
g
'
 
]
)
 
&
&
 
!
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
t
p
_
u
s
e
r
_
n
a
m
e
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
e
t
U
p
d
a
t
e
I
n
f
o
(
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
!
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
t
p
_
u
s
e
r
_
n
a
m
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
v
e
S
i
t
e
 
=
 
'
&
l
i
v
e
_
s
i
t
e
=
'
.
u
r
l
e
n
c
o
d
e
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
l
i
v
e
_
s
i
t
e
'
)
)
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
E
n
c
o
d
i
n
g
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
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
,
 
'
e
n
c
o
d
i
n
g
'
,
 
'
'
)
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
V
e
r
s
i
o
n
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
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
,
 
'
v
e
r
s
i
o
n
'
,
 
'
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
a
s
e
_
u
r
i
 
=
 
$
t
h
i
s
-
>
u
p
d
a
t
e
S
e
r
v
e
r
;

	
	
	
	
$
q
u
e
r
y
_
s
t
r
i
n
g
 
=
 
'
/
i
n
d
e
x
.
p
h
p
?
e
n
c
o
d
i
n
g
=
'
.
$
r
e
q
u
i
r
e
d
E
n
c
o
d
i
n
g
.
'
&
v
e
r
s
i
o
n
=
'
.
$
r
e
q
u
i
r
e
d
V
e
r
s
i
o
n
.
$
l
i
v
e
S
i
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

	
	
	
	
$
n
e
w
f
i
l
e
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
u
p
d
a
t
e
F
o
l
d
e
r
.
'
/
j
o
m
r
e
s
.
z
i
p
'
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
 
=
 
f
o
p
e
n
(
$
n
e
w
f
i
l
e
n
a
m
e
,
 
'
w
b
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
o
u
t
 
=
=
 
f
a
l
s
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
"
C
o
u
l
d
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
 
f
i
l
e
 
$
n
e
w
f
i
l
e
n
a
m
e
.
 
P
o
s
s
i
b
l
e
 
f
i
l
e
 
p
e
r
m
i
s
s
i
o
n
 
p
r
o
b
l
e
m
?
<
b
r
/
>
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
x
i
t
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


	
	
	
	
t
r
y
 
{

	
	
	
	
	
$
c
l
i
e
n
t
 
=
 
n
e
w
 
G
u
z
z
l
e
H
t
t
p
\
C
l
i
e
n
t
(
[

	
	
	
	
	
	
'
b
a
s
e
_
u
r
i
'
 
=
>
 
$
b
a
s
e
_
u
r
i

	
	
	
	
	
]
)
;


	
	
	
	
	
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
'
S
t
a
r
t
i
n
g
 
g
u
z
z
l
e
 
c
a
l
l
 
t
o
 
'
.
$
b
a
s
e
_
u
r
i
.
$
q
u
e
r
y
_
s
t
r
i
n
g
,
 
'
G
u
z
z
l
e
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
 
$
c
l
i
e
n
t
-
>
r
e
q
u
e
s
t
(
'
G
E
T
'
,
 
$
q
u
e
r
y
_
s
t
r
i
n
g
,
 
[
'
s
i
n
k
'
 
=
>
 
$
o
u
t
]
)
;

	
	
	
	
}

	
	
	
	
c
a
t
c
h
 
(
E
x
c
e
p
t
i
o
n
 
$
e
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
u
s
e
r
_
f
e
e
d
b
a
c
k
 
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
u
s
e
r
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
u
s
e
r
_
f
e
e
d
b
a
c
k
-
>
c
o
n
s
t
r
u
c
t
_
m
e
s
s
a
g
e
(
a
r
r
a
y
(
'
m
e
s
s
a
g
e
'
=
>
"
C
o
u
l
d
 
n
o
t
 
d
o
w
n
l
o
a
d
 
u
p
d
a
t
e
"
,
 
'
c
s
s
_
c
l
a
s
s
'
=
>
'
a
l
e
r
t
-
d
a
n
g
e
r
 
a
l
e
r
t
-
e
r
r
o
r
'
)
)
;

	
	
	
	
}

	
	
	
	

	
	
	
	
i
f
 
(
i
s
_
r
e
s
o
u
r
c
e
(
$
o
u
t
)
)
 
{

	
	
	
	
	
f
c
l
o
s
e
(
$
o
u
t
)
;

	
	
	
	
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
f
i
l
e
_
e
x
i
s
t
s
(
$
n
e
w
f
i
l
e
n
a
m
e
)
 
&
&
 
f
i
l
e
s
i
z
e
(
$
n
e
w
f
i
l
e
n
a
m
e
)
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
G
o
t
 
i
t
<
b
r
 
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
S
o
m
e
t
h
i
n
g
 
w
e
n
t
 
w
r
o
n
g
 
d
o
w
n
l
o
a
d
i
n
g
 
t
h
e
 
u
p
d
a
t
e
 
f
i
l
e
s
.
 
Q
u
i
t
t
i
n
g
'
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
z
i
p
 
=
 
n
e
w
 
Z
i
p
A
r
c
h
i
v
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
 
=
 
$
z
i
p
-
>
o
p
e
n
(
$
n
e
w
f
i
l
e
n
a
m
e
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
U
n
z
i
p
 
a
l
l
 
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
 
t
h
e
 
z
i
p
p
e
d
 
f
i
l
e
 
t
o
 
t
h
i
s
 
f
o
l
d
e
r

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
m
k
d
i
r
(
$
t
h
i
s
-
>
u
p
d
a
t
e
F
o
l
d
e
r
.
J
R
D
S
.
'
u
n
p
a
c
k
e
d
'
)
 
&
&
 
$
r
e
s
 
=
=
=
 
t
r
u
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
z
i
p
-
>
e
x
t
r
a
c
t
T
o
(
$
t
h
i
s
-
>
u
p
d
a
t
e
F
o
l
d
e
r
.
J
R
D
S
.
'
u
n
p
a
c
k
e
d
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
z
i
p
-
>
c
l
o
s
e
(
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
t
e
s
t
_
d
o
w
n
l
o
a
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
d
i
r
m
v
(
$
t
h
i
s
-
>
u
p
d
a
t
e
F
o
l
d
e
r
.
J
R
D
S
.
'
u
n
p
a
c
k
e
d
'
.
J
R
D
S
,
 
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
J
R
D
S
.
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
T
_
D
I
R
E
C
T
O
R
Y
.
J
R
D
S
,
 
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
w
r
i
t
e
A
l
l
o
w
e
d
,
 
$
f
u
n
c
l
o
c
 
=
 
'
/
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
C
o
m
p
l
e
t
e
d
 
u
p
g
r
a
d
e
.
 
P
l
e
a
s
e
 
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
 
y
o
u
 
v
i
s
i
t
 
<
a
 
h
r
e
f
=
"
'
.
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
l
i
v
e
_
s
i
t
e
'
)
.
'
/
'
.
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
T
_
D
I
R
E
C
T
O
R
Y
.
'
/
i
n
s
t
a
l
l
_
j
o
m
r
e
s
.
p
h
p
"
>
i
n
s
t
a
l
l
_
j
o
m
r
e
s
.
p
h
p
<
/
a
>
 
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
 
a
n
y
 
d
a
t
a
b
a
s
e
 
c
h
a
n
g
e
s
 
t
h
a
t
 
m
a
y
 
b
e
 
r
e
q
u
i
r
e
d
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
d
e
b
u
g
g
i
n
g
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
b
r
/
>
<
b
r
/
>
<
b
r
/
>
<
b
r
/
>
<
b
r
/
>
<
b
r
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
U
P
G
R
A
D
E
 
L
O
G
<
b
r
/
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
m
o
v
e
d
F
i
l
e
L
o
g
 
a
s
 
$
r
e
c
o
r
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
r
e
c
o
r
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
u
n
l
i
n
k
(
$
n
e
w
f
i
l
e
n
a
m
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
j
o
m
r
e
s
R
e
d
i
r
e
c
t
(
j
o
m
r
e
s
U
R
L
(
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
_
A
D
M
I
N
.
'
&
t
a
s
k
=
j
o
m
r
e
s
_
i
n
s
t
a
l
l
'
)
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
 
c
r
e
a
t
i
n
g
 
u
n
p
a
c
k
 
f
o
l
d
e
r
'
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
U
p
d
a
t
e
I
n
f
o
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
e
c
h
o
 
q
u
e
r
y
U
p
d
a
t
e
S
e
r
v
e
r
(
'
u
p
d
a
t
e
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
.
p
h
p
'
,
 
'
'
,
 
'
u
p
d
a
t
e
s
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
h
e
c
k
J
o
m
r
e
s
D
i
r
e
c
t
o
r
i
e
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
d
i
r
e
c
t
o
r
y
S
c
a
n
R
e
s
u
l
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
j
o
m
r
e
s
F
r
o
n
t
D
i
r
 
=
 
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
J
R
D
S
.
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
T
_
D
I
R
E
C
T
O
R
Y
;

 
 
 
 
 
 
 
 
$
f
i
l
e
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
r
e
c
u
r
_
d
i
r
(
$
j
o
m
r
e
s
F
r
o
n
t
D
i
r
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
i
r
e
c
t
o
r
y
S
c
a
n
R
e
s
u
l
t
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
 
i
s
_
r
e
m
o
v
e
a
b
l
e
(
$
d
i
r
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
f
o
l
d
e
r
 
=
 
o
p
e
n
d
i
r
(
$
d
i
r
)
;

 
 
 
 
 
 
 
 
w
h
i
l
e
 
(
$
f
i
l
e
 
=
 
r
e
a
d
d
i
r
(
$
f
o
l
d
e
r
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
f
i
l
e
 
!
=
 
'
.
'
 
&
&
 
$
f
i
l
e
 
!
=
 
'
.
.
'
 
&
&
 
(
!
i
s
_
w
r
i
t
a
b
l
e
(
$
d
i
r
.
J
R
D
S
.
$
f
i
l
e
)
 
|
|
 
(
i
s
_
d
i
r
(
$
d
i
r
.
J
R
D
S
.
$
f
i
l
e
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
i
s
_
r
e
m
o
v
e
a
b
l
e
(
$
d
i
r
.
J
R
D
S
.
$
f
i
l
e
)
)
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
l
o
s
e
d
i
r
(
$
d
i
r
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

 
 
 
 
 
 
 
 
c
l
o
s
e
d
i
r
(
$
d
i
r
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
 
r
e
c
u
r
_
d
i
r
(
$
d
i
r
,
 
$
g
e
t
W
r
i
t
a
b
l
e
s
F
i
l
e
s
 
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
o
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

 
 
 
 
 
 
 
 
$
d
i
r
l
i
s
t
 
=
 
o
p
e
n
d
i
r
(
$
d
i
r
)
;

 
 
 
 
 
 
 
 
w
h
i
l
e
 
(
$
f
i
l
e
 
=
 
r
e
a
d
d
i
r
(
$
d
i
r
l
i
s
t
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
f
i
l
e
 
!
=
 
'
.
'
 
&
&
 
$
f
i
l
e
 
!
=
 
'
.
.
'
 
&
&
 
$
f
i
l
e
 
!
=
 
'
.
g
i
t
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
p
a
t
h
 
=
 
$
d
i
r
.
'
/
'
.
$
f
i
l
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
g
e
t
W
r
i
t
a
b
l
e
s
F
i
l
e
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
_
f
i
l
e
(
$
n
e
w
p
a
t
h
)
 
&
&
 
i
s
_
w
r
i
t
a
b
l
e
(
$
n
e
w
p
a
t
h
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
d
i
r
e
c
t
o
r
y
S
c
a
n
R
e
s
u
l
t
s
[
 
]
 
=
 
$
d
i
r
.
J
R
D
S
.
$
f
i
l
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
_
f
i
l
e
(
$
n
e
w
p
a
t
h
)
 
&
&
 
!
i
s
_
w
r
i
t
a
b
l
e
(
$
n
e
w
p
a
t
h
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
d
i
r
e
c
t
o
r
y
S
c
a
n
R
e
s
u
l
t
s
[
 
]
 
=
 
$
d
i
r
.
J
R
D
S
.
$
f
i
l
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
e
v
e
l
 
=
 
e
x
p
l
o
d
e
(
J
R
D
S
,
 
$
n
e
w
p
a
t
h
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
s
t
r
s
t
r
(
$
n
e
w
p
a
t
h
,
 
'
.
s
v
n
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
_
d
i
r
(
$
n
e
w
p
a
t
h
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
o
d
_
a
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
l
e
v
e
l
'
 
=
>
 
c
o
u
n
t
(
$
l
e
v
e
l
)
 
-
 
1
,
 
'
p
a
t
h
'
 
=
>
 
$
n
e
w
p
a
t
h
,
 
'
n
a
m
e
'
 
=
>
 
e
n
d
(
$
l
e
v
e
l
)
,
 
'
k
i
n
d
'
 
=
>
 
'
d
i
r
'
,
 
'
m
o
d
_
t
i
m
e
'
 
=
>
 
f
i
l
e
m
t
i
m
e
(
$
n
e
w
p
a
t
h
)
,
 
'
c
o
n
t
e
n
t
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
e
c
u
r
_
d
i
r
(
$
n
e
w
p
a
t
h
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
m
o
d
_
a
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
l
e
v
e
l
'
 
=
>
 
c
o
u
n
t
(
$
l
e
v
e
l
)
 
-
 
1
,
 
'
p
a
t
h
'
 
=
>
 
$
n
e
w
p
a
t
h
,
 
'
n
a
m
e
'
 
=
>
 
e
n
d
(
$
l
e
v
e
l
)
,
 
'
k
i
n
d
'
 
=
>
 
'
f
i
l
e
'
,
 
'
m
o
d
_
t
i
m
e
'
 
=
>
 
f
i
l
e
m
t
i
m
e
(
$
n
e
w
p
a
t
h
)
,
 
'
s
i
z
e
'
 
=
>
 
f
i
l
e
s
i
z
e
(
$
n
e
w
p
a
t
h
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
c
l
o
s
e
d
i
r
(
$
d
i
r
l
i
s
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
m
o
d
_
a
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
 
c
h
e
c
k
U
p
d
a
t
e
D
i
r
e
c
t
o
r
y
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
_
d
i
r
(
$
t
h
i
s
-
>
u
p
d
a
t
e
F
o
l
d
e
r
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
m
k
d
i
r
(
$
t
h
i
s
-
>
u
p
d
a
t
e
F
o
l
d
e
r
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
,
 
u
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
 
f
o
l
d
e
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
u
p
d
a
t
e
F
o
l
d
e
r
.
"
 
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
 
t
h
e
r
e
f
o
r
e
 
c
a
n
n
o
t
 
s
t
o
r
e
 
u
p
d
a
t
e
s
 
d
o
w
n
l
o
a
d
e
d
 
f
r
o
m
 
t
h
e
 
u
p
d
a
t
e
 
s
e
r
v
e
r
.
 
P
l
e
a
s
e
 
c
r
e
a
t
e
 
t
h
e
 
f
o
l
d
e
r
 
m
a
n
u
a
l
l
y
 
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
 
i
t
'
s
 
w
r
i
t
a
b
l
e
 
b
y
 
t
h
e
 
w
e
b
 
s
e
r
v
e
r
"
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
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
_
w
r
i
t
a
b
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
u
p
d
a
t
e
F
o
l
d
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
 
f
a
l
s
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
e
m
p
t
y
D
i
r
(
$
t
h
i
s
-
>
u
p
d
a
t
e
F
o
l
d
e
r
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
/
 
h
t
t
p
:
/
/
w
w
w
.
p
h
p
.
n
e
t
/
m
a
n
u
a
l
/
e
n
/
f
u
n
c
t
i
o
n
.
u
n
l
i
n
k
.
p
h
p
#
7
9
9
4
0

 
 
 
 
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
p
t
y
D
i
r
(
$
d
i
r
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
$
d
h
 
=
 
@
o
p
e
n
d
i
r
(
$
d
i
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
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
w
h
i
l
e
 
(
f
a
l
s
e
 
!
=
=
 
(
$
o
b
j
 
=
 
r
e
a
d
d
i
r
(
$
d
h
)
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
o
b
j
 
=
=
 
'
.
'
 
|
|
 
$
o
b
j
 
=
=
 
'
.
.
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
o
n
t
i
n
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
@
u
n
l
i
n
k
(
$
d
i
r
.
J
R
D
S
.
$
o
b
j
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
m
p
t
y
D
i
r
(
$
d
i
r
.
J
R
D
S
.
$
o
b
j
,
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
c
l
o
s
e
d
i
r
(
$
d
h
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
d
i
r
 
!
=
 
$
t
h
i
s
-
>
u
p
d
a
t
e
F
o
l
d
e
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
@
r
m
d
i
r
(
$
d
i
r
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
 
c
h
m
o
d
_
o
p
e
n
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
c
o
n
n
_
i
d
 
=
 
f
t
p
_
c
o
n
n
e
c
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
t
p
_
s
e
r
v
e
r
)
;

 
 
 
 
 
 
 
 
$
l
o
g
i
n
_
r
e
s
u
l
t
 
=
 
f
t
p
_
l
o
g
i
n
(
$
c
o
n
n
_
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
f
t
p
_
u
s
e
r
_
n
a
m
e
,
 
$
t
h
i
s
-
>
f
t
p
_
u
s
e
r
_
p
a
s
s
)
;

 
 
 
 
 
 
 
 
i
f
 
(
!
$
l
o
g
i
n
_
r
e
s
u
l
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
C
o
u
l
d
 
n
o
t
 
l
o
g
 
i
n
 
u
s
i
n
g
 
t
h
e
 
s
u
p
p
l
i
e
d
 
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
t
h
i
s
-
>
f
t
p
_
u
s
e
r
_
n
a
m
e
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
f
t
p
_
u
s
e
r
_
p
a
s
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
o
n
n
_
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
 
c
h
m
o
d
_
f
i
l
e
(
$
c
o
n
n
_
i
d
,
 
$
p
e
r
m
i
s
s
i
o
n
s
,
 
$
p
a
t
h
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
f
t
p
_
s
i
t
e
(
$
c
o
n
n
_
i
d
,
 
'
C
H
M
O
D
 
'
.
$
p
e
r
m
i
s
s
i
o
n
s
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
f
t
p
_
r
o
o
t
.
$
p
a
t
h
)
 
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
/
 
h
t
t
p
:
/
/
w
w
w
.
p
h
p
.
n
e
t
/
m
a
n
u
a
l
/
e
n
/
f
u
n
c
t
i
o
n
.
r
e
n
a
m
e
.
p
h
p
#
6
1
1
5
2

 
 
 
 
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
i
r
m
v
(
$
s
o
u
r
c
e
,
 
$
d
e
s
t
,
 
$
o
v
e
r
w
r
i
t
e
 
=
 
f
a
l
s
e
,
 
$
f
u
n
c
l
o
c
 
=
 
n
u
l
l
)

 
 
 
 
{

 
 
 
 
 
 
 
 
/
*

 
 
 
 
 
 
 
 
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
f
u
n
c
l
o
c
)
)

 
 
 
 
 
 
 
 
 
 
 
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
d
e
s
t
 
.
=
 
'
/
'
 
.
 
s
t
r
r
e
v
(
s
u
b
s
t
r
(
s
t
r
r
e
v
(
$
s
o
u
r
c
e
)
,
 
0
,
 
s
t
r
p
o
s
(
s
t
r
r
e
v
(
$
s
o
u
r
c
e
)
,
 
n
u
l
l
)
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
f
u
n
c
l
o
c
 
=
 
'
/
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
*
/

 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
_
d
i
r
(
$
d
e
s
t
.
$
f
u
n
c
l
o
c
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
m
k
d
i
r
(
$
d
e
s
t
.
$
f
u
n
c
l
o
c
)
;

 
 
 
 
 
 
 
 
}
 
/
/
 
m
a
k
e
 
s
u
b
d
i
r
e
c
t
o
r
y
 
b
e
f
o
r
e
 
s
u
b
d
i
r
e
c
t
o
r
y
 
i
s
 
c
o
p
i
e
d

 
 
 
 
 
 
 
 
/
/
e
c
h
o
 
"
O
p
e
n
i
n
g
 
"
 
.
 
$
s
o
u
r
c
e
 
.
 
$
f
u
n
c
l
o
c
.
"
<
b
r
/
>
"
;

 
 
 
 
 
 
 
 
i
f
 
(
$
h
a
n
d
l
e
 
=
 
o
p
e
n
d
i
r
(
$
s
o
u
r
c
e
.
$
f
u
n
c
l
o
c
)
)
 
{
 
/
/
 
i
f
 
t
h
e
 
f
o
l
d
e
r
 
e
x
p
l
o
r
a
t
i
o
n
 
i
s
 
s
u
c
s
e
s
s
f
u
l
,
 
c
o
n
t
i
n
u
e

 
 
 
 
 
 
 
 
 
 
 
 
/
/
e
c
h
o
 
"
O
p
e
n
e
d
 
"
.
 
$
s
o
u
r
c
e
 
.
 
$
f
u
n
c
l
o
c
.
"
<
b
r
/
>
"
;

 
 
 
 
 
 
 
 
 
 
 
 
w
h
i
l
e
 
(
f
a
l
s
e
 
!
=
=
 
(
$
f
i
l
e
 
=
 
r
e
a
d
d
i
r
(
$
h
a
n
d
l
e
)
)
)
 
{
 
/
/
 
a
s
 
l
o
n
g
 
a
s
 
s
t
o
r
i
n
g
 
t
h
e
 
n
e
x
t
 
f
i
l
e
 
t
o
 
$
f
i
l
e
 
i
s
 
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
,
 
c
o
n
t
i
n
u
e

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
f
i
l
e
 
!
=
 
'
.
'
 
&
&
 
$
f
i
l
e
 
!
=
 
'
.
.
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
t
h
 
=
 
$
s
o
u
r
c
e
.
$
f
u
n
c
l
o
c
.
$
f
i
l
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
t
h
2
 
=
 
$
d
e
s
t
.
$
f
u
n
c
l
o
c
.
$
f
i
l
e
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
_
f
i
l
e
(
$
p
a
t
h
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
_
f
i
l
e
(
$
p
a
t
h
2
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
@
r
e
n
a
m
e
(
$
p
a
t
h
,
 
$
p
a
t
h
2
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
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
F
i
l
e
 
(
'
.
$
p
a
t
h
.
'
)
 
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
 
m
o
v
e
d
,
 
l
i
k
e
l
y
 
a
 
p
e
r
m
i
s
s
i
o
n
s
 
p
r
o
b
l
e
m
.
<
/
f
o
n
t
>
<
b
r
/
>
'
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
o
v
e
r
w
r
i
t
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
@
u
n
l
i
n
k
(
$
p
a
t
h
2
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
U
n
a
b
l
e
 
t
o
 
o
v
e
r
w
r
i
t
e
 
f
i
l
e
 
(
"
'
.
$
p
a
t
h
2
.
'
"
)
,
 
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
 
a
 
p
e
r
m
i
s
s
i
o
n
s
 
p
r
o
b
l
e
m
.
<
b
r
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
@
r
e
n
a
m
e
(
$
p
a
t
h
,
 
$
p
a
t
h
2
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
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
F
i
l
e
 
(
'
.
$
p
a
t
h
.
'
)
 
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
 
m
o
v
e
d
 
w
h
i
l
e
 
o
v
e
r
w
r
i
t
t
i
n
g
,
 
l
i
k
e
l
y
 
a
 
p
e
r
m
i
s
s
i
o
n
s
 
p
r
o
b
l
e
m
.
<
/
f
o
n
t
>
<
b
r
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
m
o
v
e
d
F
i
l
e
L
o
g
[
 
]
 
=
 
'
M
o
v
e
d
 
'
.
$
p
a
t
h
.
'
<
b
r
/
>
 
t
o
 
'
.
$
p
a
t
h
2
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
N
o
t
 
a
l
l
o
w
e
d
 
t
o
 
o
v
e
r
w
r
i
t
e
'
.
$
p
a
t
h
2
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
_
d
i
r
(
$
p
a
t
h
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
d
i
r
m
v
(
$
s
o
u
r
c
e
,
 
$
d
e
s
t
,
 
$
o
v
e
r
w
r
i
t
e
,
 
$
f
u
n
c
l
o
c
.
$
f
i
l
e
.
J
R
D
S
)
;
 
/
/
r
e
c
u
r
s
e
!

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
m
d
i
r
(
$
p
a
t
h
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
c
l
o
s
e
d
i
r
(
$
h
a
n
d
l
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
 
"
F
i
n
i
s
h
e
d
 
u
p
g
r
a
d
e
 
<
b
r
/
>
"
;

 
 
 
 
}
 
/
/
 
e
n
d
 
o
f
 
d
i
r
m
v
(
)


 
 
 
 
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
m
o
d
_
c
l
o
s
e
(
$
c
o
n
n
_
i
d
)

 
 
 
 
{

 
 
 
 
 
 
 
 
f
t
p
_
c
l
o
s
e
(
$
c
o
n
n
_
i
d
)
;

 
 
 
 
}


 
 
 
 
/
/
 
T
h
i
s
 
m
u
s
t
 
b
e
 
i
n
c
l
u
d
e
d
 
i
n
 
e
v
e
r
y
 
E
v
e
n
t
/
M
i
n
i
-
c
o
m
p
o
n
e
n
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
 
g
e
t
R
e
t
V
a
l
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
 
n
u
l
l
;

 
 
 
 
}

}

