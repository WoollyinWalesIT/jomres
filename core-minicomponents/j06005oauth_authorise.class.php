
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
6
0
0
5
o
a
u
t
h
_
a
u
t
h
o
r
i
s
e

	
{

	
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


	
	
$
e
P
o
i
n
t
F
i
l
e
p
a
t
h
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
P
o
i
n
t
F
i
l
e
p
a
t
h
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
c
l
i
e
n
t
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
c
l
i
e
n
t
_
i
d
'
,
 
"
"
 
)
;


	
	
i
f
 
(
$
c
l
i
e
n
t
_
i
d
 
!
=
 
"
"
 
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
 
c
l
i
e
n
t
_
i
d
,
c
l
i
e
n
t
_
s
e
c
r
e
t
,
s
c
o
p
e
,
r
e
d
i
r
e
c
t
_
u
r
i
 
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
o
a
u
t
h
_
c
l
i
e
n
t
s
 
W
H
E
R
E
 
u
s
e
r
_
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
u
s
e
r
i
d
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
 
>
 
0
 
)

	
	
	
	
{

	
	
	
	
$
u
s
e
r
_
c
l
i
e
n
t
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
u
s
e
r
_
c
l
i
e
n
t
_
s
e
c
r
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
u
s
e
r
_
c
l
i
e
n
t
_
s
c
o
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
c
i
d
 
)

	
	
	
	
	
{

	
	
	
	
	
$
u
s
e
r
_
c
l
i
e
n
t
_
i
d
s
[
]
=
$
c
i
d
-
>
c
l
i
e
n
t
_
i
d
;

	
	
	
	
	
$
u
s
e
r
_
c
l
i
e
n
t
_
s
e
c
r
e
t
s
[
 
$
c
i
d
-
>
c
l
i
e
n
t
_
i
d
 
]
 
=
 
$
c
i
d
-
>
c
l
i
e
n
t
_
s
e
c
r
e
t
;

	
	
	
	
	
$
u
s
e
r
_
c
l
i
e
n
t
_
s
c
o
p
e
s
[
 
$
c
i
d
-
>
c
l
i
e
n
t
_
i
d
 
]
 
=
 
$
c
i
d
-
>
s
c
o
p
e
;

	
	
	
	
	
$
u
s
e
r
_
c
l
i
e
n
t
_
s
c
o
p
e
s
[
 
$
c
i
d
-
>
r
e
d
i
r
e
c
t
_
u
r
i
 
]
 
=
 
$
c
i
d
-
>
r
e
d
i
r
e
c
t
_
u
r
i
;

	
	
	
	
	
}

	
	
	
	
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
c
l
i
e
n
t
_
i
d
'
]
,
$
u
s
e
r
_
c
l
i
e
n
t
_
i
d
s
)
)

	
	
	
	
	
d
i
e
(
"
U
n
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
 
c
l
i
e
n
t
 
i
d
"
)
;

	
	
	
	
}

	
	
	
}

	
	
e
l
s
e

	
	
	
{

	
	
	
d
i
e
(
"
C
l
i
e
n
t
 
i
d
 
n
o
t
 
p
a
s
s
e
d
"
)
;

	
	
	
}

	
	

	
	
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
A
P
I
_
C
M
S
_
R
O
O
T
'
 
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
 
)
;


	
	
/
/
 
i
n
c
l
u
d
e
 
o
u
r
 
O
A
u
t
h
2
 
S
e
r
v
e
r
 
o
b
j
e
c
t

	
	

	
	
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
P
A
T
H
_
B
A
S
E
 
.
 
'
/
a
p
i
/
o
a
u
t
h
/
i
n
c
_
c
o
n
f
i
g
s
.
p
h
p
'
)
)
 
{
 
/
/
 
C
h
e
c
k
 
f
o
r
 
t
h
e
 
e
x
i
s
t
a
n
c
e
 
o
f
 
t
h
i
s
 
f
i
l
e
,
 
w
h
i
c
h
 
i
n
 
9
.
9
.
5
 
d
o
e
s
n
'
t
 
e
x
i
s
t
,
 
b
u
t
 
i
n
 
9
.
9
.
6
.
 
A
l
l
o
w
s
 
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
 
b
e
t
w
e
e
n
 
v
e
r
s
i
o
n
s
 
a
n
d
 
s
h
o
u
l
d
 
b
e
 
r
e
m
o
v
e
d
 
s
o
m
e
t
i
m
e
 
a
f
t
e
r
 
J
u
l
y
 
2
0
1
8

	
	
	
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
P
A
T
H
_
B
A
S
E
 
.
 
'
/
a
p
i
/
o
a
u
t
h
/
i
n
c
_
c
o
n
f
i
g
s
.
p
h
p
'
;

	
	
}

	
	

	
	
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
P
A
T
H
_
B
A
S
E
.
'
/
a
p
i
/
o
a
u
t
h
/
s
e
r
v
e
r
.
p
h
p
'
;


	
	
$
r
e
q
u
e
s
t
 
=
 
O
A
u
t
h
2
\
R
e
q
u
e
s
t
:
:
c
r
e
a
t
e
F
r
o
m
G
l
o
b
a
l
s
(
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
 
n
e
w
 
O
A
u
t
h
2
\
R
e
s
p
o
n
s
e
(
)
;


	
	
/
/
 
v
a
l
i
d
a
t
e
 
t
h
e
 
a
u
t
h
o
r
i
z
e
 
r
e
q
u
e
s
t

	
	
i
f
 
(
!
$
s
e
r
v
e
r
-
>
v
a
l
i
d
a
t
e
A
u
t
h
o
r
i
z
e
R
e
q
u
e
s
t
(
$
r
e
q
u
e
s
t
,
 
$
r
e
s
p
o
n
s
e
)
)
 
{

	
	
	
$
r
e
s
p
o
n
s
e
-
>
s
e
n
d
(
)
;

	
	
	
d
i
e
;

	
	
}


	
	
/
/
 
d
i
s
p
l
a
y
 
a
n
 
a
u
t
h
o
r
i
z
a
t
i
o
n
 
f
o
r
m

	
	
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
P
O
S
T
[
'
a
u
t
h
o
r
i
z
e
d
'
]
)
)
 
{

	
	
 
 
e
x
i
t
(
'

	
	
<
f
o
r
m
 
m
e
t
h
o
d
=
"
p
o
s
t
"
>

	
	
 
 
<
l
a
b
e
l
>
D
o
 
Y
o
u
 
A
u
t
h
o
r
i
z
e
 
'
.
$
c
l
i
e
n
t
_
i
d
 
.
'
?
<
/
l
a
b
e
l
>
<
b
r
 
/
>

	
	
 
 
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
s
u
b
m
i
t
"
 
n
a
m
e
=
"
a
u
t
h
o
r
i
z
e
d
"
 
v
a
l
u
e
=
"
y
e
s
"
>

	
	
 
 
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
s
u
b
m
i
t
"
 
n
a
m
e
=
"
a
u
t
h
o
r
i
z
e
d
"
 
v
a
l
u
e
=
"
n
o
"
>

	
	
<
/
f
o
r
m
>
'
)
;

	
	
}


	
	
/
/
 
p
r
i
n
t
 
t
h
e
 
a
u
t
h
o
r
i
z
a
t
i
o
n
 
c
o
d
e
 
i
f
 
t
h
e
 
u
s
e
r
 
h
a
s
 
a
u
t
h
o
r
i
z
e
d
 
y
o
u
r
 
c
l
i
e
n
t

	
	
$
i
s
_
a
u
t
h
o
r
i
z
e
d
 
=
 
(
$
_
P
O
S
T
[
'
a
u
t
h
o
r
i
z
e
d
'
]
 
=
=
=
 
'
y
e
s
'
)
;

	
	

	
	

	
	
	
	

	
	
i
f
 
(
$
i
s
_
a
u
t
h
o
r
i
z
e
d
)
 

	
	
	
{

	
	
	
$
s
e
r
v
e
r
-
>
h
a
n
d
l
e
A
u
t
h
o
r
i
z
e
R
e
q
u
e
s
t
(
$
r
e
q
u
e
s
t
,
 
$
r
e
s
p
o
n
s
e
,
 
$
i
s
_
a
u
t
h
o
r
i
z
e
d
 
,
 
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
i
d
)
;

	
	
	
}

	
	
$
r
e
s
p
o
n
s
e
-
>
s
e
n
d
(
)
;

	
	
d
i
e
(
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
