
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
0
0
0
0
4
a
_
i
n
i
t
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
c
s
s
_
f
i
l
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
$
c
o
m
p
o
n
e
n
t
A
r
g
s
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
A
J
A
X
C
A
L
L
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
N
O
H
T
M
L
'
)
 
&
&
 
J
O
M
R
E
S
_
N
O
H
T
M
L
 
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
J
S
C
A
L
L
E
D
'
)
)
 
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
J
S
C
A
L
L
E
D
'
,
 
1
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
 
t
r
u
e
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

	
	

	
	
$
m
a
n
a
g
e
m
e
n
t
_
v
i
e
w
 
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
t
m
p
l
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
a
d
_
j
q
u
e
r
y
_
u
i
'
 
]
)
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
a
d
_
j
q
u
e
r
y
_
u
i
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
a
d
_
j
q
u
e
r
y
_
u
i
_
c
s
s
'
 
]
)
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
a
d
_
j
q
u
e
r
y
_
u
i
_
c
s
s
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
j
q
u
e
r
y
_
u
i
_
t
h
e
m
e
'
 
]
)
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
j
q
u
e
r
y
_
u
i
_
t
h
e
m
e
'
 
]
 
=
 
'
b
a
s
e
'
;

 
 
 
 
 
 
 
 
}

	
	

	
	
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
j
q
u
e
r
y
_
u
i
_
t
h
e
m
e
'
 
]
 
=
=
 
'
j
o
m
r
e
s
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
j
q
u
e
r
y
_
u
i
_
t
h
e
m
e
'
 
]
 
=
 
'
b
a
s
e
'
;

	
	
}


 
 
 
 
 
 
 
 
$
t
h
e
m
e
P
a
t
h
 
=
 
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
j
q
u
e
r
y
-
u
i
-
t
h
e
m
e
s
/
t
h
e
m
e
s
/
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
j
q
u
e
r
y
_
u
i
_
t
h
e
m
e
'
 
]
.
'
/
'
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
0
0
2
1
'
,
 
$
c
o
m
p
o
n
e
n
t
A
r
g
s
)
;
 
/
/
 
G
e
t
 
t
h
e
 
c
o
l
o
u
r
 
s
c
h
e
m
e


 
 
 
 
 
 
 
 
$
c
s
s
_
f
i
l
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
i
l
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
r
e
w
e
i
n
a
d
m
i
n
a
r
e
a
(
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
a
d
_
j
q
u
e
r
y
_
u
i
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
m
a
n
a
g
e
m
e
n
t
_
v
i
e
w
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
c
s
s
'
,
 
$
t
h
e
m
e
P
a
t
h
,
 
'
j
q
u
e
r
y
-
u
i
.
m
i
n
.
c
s
s
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
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
r
e
w
e
i
n
a
d
m
i
n
a
r
e
a
(
)
 
|
|
 
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
a
d
_
j
q
u
e
r
y
_
u
i
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
m
a
n
a
g
e
m
e
n
t
_
v
i
e
w
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
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
i
l
e
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
j
q
u
e
r
y
-
u
i
-
d
i
s
t
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
-
u
i
.
m
i
n
.
j
s
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
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
r
e
w
e
i
n
a
d
m
i
n
a
r
e
a
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
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
T
E
C
T
E
D
_
C
M
S
 
!
=
 
'
j
o
o
m
l
a
4
'
)
 
{

	
	
	
	
$
c
s
s
_
f
i
l
e
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
l
i
b
r
a
r
i
e
s
/
f
u
l
l
s
c
r
e
e
n
_
v
i
e
w
/
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
w
r
a
p
p
e
r
/
c
s
s
/
'
,
 
'
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
w
r
a
p
p
e
r
.
c
s
s
'
)
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
i
l
e
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
l
i
b
r
a
r
i
e
s
/
f
u
l
l
s
c
r
e
e
n
_
v
i
e
w
/
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
w
r
a
p
p
e
r
/
j
s
/
'
,
 
'
b
o
o
t
s
t
r
a
p
-
m
o
d
a
l
.
j
s
'
)
;

	
	
	
	
$
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
i
l
e
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
l
i
b
r
a
r
i
e
s
/
f
u
l
l
s
c
r
e
e
n
_
v
i
e
w
/
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
w
r
a
p
p
e
r
/
j
s
/
'
,
 
'
b
o
o
t
s
t
r
a
p
-
t
o
o
l
t
i
p
.
j
s
'
)
;

	
	
	
	
$
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
i
l
e
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
l
i
b
r
a
r
i
e
s
/
f
u
l
l
s
c
r
e
e
n
_
v
i
e
w
/
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
w
r
a
p
p
e
r
/
j
s
/
'
,
 
'
b
o
o
t
s
t
r
a
p
-
p
o
p
o
v
e
r
.
j
s
'
)
;

	
	
	
	
$
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
i
l
e
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
l
i
b
r
a
r
i
e
s
/
f
u
l
l
s
c
r
e
e
n
_
v
i
e
w
/
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
w
r
a
p
p
e
r
/
j
s
/
'
,
 
'
b
o
o
t
s
t
r
a
p
-
c
o
l
l
a
p
s
e
.
j
s
'
)
;

	
	
	
	
$
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
i
l
e
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
l
i
b
r
a
r
i
e
s
/
f
u
l
l
s
c
r
e
e
n
_
v
i
e
w
/
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
w
r
a
p
p
e
r
/
j
s
/
'
,
 
'
b
o
o
t
s
t
r
a
p
-
d
r
o
p
d
o
w
n
.
j
s
'
)
;

	
	
	
	
$
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
i
l
e
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
l
i
b
r
a
r
i
e
s
/
f
u
l
l
s
c
r
e
e
n
_
v
i
e
w
/
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
w
r
a
p
p
e
r
/
j
s
/
'
,
 
'
b
o
o
t
s
t
r
a
p
-
t
a
b
.
j
s
'
)
;

	
	
	
	
$
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
i
l
e
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
l
i
b
r
a
r
i
e
s
/
f
u
l
l
s
c
r
e
e
n
_
v
i
e
w
/
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
w
r
a
p
p
e
r
/
j
s
/
'
,
 
'
b
o
o
t
s
t
r
a
p
-
t
r
a
n
s
i
t
i
o
n
.
j
s
'
)
;

	
	
	
	
$
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
i
l
e
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
l
i
b
r
a
r
i
e
s
/
f
u
l
l
s
c
r
e
e
n
_
v
i
e
w
/
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
w
r
a
p
p
e
r
/
j
s
/
'
,
 
'
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
w
r
a
p
p
e
r
.
j
s
'
)
;

	
	
	
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
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
i
l
e
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
J
O
M
R
E
S
_
J
S
_
R
E
L
P
A
T
H
,
 
'
j
o
m
r
e
s
.
j
s
'
)
;


 
 
 
 
 
 
 
 
$
d
a
t
e
p
i
c
k
e
r
_
l
o
c
a
l
i
s
a
t
i
o
n
_
f
i
l
e
 
=
 
'
d
a
t
e
p
i
c
k
e
r
-
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
d
a
t
e
p
i
c
k
e
r
_
l
a
n
g
'
)
.
'
.
j
s
'
;


 
 
 
 
 
 
 
 
$
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
i
l
e
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
j
q
u
e
r
y
-
u
i
/
u
i
/
i
1
8
n
/
'
,
 
$
d
a
t
e
p
i
c
k
e
r
_
l
o
c
a
l
i
s
a
t
i
o
n
_
f
i
l
e
)
;


 
 
 
 
 
 
 
 
$
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
i
l
e
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
j
q
u
e
r
y
-
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
/
d
i
s
t
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
v
a
l
i
d
a
t
e
.
m
i
n
.
j
s
'
)
;


 
 
 
 
 
 
 
 
$
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
i
l
e
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
j
q
u
e
r
y
-
s
t
a
r
-
r
a
t
i
n
g
-
p
l
u
g
i
n
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
r
a
t
i
n
g
.
p
a
c
k
.
j
s
'
)
;


 
 
 
 
 
 
 
 
$
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
i
l
e
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
j
q
u
e
r
y
.
t
i
p
s
y
/
s
r
c
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
t
i
p
s
y
.
j
s
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
a
d
_
f
o
n
t
_
a
w
e
s
o
m
e
'
 
]
)
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
a
d
_
f
o
n
t
_
a
w
e
s
o
m
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
a
d
_
f
o
n
t
_
a
w
e
s
o
m
e
'
 
]
 
=
=
 
'
1
'
 
|
|
 
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
r
e
w
e
i
n
a
d
m
i
n
a
r
e
a
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
s
s
_
f
i
l
e
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
f
o
n
t
-
a
w
e
s
o
m
e
/
c
s
s
/
'
,
 
'
f
o
n
t
-
a
w
e
s
o
m
e
.
m
i
n
.
c
s
s
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
$
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
i
l
e
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
J
O
M
R
E
S
_
J
S
_
R
E
L
P
A
T
H
,
 
'
j
q
u
e
r
y
.
c
h
a
i
n
e
d
S
e
l
e
c
t
s
.
j
s
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
i
v
e
_
s
c
r
o
l
l
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
'
]
)
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
i
v
e
_
s
c
r
o
l
l
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
i
v
e
_
s
c
r
o
l
l
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
i
l
e
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
J
O
M
R
E
S
_
J
S
_
R
E
L
P
A
T
H
,
 
'
j
q
u
e
r
y
.
l
i
v
e
q
u
e
r
y
.
j
s
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
 
|
|
 
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
r
e
w
e
i
n
a
d
m
i
n
a
r
e
a
(
)
)
 
{

	
	
	
i
f
 
(
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
T
E
C
T
E
D
_
C
M
S
 
!
=
 
'
j
o
o
m
l
a
4
'
)
 
{

	
	
	
	
$
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
i
l
e
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
J
O
M
R
E
S
_
J
S
_
R
E
L
P
A
T
H
,
 
'
d
a
t
a
t
a
b
l
e
s
.
m
i
n
.
j
s
'
)
;

	
	
	
	
$
c
s
s
_
f
i
l
e
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
J
O
M
R
E
S
_
C
S
S
_
R
E
L
P
A
T
H
,
 
'
d
a
t
a
t
a
b
l
e
s
.
c
s
s
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
i
l
e
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
d
a
t
a
t
a
b
l
e
s
.
n
e
t
/
j
s
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
d
a
t
a
T
a
b
l
e
s
.
j
s
'
)
;

	
	
	
	
$
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
i
l
e
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
d
a
t
a
t
a
b
l
e
s
.
n
e
t
-
b
s
4
/
j
s
/
'
,
 
'
d
a
t
a
T
a
b
l
e
s
.
b
o
o
t
s
t
r
a
p
4
.
j
s
'
)
;

	
	
	
	
$
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
i
l
e
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
d
a
t
a
t
a
b
l
e
s
.
n
e
t
-
b
u
t
t
o
n
s
/
j
s
/
'
,
 
'
d
a
t
a
T
a
b
l
e
s
.
b
u
t
t
o
n
s
.
m
i
n
.
j
s
'
)
;

	
	
	
	
$
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
i
l
e
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
J
O
M
R
E
S
_
J
S
_
R
E
L
P
A
T
H
,
 
'
j
s
z
i
p
.
m
i
n
.
j
s
'
)
;

	
	
	
	
$
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
i
l
e
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
J
O
M
R
E
S
_
J
S
_
R
E
L
P
A
T
H
,
 
'
p
d
f
m
a
k
e
.
m
i
n
.
j
s
'
)
;

	
	
	
	
$
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
i
l
e
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
J
O
M
R
E
S
_
J
S
_
R
E
L
P
A
T
H
,
 
'
v
f
s
_
f
o
n
t
s
.
j
s
'
)
;

	
	
	
	
$
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
i
l
e
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
d
a
t
a
t
a
b
l
e
s
.
n
e
t
-
b
u
t
t
o
n
s
/
j
s
/
'
,
 
'
d
a
t
a
T
a
b
l
e
s
.
b
u
t
t
o
n
s
.
m
i
n
.
j
s
'
)
;

	
	
	
	
$
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
i
l
e
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
d
a
t
a
t
a
b
l
e
s
.
n
e
t
-
b
u
t
t
o
n
s
/
j
s
/
'
,
 
'
b
u
t
t
o
n
s
.
p
r
i
n
t
.
m
i
n
.
j
s
'
)
;

	
	
	
	
$
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
i
l
e
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
d
a
t
a
t
a
b
l
e
s
.
n
e
t
-
b
u
t
t
o
n
s
/
j
s
/
'
,
 
'
b
u
t
t
o
n
s
.
h
t
m
l
5
.
m
i
n
.
j
s
'
)
;

	
	
	
	
$
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
i
l
e
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
d
a
t
a
t
a
b
l
e
s
.
n
e
t
-
b
u
t
t
o
n
s
/
j
s
/
'
,
 
'
b
u
t
t
o
n
s
.
c
o
l
V
i
s
.
m
i
n
.
j
s
'
)
;

	
	
	
	
$
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
i
l
e
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
d
a
t
a
t
a
b
l
e
s
.
n
e
t
-
b
u
t
t
o
n
s
-
b
s
4
/
j
s
/
'
,
 
'
b
u
t
t
o
n
s
.
b
o
o
t
s
t
r
a
p
4
.
m
i
n
.
j
s
'
)
;

	
	
	
	
$
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
i
l
e
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
d
a
t
a
t
a
b
l
e
s
.
n
e
t
-
r
e
s
p
o
n
s
i
v
e
/
j
s
/
'
,
 
'
d
a
t
a
T
a
b
l
e
s
.
r
e
s
p
o
n
s
i
v
e
.
m
i
n
.
j
s
'
)
;

	
	
	
	
$
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
i
l
e
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
d
a
t
a
t
a
b
l
e
s
.
n
e
t
-
r
e
s
p
o
n
s
i
v
e
-
b
s
4
/
j
s
/
'
,
 
'
r
e
s
p
o
n
s
i
v
e
.
b
o
o
t
s
t
r
a
p
4
.
m
i
n
.
j
s
'
)
;

	
	
	
	

	
	
	
	
$
c
s
s
_
f
i
l
e
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
d
a
t
a
t
a
b
l
e
s
.
n
e
t
-
b
s
4
/
c
s
s
/
'
,
 
'
d
a
t
a
T
a
b
l
e
s
.
b
o
o
t
s
t
r
a
p
4
.
c
s
s
'
)
;

	
	
	
	
$
c
s
s
_
f
i
l
e
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
d
a
t
a
t
a
b
l
e
s
.
n
e
t
-
b
u
t
t
o
n
s
-
b
s
4
/
c
s
s
/
'
,
 
'
b
u
t
t
o
n
s
.
b
o
o
t
s
t
r
a
p
4
.
m
i
n
.
c
s
s
'
)
;

	
	
	
	
$
c
s
s
_
f
i
l
e
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
d
a
t
a
t
a
b
l
e
s
.
n
e
t
-
r
e
s
p
o
n
s
i
v
e
-
b
s
4
/
c
s
s
/
'
,
 
'
r
e
s
p
o
n
s
i
v
e
.
b
o
o
t
s
t
r
a
p
4
.
m
i
n
.
c
s
s
'
)
;

	
	
	
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
!
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
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
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
i
l
e
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
J
O
M
R
E
S
_
J
S
_
R
E
L
P
A
T
H
,
 
'
j
q
u
e
r
y
.
u
i
.
p
o
t
a
t
o
.
m
e
n
u
.
j
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
s
s
_
f
i
l
e
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
J
O
M
R
E
S
_
C
S
S
_
R
E
L
P
A
T
H
,
 
'
j
q
u
e
r
y
.
u
i
.
p
o
t
a
t
o
.
m
e
n
u
.
c
s
s
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
!
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
 
|
|
 
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
r
e
w
e
i
n
a
d
m
i
n
a
r
e
a
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
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
i
l
e
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
x
-
e
d
i
t
a
b
l
e
/
d
i
s
t
/
j
q
u
e
r
y
u
i
-
e
d
i
t
a
b
l
e
/
j
s
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
u
i
-
e
d
i
t
a
b
l
e
.
m
i
n
.
j
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
s
s
_
f
i
l
e
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
x
-
e
d
i
t
a
b
l
e
/
d
i
s
t
/
j
q
u
e
r
y
u
i
-
e
d
i
t
a
b
l
e
/
c
s
s
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
u
i
-
e
d
i
t
a
b
l
e
.
c
s
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
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
i
l
e
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
J
O
M
R
E
S
_
J
S
_
R
E
L
P
A
T
H
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
t
.
j
s
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
 
|
|
 
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
r
e
w
e
i
n
a
d
m
i
n
a
r
e
a
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
i
l
 
=
 
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
;

	
	
	
	

	
	
	
	
i
f
 
(
$
t
a
i
l
 
=
=
 
'
2
'
 
|
|
 
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
r
e
w
e
i
n
a
d
m
i
n
a
r
e
a
(
)
)
 
{

	
	
	
	
	
$
t
a
i
l
 
=
 
'
'
;

	
	
	
	
}

	
	
	
	

	
	
	
	
i
f
 
(
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
T
E
C
T
E
D
_
C
M
S
 
=
=
 
'
j
o
o
m
l
a
4
'
)
 
{

	
	
	
	
	
$
t
a
i
l
 
=
 
'
3
'
;

	
	
	
	
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
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
i
l
e
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
x
-
e
d
i
t
a
b
l
e
/
d
i
s
t
/
b
o
o
t
s
t
r
a
p
'
.
$
t
a
i
l
.
'
-
e
d
i
t
a
b
l
e
/
j
s
/
'
,
 
'
b
o
o
t
s
t
r
a
p
-
e
d
i
t
a
b
l
e
.
m
i
n
.
j
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
s
s
_
f
i
l
e
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
x
-
e
d
i
t
a
b
l
e
/
d
i
s
t
/
b
o
o
t
s
t
r
a
p
'
.
$
t
a
i
l
.
'
-
e
d
i
t
a
b
l
e
/
c
s
s
/
'
,
 
'
b
o
o
t
s
t
r
a
p
-
e
d
i
t
a
b
l
e
.
c
s
s
'
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
t
a
s
k
'
)
 
=
=
 
'
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
'
 
|
|
 
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
t
a
s
k
'
,
 
'
'
)
 
=
=
 
'
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
'
)
 
{

	
	
	
$
c
s
s
_
f
i
l
e
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
u
e
i
m
p
-
f
i
l
e
-
u
p
l
o
a
d
/
c
s
s
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
f
i
l
e
u
p
l
o
a
d
.
c
s
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
s
s
_
f
i
l
e
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
u
e
i
m
p
-
f
i
l
e
-
u
p
l
o
a
d
/
c
s
s
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
f
i
l
e
u
p
l
o
a
d
-
u
i
.
c
s
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
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
i
l
e
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
u
e
i
m
p
-
l
o
a
d
-
i
m
a
g
e
/
j
s
/
'
,
 
'
l
o
a
d
-
i
m
a
g
e
.
a
l
l
.
m
i
n
.
j
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
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
i
l
e
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
u
e
i
m
p
-
c
a
n
v
a
s
-
t
o
-
b
l
o
b
/
j
s
/
'
,
 
'
c
a
n
v
a
s
-
t
o
-
b
l
o
b
.
j
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
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
i
l
e
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
u
e
i
m
p
-
f
i
l
e
-
u
p
l
o
a
d
/
j
s
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
i
f
r
a
m
e
-
t
r
a
n
s
p
o
r
t
.
j
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
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
i
l
e
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
u
e
i
m
p
-
f
i
l
e
-
u
p
l
o
a
d
/
j
s
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
f
i
l
e
u
p
l
o
a
d
.
j
s
'
)
;

	
	
	
$
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
i
l
e
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
u
e
i
m
p
-
f
i
l
e
-
u
p
l
o
a
d
/
j
s
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
f
i
l
e
u
p
l
o
a
d
-
u
i
.
j
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
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
i
l
e
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
u
e
i
m
p
-
f
i
l
e
-
u
p
l
o
a
d
/
j
s
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
f
i
l
e
u
p
l
o
a
d
-
p
r
o
c
e
s
s
.
j
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
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
i
l
e
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
u
e
i
m
p
-
f
i
l
e
-
u
p
l
o
a
d
/
j
s
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
f
i
l
e
u
p
l
o
a
d
-
i
m
a
g
e
.
j
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
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
i
l
e
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
u
e
i
m
p
-
f
i
l
e
-
u
p
l
o
a
d
/
j
s
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
f
i
l
e
u
p
l
o
a
d
-
v
a
l
i
d
a
t
e
.
j
s
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
g
a
l
l
e
r
i
a
 
j
s
 
a
n
d
 
c
s
s
 
f
i
l
e
s
 
T
O
D
O
:
 
f
i
n
d
 
a
 
b
e
t
t
e
r
 
s
o
l
u
t
i
o
n

 
 
 
 
 
 
 
 
$
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
i
l
e
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
g
a
l
l
e
r
i
a
/
d
i
s
t
/
'
,
 
'
g
a
l
l
e
r
i
a
.
m
i
n
.
j
s
'
)
;

 
 
 
 
 
 
 
 
$
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
i
l
e
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
g
a
l
l
e
r
i
a
/
d
i
s
t
/
t
h
e
m
e
s
/
c
l
a
s
s
i
c
/
'
,
 
'
g
a
l
l
e
r
i
a
.
c
l
a
s
s
i
c
.
m
i
n
.
j
s
'
)
;

 
 
 
 
 
 
 
 
$
c
s
s
_
f
i
l
e
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
J
O
M
R
E
S
_
C
S
S
_
R
E
L
P
A
T
H
,
 
'
g
a
l
l
e
r
i
a
.
c
l
a
s
s
i
c
.
c
s
s
'
)
;


 
 
 
 
 
 
 
 
$
l
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
D
o
m
a
i
n
(
)
;

 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
i
s
t
r
(
$
l
s
,
 
'
.
x
n
-
-
'
,
 
$
l
s
)
 
&
&
 
!
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
r
e
w
e
i
n
a
d
m
i
n
a
r
e
a
(
)
)
 
{
 
/
/
 
W
e
 
c
h
e
c
k
 
t
o
 
s
e
e
 
i
f
 
w
e
'
r
e
 
i
n
 
t
h
e
 
a
d
m
i
n
 
a
r
e
a
 
b
e
c
a
u
s
e
 
o
u
r
 
o
n
e
 
a
n
d
 
o
n
l
y
 
c
l
i
e
n
t
 
w
i
t
h
 
a
n
 
u
m
l
a
t
 
i
n
 
t
h
e
 
d
o
m
a
i
n
 
n
a
m
e
 
h
a
s
 
f
o
u
n
d
 
t
h
a
t
 
t
h
e
 
r
e
d
i
r
e
c
t
 
f
u
n
c
t
i
o
n
 
d
o
e
s
n
'
t
 
w
o
r
k
 
i
n
 
t
h
e
 
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
 
a
r
e
a
 
i
f
 
t
h
e
 
d
o
m
a
i
n
'
s
 
b
e
e
n
 
c
o
n
v
e
r
t
e
d
.

 
 
 
 
 
 
 
 
 
 
 
 
/
/
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
 
J
O
M
R
E
S
_
L
I
B
R
A
R
I
E
S
_
A
B
S
P
A
T
H
.
'
i
d
n
a
_
c
o
n
v
e
r
t
e
r
'
.
J
R
D
S
.
'
i
d
n
a
_
c
o
n
v
e
r
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
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
I
D
N
 
=
 
n
e
w
 
M
s
o
\
I
d
n
a
C
o
n
v
e
r
t
\
I
d
n
a
C
o
n
v
e
r
t
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
l
s
 
=
 
$
I
D
N
-
>
d
e
c
o
d
e
(
$
l
s
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
n
o
w
 
l
e
t
`
s
 
a
d
d
 
t
h
e
 
j
s
 
a
n
d
 
c
s
s
 
i
n
 
t
h
e
 
h
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
i
l
e
s
 
a
s
 
$
f
i
l
e
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
 
$
f
i
l
e
[
0
]
,
 
$
f
i
l
e
[
1
]
)
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
c
s
s
_
f
i
l
e
s
 
a
s
 
$
f
i
l
e
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
c
s
s
'
,
 
$
f
i
l
e
[
0
]
,
 
$
f
i
l
e
[
1
]
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
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

