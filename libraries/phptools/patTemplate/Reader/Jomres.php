
<
?
P
H
P

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
 
C
o
r
e
 
f
i
l
e

 
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
 
@
p
a
c
k
a
g
e
 
J
o
m
r
e
s

 
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
.

 
*
*
/


/
*
*

 
*
 
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
 
R
e
a
d
e
r
 
t
h
a
t
 
r
e
a
d
s
 
f
r
o
m
 
a
 
d
a
t
a
b
a
s
e
 
u
s
i
n
g
 
J
o
m
r
e
s

 
*
/


c
l
a
s
s
 
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
_
R
e
a
d
e
r
_
J
o
m
r
e
s
 
e
x
t
e
n
d
s
 
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
_
R
e
a
d
e
r

	
{

	
v
a
r
 
$
_
n
a
m
e
 
=
 
'
J
o
m
r
e
s
'
;


	
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
(
 
$
t
e
m
p
l
a
t
e
n
a
m
e
 
=
 
'
'
,
 
$
o
p
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
 
)

	
	
{

	
	

 
 
 
 
 
 
 
 
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
p
a
c
k
a
g
e
s
 
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
t
e
m
p
l
a
t
e
_
p
a
c
k
a
g
e
s
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
e
m
p
l
a
t
e
_
p
a
c
k
a
g
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
 
s
o
m
e
 
o
v
e
r
r
i
d
e
 
p
a
c
k
a
g
e
s
 
i
n
s
t
a
l
l
e
d
,
 
w
e
 
c
a
n
 
g
o
 
a
h
e
a
d
 
a
n
d
 
c
h
e
c
k
 
f
o
r
 
o
v
e
r
r
i
d
e
s
,
 
w
h
i
c
h
 
r
e
q
u
i
r
e
s
 
a
n
 
e
x
t
r
a
 
q
u
e
r
y
.

	
	
	
/
/
 
A
n
 
a
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
 
m
e
t
h
o
d
 
o
f
 
p
r
o
v
i
d
i
n
g
 
t
e
m
p
l
a
t
e
 
o
v
e
r
r
i
d
e
s
 
t
h
r
o
u
g
h
 
p
l
u
g
i
n
s

	
	
	
$
o
v
e
r
r
i
d
e
s
_
c
l
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
v
e
r
r
i
d
e
s
'
)
;

	
	
	
$
p
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
p
t
y
p
e
_
i
d
'
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
o
v
e
r
r
i
d
e
s
_
c
l
a
s
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
o
v
e
r
r
i
d
e
s
[
$
t
e
m
p
l
a
t
e
n
a
m
e
]
)
)
 
{
 
/
/
 
T
e
m
p
l
a
t
e
 
o
v
e
r
r
i
d
e
s
 
a
r
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

	
	
	
i
f
 
(

	
	
	
	
	
(
i
n
t
)
$
p
t
y
p
e
_
i
d
 
>
0
 
&
&
 
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
 
t
y
p
e
 
i
d
 
i
s
 
s
e
t
 
a
n
d
 
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
$
o
v
e
r
r
i
d
e
s
_
c
l
a
s
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
o
v
e
r
r
i
d
e
s
[
$
t
e
m
p
l
a
t
e
n
a
m
e
]
[
'
p
a
t
h
'
]
 
.
$
p
t
y
p
e
_
i
d
.
J
R
D
S
.
 
$
t
e
m
p
l
a
t
e
n
a
m
e
)
 
/
/
 
A
n
d
 
a
 
t
e
m
p
l
a
t
e
 
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
 
n
a
m
e
 
e
x
i
s
t
s
 
i
n
 
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
 
t
y
p
e
 
t
e
m
p
l
a
t
e
 
d
i
r
e
c
t
o
r
y
 
w
i
t
h
 
a
 
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
 
o
f
 
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
 
t
y
p
e
 
i
d

	
	
	
	
)
 
{

	
	
	
	
$
c
o
n
t
e
n
t
 
=
 
f
i
l
e
_
g
e
t
_
c
o
n
t
e
n
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
$
o
v
e
r
r
i
d
e
s
_
c
l
a
s
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
o
v
e
r
r
i
d
e
s
[
$
t
e
m
p
l
a
t
e
n
a
m
e
]
[
'
p
a
t
h
'
]
 
.
$
p
t
y
p
e
_
i
d
.
J
R
D
S
.
 
$
t
e
m
p
l
a
t
e
n
a
m
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
c
o
n
t
e
n
t
 
=
 
f
i
l
e
_
g
e
t
_
c
o
n
t
e
n
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
$
o
v
e
r
r
i
d
e
s
_
c
l
a
s
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
o
v
e
r
r
i
d
e
s
[
$
t
e
m
p
l
a
t
e
n
a
m
e
]
[
'
p
a
t
h
'
]
 
.
 
$
t
e
m
p
l
a
t
e
n
a
m
e
 
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
o
v
e
r
r
i
d
e
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
o
c
u
s
t
o
m
t
e
m
p
l
a
t
e
'
 
]
 
)
 
)

	
	
	
	
$
o
v
e
r
r
i
d
e
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
g
e
t
_
c
m
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
_
o
v
e
r
r
i
d
e
(
 
$
t
e
m
p
l
a
t
e
n
a
m
e
)
;

	
	
	

	
	
	
i
f
 
(
 
!
$
o
v
e
r
r
i
d
e
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

	
	
	
	
{

	
	
	
	
$
c
u
s
t
o
m
_
p
a
t
h
s
 
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
c
u
s
t
o
m
_
p
a
t
h
s
'
 
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
c
u
s
t
o
m
_
p
a
t
h
s
)
 
&
&
 
a
r
r
a
y
_
k
e
y
_
e
x
i
s
t
s
(
 
$
t
e
m
p
l
a
t
e
n
a
m
e
,
 
$
c
u
s
t
o
m
_
p
a
t
h
s
 
)
 
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
r
o
o
t
 
=
 
$
c
u
s
t
o
m
_
p
a
t
h
s
[
 
$
t
e
m
p
l
a
t
e
n
a
m
e
 
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
a
u
l
t
_
r
o
o
t
 
=
 
$
t
h
i
s
-
>
_
o
p
t
i
o
n
s
[
 
'
r
o
o
t
'
 
]
[
 
'
_
_
d
e
f
a
u
l
t
'
 
]
;

	
	
	
	
	
}

	
	
	
	

	
	
	
	
$
c
o
n
t
e
n
t
 
=
 
f
i
l
e
_
g
e
t
_
c
o
n
t
e
n
t
s
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
r
o
o
t
 
.
 
J
R
D
S
 
.
 
$
t
e
m
p
l
a
t
e
n
a
m
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
c
o
n
t
e
n
t
 
=
 
$
o
v
e
r
r
i
d
e
_
t
e
m
p
l
a
t
e
;

	
	
	
	
}

	
	
}


	
	
$
t
e
m
p
l
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
p
a
r
s
e
S
t
r
i
n
g
(
 
$
c
o
n
t
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
 
$
t
e
m
p
l
a
t
e
s
;

	
	
}

	
	

	
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
c
m
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
_
o
v
e
r
r
i
d
e
(
$
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
l
a
t
e
_
n
a
m
e
)

	
	
{

	
	
$
o
v
e
r
r
i
d
e
_
p
a
t
h
 
=
 
f
a
l
s
e
;

	
	

	
	
$
p
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
p
t
y
p
e
_
i
d
'
)
;

	
	

	
	
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
j
o
o
m
l
a
(
)
)

	
	
	
{

	
	
	
$
a
p
p
 
=
 
J
F
a
c
t
o
r
y
:
:
g
e
t
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
(
)
;

	
	
	
$
j
o
o
m
l
a
_
t
e
m
p
l
a
t
e
N
a
m
e
 
=
 
$
a
p
p
-
>
g
e
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
'
t
e
m
p
l
a
t
e
'
)
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
)

	
	
	
	
{

	
	
	
	
$
o
v
e
r
r
i
d
e
_
p
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
O
M
R
E
S
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
 
"
t
e
m
p
l
a
t
e
s
"
 
.
J
R
D
S
.
 
$
j
o
o
m
l
a
_
t
e
m
p
l
a
t
e
N
a
m
e
 
.
J
R
D
S
 
.
 
'
h
t
m
l
'
 
.
 
J
R
D
S
 
.
 
'
c
o
m
_
j
o
m
r
e
s
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
v
e
r
r
i
d
e
_
p
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
 
"
t
e
m
p
l
a
t
e
s
"
 
.
J
R
D
S
.
 
$
j
o
o
m
l
a
_
t
e
m
p
l
a
t
e
N
a
m
e
 
.
J
R
D
S
 
.
 
'
h
t
m
l
'
 
.
 
J
R
D
S
 
.
 
'
c
o
m
_
j
o
m
r
e
s
'
;

	
	
	
	
}

	
	
	

	
	
	
/
/
p
t
y
p
e
 
s
p
e
c
i
f
i
c
 
o
v
e
r
r
i
d
e
_
p
a
t
h

	
	
	
i
f
 
(
 
$
p
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
o
v
e
r
r
i
d
e
_
p
a
t
h
 
.
 
J
R
D
S
 
.
 
$
p
t
y
p
e
_
i
d
 
.
 
J
R
D
S
 
.
 
$
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
l
a
t
e
_
n
a
m
e
)
 
)

	
	
	
	
	
$
o
v
e
r
r
i
d
e
_
p
a
t
h
 
=
 
$
o
v
e
r
r
i
d
e
_
p
a
t
h
 
.
 
J
R
D
S
 
.
 
$
p
t
y
p
e
_
i
d
;

	
	
	
	
}


	
	
	
/
/
j
o
m
s
e
a
r
c
h
 
m
o
d
u
l
e
s
 
o
v
e
r
r
i
d
e
s

	
	
	
i
f
 
(
s
t
r
p
o
s
(
$
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
l
a
t
e
_
n
a
m
e
,
'
m
o
d
_
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
m
'
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
"
.
"
,
 
$
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
l
a
t
e
_
n
a
m
e
)
;
 

	
	
	
	
$
n
a
m
e
 
=
 
$
a
r
r
[
0
]
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
 
"
t
e
m
p
l
a
t
e
s
"
 
.
J
R
D
S
.
 
$
j
o
o
m
l
a
_
t
e
m
p
l
a
t
e
N
a
m
e
 
.
J
R
D
S
 
.
 
'
h
t
m
l
'
 
.
 
J
R
D
S
 
.
 
$
n
a
m
e
 
.
 
J
R
D
S
 
.
 
$
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
l
a
t
e
_
n
a
m
e
)
 
)

	
	
	
	
	
$
o
v
e
r
r
i
d
e
_
p
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
 
"
t
e
m
p
l
a
t
e
s
"
 
.
J
R
D
S
.
 
$
j
o
o
m
l
a
_
t
e
m
p
l
a
t
e
N
a
m
e
 
.
J
R
D
S
 
.
 
'
h
t
m
l
'
 
.
 
J
R
D
S
 
.
 
$
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
v
e
r
r
i
d
e
_
p
a
t
h
 
=
 
g
e
t
_
t
e
m
p
l
a
t
e
_
d
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
 
.
 
J
R
D
S
 
.
 
'
h
t
m
l
'
 
.
 
J
R
D
S
 
.
 
'
c
o
m
_
j
o
m
r
e
s
'
;


	
	
	
/
/
p
t
y
p
e
 
s
p
e
c
i
f
i
c
 
o
v
e
r
r
i
d
e
_
p
a
t
h

	
	
	
i
f
 
(
 
$
p
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
o
v
e
r
r
i
d
e
_
p
a
t
h
 
.
 
J
R
D
S
 
.
 
$
p
t
y
p
e
_
i
d
 
.
 
J
R
D
S
 
.
 
$
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
l
a
t
e
_
n
a
m
e
)
 
)

	
	
	
	
	
$
o
v
e
r
r
i
d
e
_
p
a
t
h
 
=
 
$
o
v
e
r
r
i
d
e
_
p
a
t
h
 
.
 
J
R
D
S
 
.
 
$
p
t
y
p
e
_
i
d
;

	
	
	
	
}


	
	
	
/
*
 
i
f
 
(
s
t
r
p
o
s
(
$
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
l
a
t
e
_
n
a
m
e
,
'
m
o
d
_
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
m
'
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
"
.
"
,
 
$
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
l
a
t
e
_
n
a
m
e
)
;
 

	
	
	
	
$
n
a
m
e
 
=
 
$
a
r
r
[
0
]
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
g
e
t
_
t
e
m
p
l
a
t
e
_
d
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
 
.
 
J
R
D
S
 
.
 
'
h
t
m
l
'
 
.
 
J
R
D
S
 
.
 
$
n
a
m
e
 
.
 
J
R
D
S
 
.
 
$
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
l
a
t
e
_
n
a
m
e
)
 
)

	
	
	
	
	
$
o
v
e
r
r
i
d
e
_
p
a
t
h
 
=
 
g
e
t
_
t
e
m
p
l
a
t
e
_
d
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
 
.
 
J
R
D
S
 
.
 
'
h
t
m
l
'
 
.
 
J
R
D
S
 
.
 
$
n
a
m
e
;

	
	
	
	
}
 
*
/

	
	
	
}

	
	
	

	
	
i
f
 
(
$
o
v
e
r
r
i
d
e
_
p
a
t
h
 
!
=
 
'
'
 
&
&
 
i
s
_
d
i
r
(
$
o
v
e
r
r
i
d
e
_
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
i
s
_
f
i
l
e
(
 
$
o
v
e
r
r
i
d
e
_
p
a
t
h
 
.
 
J
R
D
S
 
.
 
$
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
l
a
t
e
_
n
a
m
e
 
)
 
)

	
	
	
	
{

	
	
	
	
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
o
v
e
r
r
i
d
e
_
p
a
t
h
_
'
.
$
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
l
a
t
e
_
n
a
m
e
,
 
$
o
v
e
r
r
i
d
e
_
p
a
t
h
)
;

	
	
	
	
r
e
t
u
r
n
 
f
i
l
e
_
g
e
t
_
c
o
n
t
e
n
t
s
(
 
$
o
v
e
r
r
i
d
e
_
p
a
t
h
 
.
 
J
R
D
S
 
.
 
$
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
l
a
t
e
_
n
a
m
e
 
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

