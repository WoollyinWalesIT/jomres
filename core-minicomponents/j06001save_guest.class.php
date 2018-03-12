
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
1
s
a
v
e
_
g
u
e
s
t

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
i
d
 
=
 
(
i
n
t
)
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
i
d
'
,
 
0
)
;

 
 
 
 
 
 
 
 
$
d
e
f
a
u
l
t
P
r
o
p
e
r
t
y
 
=
 
g
e
t
D
e
f
a
u
l
t
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
r
p
o
r
t
a
l
_
g
u
e
s
t
s
'
 
)
;

	
	
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
g
u
e
s
t
s
 
=
 
n
e
w
 
j
r
p
o
r
t
a
l
_
g
u
e
s
t
s
(
)
;

	
	
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
g
u
e
s
t
s
-
>
i
d
 
=
 
$
i
d
;

	
	
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
g
u
e
s
t
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
 
$
d
e
f
a
u
l
t
P
r
o
p
e
r
t
y
;

 
 
 
 
 
 
 
 

	
	
i
f
 
(
$
i
d
 
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
g
u
e
s
t
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
(
)
;
 
/
/
 
i
f
 
w
e
 
d
o
n
'
t
 
g
e
t
_
g
u
e
s
t
 
t
h
e
n
 
t
h
e
 
m
o
s
_
i
d
 
(
 
c
m
s
_
i
d
)
 
w
i
l
l
 
g
e
t
 
r
e
s
e
t
 
w
h
e
n
 
t
h
e
 
g
u
e
s
t
 
i
s
 
s
a
v
e
d

	
	
}

 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
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
g
u
e
s
t
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
i
r
s
t
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
j
r
p
o
r
t
a
l
_
g
u
e
s
t
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
s
u
r
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
j
r
p
o
r
t
a
l
_
g
u
e
s
t
s
-
>
h
o
u
s
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
h
o
u
s
e
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
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
g
u
e
s
t
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
s
t
r
e
e
t
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
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
g
u
e
s
t
s
-
>
t
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
o
w
n
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
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
g
u
e
s
t
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
r
e
g
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
j
r
p
o
r
t
a
l
_
g
u
e
s
t
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
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
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
g
u
e
s
t
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
p
o
s
t
c
o
d
e
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
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
g
u
e
s
t
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
l
a
n
d
l
i
n
e
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
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
g
u
e
s
t
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
m
o
b
i
l
e
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
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
g
u
e
s
t
s
-
>
e
m
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
m
a
i
l
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
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
g
u
e
s
t
s
-
>
v
a
t
_
n
u
m
b
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
v
a
t
_
n
u
m
b
e
r
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
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
g
u
e
s
t
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
 
=
 
(
i
n
t
)
 
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
 
0
)
;

 
 
 
 
 
 
 
 
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
g
u
e
s
t
s
-
>
b
l
a
c
k
l
i
s
t
e
d
 
=
 
(
i
n
t
)
 
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
b
l
a
c
k
l
i
s
t
e
d
'
,
 
0
)
;


 
 
 
 
 
 
 
 
i
f
 
(
 
$
i
d
 
>
 
0
 
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
g
u
e
s
t
s
-
>
c
o
m
m
i
t
_
u
p
d
a
t
e
_
g
u
e
s
t
(
)
;

	
	
e
l
s
e

	
	
	
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
g
u
e
s
t
s
-
>
c
o
m
m
i
t
_
n
e
w
_
g
u
e
s
t
(
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
.
"
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
g
u
e
s
t
s
"
)
,
 
'
G
u
e
s
t
 
s
a
v
e
d
'
 
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

