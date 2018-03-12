
<
?
p
h
p

/
*
*

 
*
 
A
l
l
o
w
s
 
l
o
g
g
i
n
g
 
v
i
a
 
t
h
e
 
M
o
n
o
l
o
g
 
l
i
b
r
a
r
y

 
*

 
*
 
S
t
a
r
t
e
d
 
o
u
t
 
a
s
 
b
e
i
n
g
 
i
n
t
e
n
d
e
d
 
j
u
s
t
 
f
o
r
 
R
E
S
T
 
A
P
I
 
l
o
g
g
i
n
g
,
 
b
u
t
 
n
o
w
 
i
s
 
u
s
e
d
 
t
h
r
o
u
g
h
o
u
t
 
J
o
m
r
e
s
,
 
n
o
t
 
j
u
s
t
 
A
P
I
 
c
a
l
l
s
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

u
s
e
 
M
o
n
o
l
o
g
\
L
o
g
g
e
r
;

u
s
e
 
M
o
n
o
l
o
g
\
H
a
n
d
l
e
r
\
S
t
r
e
a
m
H
a
n
d
l
e
r
;

u
s
e
 
M
o
n
o
l
o
g
\
H
a
n
d
l
e
r
\
S
y
s
l
o
g
H
a
n
d
l
e
r
;


u
s
e
 
M
o
n
o
l
o
g
\
H
a
n
d
l
e
r
\
S
y
s
l
o
g
U
d
p
H
a
n
d
l
e
r
;

u
s
e
 
M
o
n
o
l
o
g
\
F
o
r
m
a
t
t
e
r
\
L
i
n
e
F
o
r
m
a
t
t
e
r
;


u
s
e
 
M
o
n
o
l
o
g
\
H
a
n
d
l
e
r
\
H
a
n
d
l
e
r
I
n
t
e
r
f
a
c
e
;

u
s
e
 
M
o
n
o
l
o
g
\
H
a
n
d
l
e
r
\
A
b
s
t
r
a
c
t
P
r
o
c
e
s
s
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
;

u
s
e
 
M
o
n
o
l
o
g
\
H
a
n
d
l
e
r
\
B
r
o
w
s
e
r
C
o
n
s
o
l
e
H
a
n
d
l
e
r
;

u
s
e
 
M
o
n
o
l
o
g
\
P
r
o
c
e
s
s
o
r
\
W
e
b
P
r
o
c
e
s
s
o
r
;


c
l
a
s
s
 
l
o
g
g
i
n
g

{

	
/
*
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

	
*

	
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

 
 
 
 
}


	
/
*
*

	
*

	
*
 
U
s
e
s
 
m
o
n
o
l
o
g
 
t
o
 
l
o
g
 
a
c
t
i
v
i
t
y
 
w
i
t
h
i
n
 
J
o
m
r
e
s

	
*

	
*
/

 
 
 
 
p
u
b
l
i
c
 
s
t
a
t
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
m
e
s
s
a
g
e
,
 
$
c
h
a
n
n
e
l
 
=
 
'
C
o
r
e
'
,
 
$
l
e
v
e
l
 
=
 
'
D
E
B
U
G
'
 
,
 
$
f
u
r
t
h
e
r
_
i
n
f
o
_
d
u
m
p
 
=
 
'
'
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
u
s
e
r
n
a
m
e
 
=
 
'
U
n
k
n
o
w
n
'
;

 
 
 
 
 
 
 
 
i
f
 
(
!
d
e
f
i
n
e
d
(
'
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
'
)
)
 
{
 
/
/
 
F
o
r
 
p
e
r
f
o
r
m
a
n
c
e
 
r
e
a
s
o
n
s
 
t
h
e
 
A
P
I
 
d
o
e
s
n
'
t
 
i
n
c
l
u
d
e
 
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
 
f
r
a
m
e
w
o
r
k
 
u
n
l
e
s
s
 
c
a
l
l
e
d
 
i
n
 
a
n
 
A
P
I
 
F
e
a
t
u
r
e
.
 
A
s
 
a
 
r
e
s
u
l
t
,
 
w
e
'
l
l
 
c
h
e
c
k
 
h
e
r
e
 
t
o
 
s
e
e
 
i
f
 
a
 
c
o
r
e
 
s
y
s
t
e
m
 
p
a
t
h
 
i
s
 
s
e
t
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
 
c
a
l
l
 
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
.
p
h
p
 
d
i
r
e
c
t
l
y
 
i
n
s
t
e
a
d
 
o
f
 
u
s
i
n
g
 
t
h
e
 
f
r
a
m
e
w
o
r
k
 
t
o
 
i
n
c
l
u
d
e
 
i
t

 
 
 
 
 
 
 
 
 
 
 
 
i
n
c
l
u
d
e
 
'
.
.
/
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
.
p
h
p
'
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
d
e
f
i
n
e
d
(
'
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
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
d
i
r
n
a
m
e
(
_
_
F
I
L
E
_
_
)
.
'
/
.
.
/
.
.
/
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
t
.
p
h
p
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
q
u
i
r
e
_
o
n
c
e
 
d
i
r
n
a
m
e
(
_
_
F
I
L
E
_
_
)
.
'
/
.
.
/
.
.
/
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
t
.
p
h
p
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
d
e
f
i
n
e
(
'
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
'
,
 
'
j
o
m
r
e
s
'
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


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
d
e
f
i
n
e
d
(
'
A
U
T
O
_
U
P
G
R
A
D
E
'
)
)
 
{

	
	
	
	
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
j
r
_
u
s
e
r
_
r
e
a
d
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
n
a
m
e
 
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

	
	
	
	
	
	
$
u
s
e
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
n
a
m
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
u
s
e
r
n
a
m
e
 
=
 
'
S
t
a
r
t
u
p
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
u
s
e
r
n
a
m
e
 
=
 
'
I
n
s
t
a
l
l
e
r
'
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
l
o
g
_
p
a
t
h
'
]
)
 
|
|
 
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
l
o
g
_
p
a
t
h
'
]
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
l
o
g
_
p
a
t
h
'
]
 
=
 
d
i
r
n
a
m
e
(
d
i
r
n
a
m
e
(
d
i
r
n
a
m
e
(
_
_
F
I
L
E
_
_
)
)
)
.
'
/
l
o
g
s
/
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
l
o
g
_
p
a
t
h
'
]
 
=
 
r
t
r
i
m
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
l
o
g
_
p
a
t
h
'
]
,
 
'
/
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
[
'
l
o
g
_
p
a
t
h
'
]
 
=
 
r
t
r
i
m
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
l
o
g
_
p
a
t
h
'
]
,
 
'
\
\
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
[
'
l
o
g
_
p
a
t
h
'
]
 
.
=
 
D
I
R
E
C
T
O
R
Y
_
S
E
P
A
R
A
T
O
R
;


	
	
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
l
o
g
_
p
a
t
h
'
]
)
)
 
{

	
	
	
@
m
k
d
i
r
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
l
o
g
_
p
a
t
h
'
]
)
;

	
	
}

	
	

	
	
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
l
o
g
_
p
a
t
h
'
]
)
)
 
{
 
/
/
 
W
e
 
w
o
n
'
t
 
t
h
r
o
w
 
a
n
 
e
r
r
o
r
,
 
w
e
 
j
u
s
t
 
w
o
n
t
 
t
r
y
 
t
o
 
w
r
i
t
e
 
t
o
 
t
h
e
 
l
o
g
 
f
i
l
e
.

	
	
	
r
e
t
u
r
n
;

	
	
}

	
	

 
 
 
 
 
 
 
 
$
l
o
g
_
f
i
l
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
 
'
,
 
'
_
'
,
 
$
c
h
a
n
n
e
l
)
.
'
.
a
p
p
l
i
c
a
t
i
o
n
.
l
o
g
'
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
d
e
v
e
l
o
p
m
e
n
t
_
p
r
o
d
u
c
t
i
o
n
'
 
]
 
=
=
 
'
p
r
o
d
u
c
t
i
o
n
'
 
&
&
 
$
l
e
v
e
l
 
=
=
 
'
D
E
B
U
G
'
)
 
{
 
/
/
 
I
n
 
P
r
o
d
u
c
t
i
o
n
,
 
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
 
s
e
e
 
D
E
B
U
G
 
l
e
v
e
l
 
s
t
u
f
f
.

 
 
 
 
 
 
 
 
 
 
 
 
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
r
l
 
=
 
'
'
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
S
E
R
V
E
R
[
'
R
E
Q
U
E
S
T
_
U
R
I
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
f
u
l
l
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
r
s
e
 
=
 
p
a
r
s
e
_
u
r
l
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
(
i
s
s
e
t
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
H
T
T
P
S
'
]
)
 
&
&
 
s
t
r
c
a
s
e
c
m
p
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
H
T
T
P
S
'
]
,
 
'
o
f
f
'
)
 
?
 
'
h
t
t
p
s
:
/
/
'
 
:
 
'
h
t
t
p
:
/
/
'
)
.

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
(
i
s
s
e
t
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
H
T
T
P
_
H
O
S
T
'
]
)
 
?
 
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
H
T
T
P
_
H
O
S
T
'
]
 
:
 
(
i
s
s
e
t
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
N
A
M
E
'
]
)
 
?
 
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
N
A
M
E
'
]
 
:
 
'
'
)
)
.
(
(
$
f
u
l
l
)
 
?
 
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
R
E
Q
U
E
S
T
_
U
R
I
'
]
 
:
 
n
u
l
l
)

 
 
 
 
 
 
 
 
 
 
 
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
r
s
e
[
'
p
o
r
t
'
]
 
=
 
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
P
O
R
T
'
]
;
 
/
/
 
S
e
t
u
p
 
p
r
o
t
o
c
o
l
 
f
o
r
 
s
u
r
e
 
(
8
0
 
i
s
 
d
e
f
a
u
l
t
)

 
 
 
 
 
 
 
 
 
 
 
 
$
u
r
l
 
=
 
h
t
t
p
_
b
u
i
l
d
_
u
r
l
(
'
'
,
 
$
p
a
r
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
u
r
l
 
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
u
r
l
,
 
F
I
L
T
E
R
_
V
A
L
I
D
A
T
E
_
U
R
L
,
 
F
I
L
T
E
R
_
F
L
A
G
_
P
A
T
H
_
R
E
Q
U
I
R
E
D
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 


 
 
 
 
 
 
 
 
$
f
o
r
m
a
t
t
e
r
 
=
 
n
e
w
 
L
i
n
e
F
o
r
m
a
t
t
e
r
(
"
%
d
a
t
e
t
i
m
e
%
 
~
~
 
%
c
h
a
n
n
e
l
%
.
%
l
e
v
e
l
_
n
a
m
e
%
:
 
~
~
 
%
m
e
s
s
a
g
e
%
 
~
~
 
%
c
o
n
t
e
x
t
%
 
~
~
 
%
e
x
t
r
a
%
 
:
:
:
:
:
 
\
n
"
)
;


 
 
 
 
 
 
 
 
$
s
t
r
e
a
m
_
h
a
n
d
l
e
r
 
=
 
n
e
w
 
S
t
r
e
a
m
H
a
n
d
l
e
r
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
l
o
g
_
p
a
t
h
'
]
.
$
l
o
g
_
f
i
l
e
,
 
L
o
g
g
e
r
:
:
D
E
B
U
G
)
;

 
 
 
 
 
 
 
 
$
s
t
r
e
a
m
_
h
a
n
d
l
e
r
-
>
s
e
t
F
o
r
m
a
t
t
e
r
(
$
f
o
r
m
a
t
t
e
r
)
;


 
 
 
 
 
 
 
 
i
f
 
(
 
d
e
f
i
n
e
d
(
'
A
J
A
X
C
A
L
L
'
)
 
&
&
 
!
A
J
A
X
C
A
L
L
 
&
&
 
!
d
e
f
i
n
e
d
(
"
A
P
I
_
S
T
A
R
T
E
D
"
)
 
)
 
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
d
e
v
e
l
o
p
m
e
n
t
_
p
r
o
d
u
c
t
i
o
n
'
]
 
=
=
 
'
d
e
v
e
l
o
p
m
e
n
t
'
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
o
g
g
e
r
 
=
 
n
e
w
 
L
o
g
g
e
r
(
$
c
h
a
n
n
e
l
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
o
g
g
e
r
-
>
p
u
s
h
P
r
o
c
e
s
s
o
r
(
n
e
w
 
\
M
o
n
o
l
o
g
\
P
r
o
c
e
s
s
o
r
\
W
e
b
P
r
o
c
e
s
s
o
r
)
;
 
/
/
 
p
u
s
h
i
n
g
 
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
 
p
r
e
p
r
o
c
e
s
s
o
r

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
r
o
w
s
e
r
H
a
n
d
l
e
r
 
=
 
n
e
w
 
\
M
o
n
o
l
o
g
\
H
a
n
d
l
e
r
\
B
r
o
w
s
e
r
C
o
n
s
o
l
e
H
a
n
d
l
e
r
(
\
M
o
n
o
l
o
g
\
L
o
g
g
e
r
:
:
D
E
B
U
G
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
o
g
g
e
r
-
>
p
u
s
h
H
a
n
d
l
e
r
(
$
b
r
o
w
s
e
r
H
a
n
d
l
e
r
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
o
g
g
e
r
-
>
a
d
d
D
e
b
u
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
,
 
a
r
r
a
y
 
(
"
i
n
f
o
_
d
u
m
p
"
 
=
>
 
$
f
u
r
t
h
e
r
_
i
n
f
o
_
d
u
m
p
)
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
o
g
g
e
r
-
>
d
e
b
u
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
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
$
m
e
s
s
a
g
e
 
=
 
$
u
s
e
r
n
a
m
e
.
'
 
~
~
 
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
 
~
~
 
'
.
s
e
s
s
i
o
n
_
i
d
(
)
.
'
 
~
~
 
'
.
$
u
r
l
;

 
 
 
 
 
 
 
 
$
l
o
g
g
e
r
 
=
 
n
e
w
 
L
o
g
g
e
r
(
$
c
h
a
n
n
e
l
)
;

 
 
 
 
 
 
 
 
$
l
o
g
g
e
r
-
>
p
u
s
h
P
r
o
c
e
s
s
o
r
(
n
e
w
 
\
M
o
n
o
l
o
g
\
P
r
o
c
e
s
s
o
r
\
W
e
b
P
r
o
c
e
s
s
o
r
(
)
)
;

 
 
 
 
 
 
 
 
$
l
o
g
g
e
r
-
>
p
u
s
h
H
a
n
d
l
e
r
(

 
 
 
 
 
 
 
 
 
 
 
 
$
s
t
r
e
a
m
_
h
a
n
d
l
e
r

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
s
y
s
l
o
g
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
 
t
r
u
e
;

 
 
 
 
 
 
 
 
$
d
i
s
a
b
l
e
d
 
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
 
i
n
i
_
g
e
t
(
'
d
i
s
a
b
l
e
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
'
)
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
'
 
o
p
e
n
l
o
g
'
,
 
$
d
i
s
a
b
l
e
d
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
'
o
p
e
n
l
o
g
'
,
 
$
d
i
s
a
b
l
e
d
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
'
 
s
y
s
l
o
g
'
,
 
$
d
i
s
a
b
l
e
d
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
'
s
y
s
l
o
g
'
,
 
$
d
i
s
a
b
l
e
d
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
y
s
l
o
g
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
s
y
s
l
o
g
_
d
i
s
a
b
l
e
d
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
y
s
l
o
g
_
h
o
s
t
'
]
)
 
|
|

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
t
r
i
m
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
y
s
l
o
g
_
h
o
s
t
'
]
)
 
=
=
 
'
'
 
|
|

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
!
i
s
s
e
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
[
'
s
y
s
l
o
g
_
p
o
r
t
'
]
)
 
|
|

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
t
r
i
m
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
y
s
l
o
g
_
p
o
r
t
'
]
)
 
=
=
 
'
'

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
y
s
l
o
g
H
a
n
d
l
e
r
 
=
 
n
e
w
 
S
y
s
l
o
g
H
a
n
d
l
e
r
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
j
o
m
r
e
s
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
L
O
G
_
U
S
E
R

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
y
s
l
o
g
H
a
n
d
l
e
r
 
=
 
n
e
w
 
S
y
s
l
o
g
U
d
p
H
a
n
d
l
e
r
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
(
s
t
r
i
n
g
)
 
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
y
s
l
o
g
_
h
o
s
t
'
]
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
(
i
n
t
)
 
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
y
s
l
o
g
_
p
o
r
t
'
]
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
L
O
G
_
U
S
E
R

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
 
=
 
'
%
c
h
a
n
n
e
l
%
.
%
l
e
v
e
l
_
n
a
m
e
%
:
 
%
m
e
s
s
a
g
e
%
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
y
s
l
o
g
_
f
o
r
m
a
t
t
e
r
 
=
 
n
e
w
 
L
i
n
e
F
o
r
m
a
t
t
e
r
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

 
 
 
 
 
 
 
 
 
 
 
 
$
s
y
s
l
o
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
e
t
F
o
r
m
a
t
t
e
r
(
$
s
y
s
l
o
g
_
f
o
r
m
a
t
t
e
r
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
l
o
g
g
e
r
-
>
p
u
s
h
H
a
n
d
l
e
r
(
$
s
y
s
l
o
g
H
a
n
d
l
e
r
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
l
o
g
g
e
r
-
>
p
u
s
h
P
r
o
c
e
s
s
o
r
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
$
r
e
c
o
r
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
c
o
r
d
[
'
e
x
t
r
a
'
]
[
'
t
r
a
n
s
a
c
t
i
o
n
_
i
d
'
]
 
=
 
T
R
A
N
S
A
C
T
I
O
N
_
I
D
;
 
/
/
 
T
r
a
n
s
a
c
t
i
o
n
 
i
d
 
i
s
 
u
s
e
d
 
t
o
 
i
d
e
n
t
i
f
y
 
t
h
e
 
c
a
l
l
e
r
 
(
 
m
i
c
r
o
t
i
m
e
 
)
 
s
o
 
t
h
a
t
 
w
e
 
c
a
n
 
a
s
s
o
c
i
a
t
e
 
l
o
g
s
 
w
i
t
h
 
a
c
t
i
o
n
s

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
r
e
c
o
r
d
;

 
 
 
 
 
 
 
 
}
)
;


 
 
 
 
 
 
 
 
$
t
r
a
c
e
 
=
 
'
'
;

 
 
 
 
 
 
 
 
i
f
 
(
 
$
l
e
v
e
l
 
=
=
 
'
D
E
B
U
G
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
b
a
c
k
t
r
a
c
e
 
=
 
d
e
b
u
g
_
b
a
c
k
t
r
a
c
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
r
a
c
e
 
=
 
"
<
b
r
/
>
 
F
i
l
e
 
"
.
$
b
a
c
k
t
r
a
c
e
[
1
]
[
'
f
i
l
e
'
]
.
"
 
L
i
n
e
 
"
.
$
b
a
c
k
t
r
a
c
e
[
1
]
[
'
l
i
n
e
'
]
.
 
"
 
F
u
n
c
t
i
o
n
 
"
.
$
b
a
c
k
t
r
a
c
e
[
1
]
[
'
f
u
n
c
t
i
o
n
'
]
.
"
<
b
r
/
>
 
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
r
a
c
e
 
.
=
 
"
 
F
i
l
e
 
"
.
$
b
a
c
k
t
r
a
c
e
[
2
]
[
'
f
i
l
e
'
]
.
"
 
L
i
n
e
 
"
.
$
b
a
c
k
t
r
a
c
e
[
2
]
[
'
l
i
n
e
'
]
.
 
"
 
F
u
n
c
t
i
o
n
 
"
.
$
b
a
c
k
t
r
a
c
e
[
2
]
[
'
f
u
n
c
t
i
o
n
'
]
.
"
<
b
r
/
>
 
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
r
a
c
e
 
.
=
 
"
 
F
i
l
e
 
"
.
$
b
a
c
k
t
r
a
c
e
[
3
]
[
'
f
i
l
e
'
]
.
"
 
L
i
n
e
 
"
.
$
b
a
c
k
t
r
a
c
e
[
3
]
[
'
l
i
n
e
'
]
.
 
"
 
F
u
n
c
t
i
o
n
 
"
.
$
b
a
c
k
t
r
a
c
e
[
3
]
[
'
f
u
n
c
t
i
o
n
'
]
.
"
<
b
r
/
>
 
"
;
 

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
c
o
n
t
e
x
t
 
=
 
a
r
r
a
y
(
 
'
i
n
f
o
_
d
u
m
p
'
 
=
>
 
$
f
u
r
t
h
e
r
_
i
n
f
o
_
d
u
m
p
.
$
t
r
a
c
e
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
l
e
v
e
l
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
d
e
f
a
u
l
t
:

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
D
E
B
U
G
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
d
e
v
e
l
o
p
m
e
n
t
_
p
r
o
d
u
c
t
i
o
n
'
]
 
=
=
 
'
d
e
v
e
l
o
p
m
e
n
t
'
)
 
{


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
o
g
g
e
r
-
>
a
d
d
D
e
b
u
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
,
 
$
c
o
n
t
e
x
t
)
;
 
/
/
 
D
e
t
a
i
l
e
d
 
d
e
b
u
g
 
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
.

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
I
N
F
O
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
o
g
g
e
r
-
>
a
d
d
I
n
f
o
(
$
m
e
s
s
a
g
e
,
 
$
c
o
n
t
e
x
t
)
;
 
/
/
 
I
n
t
e
r
e
s
t
i
n
g
 
e
v
e
n
t
s
.
 
E
x
a
m
p
l
e
s
:
 
U
s
e
r
 
l
o
g
s
 
i
n
,
 
S
Q
L
 
l
o
g
s
.

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
N
O
T
I
C
E
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
o
g
g
e
r
-
>
a
d
d
N
o
t
i
c
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
,
 
$
c
o
n
t
e
x
t
)
;
 
/
/
 
N
o
r
m
a
l
 
b
u
t
 
s
i
g
n
i
f
i
c
a
n
t
 
e
v
e
n
t
s
.

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
A
R
N
I
N
G
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
o
g
g
e
r
-
>
a
d
d
W
a
r
n
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
,
 
$
c
o
n
t
e
x
t
)
;
 
/
/
 
E
x
c
e
p
t
i
o
n
a
l
 
o
c
c
u
r
r
e
n
c
e
s
 
t
h
a
t
 
a
r
e
 
n
o
t
 
e
r
r
o
r
s
.
 
E
x
a
m
p
l
e
s
:
 
U
s
e
 
o
f
 
d
e
p
r
e
c
a
t
e
d
 
A
P
I
s
,
 
p
o
o
r
 
u
s
e
 
o
f
 
a
n
 
A
P
I
,
 
u
n
d
e
s
i
r
a
b
l
e
 
t
h
i
n
g
s
 
t
h
a
t
 
a
r
e
 
n
o
t
 
n
e
c
e
s
s
a
r
i
l
y
 
w
r
o
n
g
.

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
E
R
R
O
R
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
o
g
g
e
r
-
>
a
d
d
E
r
r
o
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
,
 
$
c
o
n
t
e
x
t
)
;
 
/
/
 
R
u
n
t
i
m
e
 
e
r
r
o
r
s
 
t
h
a
t
 
d
o
 
n
o
t
 
r
e
q
u
i
r
e
 
i
m
m
e
d
i
a
t
e
 
a
c
t
i
o
n
 
b
u
t
 
s
h
o
u
l
d
 
t
y
p
i
c
a
l
l
y
 
b
e
 
l
o
g
g
e
d
 
a
n
d
 
m
o
n
i
t
o
r
e
d
.

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
C
R
I
T
I
C
A
L
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
o
g
g
e
r
-
>
a
d
d
C
r
i
t
i
c
a
l
(
$
m
e
s
s
a
g
e
,
 
$
c
o
n
t
e
x
t
)
;
 
/
/
 
C
r
i
t
i
c
a
l
 
c
o
n
d
i
t
i
o
n
s
.
 
E
x
a
m
p
l
e
:
 
A
p
p
l
i
c
a
t
i
o
n
 
c
o
m
p
o
n
e
n
t
 
u
n
a
v
a
i
l
a
b
l
e
,
 
u
n
e
x
p
e
c
t
e
d
 
e
x
c
e
p
t
i
o
n
.

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
A
L
E
R
T
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
o
g
g
e
r
-
>
a
d
d
A
l
e
r
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
,
 
$
c
o
n
t
e
x
t
)
;
 
/
/
 
A
c
t
i
o
n
 
m
u
s
t
 
b
e
 
t
a
k
e
n
 
i
m
m
e
d
i
a
t
e
l
y
.
 
E
x
a
m
p
l
e
:
 
E
n
t
i
r
e
 
w
e
b
s
i
t
e
 
d
o
w
n
,
 
d
a
t
a
b
a
s
e
 
u
n
a
v
a
i
l
a
b
l
e
,
 
e
t
c
.
 
T
h
i
s
 
s
h
o
u
l
d
 
t
r
i
g
g
e
r
 
t
h
e
 
S
M
S
 
a
l
e
r
t
s
 
a
n
d
 
w
a
k
e
 
y
o
u
 
u
p
.

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
E
M
E
R
G
E
N
C
Y
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
o
g
g
e
r
-
>
a
d
d
E
m
e
r
g
e
n
c
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
,
 
$
c
o
n
t
e
x
t
)
;
 
/
/
E
m
e
r
g
e
n
c
y
:
 
s
y
s
t
e
m
 
i
s
 
u
n
u
s
a
b
l
e
.

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
}

}

