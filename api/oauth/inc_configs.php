
<
?
p
h
p

/
*
*

 
*
 
G
a
t
h
e
r
s
 
d
a
t
a
b
a
s
e
 
c
o
n
n
e
c
t
i
o
n
 
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
r
o
m
 
C
M
S
 
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
 
f
i
l
e
s
 

 
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
/

 

 

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
)
)
;

 
 
 
 
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
'
,
 
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
.
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
.
'
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
)
)
 
{

 
 
 
 
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
_
J
E
X
E
C
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
_
J
E
X
E
C
'
,
 
1
)
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
.
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
.
'
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
d
b
 
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
d
b
;

 
 
 
 
$
h
o
s
t
 
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
h
o
s
t
;

 
 
 
 
$
d
b
p
r
e
f
i
x
 
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
d
b
p
r
e
f
i
x
;

 
 
 
 
$
d
s
n
 
=
 
'
m
y
s
q
l
:
d
b
n
a
m
e
=
'
.
$
d
b
.
'
;
h
o
s
t
=
'
.
$
h
o
s
t
;

 
 
 
 
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
C
O
N
F
I
G
-
>
u
s
e
r
;

 
 
 
 
$
p
a
s
s
w
o
r
d
 
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
p
a
s
s
w
o
r
d
;

 
 
 
 
i
f
 
(
$
C
O
N
F
I
G
-
>
e
r
r
o
r
_
r
e
p
o
r
t
i
n
g
 
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

 
 
 
 
 
 
 
 
d
e
f
i
n
e
(
'
P
R
O
D
U
C
T
I
O
N
'
,
 
t
r
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

 
 
 
 
 
 
 
 
d
e
f
i
n
e
(
'
P
R
O
D
U
C
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
)
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
.
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
.
'
w
p
-
c
o
n
f
i
g
.
p
h
p
'
)
)
 
{

 
 
 
 
$
d
b
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
w
p
_
c
o
n
f
i
g
_
f
i
l
e
 
=
 
f
i
l
e
(
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
.
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
.
'
w
p
-
c
o
n
f
i
g
.
p
h
p
'
)
;

	
$
s
e
t
t
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
'
D
B
_
N
A
M
E
'
,
'
D
B
_
U
S
E
R
'
,
'
D
B
_
P
A
S
S
W
O
R
D
'
,
'
D
B
_
H
O
S
T
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
w
p
_
c
o
n
f
i
g
_
f
i
l
e
 
a
s
 
$
l
i
n
e
 
)
 
{

	
	
$
m
a
t
c
h
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
'
/
d
e
f
i
n
e
\
(
\
'
(
.
*
?
)
\
'
,
\
s
*
\
'
(
.
*
)
\
'
\
)
;
/
i
'
,
 
$
l
i
n
e
,
 
$
m
a
t
c
h
e
s
)
)
 
{

	
	
	
$
n
a
m
e
=
$
m
a
t
c
h
e
s
[
1
]
;

	
	
	
$
v
a
l
u
e
=
$
m
a
t
c
h
e
s
[
2
]
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
n
a
m
e
,
 
$
s
e
t
t
i
n
g
s
 
)
)

	
	
	
	
$
d
b
_
d
e
t
a
i
l
s
[
$
n
a
m
e
]
=
 
$
v
a
l
u
e
;

	
	
}

	
	
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
l
i
n
e
,
 
'
$
t
a
b
l
e
_
p
r
e
f
i
x
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
d
b
p
r
e
f
i
x
 
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
 
=
 
'
,
$
l
i
n
e
)
[
1
]
;

	
	
	
$
d
b
p
r
e
f
i
x
 
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
\
'
'
,
 
'
'
,
 
$
d
b
p
r
e
f
i
x
)
;

	
	
	
$
d
b
p
r
e
f
i
x
 
=
 
t
r
i
m
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
;
'
,
 
'
'
,
 
$
d
b
p
r
e
f
i
x
)
)
;

	
	
}

	
}


 
 
 
 
$
d
b
 
=
 
$
d
b
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
D
B
_
N
A
M
E
'
]
;

 
 
 
 
$
h
o
s
t
 
=
 
$
d
b
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
D
B
_
H
O
S
T
'
]
;

 
 
 
 
$
d
s
n
 
=
 
'
m
y
s
q
l
:
d
b
n
a
m
e
=
'
.
$
d
b
.
'
;
h
o
s
t
=
'
.
$
h
o
s
t
;

 
 
 
 
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
d
b
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
D
B
_
U
S
E
R
'
]
;

 
 
 
 
$
p
a
s
s
w
o
r
d
 
=
 
$
d
b
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
D
B
_
P
A
S
S
W
O
R
D
'
]
;

 
 
 
 
d
e
f
i
n
e
(
'
P
R
O
D
U
C
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
)
;

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
j
s
o
n
_
e
n
c
o
d
e
(
'
C
a
n
t
 
f
i
n
d
 
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
 
f
i
l
e
.
'
)
)
;
 
/
/
 
N
o
 
f
i
n
d
i
e
 
e
l
 
c
o
n
f
i
g
 
f
i
l
e
!

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
D
B
_
N
A
M
E
'
,
 
$
d
b
)
;

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
D
B
_
H
O
S
T
'
,
 
$
h
o
s
t
)
;

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
D
B
_
U
S
E
R
N
A
M
E
'
,
 
$
u
s
e
r
n
a
m
e
)
;

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
D
B
_
P
A
S
S
W
O
R
D
'
,
 
$
p
a
s
s
w
o
r
d
)
;

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
D
B
_
D
B
_
P
R
E
F
I
X
'
,
 
$
d
b
p
r
e
f
i
x
)
;

