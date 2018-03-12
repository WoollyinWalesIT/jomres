
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
e
d
i
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
o
v
e
r
r
i
d
e

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
v
e
r
r
i
d
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
'
,
 
'
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
v
a
l
i
d
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
f
i
l
e
_
i
n
f
o
 
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
 
a
s
 
$
p
a
r
e
n
t
_
p
a
c
k
a
g
e
 
=
>
 
$
p
a
c
k
a
g
e
_
f
i
l
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
p
a
c
k
a
g
e
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

	
	
	
	
i
f
 
(
$
f
i
l
e
[
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
n
a
m
e
'
]
 
=
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
n
a
m
e
 
)
 
{

	
	
	
	
	
$
v
a
l
i
d
_
f
i
l
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
f
i
l
e
[
'
p
a
t
h
'
]
,
 
$
f
i
l
e
[
'
t
i
t
l
e
'
]
)
;

	
	
	
	
	
$
f
i
l
e
_
i
n
f
o
[
$
p
a
r
e
n
t
_
p
a
c
k
a
g
e
]
 
=
 
$
f
i
l
e
;

	
	
	
	
	

	
	
	
	
}

	
	
	
}

	
	
}


/
*
 
	
	
/
/
 
M
i
g
h
t
 
n
e
e
d
 
t
h
i
s
 
i
f
 
d
e
c
i
d
e
 
t
o
 
e
x
t
e
n
d
 
t
h
e
 
e
d
i
t
 
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
g
e
 
w
i
t
h
 
m
o
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
v
a
l
i
d
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

	
	
	
/
/
$
r
[
'
t
i
t
l
e
'
]
 
=
 
t
i
t
l
e

	
	
	

	
	
	
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
 
*
/


	
	
$
d
e
f
a
u
l
t
 
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
_
n
a
m
e
]
)
)

	
	
	
$
d
e
f
a
u
l
t
 
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
v
e
r
r
i
d
e
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
_
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
v
a
l
i
d
_
f
i
l
e
s
,
 
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
t
h
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
l
a
r
g
e
"
 
s
i
z
e
=
"
1
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
d
e
f
a
u
l
t
 
,
 
f
a
l
s
e
 
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
E
M
P
L
A
T
E
_
N
A
M
E
'
]
 
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
n
a
m
e
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
T
E
M
P
L
A
T
E
_
P
A
C
K
A
G
E
S
_
E
D
I
T
_
I
N
F
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
"
_
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
_
P
A
C
K
A
G
E
S
_
E
D
I
T
_
I
N
F
O
"
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
T
E
M
P
L
A
T
E
_
P
A
C
K
A
G
E
S
_
E
D
I
T
_
I
N
F
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
j
r
t
b
a
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
o
m
r
e
s
_
t
o
o
l
b
a
r
'
)
;

 
 
 
 
 
 
 
 
$
j
r
t
b
 
=
 
$
j
r
t
b
a
r
-
>
s
t
a
r
t
T
a
b
l
e
(
)
;


 
 
 
 
 
 
 
 
$
j
r
t
b
 
.
=
 
$
j
r
t
b
a
r
-
>
t
o
o
l
b
a
r
I
t
e
m
(
'
c
a
n
c
e
l
'
,
 
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
l
i
s
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
,
 
'
'
)
;

 
 
 
 
 
 
 
 
$
j
r
t
b
 
.
=
 
$
j
r
t
b
a
r
-
>
t
o
o
l
b
a
r
I
t
e
m
(
'
s
a
v
e
'
,
 
'
'
,
 
'
'
,
 
t
r
u
e
,
 
'
s
a
v
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
_
o
v
e
r
r
i
d
e
'
)
;

 
 
 
 
 
 
 
 
$
j
r
t
b
 
.
=
 
$
j
r
t
b
a
r
-
>
e
n
d
T
a
b
l
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
[
 
'
J
O
M
R
E
S
T
O
O
L
B
A
R
'
 
]
 
=
 
$
j
r
t
b
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
e
d
i
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
o
v
e
r
r
i
d
e
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

 
 
 
 
 
 
 
 
/
/
 
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

